<x-landing-layout>
    <div class="max-w-7xl  rounded-lg p-4 mt-4 mx-auto">
        <h1>Checkout</h1>
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 shadow-md rounded-lg p-4">
                <form method="post" action="/checkout">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Username <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('name') }}">
                    
                        </div>
                        @if ($errors->has('name'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="email" id="email" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('username') }}">
                    
                        </div>
                        @if ($errors->has('email'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="phone" id="phone" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('phone') }}">
                    
                        </div>
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="address1" class="block text-sm font-medium leading-6 text-gray-900">Address 1 <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="address1" id="address1" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('username') }}">
                    
                        </div>
                        @if ($errors->has('address1'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('address1') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="address2" class="block text-sm font-medium leading-6 text-gray-900">Address 2</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="address2" id="address2" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('address2') }}">
                    
                        </div>
                        @if ($errors->has('address2'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('address2') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">City <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('city') }}">
                    
                        </div>
                        @if ($errors->has('city'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('city') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="state" id="state" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('state') }}">
                    
                        </div>
                        @if ($errors->has('state'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('state') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="postal_code" class="block text-sm font-medium leading-6 text-gray-900">postal code <span class="text-red-500">*</span></label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                    
                            <input type="text" name="postal_code" id="username" class="block w-full rounded-md border-0 py-1.5  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"   value="{{ old('username') }}">
                    
                        </div>
                        @if ($errors->has('postal_code'))
                        <div class="alert alert-danger text-red-500 text-base">{{ $errors->first('postal_code') }}</div>
                        @endif
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="btn btn-blue btn-blue:hover">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-span-1">
                <div class="shadow-md rounded-lg p-4 space-y-3 ">
                    @foreach($cars as $car)
                        {{-- {{$car['id']}} --}}
                        <div class="flex w-full flex-nowrap">
                            <div class="w-1/3">
                                <img src="{{ $car['image'] }}" alt="Images">
                            </div>
                            <div class="pl-3 w-2/3 flex flex-col">
                                <h1 class=" text-sm">{{ $car['name'] }}</h1>
                                <div>
                                    <span class="text-gray-500"> {{ $car['category'] }}</span>
                                </div>
                                <div class="flex justify-between ">
                                    <span>Perday : {{ $car['perday'] }}</span>
                                    <span>$ {{ (int)$car['price'] * (int)$car['perday'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-between border-t border-gray-300 p-3">
                        <h1 class="text-sm">Total</h1>
                        <span>$ {{ $total }}</span>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</x-landing-layout>