<template>
  <confirm-action 
    :confirmationText="'Are you sure you want to log out'"
    v-if="confirmLogout"
    :action="'logout'"
    @logout="doLogout"
    @close="confirmLogout = false"
  >
  </confirm-action>
  <div class="page-container">
    <div class="user-profile-container">
      <div class="profile-cta mb-1">
        <div class="cursor-pointer hover-opacity text-color-4">
          <f-a-i icon="fas fa-arrow-left-long" class="" /> Back
        </div>
        <a href="#" @click="confirmLogout = true" class="cursor-pointer hover-opacity text-error">
          <f-a-i 
            icon="fas fa-arrow-right-from-bracket" 
          /> Logout
        </a>
      </div>

      <div class="user-details">
        <div class="user-initials">
          <f-a-i 
            icon="fas fa-user" 
            class="user-icon"
          />
          <p class="text-center text-md">&#64;{{ user.username }}</p>
        </div>

        <user-info :user="user"></user-info>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import UserInfo from '../components/Profile/UserInfo.vue';
import ConfirmationPopUp from '../components/popups/ConfirmationPopUp.vue'
import { logout } from '../api/auth'
export default {
  components: {
    "user-info": UserInfo,
    "confirm-action": ConfirmationPopUp
  },
  computed: {
    ...mapState({
      user: (state) => state.user.user
    })
  },
  data() {
    return {
      confirmLogout: false
    }
  },
  methods: {
    logout,
    doLogout() {
      this.logout();
      window.location.reload();
    }
    
  },
}
</script>

<style>
.profile-cta, .profile-cta>div{
  display: flex;
  align-items: center;
  gap: 0.5rem;
  place-content: space-between;
}
.user-details, .info{
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5rem;
}
.user-initials{
  justify-self: center;
  margin-top: 1rem;
}
.user-icon{
  background: grey;
  color: white;
  width: 5rem;
  height: 5rem;
  padding: 1.2rem;
  border-radius: 50%;
}
.info>div{
  display: grid;
  grid-template-columns: 120px 1fr;
  place-content: center;
  align-items: center;
  background: whitesmoke;
  min-height: 55px;
  padding: 0 1rem;
  border-radius: 0.5rem;
}

@media screen and (min-width: 768px) {
  .info{
    grid-template-columns: repeat(2, 1fr);
    place-content: center;
  }
}

@media screen and (min-width:1000px) {
  .user-initials{
    justify-self: start;
    margin-top: 2rem;
  }
}
</style>
