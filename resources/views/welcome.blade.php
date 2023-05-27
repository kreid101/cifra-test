<!doctype html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<div class="rf grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4 p-8  ">
    @foreach($items as $i)
        <x-item-cart :item="$i"></x-item-cart>
    @endforeach
</div>
</body>
