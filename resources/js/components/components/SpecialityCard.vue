<template>
    <div class="speciality-card">
        <div class="speciality-card-inner">
            <div class="speciality-card-inner-content">
                <h3>
                    <slot name="heading"></slot>
                    <div></div>
                </h3>
                <p><slot name="paragraph"></slot></p>
            </div>
            <div class="speciality-card-inner-icons">
                <div class="stripes">
                    <div class="stripes-grey"></div>
                    <div class="stripes-blue"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SpecialityCard",
    props: {
        routeLink: {
            type: String
        }
    }
}
</script>

<style scoped lang="scss">
.speciality-card {
    max-width: 320px;
    width: 100%;
    cursor: pointer;
    outline: 1px solid rgb(128 128 128 / 0);
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: all 0.2s ease;


    &-inner {
        padding: 20px;

        &-content {
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

        &-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;

            .stripes {
                position: absolute;
                bottom: -60px;
                right: -5px;
                width: 50px;
                height: 150px;
                background: chartreuse;
                display: flex;
                transform: rotate(45deg);

                &-blue {
                    width: 80%;
                    height: 100%;
                    background: #2c3c5a;
                }

                &-grey {
                    width: 20%;
                    height: 100%;
                    background: #8c8c8c;
                }
            }
        }
    }

    &:hover {
        outline: 1px solid rgb(149 155 199 / 0.5);
        transform: translateY(-10px);

        .speciality-card-inner {
            &-content {
                h3 {
                    div {
                        width: 100%;
                    }
                }
            }
        }
    }
}
</style>
