<!DOCTYPE html>
<html>
<head>
    <title>Foodpanda Dashboard</title>
</head>
<body>

    <h1>🍔 Welcome to Foodpanda</h1>

    <p>Logged in as: <strong>{{ auth()->user()->email }}</strong></p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>