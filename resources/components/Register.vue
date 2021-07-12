<template>
    <div class="form">
        <form  class="form__body" method="post">
            <div class="title">
                <div class="line"><hr size="4"></div>
                <h1 class="formName">Register</h1>
                <div class="line"><hr size="4"></div>

            </div>
            <p>Create your account.It's free and only takes a minute</p>
            <div class="name">
                <div class="form__item">
                    <label for="formName" class="formLabel"></label>
                    <input id="formName"  type="text" name="lastName" class="form__input-name " placeholder="First Name" >
                </div>
                <div class="form__item">
                    <label for="formSurname" class="formLabel"></label>
                    <input id="formSurname"  type="text" name="firstName" class="form__input-name " placeholder="Last Name" >
                </div>
            </div>
            <div class="form__item">
                <label for="formEmail" class="formLabel"></label>
                <input id="formEmail"  type="email" name="email" class="form__input " placeholder="Email" >

            </div>
            <div class="form__item">
                <label for="formPassword" class="formLabel"></label>
                <input id="formPassword"  type="password" name="password" class="form__input " placeholder="Password" >
            </div>
            <div class="form__item">
                <label for="formConfPassword" class="formLabel"></label>
                <input id="formConfPassword"  type="password" name="confirmPass" class="form__input " placeholder="Confirm Password"   >
            </div>
            <div class="form__item">
                <div class="checkbox">
                    <input id="formAgreement"   type="checkbox" name="agreement" class="checkbox__input ">
                    <label for="formAgreement" class="checkbox__label">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a> </label>
                </div>
            </div>
            <button type="submit" class="form__button">Register Now</button>
            <div id="error"></div>
        </form>
        <p class="Registered">Already have an account? <a href="?tab=pages/logForm">Sign in</a> </p>


    </div>
</template>

<script>
export default {
    name: "Register"
}
</script>

<style scoped>
body {
    background-color: #63738a;
}


.form {

    max-width:  550px;
    margin: auto;
    padding-top: 50px;
    text-align: center;
    background-color: #f2f3f7;
    height: 500px;
    margin-top: 100px ;
}

.name {
    display: flex;
    margin-bottom: 15px;
    margin-left: 105px;

}

.form__input-name {
    height: 25px;
    width: 160px;
}

.form__input {
    margin-bottom: 20px;
    width: 330px ;
    height: 25px;
}
.title {
    display: flex;
    margin-left: 105px;


}
.line {
    width: 110px;
    align-self: center;

}
hr {
    background-color: black;
}

.checkbox__input  {
    margin-left: -35px;
}

.form__button {
    margin-top: 20px;
    width: 330px;
    height: 25px;
    background-color: #4ba34b;
    border-color: #4ba34b;
}


.msg {
    border: 2px solid chocolate;
    border-radius: 3px;
    text-align: center;
    padding: 10px;
    font-weight: bold;

}

.noContactInputs {
    display: inline;
    flex-direction: column;
}
</style>
