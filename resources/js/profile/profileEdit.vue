<template>
    <div class="profile-edit">
        {{msg}}
    </div>
</template>

<script>


export default {
    data() {
        return{
            msg: 'profile-edit'
        }
    },
    mounted() {
        console.log(this.msg);
    }
}
</script>
