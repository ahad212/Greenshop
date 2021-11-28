<template>
    <div class="profile-cover">
        <router-view></router-view>
    </div>
</template>

<script>


export default {
    data() {
        return{
            msg: 'profile-cover'
        }
    },
    mounted() {
        console.log(this.msg);
    }
}
</script>
