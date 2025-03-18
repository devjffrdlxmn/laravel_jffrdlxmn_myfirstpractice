<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jffrdlxmn Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-100 text-green-500 font-bold" >
            {{ session('success')}}
        </div>
    @endif
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