<template>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light custom-nav">
        <router-link class="navbar-brand nav-logo" to="/" exact>
            <div class="nav-logo-container">
                <img :src="'/images/logo.png'" class="nav-logo-image" alt="Sky Agency Logo, George">
            </div>
            <div class="shadow-for-left-circle"></div>
        </router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <router-link class="nav-link" to="/" exact>Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/speciality" exact>Speciality Services</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact" exact>Contact Us</router-link>
                </li>
            </ul>
            <span class="navbar-text">
              Sky Polygraph services and Detective Agency
            </span>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "NavbarComponent",
        mounted() {

        }
    }
</script>

<style lang="scss">
.nav-logo{
    position: relative;
    width: 139px;
    padding: 0;

    &-container {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        position: absolute;
        top: -55px;
        left: -28px;
        background: #FFF;
        z-index: 1;
    }
    &-image {
        position: absolute;
        width: 120px;
        top: 36px;
        left: 20px;
    }
}
.custom-nav {
    box-shadow: 12px 1px 16px rgba(0, 0, 0, 0.15);
    .navbar-text {
        color: #151B54;
        cursor: default;
    }
}
.shadow-for-left-circle {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    position: absolute;
    top: -55px;
    left: -28px;
    z-index: -1;
    box-shadow: 10px 6px 23px rgba(0, 0, 0, 0.15);
}
.router-link-active {
    color: #151B54!important;
}
</style>
