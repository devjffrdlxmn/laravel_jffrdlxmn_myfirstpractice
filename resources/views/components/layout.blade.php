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
            <h1>Jffrdlxmn Netowrk</h1>
            <a href="/jffrdlxmn">All Ninjas</a>
            <a href="/jffrdlxmn/create">Create New Ninja</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>