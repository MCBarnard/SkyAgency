<template>
    <div class="speciality-card">
        <div class="speciality-card-inner">
            <div class="speciality-card-inner-image">
                <slot name="icon"></slot>
            </div>
            <div class="speciality-card-inner-content">
                <h3>
                    <slot name="heading"></slot>
                    <div></div>
                </h3>
                <p><slot name="paragraph"></slot></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "VettingCard",
    props: {
        routeLink: {
            type: String
        }
    }
}
</script>

<style scoped lang="scss">
.speciality-card {
    width: 560px;
    position: relative;

    &-inner {
        padding: 20px;
        display: flex;
        justify-content: space-between;

        &-image {
            width: 50px;
            height: 50px;
            border: 1px solid #1b1e21;
            border-radius: 50%;
            margin-right: 1rem;
            justify-content: center;
            text-align: center;
            line-height: 63px;
        }

        &-content {
            max-width: 450px;
            h3 {
                font-size: 22px;
                display: inline-block;

                div {
                    width: 0;
                    height: 3px;
                    background: #1b1e21;
                    border-radius: 5px;
                    transition: all 0.2s ease;
                }
            }
        }
    }
}

@media (max-width: 1050px) {
    .speciality-card {
        margin: 0 20px;
        max-width: unset;
        &-inner {
            &-content {
                max-width: 400px;

                p {
                    font-size: 18px;
                }
            }
        }
    }
}

@media (max-width: 992px) {
    .speciality-card {
        width: 100%;
        margin: 10px auto;

        &-inner {
            &-image {
                min-width: 50px;
            }
            &-content {
                max-width: 740px;
            }
        }
    }
}
@media (max-width: 792px) {
    .speciality-card {
        max-width: unset;
        margin: 10px 0;
        &-inner {
            padding: 0;
        }
    }
}
@media (max-width: 380px) {
    .speciality-card {
        &-inner {
            &-content {
                h3 {
                    font-size: 18px;
                }
                p {
                    font-size: 16px;
                }
            }
        }
    }
}
</style>

