import Vue from "vue";
import VueRouter from "vue-router";
import HomePage from "./components/pages/HomePage";
import SpecialityServices from "./components/pages/SpecialityServices";
import ContactUs from "./components/pages/ContactUs";

Vue.use(VueRouter)
export default new VueRouter({
    routes: [
        { path: "/", name:"home", component: HomePage },
        { path: "/speciality", name:"services", component: SpecialityServices },
        { path: "/contact", name:"contact", component: ContactUs },
    ],
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    },
    mode: "history"
})
