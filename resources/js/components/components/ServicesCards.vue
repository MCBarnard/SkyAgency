<template>
    <div class="serv-wrapper">
        <div class="cards-container text-center">
            <h3 class="heading">Services</h3>
            <p class="paragraph">We offer a full range of detective services</p>
            <div class="row">
                <HomeCard>
                    <template v-slot:icon>
                        <i class="material-icons">find_in_page</i>
                    </template>
                    <template v-slot:heading>
                        Incident Investigation
                    </template>
                    <template v-slot:body>
                        Issue specific testing is the most accurate of all polygraph testing techniques with accuracy ratings in the region of 95%.
                    </template>
                </HomeCard>
                <HomeCard>
                    <template v-slot:icon>
                        <i class="material-icons">fingerprint</i>
                    </template>
                    <template v-slot:heading>
                        Pre-Employment
                    </template>
                    <template v-slot:body>
                        Identify those candidates that are concealing adverse information regarding their background.
                    </template>
                </HomeCard>
                <HomeCard>
                    <template v-slot:icon>
                        <i class="material-icons">group</i>
                    </template>
                    <template v-slot:heading>
                        Screening Test
                    </template>
                    <template v-slot:body>
                        Employees involved in high risk environments within the business where they have access to high value goods
                    </template>
                </HomeCard>
            </div>
            <div class="row justify-content-center mt-5 background-white">
                <router-link to="/speciality" class="btn btn-outline-primary" >Find out more</router-link>
            </div>
        </div>
    </div>
</template>

<script>
import HomeCard from "./HomeCard";

export default {
    name: "ServicesCards",
    components: {
        HomeCard
    }
}
</script>

<style scoped lang="scss">
.serv-wrapper {
    background: #eaeaea;
    width: 100%;
    padding: 50px 0;
}
.cards-container {
    width: 100%;
    max-width: 1100px;
    margin: auto;

    .heading {
        border-bottom: 3px solid #001a6b;
        width: 130px;
        margin: auto;
    }

    .paragraph {
        max-width: 270px;
        margin: 12px auto;
    }

    .card {
        max-width: 320px;
        width: 100%;
        margin: auto;
    }
}

@media (max-width: 1200px){
    .serv-wrapper {
        padding: 20px;
    }
}
@media (max-width: 1000px){
    .serv-wrapper {
        padding: 20px;

        .row {
            justify-content: center;
        }
        .card {
            margin: 10px;
        }
    }
}
</style>
