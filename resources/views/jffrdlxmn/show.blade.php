<x-layout>

    <h2>{{ $data->name}} </h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level: </strong> {{$data->skill}}</p>
        <p><strong>About me: </strong>  </p>
        <p>{{ $data->bio}}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo Name: </strong> {{$data->dojo->name}}</p>
        <p><strong>Location </strong> {{$data->dojo->loacation}}</p>
        <p><strong>About the Dojo: </strong></p>
        <p>{{$data->dojo->description}}</p>
    </div>


    <form action="{{route('jffrdlxmn.destroy',$data->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn my-4"> Delete Ninja</button>
    </form>


</x-layout>