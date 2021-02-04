<template>
    <div class="speciality">
        <div class="padding-wrapper">
            <SpecialityHero />
            <div class="speciality-upper">
                <h2 class="heading">Polygraph Solutions</h2>
                <p>
                    Not only do we provide conclusive results of polygraph tests,
                    but also a comprehensive report on each subject including reputation,
                    personal character traits, educational background, employment history
                    and a overall completed profile.
                </p>
            </div>
            <div class="speciality-inner">
            <SpecialityCard @redirect="goToContact('periodic-screening')">
                <template v-slot:heading>Periodic Screening</template>
                <template v-slot:paragraph>
                    Periodic screening or testing is most effect due to the prior knowledge of the test.
                    Employees are aware that they will be tested and prevents incidents from occurring, whilst also catching those whom are causing damage to your business.
                    Periodic screenings are most effective in protecting your company against loss of stock, malice, theft or corruption.
                </template>
            </SpecialityCard>
            <SpecialityCard @redirect="goToContact('pre-employment')">
                <template v-slot:heading>Pre-Employment Check</template>
                <template v-slot:paragraph>
                    Find out what type of hire you are making before introducing undesired elements to your company.
                    Benefit from increased employee retention and reduction in costs associated with turnover (e.g. hiring and training costs).
                    This also improves productiveness in your company as it allows you to know what you can expect from individuals.
                </template>
            </SpecialityCard>
            <SpecialityCard class="spec-bot" @redirect="goToContact('incident-investigation')">
                <template v-slot:heading>Incident Investigation</template>
                <template v-slot:paragraph>
                    We are trained experts who will fight to give you the best and fastest results in any investigation. We work hand in hand with staff, managers and owners
                    to ensure we solve the situation and get written and tested statements from every person involved.
                    With our diligent and thorough questioning and investigative skills, confessions usually aren't far behind.
                </template>
            </SpecialityCard>
        </div>
        </div>
        <div class="section-lower">
            <div class="speciality-lower">
                <div class="text-container">
                    <h2 class="heading">Vetting Solutions that suite your needs and provides assurance</h2>
                    <p>
                        The completion of pre-employment screening for staff and contractors,
                        to a defined standard, is also the most effective way to evidence
                        that an organisation resources possess the necessary qualifications,
                        skills and qualities needed to fulfil the position.
                    </p>
                    <button class="btn d-block" @click="goToContact('vetting')">Reach out</button>
                </div>
                <div class="speciality-bottom">
                    <div class="card-section">
                        <VettingCard>
                            <template v-slot:icon>
                                <span class="material-icons">
                                    search
                                </span>
                            </template>
                            <template v-slot:heading>Forensic Investigations</template>
                            <template v-slot:paragraph>
                                We gather and analyse all crime-related physical evidence in order to help achieve your needs.
                            </template>
                        </VettingCard>
                        <VettingCard>
                            <template v-slot:icon>
                                <span class="material-icons">
                                    check_box
                                </span>
                            </template>
                            <template v-slot:heading>Verification Services</template>
                            <template v-slot:paragraph>
                                We help ensure that your products, processes and services reach the latest national and
                                international standards as efficiently, effectively and timely as possible.
                            </template>
                        </VettingCard>
                        <VettingCard class="spec-bot">
                            <template v-slot:icon>
                                <span class="material-icons">
                                    assignment
                                </span>
                            </template>
                            <template v-slot:heading>Fraud and Fictitious Business</template>
                            <template v-slot:paragraph>
                                We works with consumers, private investigators and law enforcement officials to help investigate any fraud related issues.
                            </template>
                        </VettingCard>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SpecialityCard from "../components/SpecialityCard";
import VettingCard from "../components/VettingCard";
import SpecialityHero from "../components/SpecialityHero";

export default {
    name: "SpecialityServices",
    components: {
        SpecialityCard,
        SpecialityHero,
        VettingCard
    },
    methods: {
        goToContact(topic) {
            this.$router.push({ name: 'contact', params: { data: topic }});
        }
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
        margin: 3rem auto 50px auto;
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

    .section-lower {
        width: 100%;
        background: #eaeaea;
        margin-top: 5rem;
        padding: 5rem 0;
        button {
            width: 50%;
            background: #1c3956;
            color: #FFFFFF;

            &:hover {
                background: #42679b;
            }
        }
    }
    &-lower {
        margin: auto;
        max-width: 1100px;
        display: flex;
        justify-content: space-between;

        .text-container {
            max-width: 500px;
        }
        .heading {
            font-weight: bold;
            position: relative;
            display: inline-block;
            font-size: 2.25rem;

            &::before {
                content: "";
                position: absolute;
                top: -8px;
                left: 0;
                right: 0;
                height: 3px;
                background: #1c3956;
                z-index: 0;
                width: 60px;
                animation: 1s smallWidthAnimation ease;
            }
        }

        h3, p {
            max-width: 550px;
        }

        p {
            margin-top: 8px;
            display: block;
            font-size: 24px;
        }
    }

    &-bottom {
        display: flex;
        justify-content: space-between;

        .card-section {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
    }
}

@keyframes smallWidthAnimation {
    from {
        width: 0;
    }
    to {
        width: 60px;
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
        padding: 0;
        .section-lower {
            padding: 5rem 20px;
            font-size: 18px;
        }
        &-lower {
            .heading {
                font-size: 30px;
            }
        }
    }
    .padding-wrapper {
        padding: 0 20px;
    }
}
@media (max-width: 1050px) {
    .speciality {
        &-inner {
            flex-wrap: wrap;
            justify-content: space-evenly;
            .spec-bot {
                margin: 40px 20px 0;
            }
        }
        &-upper {
            .heading {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }
        }
        &-lower {


            .text-container {
                max-width: 380px;
            }
            .heading {

                &::before {

                }
            }

            p {
                font-size: 20px;
            }
        }
    }
}
@media (max-width: 992px) {
    .speciality-lower {
        flex-direction: column;

        .text-container {
            max-width: unset;

            h2 {
                max-width: 550px;
            }

            p {
                max-width: 700px;
            }
            button {
                margin-bottom: 2rem;
            }
        }
    }

    .speciality-bottom {
        .card-section {
            width: 100%;
        }
    }
}
@media (max-width: 792px) {
    .speciality {
        &-inner {
            flex-direction: column;
            .spec-bot {
                margin: 0;
            }
        }
    }
}
@media (max-width: 380px) {
    .speciality {
        &-upper {
            .heading {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }
        }
    }
    .speciality-lower {
        .text-container {
            h2 {
                font-size: 22px;
            }

            p {
                font-size: 16px;
            }
            button {
                width: 100%;
            }
        }
    }
}
</style>
