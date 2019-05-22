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


<div class="bg-yellow-300 border-b border-yellow-400 py-4 text-center text-yellow-800 text-2xl">
    API domain
</div>

<div class="w-2/3 m-auto py-4">

    <h2 class="text-2xl">
        API JSON Response
        <div class="float-right font-mono text-lg text-blue-400">
            <a href="/" class="underline">/</a>
            <a href="/event/1" class="ml-6 underline">/event/1</a>
        </div>
    </h2>

    <div class="h-64 bg-gray-900 text-2xl text-white p-3">
        {{ json_encode($response) }}
    </div>

</div>
</body>
</html>
