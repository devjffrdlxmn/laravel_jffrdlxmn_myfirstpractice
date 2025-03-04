<x-layout>
    <h1>Current Available Ninjas</h1>
    @if($greeting == "hello")
        <p>HELLO WOLRD</p>
    @endif
    <ul>
        @foreach ($datas as $data)
        <li>
            <x-card href="/jffrdlxmn/{{ $data['id'] }}" :highlight="$data['skill'] > 70">
                <h3> {{ $data['name']}} </h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>