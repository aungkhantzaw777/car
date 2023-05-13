<article class="flex flex-col items-start justify-between">
  <div class="relative w-full">
    <img src="{{$image}}" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <div class="max-w-xl">
    <div class="mt-8 flex items-center gap-x-4 text-xs">
      <time datetime="2020-03-16" class="text-gray-500">{{ $modelYear ?? '' }}</time>
      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $brand ?? '' }}</a>
    </div>
    
    <div class="group relative">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="#">
          <span class="absolute inset-0"></span>
          {{$name ?? ''}}
        </a>
      </h3>
      <div class="flex flex-col">
        <span class="text-sm">Price / Day : {{ $price }} $</span>
        <span class="text-sm">Fuel Type : {{ $fuelType }} </span>
        <span class="text-sm">Seat : {{ $seat ?? '' }} </span>
        <span class="text-sm">Mileage : {{ $mileage ?? '' }} </span>
        <span class="text-sm">Category : {{ $category ?? '' }} </span>
      </div>
      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 mb-4">{{$description ?? ''}}</p>
    </div>
    <form method="post" action="/cart"> 
      @csrf
      <input type="hidden" name="id" value="{{$id}}">
      <input type="hidden" name="name" value="{{$name}}">
      <input type="hidden" name="price" value="{{$seat}}">
      <input type="hidden" name="seat" value="{{$mileage}}">
      <input type="hidden" name="category" value="{{$category}}">
      <input type="hidden" name="image" value="{{$image}}">
      <button type="submit" class="btn btn-blue w-full">
        Add to cart
      </button>
    </form>
    
  </div>
</article>