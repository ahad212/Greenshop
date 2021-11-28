<template>
    <div class="profile">
        {{msg}}
        <router-link to="/edit_profile">edit</router-link>
    </div>
</template>

<script>
import boxComponent from './profileComponent/boxComponent.vue'

export default {
    components:{
        boxComponent
    },
    data(){
        return{
            msg:'profile'
        }
    },
    mounted(){
        console.log(this.msg);
    }
}
</script>
<style scoped>

</style>