<h1>User Dashboard</h1>
<form method="post" action="{{ route('user.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
