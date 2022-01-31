import App from './App.svelte';

const app = new App({
    target: document.body,
    props: {
        name: 'world'
    }
});

fetch('http://localhost/developer/Ar-Ge/svelte-tutorial/backend/index.php', {
    method: 'POST',
    body: 'data=test'
})
    .then(data => data.json())
    .then(response => {
        const users= response.users

        users.map(user=>{
            console.log(user.name)
        })
    })
    .catch(errors=>console.log(errors))

export default app;