<script>
    import HeaderNav from './includes/HeaderNav.vue'
    import SiderBar from './includes/UserSideBar.vue'
    import FooterBar from './includes/Footer.vue'
    export default {
        components:{
            'header-component':HeaderNav,
            'side-bar-component':SiderBar,
            'footer-component':FooterBar
        },
        data(){
            return{

            }
        }
    }
</script>

<template>
    <div>
        <header-component></header-component>
        <side-bar-component></side-bar-component>
        <p></p>



        <footer-component></footer-component>

    </div>
</template>

<style>

</style>