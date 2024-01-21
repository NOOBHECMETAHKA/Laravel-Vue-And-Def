<template>
    <div class="w-50 d-flex justify-content-center align-items-center mt-3">
        <div class="btn btn-primary" @click="getUsers()">Отправить post</div>
    </div>
    <div class="w-50 d-flex justify-content-center align-items-center mt-3">
        <div class="btn btn-primary" @click="getUsersGet()">Отправить get</div>
    </div>
    <div class="w-50 d-flex justify-content-center align-items-center bg-primary mt-3">
        <div class="text-light">{{ this.users }}</div>
    </div>
</template>

<script>
import {info} from "sass";

export default {
    data(){
        return {
            users: null,
            info: null
        }
    },
    props: {
        defender: null,
    },
    methods: {
        getUsers(){
            axios.post('/api/users', { user_id: this.defender }).then(data => this.users = data.data);
            console.log('post request was send!');
        },
        getUsersGet(){
            axios.get('/api/users/get', { params: { user_id: this.defender }}).then(data => this.users = data.data);
            console.log('get request was send!');
        }


    }
}
</script>

<style lang="scss" scoped>

</style>
