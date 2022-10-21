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
    <div class="py-6 px-32 flex justify-between">
        <h1 class="text__list text-3xl font-bold">{{__('list.peoples')}}</h1>
        <form class="hidden" role="search" action="/listing" method="get">
            <input name="search" value="{{ request()->has('search') ? request()->search : '' }}" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
        <a href="/list_table">Show in table</a>
    </div>
    <div class="this__list px-32 py-16 grid grid-cols-4 gap-12">
@foreach($data as $go)   
            <div class="hover:scale-105 max-w-sm bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-lg duration-300 ease-out">
                <a href="/list/{{$go->id}}">
                    <img class="rounded-t-lg" src="{{ asset('storage/'.$go->Photo) }}"  alt="">
                    <div class="py-8 px-6">
                        <a href="/list/{{$go->id}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-balck">{{__('list.name')}} : {{$go->Name}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{__('list.email')}} : {{$go->Email}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{__('list.phone')}} : {{$go->Phone}}</p>
                    </div>
                </a>
            </div>
@endforeach
    </div>
    <center>
        have something in your mind? let us know what we can help.  
   </center>

@endsection