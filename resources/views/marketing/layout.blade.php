<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/tailwind.min.css">
    <title>User generated site</title>
</head>
<body class="">

<div class="bg-teal-300 border-b border-teal-400 py-4 text-center text-teal-800 text-3xl">
    Marketing website
</div>

<div class="md:w-2/3 lg:w-1/2 m-auto py-4">

    @php
    $current = request()->route()->getActionMethod()
    @endphp


    <header class="my-6 flex justify-between">

        <div id="logo" class="font-bold text-3xl">
            <span class="text-teal-700">Event</span><span class="text-teal-500">List</span><span class="text-teal-700">.com</span>
        </div>

        <div class="pt-3">
            @foreach (['home', 'features', 'pricing'] as $route)
                <a href="/{{ $route == 'home' ? '' : $route }}" class="border rounded px-3 py-2 mr-4 {{ $current == $route ? 'bg-teal-100 border-teal-700 text-teal-700' : 'bg-gray-200 border-gray-700 text-gray-700 ' }}">
                    {{ ucfirst($route) }}
                </a>
            @endforeach
        </div>

    </header>

    <div class="text-xl">
        @yield('content')
    </div>

</div>
</body>
</html>
