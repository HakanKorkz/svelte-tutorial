<script>
    import {createEventDispatcher} from "svelte"

    export let Input
    // export let Count
    export let Give
    // console.log(Count);
    console.log(Give);
    console.log(Input);
    const dispatch=createEventDispatcher();
    const Keyup = event => {
        const value=event.target.value
        dispatch('Keyup',value);
    }
</script>

{#if Give==="Input"}
    <input {...Input} aria-label="" on:keyup={Keyup}>
{/if}

<style lang="scss">

    @import '../assets/style/form';

</style>

