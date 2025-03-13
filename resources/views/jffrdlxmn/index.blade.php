<x-layout>
    <h5>Current Available Ninjas</h5>
    <div class="container">
    <ul>
        @foreach ($datas as $data)
        <li>
            <x-card href="{{ route('jffrdlxmn.show',$data->id)}}" :highlight="$data['skill'] > 70">
              <div>
                <h3> {{ $data->name}} </h3>
                <p>{{ $data->dojo->name}}</p>
              </div>
            </x-card>
        </li>
        @endforeach
    </ul>
</div>
    {{ $datas->links() }}
</x-layout>