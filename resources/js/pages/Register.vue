<template>
  <div class="form-container">
    <div class="form-section">
      <h3 class="text-lg font-normal">Register</h3>
      <div class="register-form">

        <form @submit.prevent="handleSubmit">
          <div class="form-input">
            <label for="">First Name</label>
            <input type="text" placeholder="Enter Your First Name" v-model="first_name">
            <span v-if="errors.first_name" class="text-error">{{ errors.first_name[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Middle Name</label>
            <input type="text" placeholder="Enter Your Middle Name" v-model="middle_name">
            <span v-if="errors.middle_name" class="text-error">{{ errors.middle_name[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Last Name</label>
            <input type="text" placeholder="Enter Your Last Name" v-model="last_name">
            <span v-if="errors.last_name" class="text-error">{{ errors.last_name[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Username</label>
            <input type="text" placeholder="Enter Your Username" v-model="username">
            <span v-if="errors.username" class="text-error">{{ errors.username[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Email</label>
            <input type="email" placeholder="Enter Your Email" v-model="email">
            <span v-if="errors.email" class="text-error">{{ errors.email[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Phone</label>
            <input type="text" placeholder="Enter Your Phone Number" v-model="phone">
            <span v-if="errors.phone" class="text-error">{{ errors.phone[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter Password" v-model="password">
            <span v-if="errors.password" class="text-error">{{ errors.password[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" v-model="confirm_password">
            <span v-if="errors.password_confirmed" class="text-error">{{ errors.password_confirmed[0] }}</span>
          </div>
          
          <div v-if="!isLoading" class="btn-submit hover-opacity">
            <button type="submit" class="text-base font-bold">Register</button>
          </div>

          <div v-if="isLoading" class="text-center py-1">
            <f-a-i icon="fas fa-circle-notch" spin size="xl" class="text-color-1" />
          </div>

          <div v-if="isSuccessful" class="reg-success text-success text-base">Registration Successful, please login</div>

          <div class="back-home text-color-6">
            Already have an account ? <router-link :to="{name: 'login'}" class="text-color-3 hover-opacity">Login</router-link>
          </div>

          <div class="back-home">
            <router-link :to="{name: 'landing'}" class="text-color-3 hover-opacity">Go back home</router-link>
          </div>
        </form>
      </div>
    </div>
  </div>

</template>

<script>
import { register } from '../api/auth';
export default {
  data() {
    return{
      first_name: "",
      middle_name: "",
      last_name: "",
      username: "",
      email: "",
      phone: "",
      password: "",
      confirm_password: "",
      isSuccessful: false,
      isLoading: false,
      errors: {}
    }
  },
  methods: {
    register,
    handleSubmit(){

      this.isLoading = true;

      const data = {
        first_name: this.first_name,
        middle_name: this.middle_name,
        last_name: this.last_name,
        username: this.username,
        email: this.email,
        phone: this.phone,
        password: this.password,
        password_confirmation: this.confirm_password,
      }

      this.register(data).then(() => {
        this.isSuccessful = true;
        setTimeout(() => {
          this.isSuccessful = false;
          this.isLoading = false;
          this.$router.push({
            name: 'login'
          })
        }, 2000)
      }).catch((error) => {
        this.isLoading = false;
        this.errors = {...error.response.data.errors};
      }) 
    }
  },
};
</script>

<style scoped>
</style>
