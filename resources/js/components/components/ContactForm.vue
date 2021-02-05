<template>
<div>
    <div class="container">
        <div class="contact-us-form__wrapper__left__heading">
            <span>Ready to take the next steps?</span>
            <span class="subtext">The truth is waiting...</span>
        </div>
        <hr>
        <form @submit.prevent="sendEmail" action="/action_page.php">
            <label class="head-label">Where do you need tests done?</label>
            <br>
            <!--     =========================================================================================================       -->
            <div class="input-box" :class="[{'error-input': $v.submittedData.location.$error && this.$v.$anyDirty}]">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="inlineRadio2" v-model.trim="$v.submittedData.location.$model" value="cpt">
                    <label class="form-check-label" for="inlineRadio2">Mosselbay / George</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="inlineRadio1" v-model.trim="$v.submittedData.location.$model" value="jhb">
                    <label class="form-check-label" for="inlineRadio1">Johannesburg</label>
                </div>
                <div v-if="$v.submittedData.location.$error && this.$v.$anyDirty" class="error-box">
                    <div class="error" v-if="!$v.submittedData.location.required">Field is required</div>
                    <div class="error" v-if="!$v.submittedData.location.minLength">Name must have at least {{$v.submittedData.location.$params.minLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.location.maxLength">Name may only have {{$v.submittedData.location.$params.maxLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.location.alpha">Text may only contain alphabetical characters.</div>
                </div>
            </div>
            <!--     =========================================================================================================       -->
            <div class="input-box" :class="[{'error-input': $v.submittedData.clientName.$error && this.$v.$anyDirty}]">
                <label class="head-label first-item-form" for="name">Name</label>
                <input type="text" id="name" name="name" v-model.trim="$v.submittedData.clientName.$model" placeholder="Your name">
                <div v-if="$v.submittedData.clientName.$error && this.$v.$anyDirty" class="error-box">
                    <div class="error" v-if="!$v.submittedData.clientName.required">Field is required</div>
                    <div class="error" v-if="!$v.submittedData.clientName.minLength">Name must have at least {{$v.submittedData.clientName.$params.minLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.clientName.maxLength">Name may only have a maximum of{{$v.submittedData.clientName.$params.maxLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.clientName.alpha">Text may only contain alphabetical characters.</div>
                </div>
            </div>
            <!--     =========================================================================================================       -->
            <div class="input-box" :class="[{'error-input': $v.submittedData.clientEmail.$error && this.$v.$anyDirty}]">
                <label class="head-label" for="contact_dets">Email Or Cellphone number</label>
                <input type="text" id="contact_dets" name="contact_dets" v-model.trim="$v.submittedData.clientEmail.$model" placeholder="Email address / Cell">
                <div v-if="$v.submittedData.clientEmail.$error && this.$v.$anyDirty" class="error-box">
                    <div class="error" v-if="!$v.submittedData.clientEmail.required">Email is required</div>
                    <div class="error" v-if="!$v.submittedData.clientEmail.minLength">Email / Cell must have at least {{$v.submittedData.clientEmail.$params.minLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.clientEmail.maxLength">Email may only have a maximum of{{$v.submittedData.clientEmail.$params.maxLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.clientEmail.email">Has to be an email or a cellphone number we can contact on.</div>
                    <div class="error" v-if="!$v.submittedData.clientEmail.numeric">Cell number cannot contain any spaces.</div>
                </div>
            </div>
            <!--     =========================================================================================================       -->
            <div class="input-box" :class="[{'error-input': $v.submittedData.testType.$error && this.$v.$anyDirty}]">
                <label class="head-label" for="test">What would you like to enquire about</label>
                <select id="test" name="country" v-model.trim="$v.submittedData.testType.$model" >
                    <option value="screening">Periodic Screening</option>
                    <option value="preEmploy">Pre Employment</option>
                    <option value="incident">Incident investigation</option>
                    <option value="vetting">Vetting</option>
                    <option value="other">Other</option>
                </select>
                <div v-if="$v.submittedData.testType.$error && this.$v.$anyDirty" class="error-box">
                    <div class="error" v-if="!$v.submittedData.testType.required">Type is required</div>
                    <div class="error" v-if="!$v.submittedData.testType.minLength">Type must have at least {{$v.submittedData.testType.$params.minLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.testType.maxLength">Type may only have a maximum of{{$v.submittedData.testType.$params.maxLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.testType.alpha">Type may only contain alphabetical characters.</div>
                </div>
            </div>
            <!--     =========================================================================================================       -->
            <div class="input-box" :class="[{'error-input': $v.submittedData.message.$error && this.$v.$anyDirty}]">
                <label class="head-label" for="message">Your message</label>
                <textarea id="message" v-model.trim="$v.submittedData.message.$model" name="message" placeholder="Write something.."></textarea>
                <div v-if="$v.submittedData.message.$error && this.$v.$anyDirty" class="error-box">
                    <div class="error" v-if="!$v.submittedData.message.required">Message is required</div>
                    <div class="error" v-if="!$v.submittedData.message.minLength">Message must have at least {{$v.submittedData.testType.$params.minLength.min}} letters.</div>
                    <div class="error" v-if="!$v.submittedData.message.maxLength">Message may only have a maximum of{{$v.submittedData.testType.$params.maxLength.min}} letters.</div>
                </div>
            </div>
            <!--     =========================================================================================================       -->
            <div class="input-box">
                <button v-if="!sending">
                    Send Email
                </button>
                <button class="disabled" disabled v-else>
                    Sending Email
                    <div class="spinner-grow text-light spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
import { required, minLength, email, alpha, maxLength, or, numeric } from 'vuelidate/lib/validators'


export default {
    name: "ContactForm",
    data() {
        return {
            sending: false,
            submittedData: {
                location: "cpt",
                clientName: "",
                clientEmail: "",
                testType: "screening",
                message: ""
            },
            sendError: false
        }
    },
    methods: {
        async sendEmail () {
            // Validate the data
            this.$v.submittedData.$touch();
            if (this.$v.submittedData.$invalid) {
                return false;
            }
            this.sending = true;
            const data = {
                name: this.submittedData.clientName,
                email_num: this.submittedData.clientEmail,
                area: this.submittedData.location,
                subject: this.submittedData.testType,
                message: this.submittedData.message
            };

            axios.post('/contact', data)
            .then( response => {
                if( response.status === 200) {
                    this.submittedData.clientName = "";
                    this.submittedData.clientEmail = "";
                    this.submittedData.location = "cpt";
                    this.submittedData.testType = "screening";
                    this.submittedData.message = "";
                    this.$v.submittedData.$reset();
                    setTimeout(() => {
                        $('.toast').toast('show');
                    }, 200);
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                    this.sending = false;
                }else {
                    console.error(response);
                    this.sending = false;
                }
            }).catch( error => {
                console.error(error);
            })
        }
    },
    validations: {
        submittedData: {
            clientName: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(30),
            },
            clientEmail: {
                required,
                minLength: minLength(5),
                maxLength: maxLength(30),
                email: or( email, numeric)
            },
            location: {
                alpha,
                required,
                minLength: minLength(3),
                maxLength: maxLength(3)
            },
            testType: {
                required,
                minLength: minLength(5),
                maxLength: maxLength(30),
                alpha
            },
            message: {
                required,
                minLength: minLength(5),
                maxLength: maxLength(255)
            }
        },
    }
}
</script>

<style scoped lang="scss">
.first-item-form {
    margin-top: 16px;
    display: block;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    resize: vertical;
}

button {
    background-color: #1c3956;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin: auto;
    display: block;
}

button:hover {
    background-color: #234a72;
}
button.disabled {
    background: #55616d;
    cursor: progress;
    div {
        margin-left: 8px;
    }
}

.container {
    border-radius: 5px;
    padding: 20px;
}
.contact-us-form__wrapper__left__heading {
    color: #041b2b;
    font-size: 22px;
    width: 100%;
    span {
        display: block;
        font-weight: 600;
    }
    .subtext {
        font-weight: 400;
        color: #3d4f5c;
        font-size: 1rem;
    }
}
.head-label {
    font-size: 16px;
    font-weight: 600;
}
.sub-head-label {
    margin-top: 16px;
}

.error-input {
    input, textarea {
        border: 1px solid red;
        color: red;
    }

    .head-label, .error {
        color: red;
    }
}
.input-box {
    margin-top: 16px;
}
@media (max-width: 768px) {
    .container {
        max-width: unset;
    }
}
</style>
