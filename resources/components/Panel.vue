<template>
    <main>
        <form method="get" class="editForm">
            <div class="wrapper">
                <div class="sidebar">
                    <div class="mainInformation">
                        <div class="mainInformation_input">
                            <input type="tel" name="phone" id="telephone" v-model="item.phone">
                            <label for="telephone">Phone</label>
                        </div>
                        <div class="mainInformation_input">
                            <input type="email" name="email" id="email" v-model="item.email">
                            <label for="email">Email</label>
                        </div>
                        <div class="mainInformation_input">
                            <input type="text" name="city" id="city" v-model="item.address">
                            <label for="city">City</label>
                        </div>
                        <div class="mainInformation_input">
                            <input type="text" name="link" id="gitLink" v-model="item.link">
                            <label for="gitLink">GitHub</label>
                        </div>
                    </div>
                    <div class="skills">
                        <label for="skills">Skills</label>
                        <textarea name="skillsArea" id="skills" cols="30" rows="1" v-model="item.skills"></textarea>
                    </div>
                </div>
                <div class="aboutInformation">
                    <label for="profile">Profile</label>
                    <textarea name="profileArea" id="profile" cols="30" rows="1" v-model="item.profile_info"></textarea>
                </div>
                <div class="aboutInformation2">
                    <label for="profExp">Professional experience</label>
                    <textarea name="profExpArea" id="profExp" cols="30" rows="1"  v-model="item.experience"></textarea>
                </div>
            </div>
            <button class="formButtons" type="submit" >Edit</button>

        </form>
    </main>
</template>

<script>
export default {
    name: "Panel",

    props: [
        'phone', 'email', 'address', 'link', 'skills', 'profile_info', 'experience'
    ],

    data() {
        return{
            item: {
                phone: '',
                email: '',
                address: '',
                link: '',
                skills: '',
                profile_info: '',
                experience: ''

            }
        }

    },

    mounted() {
        axios.get('api/resume')
            .then(response => {
                this.resume_data = response.data

            })
    },

    methods: {
        editPost() {

        }
    }

}
</script>

<style scoped>
body{


    height: 100vh;
    justify-content: center;
    align-items: center;
}

main {
    margin-left: 500px;
}


.wrapper{
    width: 600px;
    height: 350px;

    padding: 50px;
    border-radius: 30px;
    margin-bottom: 20px;

}
.mainInformation_input input{

    height: 20px;

    align-items: center;
    border: none;
    border-bottom: 2px solid;
    color: black;
    padding: 0 20px;
    box-sizing: border-box;
}

.mainInformation_input label{
    color: blue;
}

textarea{
    width: 100%;
    display: flex;
}

.formButtons {
    display: block;
    margin-left: 300px;
    margin-right: auto;
    margin-bottom: 10px;
    width: 200px;
    height: 48px;
    border: none;
    outline: none;
    color: #f7f3f3;
    background: #232121;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 7px;
}

.formButtons:before {
    content: '';
    background: linear-gradient(45deg, #e41717, #e67111, #efeb08, #4ff30f, #12f1cc, #0f35ef, #7c13ef, #ef13bf, #de0d0d);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.formButtons:active {
    color: #141415;
}

.formButtons:active:after {
    background: transparent;
}

.formButtons:hover:before {
    opacity: 1;
}

.formButtons:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #2b2a2a;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
