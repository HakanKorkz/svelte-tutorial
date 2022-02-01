<script>
    import {Link} from "svelte-navigator";
    import HeaderClick from "../component/Header";


</script>
<header id="Header">
    <div class="logo">
        Logo
    </div>
    <div>
        <div class="search">
            arama
        </div>
        <nav>
            <Link to="/">
                <button>
                    Ana Sayfa
                </button>
            </Link>
            <Link to="users">
                <button>
                    Üyeler
                </button>
            </Link>
            <Link to="about">
                <button>
                    About
                </button>
            </Link>
            <Link to="profile">
                <button>
                    Profile
                </button>
            </Link>
        </nav>
        <div class="mobil-menu">
            Mobil de çıkar
        </div>
    </div>
</header>
<button on:click={HeaderClick} class="headerPage">
    Küçült
</button>

<style lang="scss">
  @import "../assets/style/header";
</style>