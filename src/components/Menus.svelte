<script>
    import {Link} from "svelte-navigator";

</script>
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

<style lang="scss">
  @import "../assets/style/menus";
</style>