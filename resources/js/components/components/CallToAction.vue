<template>
    <div class="call-to-action">
        <img :src="'images/report.jpg'" class="background-report" alt="Polygraph with SKy agency George">
        <div class="overlay"></div>
        <div class="call-to-action-content">
            <div class="call-to-action-content-left">
                <h1>Have you been a victim of theft, and need to find out the truth?</h1>
                <h3>We provide confidential and professional services</h3>
                <span><i class="material-icons">keyboard_arrow_right</i> Pre-employment Screening</span>
                <span><i class="material-icons">keyboard_arrow_right</i> Truth Verification</span>
                <span><i class="material-icons">keyboard_arrow_right</i> Incident Investigation</span>
                <span><i class="material-icons">keyboard_arrow_right</i> Identifying sexual harassment</span>
                <div class="buttons-wrapper">
                    <router-link to="/contact" type="button" class="btn btn-primary">Arrange a meeting</router-link>
                </div>
            </div>
            <div class="call-to-action-content-right">
                <img :src="'/images/partner.png'" alt="Sky agency George, Mossel bay, team">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CallToAction"
}
</script>

<style scoped lang="scss">
.call-to-action {
    position: relative;
    padding: 6.5rem 0 0 0;
    width: 100%;
    overflow: hidden;
    z-index: 0;

    .background-report {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
    }
    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #00427b;
        background: linear-gradient(-90deg, rgb(0 66 123 / 80%) 10%, rgb(0 23 64 / 80%) 75%);
    }

    &-content {
        display: flex;
        justify-content: space-between;
        max-width: 1100px;
        margin: auto;

        &-left {
            color: #FFFFFF;
            z-index: 1;
            max-width: 600px;
            text-shadow: 0px 0px 6px #000000;

            h1 {
                font-size: 38px;
                font-weight: bold;
            }

            h3 {
                font-size: 22px;
                font-weight: 400;
            }
            span {
                display: block;
                font-size: 18px;
                margin-left: 2rem;

                i {
                    font-size: 18px;
                }
            }
            .buttons-wrapper {
                max-width: 245px;
                display: flex;
                justify-content: space-between;
                margin-top: 16px;
                color: #FFFFFF;

                .btn-primary {
                    text-shadow: unset;
                    color: #FFFFFF!important;
                }
            }
        }

        &-right {
            z-index: 1;
            display: flex;
            justify-content: flex-end;
            flex-direction: column;
        }
    }
}

@media (max-width: 1200px){
    .call-to-action {
        padding: 80px 20px 0;
    }
}
@media (max-width: 992px){
    .call-to-action {
        padding: 100px 20px 0;
        &-content {
            &-left {
                h1 {
                    font-size: 31px;
                }

                h3 {
                    font-size: 18px;
                }
                span {
                    font-size: 16px;
                    margin-left: 1rem;

                    i {
                        transform: translateY(4px);
                        font-size: 16px;
                    }
                }
            }
        }
    }
}
@media (max-width: 768px){
    .call-to-action {
        padding: 100px 20px 50px;

        .background-report {
            display: none;
        }
        &-content {
            &-right {
                display: none;
            }
        }
    }
}
@media (max-width: 400px){
    .call-to-action {
        &-content {
            &-left {

                h1 {
                    font-size: 26px;
                }
            }

            &-right {
                display: none;
            }
        }
    }
}
</style>
