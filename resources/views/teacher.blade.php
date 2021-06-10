
    @extends('layout.template')

    @section('title', 'teacher')

    @section('content')
        
        @foreach ($teacher as $data)
            <p>{{ 'Nama : ' . $data->name  }}</p>
            <p>{{ 'Alamat : ' .$data->address }}</p>
        @endforeach
        
    @endsection

     {{-- <p>{{ 'Nama : ' . $teacher->name  }}</p>
    <p>{{ 'Alamat : ' .$teacher->address }}</p> --}}
    