<script>
    import Form from "./Form.svelte";

    const Input = {
        "type": "text",
        "name": "search",
        "placeholder": "Arama..."

    }
</script>
<div class="search">
    <Form Input={Input} Give="Input" id="search"/>
</div>

<style lang="scss">

  @import "../assets/style/search";
</style>