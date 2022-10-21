@extends('Main')
@section('content')

    <!-- <div class="p-32 flex justify-center m-auto">
        <div>
            <img class="rounded-t-lg shadow-xl h-96" src="{{ asset('storage/'.$data->Photo) }}"  alt="">
            <p>Name: {{$data->Name}}</p>
            <p>Age: {{$data->Age}}</p>
            <p>Phone: {{$data->Phone}}</p>
            <p>Email: {{$data->Email}}</p>
            <p>Experience: {{$data->Experience}}</p>
            <p>Education: {{$data->Education}}</p>
            <p>Living: {{$data->Living}}</p>
            <p>Position: {{$data->Position}}</p>
            <br>
            <div class="flex justify-between">
                <a class="" href="/edit/{{$data->id}}">Edit</a>
                <a class="" href="/delete/{{$data->id}}">Delete</a>
            </div>
        </div>
    </div> -->
    <div class="main flex justify-center py-32 pl-32 pr-80 flex-col">
        <div class="all flex justify-between">
            <div class="img">
                <img class="shadow-xl h-96" src="{{ asset('storage/'.$data->Photo) }}"  alt="">
            </div>
            <div class="des flex flex-col justify-between">
                <div class="detail">
                    <p class="text-xl font-medium leading-normal">{{__('detail.name')}} : {{$data->Name}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.age')}} : {{$data->Age}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.phone')}} : {{$data->Phone}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.email')}} : {{$data->Email}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.experience')}} : {{$data->Experience}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.education')}} : {{$data->Education}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.living')}} : {{$data->Living}}</p>
                    <p class="text-xl font-medium leading-normal">{{__('detail.position')}} : {{$data->Position}}</p>
                </div>
                <div class="crud flex justify-between">
                    <a class="px-6 py-2 bg-blue-200 rounded-lg font-medium hover:bg-blue-300 duration-300" href="/edit/{{$data->id}}">🔧 {{__('detail.edit')}}</a>
                    <a class="px-6 py-2 bg-red-200 rounded-lg font-medium hover:bg-red-300 duration-300" href="/delete/{{$data->id}}">❌ {{__('detail.delete')}}</a>
                </div>
            </div>
        </div>
    </div>

@endsection