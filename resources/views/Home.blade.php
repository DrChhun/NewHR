@extends('Main')

@section('content')
    <div class="home header flex justify-between py-52 px-32">
        <div class="txt w-1/2 text__home">
            <h1 class="text-7xl font-black" style="font-height: 5rem;">{{__('home.hire')}} <span class="text-blue-600  animate-bounce">{{__('home.talent')}}</span></h1>
            <p class="text-base font-bold text-slate-400 mb-16 mt-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Ipsum mollitia amet labore reprehenderit necessitatibus 
                odio perferendis sint nisi accusamus et.
            </p>
            <a href="/create">
                 <button class="tracking-widest text-lg bg-blue-600 py-3 px-12 rounded-full text-white font-bold hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out hover:scale-105">{{__('home.start')}}</button>  
            </a>
        </div>
        <div class="img img__home content-end float-right ">
            <img class="rounded-2xl h-80" src="img/mark.gif" alt="">
        </div>
    </div>
@endsection