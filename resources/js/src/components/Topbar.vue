<template>
    <nav>
        <div class="nav-container">
            <div class="logo text-md font-bold text-color-3">
                <span class="text-color-1">jobs</span>4TECHIES
            </div>
            <div class="nav-menu">
                <ul>
                    <a href="#home" class="text-color-3"><li>Home</li></a>
                    <a href="categories" class="text-color-3"
                        ><li>Categories</li></a
                    >
                    <a href="jobs" class="text-color-3"><li>Jobs</li></a>
                </ul>
            </div>
            <div v-if="isAuth" class="user text-md">
                {User} <f-a-i icon="fas fa-user" class="text-color-1" />
            </div>

            <div v-if="!isAuth" class="authenticate">
                <router-link :to="{ name: 'login' }" class="text-color-3"
                    >Sign in</router-link
                >
                <router-link :to="{ name: 'register' }" class="register"
                    >Sign up</router-link
                >
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            isAuth: false,
        };
    },
};
</script>

<style scoped></style>
