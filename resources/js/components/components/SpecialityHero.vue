<template>
    <div class="hero-wrapper">
        <div class="hero-wrapper-inner">
            <div class="hero-wrapper-inner-left">
                <div class="hero-wrapper-inner-left-content">
                    <h1>Our Speciality</h1>
                    <p>
                        Our mission is to provide quality services that reflect expertise and professional polygraph testing.
                        We are bound to the highest standards, objectives, and principals when conducting polygraph examinations.
                    </p>

                    <div class="inverted-link">
                        <router-link to="contact">
                            Reach out to us
                            <i class="material-icons">trending_flat</i>
                        </router-link>
                    </div>
                </div>
            </div>
            <div class="hero-wrapper-inner-right">
                <img src="/images/cookie-jar.jpg" alt="Catch Liars with their hand in the cookie jar with Sky Agency Polygraphs">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SpecialityHero"
}
</script>

<style scoped lang="scss">
    .hero-wrapper {
        width: 100%;
        padding:  0;

        &-inner {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1100px;
            margin: auto;

            &-left {
                padding-top: 100px;
                z-index: 1;

                &-content {
                    max-width: 600px;
                    background: #1c3956;
                    padding: 20px;
                    border-radius: 12px;
                    color: #FFFFFF;
                    box-shadow: 10px 20px 55px 17px rgba(0, 0, 0, 0.15);

                    h1 {
                        font-family: 'Roboto', sans-serif;
                    }

                    p {
                        color: #FFFFFF;
                    }

                    .inverted-link {
                        padding: 5px 22px;
                        border-radius: 12px;
                        background: #FFFFFF;
                        display: inline-block;
                        box-shadow: inset 20px 20px 60px #d9d9d9,
                        inset -20px -20px 60px #ffffff;
                        i {
                            display: inline-block;
                            transform: translateY(4px);
                            font-size: 17px;
                            margin-left: 5px;
                        }
                    }
                }

            }
            &-right {
                img {
                    max-width: 350px;
                }
            }
        }
    }
    @media (max-width: 690px) {
        .hero-wrapper {
            overflow: hidden;
            &-inner {
               min-width: 634px;

                &-left {


                    &-content {


                        h1 {

                        }

                        p {

                        }

                        .inverted-link {

                            i {

                            }
                        }
                    }

                }
                &-right {
                    img {

                    }
                }
            }
        }
    }
    @media (max-width: 690px) {
        .hero-wrapper {
            overflow: unset;
            &-inner {
                min-width: unset;

                &-left {


                    &-content {


                        h1 {

                        }

                        p {

                        }

                        .inverted-link {

                            i {

                            }
                        }
                    }

                }
                &-right {
                    display: none;
                }
            }
        }
    }
</style>
