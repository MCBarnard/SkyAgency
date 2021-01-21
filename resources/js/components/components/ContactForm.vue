<template>
<div>
    <div class="container">
        <form action="/action_page.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name">

            <label for="contact_dets">Email Or Cellphone number</label>
            <input type="text" id="contact_dets" name="contact_dets" placeholder="Email address / Cell">

            <label for="test">Type of Test you would like to enquire about</label>
            <select id="test" name="country">
                <option value="preEmploy">Pre Employment</option>
                <option value="incident">Incident investigation</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Your message</label>
            <textarea id="message" name="message" placeholder="Write something.."></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</div>
</template>

<script>
export default {
    name: "ContactForm"
}
</script>

<style scoped lang="scss">
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

input[type=submit] {
    background-color: #1c3956;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #234a72;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
</style>
