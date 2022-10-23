<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.25">
    <title>Assigment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>
<body>

    <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm py-6 bg-white relative flex items-center w-full justify-between">
        <div class="px-32 w-full flex flex-wrap items-center justify-between">
        <!-- <div class="flex items-center">
            <button
            class="navbar-toggler border-0 py-3  leading-none text-xl bg-transparent text-white hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                class="w-5"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
            >
                <path
                fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                ></path>
            </svg>
            </button>
        </div> -->
        <div class="navbar-collapse grow items-center flex justify-between" id="navbarSupportedContentY">
        @auth
            <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
               <h1 class="flex items-center font-extrabold text-2xl mr-8"> <a href="/home">MEGA</a>  </h1>
                <li class="nav-item">
                    <a class="nav-link block pr-2 lg:px-2 py-2 text-black  font-medium hover:text-blue-600 text-md transition duration-150 ease-in-out" href="/listing" data-mdb-ripple="true" data-mdb-ripple-color="light">{{__('nav.listing')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link block pr-2 lg:px-2 py-2 text-black  font-medium hover:text-blue-600 text-md transition duration-150 ease-in-out" href="/create" data-mdb-ripple="true" data-mdb-ripple-color="light">{{__('nav.create')}}</a>
                </li>
                <li class="nav-item mb-2 lg:mb-0">
                    <a class="nav-link block pr-2 lg:px-2 py-2 text-black  font-medium hover:text-blue-600 text-md transition duration-150 ease-in-out" href="/about" data-mdb-ripple="true" data-mdb-ripple-color="light">About</a>
                </li>
            </ul>
            @else
            <a href="/home"><h1 class="flex items-center font-extrabold text-2xl mr-8">MEGA</h1></a>
            @endauth

            <div>
                @auth
                <a class="mr-12 text-md font-medium hover:underline hover:text-blue-600" href="/signout">{{__('nav.sign_out')}}</a>
                @else
                <a class="mr-12 text-md font-medium hover:underline hover:text-blue-600" href="/signin">{{__('nav.sign_in')}}</a>
                @endauth
            

            <a href="/lang/en">
                <button class="my-2 tracking-widest text-lg bg-blue-600 p-1 rounded-full text-white font-bold shadow-md hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out">EN</button>  
            </a>
            <a href="/lang/km">
                <button class="tracking-widest text-lg bg-white p-1 rounded-full text-blue-600 font-bold shadow-md hover:bg-gray-50 hover:shadow-lg transition duration-300 ease-in-out">ខម</button>  
            </a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->





    <!-- Jumbotron -->
    <!-- <div class="text-center bg-gray-50 text-gray-800 py-20 px-6">
        <h1 class="text-5xl font-bold mt-0 mb-6">Heading</h1>
        <h3 class="text-3xl font-bold mb-8">Subeading</h3>
        <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Get started</a>
    </div> -->
    <!-- Jumbotron -->
    </header>


    <div style="height:auto;" class="">
        @yield('content')
    </div>



    <footer class="bg-white text-center lg:text-left">
    <div class="container px-32 py-6 text-gray-700">
        <div class="grid lg:grid-cols-2 gap-4">
        <div class="mb-6 md:mb-0">
            <h5 class="font-medium mb-2 uppercase">Footer text</h5>

            <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
            </p>
        </div>

        <div class="mb-6 md:mb-0">
            <h5 class="font-medium mb-2 uppercase">Footer text</h5>

            <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
            </p>
        </div>
        </div>
    </div>

    <div class="text-center text-gray-700 p-4" style="background-color: white;">
        Made by
        <a class="text-gray-800" href="https://tailwind-elements.com/">@Chun</a>
    </div>
    </footer>
        
</body>
</html>