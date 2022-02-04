<script>
    import Form from "./Form.svelte";
    import Search from "../functions/Search";

    const Input = {
        "id":"search",
        "type": "text",
        "name": "search",
        "placeholder": "Arama..."

    },Input2 = {
        "id":"search",
        "type": "text",
        "name": "search",
        "placeholder": "Arama..."

    }
    const SearchKeyup = (event) => {
        Search(event.detail)
    }
</script>
<div class="search">
    <Form Input={Input} Give="Input" on:Keyup={SearchKeyup}/>
    <Form Input={Input2} Give="Input" on:Keyup={SearchKeyup}/>
</div>

<style lang="scss">

  @import "../assets/style/search";
</style>