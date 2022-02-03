<script>
    export let Input
    // export let Count
    export let Give
    // console.log(Count);
    console.log(Give);
    console.log(Input);
</script>

{#if Give==="Input"}
    <input {...Input}>
{/if}

<style lang="scss">

    @import '../assets/style/form';

</style>

