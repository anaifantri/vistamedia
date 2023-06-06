<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/style.css">
    <title>VISTA MEDIA | {{ $title }}</title>
</head>

<body>
    <div class="container-xl mx-auto position-relative flex h-screen bg-fixed bg-center bg-auto"
        style="background-image: url('https://source.unsplash.com/1366x768?nature')">
        <div class="flex w-full justify-end absolute p-5">
            <a href="/login"
                class="flex items-center justify-center p-2 w-max h-8 bg-yellow-500 rounded-lg text-white hover:bg-yellow-600 drop-shadow-md">
                <svg class="fill-current w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M8 10v-5l8 7-8 7v-5h-8v-4h8zm2-8v2h12v16h-12v2h14v-20h-14z" />
                </svg>
                <span class="ml-2">Login</span>
            </a>
        </div>
        <div class="p-10 position-absolute m-auto">
            <div
                class="border border-transparent flex position-relative mb-5 mx-auto border-white border-opacity-50 rounded-full shadow shadow-white bg-white bg-opacity-20 w-32 h-32 md:w-40 lg:w-40 md:h-40 lg:h-40">
                <img class="w-24 md:w-32 lg:w-32 m-auto position-absolute" src="/img/Logo-Vista-Media.png"
                    alt="">
            </div>
            <h1
                class="drop-shadow-lg shadow-black animate-pulse text-3xl md:text-5xl lg:text-5xl text-center text-white font-sans font-semibold tracking-wider">
                Comming Soon</h1>
            <p class="drop-shadow-md shadow-black text-white text-center position-absolute mt-3">our
                website is
                currently under construction</p>
        </div>
    </div>
</body>

</html>
