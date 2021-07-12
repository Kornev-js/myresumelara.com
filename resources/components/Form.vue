<template>
    <div class="form" >
        <form action="#" id="form" class="form__body" method="POST">
            <div class="form__item">
                <label for="formName" class="formLabel">Name*</label>
                <input id="formName"  type="text" name="name" class="form__input " placeholder="John Doe">
                <small>Error</small>
            </div>
            <div class="form__item">
                <label for="formEmail" class="formLabel">Email*</label>
                <input id="formEmail"  type="email" name="email" class="form__input " placeholder="example@mail.com">
                <small>Error</small>
            </div>
            <div class="form__item">
                <label for="formPassword" class="formLabel">Password*</label>
                <input id="formPassword"  type="password" name="password" class="form__input " placeholder="******">
                <small>Error</small>
            </div>
            <div class="form__item"></div>
            <div class="form__title">Gender</div>
            <div class="options">
                <div class="options__item">
                    <input id="formMale" value="male" checked type="radio" name="male" class="options__input">
                    <label for="formMale" class="options__label">Male</label>
                </div>
                <div class="options__item">
                    <input id="formFemale" type="radio" value="female" name="male" class="options__input">
                    <label for="formFemale" class="options__label">Female</label>
                </div>
            </div>
            <div class="form__item">
                <label for="formbirthdate" class="formLabel">Birthdate</label>
                <input id="formbirthdate" type="date" name="birthdate" class="form__input">
                <small>Error</small>
            </div>
            <div class="form__item contact">
                <div class="form__label contacts">Contacts</div>
                <div class="noContactInputs">

                    <button type="button"  id="addButton">Add New</button>
                    <button type="reset" id="resetButton">Reset</button>
                </div>
            </div>
            <div class="form__item">
                <div class="form__label photo">Photo</div>
                <div class="file">
                    <div class="file__item">
                        <input type="file" name="image" class="file__input " accept=".jpg, .gif, .png">
                    </div>
                </div>
            </div>
            <div class="form__item">
                <label for="formHobbies" class="formLabel">Hobbies</label>
                <textarea name="hobbies" id="formHobbies" class="" placeholder="Swimming"></textarea>
                <small>Error</small>
            </div>
            <div class="form__item">
                <label for="formWords" class="formLabel">Some words</label>
                <textarea name="some words" id="formWords" class=""></textarea>
                <small>Error</small>
            </div>
            <div class="form__item">
                <div class="checkbox">
                    <input id="formAgreement" required checked type="checkbox" name="agreement12334" class="checkbox__input _req">
                    <label for="formAgreement" class="checkbox__label">Agreement</label>
                </div>
            </div>
            <button type="reset" class="form__resetButton">Update Profile</button>
            <button type="submit" class="form__button">Next</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Form"
}
</script>

<style scoped>
.form {
    max-width: 550px;
    margin: 0 auto;
    padding-top: 50px;
}
.form__item {
    display: flex;
    padding-bottom: 30px;
    position: relative;

}
.formLabel {
    width: 20%;
    text-align: center;
    font-size: 18px;
}

.form__input {
    width: 70%;
    height: 25px;
}
.options__item {
    display: inline-block;
}
.form__title {
    float: left;
    padding-left: 40px;
    padding-right: 30px;
}

.options {
    margin-bottom: 30px;
}
.contacts {
    padding-left: 30px;
}
.select {
    margin-left: 25px;
}
.photo {
    padding-left: 50px;
    padding-right: 25px;
}

.checkbox {
    padding-left: 20%;
}
.form__resetButton{
    margin-left: 20%;

}
textarea {
    height: 70px;
    width: 70%;
    resize: none;

}

.form__resetButton {
    border: none;
    background-color: #fff;
    background-color: #428bca;
    border: 1px solid;
    border-radius: 3px ;
    border-color: #428bca;
    height: 35px;
}

.form__button {
    border: none;
    background-color: #fff;
    background-color: #dddddd;
    height: 35px;
    border: 1px solid;
    border-color: #dddddd;
    border-color: #dddddd;
    border-radius: 3px;
}

.form__item-contact {
    margin-left: 10px;
}

.contactButton {
    background-color: white;
    border: none;

    margin-left: -50px;
}

.noContactInputs {
    display: flex;
    margin-left: 20%;
    padding-bottom: 20px;
}
.noContactName {
    margin-left: -50px;;
}

.contactButton2 {
    background-color: white;
    border: none;
    margin-left: -83px;
}

small{
    visibility: hidden;
    position: absolute;
    left: 0;
    bottom: 0;
}

.form__item.error input {
    border-color: #e75e3c;

}

.form__item.error small {
    visibility: visible;
    border-color: #e75e3c;
    font-size: 18px;
    color: #e75e3c;
    margin-left: 110px;
}


.form__item.success input {
    border-color: #2ecc71;

}

.noContactInputs {
    display: block;
}

.contact {
    display: block;
}

#spanDel {
    cursor: pointer;
    color: #0f35ef;
}
.inputDiv {
    margin-left: 110px;
}
</style>
