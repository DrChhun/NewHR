@extends('Main')
@section('content')
<div class="p-32">
  <div class="m-auto w-full max-w-xl">
  <h1 class="mb-8 text-center text-4xl font-bold">{{__('login.signin')}}</h1>
    <form action="/signin" method="post" enctype="multipart/form-data" class="bg-white shadow-lg rounded-2xl px-8 pt-6 pb-8 mb-4">
    @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        {{__('form.email')}}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="example@email.com">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        {{__('form.phone')}}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="phone" type="password" placeholder="023880880">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          {{__('form.submit')}}
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/register">
          {{__('login.nonaccount')}}
        </a>
      </div>
    </form>
  </div>
</div>
@endsection