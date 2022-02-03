<script>
    import HeaderClick from "../functions/Header";
    import Menus from "../components/Menus.svelte";
    import Search from "../components/Search.svelte";


</script>
<header id="Header">
    <div class="logo">
        Logo
    </div>
    <div>
        <Search/>
       <Menus />
    </div>
</header>
<button on:click={HeaderClick} class="headerPage">
    Küçült
</button>

<style lang="scss">
  @import "../assets/style/header";
</style>