import Vue from "vue";
import VueRouter from "vue-router";
import HomePage from "./components/pages/HomePage";
import SpecialityServices from "./components/pages/SpecialityServices";
import ContactUs from "./components/pages/ContactUs";

Vue.use(VueRouter)
export default new VueRouter({
    routes: [
        { path: "/", component: HomePage },
        { path: "/speciality", component: SpecialityServices },
        { path: "/contact", component: ContactUs },
    ],
    mode: "history"
})
