<template>
    <div class="logos">
        <div class="logos-inner">
            <div class="heading">
                <i class="material-icons">lock</i> <span>Trusted by:</span>
            </div>
            <div class="logos-inner-logos">
                <img class="absa" :src="'/images/logo-pack/absa.svg'" alt="Sky agency polygraphs, George. Big Client ABSA">
                <img class="dhl" :src="'/images/logo-pack/dsv.png'" alt="Sky agency polygraphs, George. Big Client DHL">
                <img class="fnb" :src="'/images/logo-pack/FNB.svg'" alt="Sky agency polygraphs, George. Big Client fnb">
                <img class="nedbank" :src="'/images/logo-pack/nedbank.png'" alt="Sky agency polygraphs, George. Big Client nedbank">
                <img class="oldmutual" :src="'/images/logo-pack/OM.png'" alt="Sky agency polygraphs, George. Big Client Old Mutual">
                <img class="edcon" :src="'/images/logo-pack/edcon.png'" alt="Sky agency polygraphs, George. Big Client edcon">
                <img class="foschini" :src="'/images/logo-pack/foschini.png'" alt="Sky agency polygraphs, George. Big Client foschini">
                <img class="southernsun" :src="'/images/logo-pack/southernsun.svg'" alt="Sky agency polygraphs, George. Big Client Southern Sun">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LogoSection"
}
</script>

<style scoped lang="scss">
.logos {
    width: 100%;

    &-inner {
        width: 100%;
        max-width: 1100px;
        margin: 50px auto;

        .heading {
            display: flex;
            font-size: 24px;

            i {
                color: gold;
                line-height: 37px;
            }

            span {
                padding-left: 10px;
            }
        }

        &-logos {
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;

            img {
                margin: 10px 30px;
            }
            .absa {
                max-width: 150px;
                margin-left: 0;
            }
            .dhl {
                max-width: 150px;
                max-height: 55px;
                margin-top: 30px;
            }
            .edcon {
                max-width: 120px;
                max-height: 100px;
                margin-top: 0;
            }
            .fnb {
                max-width: 150px;
                max-height: 150px;
            }
            .foschini {
                max-width: 200px;
                max-height: 60px;
                margin-top: 30px;
            }
            .nedbank {
                max-width: 200px;
                max-height: 50px;
                margin-top: 40px;
            }
            .oldmutual {
                max-width: 200px;
                max-height: 45px;
                margin-top: 40px;
            }
            .southernsun {
                max-width: 270px;
                max-height: 50px;
                margin-right: 0;
                margin-top: 25px;
            }
        }
    }
}
@media (max-width: 1150px) {

    .logos {
        &-inner {
            &-logos {
                .edcon {
                    display: none;
                }
            }
        }
    }
}
@media (max-width: 920px) {

    .logos {
        &-inner {
            &-logos {
                .absa {
                    max-width: 90px;
                    margin-left: 30px;
                }
                .dhl {
                    max-width: 90px;
                    max-height: 40px;
                }
                .edcon {
                    display: none;
                    max-width: 90px;
                    max-height: 60px;
                    margin-top: 12px;
                }
                .fnb {
                    max-width: 90px;
                }
                .foschini {
                    display: unset;
                    max-width: 140px;
                    max-height: 30px;
                }
                .nedbank {
                    max-width: 140px;
                    max-height: 35px;
                    margin-top: 20px;
                }
                .oldmutual {
                    max-width: 140px;
                    max-height: 30px;
                    margin-top: 25px;
                }
                .southernsun {
                    max-height: 35px;
                    margin-top: 24px;
                    margin-right: 30px;
                }
            }
        }
    }
}
@media (max-width: 710px) {

    .logos {
        &-inner {
            &-logos {
                img {
                    margin: 10px;
                }
                .foschini {
                    display: none;
                }
            }
        }
    }
}
@media (max-width: 576px) {

    .logos {
        padding: 0 20px;
        &-inner {
            &-logos {
                img {
                  margin: 10px 15px;
                }
                .nedbank {
                    display: none;
                }
                .southernsun {
                    max-height: 30px;
                }
            }
        }
    }
}
@media (max-width: 440px) {

  .logos {
    &-inner {
      &-logos {
        img {
          margin: 10px 5px;
        }
      }
    }
  }
}
@media (max-width: 400px) {

  .logos {
    &-inner {
      &-logos {
        img {
          margin: 10px 5px;
        }
        .southernsun {
          max-height: 25px;
          margin-right: 0;
        }
        .dhl {
          max-width: 65px;
          max-height: 25px;
        }
        .oldmutual {
          max-height: 25px;
        }
        .absa {
          margin-left: 0;
          max-width: 65px;
        }
        .fnb {
          max-width: 75px;
        }
      }
    }
  }
}
@media (max-width: 340px) {
    .logos {
        display: none;
    }
}
</style>
