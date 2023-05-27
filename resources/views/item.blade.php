<!doctype html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @livewireStyles
</head>
<body class="grid justify-items-center	 grid-cols-1 p-8">
<div class="grid w-72">
    <img class="h-full  md:h-96" src="{{$item->image_path}}" alt="">
    <div class="flex justify-between">
        <h3 class="text-xl">{{$item->item_name}}</h3>
        <p class="text-xl"> Цена: &#8381 {{$item->price}}</p>
    </div>
</div>
<h3 class="text-xl my-4">Комментарии</h3>
@livewire('comments',['id'=> $item->id])
@livewireScripts
</body>
