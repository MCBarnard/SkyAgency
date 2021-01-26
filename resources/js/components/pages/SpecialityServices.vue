<template>
    <div class="speciality">
        <SpecialityHero />
        <div class="speciality-upper">
            <h2 class="heading">What we specialize in</h2>
            <p>
                Not only do we provide conclusive results of polygraph tests,
                but also a comprehensive report on each subject including reputation,
                personal character traits, educational background, employment history
                and a overall completed profile.
            </p>
        </div>
        <div class="speciality-inner">
            <SpecialityCard>
                <template v-slot:heading>Periodic Screening</template>
                <template v-slot:paragraph>
                    Periodic screening or testing is most effect due to the prior knowledge of the test.
                    Employees are aware that they will be tested and prevents incidents from occurring, whilst also catching those whom are causing damage to your business.
                    Periodic screenings are most effective in protecting your company against loss of stock, malice, theft or corruption.
                </template>
            </SpecialityCard>
            <SpecialityCard>
                <template v-slot:heading>Pre-Employment Check</template>
                <template v-slot:paragraph>
                    Find out what type of hire you are making before introducing undesired elements to your company.
                    Benefit from increased employee retention and reduction in costs associated with turnover (e.g. hiring and training costs).
                    This also improves productiveness in your company as it allows you to know what you can expect from individuals.
                </template>
            </SpecialityCard>
            <SpecialityCard>
                <template v-slot:heading>Incident Investigation</template>
                <template v-slot:paragraph>
                    We are trained experts who will fight to give you the best and fastest results in any investigation. We work hand in hand with staff, managers and owners
                    to ensure we solve the situation and get written and tested statements from every person involved.
                    With our diligent and thorough questioning and investigative skills, confessions usually aren't far behind.
                </template>
            </SpecialityCard>
        </div>
    </div>
</template>

<script>
import SpecialityCard from "../components/SpecialityCard";
import SpecialityHero from "../components/SpecialityHero";

export default {
    name: "SpecialityServices",
    components: {
        SpecialityCard,
        SpecialityHero
    }
}
</script>

<style scoped lang="scss">
.speciality {
    width: 100%;
    margin-bottom: 100px;

    &-inner {
        display: flex;
        margin: auto;
        justify-content: space-between;
        max-width: 1100px;
    }
    &-upper {
        margin: auto auto 50px auto;
        max-width: 1100px;

        .heading {
            font-weight: bold;
            position: relative;
            display: inline-block;

            &::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: #1c3956;
                z-index: -1;
                width: 100%;
                animation: 1s widthAnimation ease;
            }
        }

        h3, p {
            max-width: 550px;
        }
    }
}

@keyframes widthAnimation {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

@media (max-width: 1140px) {
    .speciality {
        padding: 0 20px;
    }
}
</style>
