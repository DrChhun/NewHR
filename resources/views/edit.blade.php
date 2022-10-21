@extends('Main')

@section('content')
<div class="p-32">
  <div class="m-auto w-full max-w-xl">
  <h1 class="mb-8 text-blue-700 text-center text-4xl font-bold">{{__('detail.edit')}}</h1>
    <form action="/update/{{$person->id}}" method="post" enctype="multipart/form-data" class="bg-white shadow-lg rounded-2xl px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PATCH')
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        {{__('form.name')}}
        </label>
        <input value="{{old('name', $person->Name)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
        {{__('form.age')}}
        </label>
        <input value="{{old('age', $person->Age)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="age" id="age" type="number" placeholder="Age">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        {{__('form.email')}}
        </label>
        <input value="{{old('email', $person->Email)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="example@email.com">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
        {{__('form.phone')}}
        </label>
        <input value="{{old('phone', $person->Phone)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="phone" id="phone" type="number" placeholder="023880880">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
        {{__('form.photo')}}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="photo" id="photo" type="file" placeholder="">
        <!-- <img class="rounded-t-lg" src="{{ asset('storage/'.$person->Photo) }}"  alt=""> -->
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="experience">
        {{__('form.experience')}}
        </label>
        <input value="{{old('experience', $person->Experience)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="experience" id="experience" type="experience" placeholder="experience">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="education">
        {{__('form.education')}}
        </label>
        <input value="{{old('education', $person->Education)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="education" id="education" type="education" placeholder="education">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="living">
        {{__('form.living')}}
        </label>
        <input value="{{old('living', $person->Living)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="living" id="living" type="living" placeholder="living place">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="position">
        {{__('form.position')}}
        </label>
        <input value="{{old('position', $person->Position)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="position" id="position" type="position" placeholder="Posotion">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        {{__('form.submit')}}
        </button>
        <a class="hidden inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        {{__('form.forgot')}}
        </a>
      </div>
    </form>
  </div>
</div>
@endsection