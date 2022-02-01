<script>
	import { Router, Route} from "svelte-navigator";
	import Login from "./views/Login.svelte";
	import PrivateRoute from "./router/PrivateRoute.svelte";
	import { user } from "./service/stores";
	import HeaderClick from "./component/Header";
	import Users from "./views/Users.svelte";
	import Header from "./layout/Header.svelte";

	function handleLogout() {
		$user = null;
	}


</script>

<Router>

	<Header />

	<main>
		<Route path="login">
			<Login />
		</Route>
		<Route path="users">
			<Users />
		</Route>

		<Route path="/">
			<h3>Home</h3>
			<p>Home sweet home...</p>
		</Route>

		<Route path="about">
			<h3>About</h3>
			<p>That's what it's all about!</p>
		</Route>

		<PrivateRoute path="profile" let:location>
			<h3>Welcome {$user.username}</h3>
			<button on:click={handleLogout}>Logout</button>
		</PrivateRoute>
	</main>
</Router>
<style lang="scss">
	@import "assets/style/app";
</style>