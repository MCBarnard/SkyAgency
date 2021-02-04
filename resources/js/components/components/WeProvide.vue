<template>
    <div class="provide">
        <div class="provide-wrapper">
            <div class="provide-wrapper-left">
                <h1>What we offer</h1>
                <p>
                    Our goal is to provide your company with a confidential and professional service in the following investigations:
                </p>
                <div class="provide-wrapper-left-points">
                    <div class="provide-wrapper-left-points-item">
                        <span class="provide-wrapper-left-points-item-head"><i class="material-icons">check</i>  Investigations</span>
                        <span class="provide-wrapper-left-points-item-body">
                            The individual should be informed that the examination is voluntarily. Polygraph results can be utilized
                            in labour disputes and disciplinary enquiries. The CCMA uses polygraph results as a forensic tool.
                        </span>
                    </div>
                    <div class="provide-wrapper-left-points-item">
                        <span class="provide-wrapper-left-points-item-head"><i class="material-icons">check</i>  Employee theft</span>
                        <span class="provide-wrapper-left-points-item-body">
                            The individual should be informed that the examination is voluntarily. Polygraph results can be utilized
                            in labour disputes and disciplinary enquiries. The CCMA uses polygraph results as a forensic tool.
                        </span>
                    </div>
                    <div class="provide-wrapper-left-points-item">
                        <span class="provide-wrapper-left-points-item-head"><i class="material-icons">check</i>  Arson</span>
                        <span class="provide-wrapper-left-points-item-body">
                            The individual should be informed that the examination is voluntarily. Polygraph results can be utilized
                            in labour disputes and disciplinary enquiries. The CCMA uses polygraph results as a forensic tool.
                        </span>
                    </div>
                </div>
            </div>
            <div class="provide-wrapper-right">
                <div class="image-container">
                    <lottie-player class="lottie-player" src="https://assets1.lottiefiles.com/packages/lf20_fnQHkf.json"
                                   background="transparent"  speed="1"  style="width: 424px; height: 239px;"
                                   loop  autoplay>
                    </lottie-player>
                    <img class="desktop" :src="'/images/desktop.png'" alt="Heart beat monitoring with SKY Agency polygraphs">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WeProvide"
}
</script>

<style scoped lang="scss">
.provide {
    width: 100%;
    margin-top: 50px;

    &-wrapper {
        max-width: 1100px;
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: space-between;

        &-left {
            margin-right: 16px;

            h1 {
                font-size: 26px;
                max-width: 175px;
                border-bottom: 3px solid #00427b;
            }
            p {
                font-size: 18px;
                max-width: 600px;
                color: #616161;
            }
            &-points {
                max-width: 500px;
                margin-top: 24px;

                &-item {
                    margin-bottom: 20px;

                    &-head {
                        font-size: 20px;
                        line-height: 20px;
                        display: flex;

                        i {
                            color: #31a900;
                            display: block;
                            line-height: 19px;
                            margin-right: 5px;
                        }

                    }

                    &-body {
                        color: #616161;
                        font-size: 14px;
                        display: block;
                        padding-left: 30px;
                        margin-top: 10px;
                    }
                }
            }
        }

        &-right {

            .desktop {
                display: block;
            }

            .lottie-player {
                position: absolute;
                top: 16px;
                left: 13px;
            }
            .image-container {
                position: relative;
                margin: 85px auto 0;
            }
        }
    }
}
@media (max-width: 1150px) {
    .provide {
        &-wrapper {
            margin: 0;
            padding: 0 20px;
        }
    }
}
@media (max-width: 992px) {
    .provide {
        &-wrapper {
            flex-direction: column;
            &-right {
                .image-container {
                    max-width: 450px;
                }
            }
        }
    }
}
@media (max-width: 490px) {
    .provide {
        &-wrapper {
            &-right {
                display: none;
            }
        }
    }
}
</style>
