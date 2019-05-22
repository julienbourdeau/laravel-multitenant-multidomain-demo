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


    <div class="bg-blue-300 border-b border-blue-400 py-4 text-center text-blue-800 text-2xl">
        User website (per tenant)
    </div>

    <div class="w-2/3 m-auto py-4">


        <header class="bg-gray-200 px-4 py-3">
            <a href="/" class="mr-4 text-blue-700 underline hover:text-red-600 hover:no-underline">Home</a>
            <a href="/events" class="text-blue-700 underline hover:text-red-600 hover:no-underline">Events</a>

            <div class="float-right">
                <a href="/event/1" class="text-green-600 hover:no-underline">Event #1</a>
                <a href="/event/3" class="ml-4 text-red-600 hover:no-underline">Event #3</a>
            </div>
        </header>

        @yield('content')

    </div>
</body>
</html>
