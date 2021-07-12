<template>
    <div class="form">
        <form action="../functionality/login.php" method="POST">
            <h1>Login Form</h1>
            <div class="form__item">
                <label for="formName" class="formLabel validation">Login or Email</label>
                <input id="formName"  type="email" name="email" class="form__input-name " placeholder="Login">
            </div>
            <div class="form__item">
                <label for="formPass" class="formLabel">Password</label>
                <input id="formPass"  type="password" name="password" class="form__input-name validation" placeholder="******">
            </div>
            <div id="error"></div>
            <a href="#" class="reminder">Forgot Password?</a>
            <button type="submit" class="loginButton">Log In</button>
            <p class="regLink">Not a member? <a href="?tab=pages/regForm">Signup now</a></p>
        </form>
    </div>
</template>

<script>
export default {
    name: "LogIn"
}
</script>

<style scoped>
.form {

    max-width:  400px;
    margin: auto;
    padding-top: 50px;
    text-align: center;
    background-color: #f2f3f7;
    height: 350px;
    margin-top: 100px ;
    border: 1px solid ;
    border-radius: 5%;
}
.formLabel {
    display: block;
    padding-bottom: 10px;
    padding-top: 10px;

}

.reminder {
    display: block;;
    padding-top: 10px;
    padding-bottom: 10px;
}

.loginButton {
    width: 180px;
    background-color: #9424e9;
    height: 30px;
    border-radius: 3px;
}

.form__input-name {
    height: 20px;
}
</style>
