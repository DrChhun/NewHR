@extends('Main')

@section('content')

    <!-- <div class="p-12">
    @foreach($data as $go) 
        <h1>{{$go->id}}</h1>
        <h1>{{$go->Name}}</h1>
        <h1>{{$go->Phone}}</h1>
        <h1>{{$go->Email}}</h1>
    @endforeach
    </div> --> 
<div class="p-32">
<a href="/listing">Show in card</a>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-lg text-gray-700 uppercase">
                <tr>
                    <th scope="col" class="py-3 px-6 bg-gray-50">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6 bg-gray-50">
                        Phone Number
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $go)  
                    <tr>
                        <th class="p-4">{{$go->Name}}</th>
                        <td>{{$go->Email}}</td>
                        <td>{{$go->Phone}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection