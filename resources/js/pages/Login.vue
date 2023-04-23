<template>
  <div class="form-container">
    <div class="form-section">
      <h3 class="text-lg font-normal">Sign In</h3>
      <div class="login-form">
      
        <div v-if="invalidCredentials" class="text-center text-error">{{ invalidCredentials }}</div>

        <form @submit.prevent="handleSubmit">
          <div class="form-input">
            <label for="">Email or Username</label>
            <input type="text" placeholder="Enter Email or Username" v-model="loginField">
            <span v-if="errors.login" class="text-error">{{ errors.login[0] }}</span>
          </div>

          <div class="form-input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter Password" v-model="password">
            <span v-if="errors.password" class="text-error">{{ errors.password[0] }}</span>
          </div>
          
          <div v-if="!isLoading" class="btn-submit hover-opacity">
            <button type="submit" class="text-base font-bold">Login</button>
          </div>

          <div v-if="isLoading" class="text-center my-1">
            <f-a-i icon="fas fa-circle-notch" spin size="xl" class="text-color-1" />
          </div>

          <div class="back-home text-color-6">
            Don't have an account ? <router-link :to="{name: 'register'}" class="text-color-3 hover-opacity">Register</router-link>
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
import { login } from "../api/auth";
export default {
  data() {
    return{
      loginField: "",
      password: "",
      isSuccessful: false,
      invalidCredentials: "",
      isLoading: false,
      errors: {},
    }
  },
  methods: {
    login,
    handleSubmit(){
      this.isLoading = true;
      const data = {
        login: this.loginField,
        password: this.password
      }

      this.login(data).then((response) => {

        const token = response.data.token;
        
        localStorage.setItem('jft_jwt', token);
        localStorage.setItem(
          'jft_jwt_creation_time', Date.now()
        );
        
        setTimeout(() => {
          this.isLoading = false;
          this.$router.push({name: 'landing'});
        }, 2000)

      }).catch((error) => {
        this.isLoading = false;
        this.errors = {...error.response.data.errors};
        this.invalidCredentials = error.response.data.message
      })
    }
  },
};
</script>

<style scoped>
</style>
