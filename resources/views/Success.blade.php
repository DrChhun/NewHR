@extends("Main")

@section('content')
    <div class="p-32 flex flex-col m-auto">
        <h1 class="m-auto font-bold text-4xl  animate-bounce">🎉 {{__('success.congrate')}} 🎉</h1>
        <img class="h-80 w-128 m-auto mt-8" src="img/congrate-bean.gif" alt="">
        <a class="m-auto mt-16" href="/listing">
            <button class="relative transition duration-300 ease-in-out hover:scale-105 inline-flex items-center py-3 px-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">{{__('success.golist')}}
                 <span class="p-4 bg-white rounded-full animate-ping top-0 right-0 absolute"></span>
            </button>
        </a>
    </div>
@endsection