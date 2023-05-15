<x-landing-layout>
  
  <div class="pointer-events-auto mx-auto mt-4">
    <form action="/addtocarts" method="post">
      @csrf
      <div class="flex h-full flex-col overflow-y-auto ">
        <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
          <div class="flex items-start justify-between">
            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
            <div class="ml-3 flex h-7 items-center">
      
            </div>
          </div>
          <div class="mt-8">
            <div class="flow-root">
              <ul role="list" class="-my-6 divide-y divide-gray-200">
                @foreach ($cars as $item)
                <li class="flex py-6">
                  <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                    <img src="{{$item['image']}}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                  </div>
                  <div class="ml-4 flex flex-1 flex-col">
                    <div>
                      <div class="flex justify-between text-base font-medium text-gray-900">
                        <h3>
                          <a href="#">{{ $item['name'] }}</a>
                        </h3>
                        <p class="ml-4">${{$item['price']}}</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">{{ $item['category'] }}</p>
                    </div>
                    <div class="flex flex-1 items-end justify-between text-sm">
                      <p class="text-gray-500">
                        <input type="hidden" name="ids[]" value="{{$item['id']}}" />
                        <input type="number" name="perdays[]" value="{{$item['perdays'] ?? '1'}}" min="1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="1">
                      </p>
                      <div class="flex">
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
          <div class="flex justify-between text-base font-medium text-gray-900">
            <p>Total</p>
            <p>${{ $totalPrice }}</p>
          </div>
          <div class="mt-6">
            <button href="/checkout" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</button>
          </div>
      
        </div>
      </div>
    </form>
  </div>
</x-landing-layout>