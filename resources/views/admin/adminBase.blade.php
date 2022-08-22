<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-gray-900 py-3 shadow-lg flex justify-between px-10 items-center">
        <h1 class="font-bold font-sans text-3xl text-red-300">Code With Sadiq Portal</h1>
        
        <ul class="flex gap-3">
            <li><a href="" class="font-semibold text-white hover:text-red-200">Home</a></li>
            <li><a href="" class="px-3 py-2 bg-gradient-to-r from-teal-400 to-red-500 hover:from-orange-500 hover:to-emerald-500 rounded-full font-semibold">Logout</a></li>
        </ul>
    </div>
    
    @section('content')
        @show
</body>
</html>