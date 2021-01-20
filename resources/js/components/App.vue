<template>
    <div>
        <NavbarComponent />
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script>
import NavbarComponent from "./layouts/NavbarComponent";
import Footer from "./layouts/Footer";

export default {
    name: "App",
    components: {
        NavbarComponent,
        Footer,
    }
}
</script>

<style scoped>

</style>
