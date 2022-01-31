import App from './App.svelte';

const app = new App({
	target: document.body,
	props: {
		name: 'world'
	}
});

fetch('http://localhost/developer/Ar-Ge/svelte-tutorial/backend/index.php', {
	method: 'POST',
	body:'data=test'
}).then(r => console.log(r))

export default app;