<div class="relative group">
    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="{{$item->image_path}}"  class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>
    <h3 class="text-gray-700">
        <div class="mt-4 flex justify-between">
        <a href="{{'page/'.$item->id}}">
            <span aria-hidden="true" class="absolute inset-0"></span>
            {{$item->item_name}}
        </a>
            <p class="font-medium text-gray-900">&#8381 {{$item->price}}</p>
        </div>
    </h3>
</div>
