<template>
    <div>
        <CallToAction />
        <ServicesCards />
        <WeProvide />
        <LogoSection />
    </div>
</template>

<script>
import CallToAction from "../components/CallToAction";
import ServicesCards from "../components/ServicesCards";
import WeProvide from "../components/WeProvide";
import LogoSection from "../components/LogoSection";

export default {
    name: "HomePage",
    components :{
        CallToAction,
        ServicesCards,
        WeProvide,
        LogoSection,
    }
}
</script>

<style scoped>

</style>
