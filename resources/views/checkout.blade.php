<x-landing-layout>
    <div x-data="checkout()" class="max-w-7xl rounded-lg p-4 mt-4 mx-auto">
        <h1>Checkout</h1>
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 shadow-md rounded-lg p-4">
                <form method="post" action="/checkout">
                    @csrf
                    <div>
                        <label
                            for="name"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Username <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                x-model="name"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('name') }}"
                            />
                        </div>
                        @if ($errors->has('name'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Email <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="email"
                                id="email"
                                x-model="email"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('username') }}"
                            />
                        </div>
                        @if ($errors->has('email'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="phone"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Phone <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                x-model="phone"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('phone') }}"
                            />
                        </div>
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="address1"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Address 1
                            <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="address1"
                                id="address1"
                                x-model="address1"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('username') }}"
                            />
                        </div>
                        @if ($errors->has('address1'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('address1') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="address2"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Address 2</label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="address2"
                                id="address2"
                                x-model="address2"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('address2') }}"
                            />
                        </div>
                        @if ($errors->has('address2'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('address2') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="price"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >City <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="city"
                                id="city"
                                x-model="city"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('city') }}"
                            />
                        </div>
                        @if ($errors->has('city'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="state"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >State <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="state"
                                id="state"
                                x-model="state"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('state') }}"
                            />
                        </div>
                        @if ($errors->has('state'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('state') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <label
                            for="postal_code"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >postal code
                            <span class="text-red-500">*</span></label
                        >
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input
                                type="text"
                                name="postal_code"
                                id="postal_code"
                                x-model="postal_code"
                                class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('username') }}"
                            />
                        </div>
                        @if ($errors->has('postal_code'))
                        <div class="alert alert-danger text-red-500 text-base">
                            {{ $errors->first('postal_code') }}
                        </div>
                        @endif
                    </div>
                    <div class="flex justify-end mt-4">
                        <button
                            type="button"
                            class="btn btn-blue btn-blue:hover"
                            @click="onSubmit"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-span-1">
                <div class="shadow-md rounded-lg p-4 space-y-3">
                    @foreach($cars as $car)
                    <div class="flex w-full flex-nowrap">
                        <div class="w-1/3">
                            <img src="{{ $car['image'] }}" alt="Images" />
                        </div>
                        <div class="pl-3 w-2/3 flex flex-col">
                            <h1 class="text-sm">{{ $car["name"] }}</h1>
                            <div>
                                <span class="text-gray-500">
                                    {{ $car["category"] }}</span
                                >
                            </div>
                            <div class="flex justify-between">
                                <span>Perday : {{ $car["perday"] }}</span>
                                <span
                                    >$
                                    {{ (int)$car['price'] * (int)$car['perday'] }}</span
                                >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div
                        class="flex justify-between border-t border-gray-300 p-3"
                    >
                        <h1 class="text-sm">Total</h1>
                        <span>$ {{ $total }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="relative z-10"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
            x-show="isOpen"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            ></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div
                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                >
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                    >
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left"
                                >
                                    <h3
                                        class="text-base font-semibold leading-6 text-gray-900"
                                        id="modal-title"
                                    >
                                        Confirmation
                                    </h3>
                                    <div class="mt-2">
                                        <template x-if="isFetch">
                                            loading...
                                        </template>
                                        <template x-if="!isFetch">
                                            <p class="text-sm text-gray-500">
                                                your total price is
                                                <span class="font-semibold"
                                                    >$</span
                                                >
                                                <span
                                                    class="font-semibold"
                                                    x-text="total"
                                                ></span>
                                            </p>
                                            <template x-if="count == 0">
                                                <p>
                                                    $200 will be applied to new
                                                    user
                                                </p>
                                            </template>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6"
                        >
                            <form method="post" action="/checkout">
                                @csrf
                                <input
                                    type="hidden"
                                    x-model="name"
                                    name="name"
                                />
                                <input
                                    type="hidden"
                                    x-model="email"
                                    name="email"
                                />
                                <input
                                    type="hidden"
                                    x-model="phone"
                                    name="phone"
                                />
                                <input
                                    type="hidden"
                                    x-model="address1"
                                    name="address1"
                                />
                                <input
                                    type="hidden"
                                    x-model="address2"
                                    name="address2"
                                />
                                <input
                                    type="hidden"
                                    x-model="city"
                                    name="city"
                                />
                                <input
                                    type="hidden"
                                    x-model="state"
                                    name="state"
                                />
                                <input
                                    type="hidden"
                                    x-model="postal_code"
                                    name="postal_code"
                                />
                                <button
                                    type="submit"
                                    class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto"
                                >
                                    Confirm
                                </button>
                            </form>
                            <button
                                @click="isOpen = false"
                                type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkout() {
            return {
                isOpen: false,
                count: 0,
                email: "",
                name: "",
                phone: "",
                address1: "",
                address2: "",
                city: "",
                state: "",
                postal_code: "",
                isFetch: false,
                total: 0,
                onSubmit: async function () {
                    this.isFetch = true;
                    this.isOpen = true;
                    const response = await fetch(
                        "/check/user?email=" + this.email
                    ).then((r) => r.json());
                    let total = response.total;
                    let count = response.count;
                    console.log(count);
                    if (total) {
                        this.total = parseInt(total);
                        this.count = parseInt(count);
                    }
                    this.isFetch = false;
                },
            };
        }
    </script>
</x-landing-layout>
