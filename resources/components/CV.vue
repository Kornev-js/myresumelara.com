<template>
    <main>
        <div class="wrapper" v-for="item in resume_data">
            <div class="sidebar">
                <div class="sidebar__photo">
                    <img :src="require('../pictures/IMG_0001.jpg').default" alt="photo">
                </div>
                <div class="sidebar__contact">
                    <h2 class="nameOfColumn">CONTACT</h2>
                    <p>{{item.phone}}</p>
                    <p>{{item.email}}</p>
                    <p>{{item.address}}</p>
                    <a href="https://github.com/AleksKornev">{{item.link}}</a>
                </div>
                <div class="sidebar__education">
                    <h2 class="nameOfColumn">EDUCATION</h2>
                    <p>ZNTU</p>
                    <p>Industrial machine engineering</p>
                    <p>Combustion engines</p>
                    <p>2009-2013</p>
                    <div class="sidebar__skills"></div>
                    <h2 class="nameOfColumn ">SKILLS</h2>
                    <ul class="list">
                        {{item.skills}}
                    </ul>
                </div>
            </div>
            <div class="profileInformation">
                <div class="profileInformation__name">
                    <h1>Korniev Oleksandr</h1>
                    <h2>PHP Trainee</h2>
                </div>
                <div class="profileInformation__profile">
                    <h3>Profile</h3>
                    <p> {{item.profile_info}}
                    </p>
                </div>
                <div class="profileInformation__profExperience">
                    <h3>Professional Experience</h3>
                    <p> {{item.experience}}</p>
                </div>

            </div>

        </div>



    </main>
</template>

<script>
export default {
    name: "CV",

    data(){
        return {
            resume_data: []
        }
    },
    mounted(){
        axios.get('api/resume')
        .then(response => {
            this.resume_data = response.data

        })
    }

}
</script>

<style scoped>
* {
    font-family: Roboto, Arial, Helvetica, sans-serif;
}


main {
    width: 740px;
    margin: 0 auto;
    background-color: #dcdfdb86;

}

.wrapper{
    display: flex;
    padding: 10px;
}

.sidebar{
    flex: 1;
    background-color: #d9c3a7;
    border-radius: 8px;
}

.profileInformation{
    flex: 2;
    margin-left: 10px;

}

img{
    border-radius: 50%;
    padding-top: 10px;
}
.sidebar__photo{
    text-align: center;
}

.profileInformation__name{
    background-color: black;
    color: white;
    padding-top: 10px;
    text-align: center;
    box-shadow: 2px 2px 5px black;
    border-radius: 8px;
    padding: 10px;
}

.nameOfColumn{

    background-color: black;
    color: white;
    border-radius: 2px;
    margin-left: 30px;
    margin-right: 30px;
}

.sidebar__contact{
    text-align: center;
}

.sidebar__education{
    text-align: center;
}
</style>


