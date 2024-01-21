<template>
    <div class="w-50 d-flex justify-content-center align-items-center">
        <div class="btn btn-primary" @click="getUsers()">Нажать</div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            users: null
        }
    },
    props: {
        defender: null,
    },
    methods: {
        getUsers(){
            axios.post('/api/users', { user_id: this.defender }).then(data => this.users = data.data);
            console.log(this.users);
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
