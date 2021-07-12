<template>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <router-link :to="{name: 'register'}" class="nav-link">Register</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'Cv'}" class="nav-link">Cv</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'login'}" class="nav-link">Login</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'panel'}" class="nav-link">Admin</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'form'}" class="nav-link">Form</router-link>
                </li>
            </ul>
        </header>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
