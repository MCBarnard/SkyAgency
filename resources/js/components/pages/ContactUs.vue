<template>
    <div class="contact">
        <div class="contact-inner">
            <div class="contact-inner-left">
                <div class="contact-inner-left-form">
                    <ContactForm />
                </div>
            </div>
            <div class="contact-inner-right">
                <div class="contact-inner-right-contact">
                    <div class="top">
                        <h3 class="">
                            Feel free to give us a call, sms or whatsapp
                        </h3>
                    </div>
                    <hr>
                    <div class="bottom">
                        <div class="contact-card">
                            <img src="/images/logo.png" alt="Sky Agency Logo, George" class="card-logo-image">
                            <h4 class="head">Lynette Heyns</h4>
                            <p>Mosselbay / George</p>
                            <a class="contact-link" href="mailto: lynette@skyagency.co.za">
                                <span class="material-icons">email</span> lynette@skyagency.co.za
                            </a>

                            <a class="contact-link" href="tel: +27 12 1231234">
                                <span class="material-icons">call</span> +27 12 123 1234
                            </a>
                        </div>
                        <br>
                        <div class="contact-card">
                            <img src="/images/logo.png" alt="Sky Agency Logo, George" class="card-logo-image">
                            <h4 class="head">Paul Smuts</h4>
                            <p>Johannesburg</p>
                            <a class="contact-link" href="mailto: lynette@skyagency.co.za">
                                <span class="material-icons">email</span> paul@skyagency.co.za
                            </a>

                            <a class="contact-link" href="tel: +27 12 1231234">
                                <span class="material-icons">call</span> +27 12 123 1234
                            </a>
                        </div>

                        <p>
                            We aim to respond ASAP and as such in usual circumstances we should be able to reply within 24 hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
            <div class="toast-header">
                <img :src="'/images/logo.png'" class="logo-image" alt="Sky Agency Logo, George">
                <strong class="">Sky Agency</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
               <span class="material-icons">
                    check_circle
                </span>
                We have successfully sent the email, we will be in touch shortly.
            </div>
        </div>
    </div>
</template>

<script>
import ContactForm from "../components/ContactForm";
export default {
    name: "ContactUs",
    components: {
        ContactForm
    },
    mounted () {
        // if(this.$route.params['data']) {
        //     console.log(this.$route.params['data'])
        // }
    }
}
</script>

<style lang="scss">
.contact {
    margin-top: 80px;
    width: 100%;

    .toast {
        position: absolute;
        top: 90px;
        right: 50px;
        background: #f1f1f1;

        .toast-header {
            justify-content: space-between;
            border: 1px solid #1c3956;
            strong {
                display: block;
            }
        }

        .material-icons {
            display: inline-block;
            margin-right: 8px;
            color: green;
            position: absolute;
            right: 0;
            bottom: 5px;
        }
        .logo-image {
            width: 30px;
            margin-right: 8px;
        }
    }

    &-inner {
        max-width: 1100px;
        margin: 0 auto 50px;
        display: flex;

        &-left {
            max-width: 600px;
            margin-right: 30px;

            &-form {
                border: 1px solid rgba(82,103,119,.16);
                box-shadow: 0 5px 10px 3px rgba(46,91,255,.07);
            }
        }

        &-right {

            .top h3{
                display: block;
                max-width: 400px;
            }

            .bottom {

                .head {
                    font-family: "Roboto", sans-serif;
                }

                p {
                    margin: 0;
                }
                .contact-link {
                    display: block;
                }
                .material-icons {
                    font-size: 18px;
                    transform: translateY(6px);
                    display: inline-block;
                }
                .contact-card {
                    border: 1px solid rgba(82, 103, 119, 0.16);
                    padding: 7px;
                    border-radius: 5px;
                    background-image: url("/images/image.jpg");
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    position: relative;

                    .card-logo-image {
                        position: absolute;
                        right: 10px;
                        top: 10px;
                        width: 50px;
                        height: 40px;
                    }
                }
            }
        }
    }
}

@media (max-width: 1150px) {
    .contact {
        &-inner {
            max-width: 100%;
            padding: 0 20px;

            &-left {
                &-form {
                }
            }

            &-right {
                .top h3{
                }

                .bottom {
                    .head {
                    }

                    p {
                    }
                    .contact-link {
                    }
                    .material-icons {
                    }
                    .contact-card {
                        .card-logo-image {
                        }
                    }
                }
            }
        }
    }
}
@media (max-width: 768px) {
    .contact {
        &-inner {
            flex-direction: column-reverse;

            &-left {
                margin: auto;
                &-form {
                    margin-top: 3rem;
                }
            }

            &-right {
                margin: auto;
                max-width: 600px;
                .top h3{
                    max-width: unset;
                }

                .bottom {
                    max-width: unset;
                    .head {
                    }

                    p {
                    }
                    .contact-link {
                    }
                    .material-icons {
                    }
                    .contact-card {
                        .card-logo-image {
                        }
                    }
                }
            }
        }
    }
}

@media  (max-width: 570px) {
    .contact {
        .toast {
            top: 25px;
            right: 25px;
            z-index: 9999!important;
        }
    }
}
@media  (max-width: 420px) {
    .contact {
        position: relative;
        .toast {
            top: 25px;
            right: 20px;
            margin-left: 20px;
            z-index: 9999!important;
        }
    }
}
</style>
