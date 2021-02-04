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
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="area" id="inlineRadio2" v-model="submittedData.location" value="cpt">
                <label class="form-check-label" for="inlineRadio2">Mosselbay / George</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="area" id="inlineRadio1" v-model="submittedData.location" value="jhb">
                <label class="form-check-label" for="inlineRadio1">Johannesburg</label>
            </div>
            <label class="head-label first-item-form" for="name">Name</label>
            <input type="text" id="name" name="name" v-model="submittedData.clientName" placeholder="Your name">

            <label class="head-label" for="contact_dets">Email Or Cellphone number</label>
            <input type="text" id="contact_dets" name="contact_dets" v-model="submittedData.clientEmail" placeholder="Email address / Cell">
            <label class="head-label" for="test">What would you like to enquire about</label>
            <select id="test" name="country" v-model="submittedData.testType" >
                <option value="screening">Periodic Screening</option>
                <option value="preEmploy">Pre Employment</option>
                <option value="incident">Incident investigation</option>
                <option value="vetting">Vetting</option>
                <option value="other">Other</option>
            </select>

            <label class="head-label" for="message">Your message</label>
            <textarea id="message" v-model="submittedData.message" name="message" placeholder="Write something.."></textarea>

            <button v-if="!sending">
                Send Email
            </button>
            <button class="disabled" disabled v-else>
                Sending Email
                <div class="spinner-grow text-light spinner-grow-sm" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </button>
        </form>
    </div>
</div>
</template>

<script>
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
            }
        }
    },
    methods: {
        sendEmail () {
            this.sending = true;
            setTimeout(() => {
                this.sending = false;
            }, 5000);
        }
    },
    mounted() {

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
    margin-bottom: 16px;
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

@media (max-width: 768px) {
    .container {
        max-width: unset;
    }
}
</style>
