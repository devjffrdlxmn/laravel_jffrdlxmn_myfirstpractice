<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jffrdlxmn Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="nav">
            <h1>Jffrdlxmn Network</h1>
            <a href="{{ route('jffrdlxmn.index') }}">All Ninjas</a>
            <a href="{{ route('jffrdlxmn.create')}}">Create New Ninja</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>