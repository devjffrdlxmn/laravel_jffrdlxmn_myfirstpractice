<x-layout>
    <h1>Current Available Ninjas</h1>
    <ul>
        @foreach ($datas as $data)
        <li>
            <x-card href="{{ route('jffrdlxmn.show',$data->id)}}" :highlight="$data->skill > 70">
                <h3> {{ $data->name}} </h3>
            </x-card>
        </li>
        @endforeach
    </ul>
    {{ $datas->links()}}
</x-layout>