import Login from '../pages/Login.vue'
import Register from '../pages/Register.vue'
import LandingPage from '../pages/LandingPage.vue'
import AllListings from '../pages/AllListings.vue'

const routes = [
  {
    path: '/',
    redirect: to => {
      return { 
        name: 'landing',
      }
    }
  },
  {
    path: '/',
    name: 'landing',
    component: LandingPage,
    meta: {
      requiresAuth: false
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      guest: true
    }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      guest: true
    }
  },
  {
    path: '/all-listings',
    name: 'allListings',
    component: AllListings,
    // meta: {
    //   requiresAuth: false
    // }
  },
]

export default routes
