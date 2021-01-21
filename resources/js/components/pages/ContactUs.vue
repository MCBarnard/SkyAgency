<template>
    <div class="contact">
        <ContactForm />
    </div>
</template>

<script>
import ContactForm from "../components/ContactForm";
export default {
    name: "ContactUs",
    components: {
        ContactForm
    }
}
</script>

<style scoped lang="scss">
.contact {
    margin-top: 80px;
}
</style>
