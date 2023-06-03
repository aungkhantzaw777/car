<x-landing-layout>
    <div
        x-data="cart()"
        x-init="fetchCartData()"
        class="pointer-events-auto mx-auto mt-4"
    >
        <div class="flex h-full flex-col overflow-y-auto">
            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                <div class="flex items-start justify-between">
                    <h2
                        class="text-lg font-medium text-gray-900"
                        id="slide-over-title"
                    >
                        Shopping cart
                    </h2>
                    <div class="ml-3 flex h-7 items-center"></div>
                </div>
                <div class="mt-8">
                    <template x-if="isUploading">
                        <div>saving...</div>
                    </template>
                    <!-- <div class="flow-root">
                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                            <template x-for="cart in carts">
                                <li class="flex py-6">
                                    <div
                                        class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200"
                                    >
                                        <img
                                            :src="cart.image"
                                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                            class="h-full w-full object-cover object-center"
                                        />
                                    </div>
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div
                                                class="flex justify-between text-base font-medium text-gray-900"
                                            >
                                                <h3>
                                                    <a
                                                        href="#"
                                                        x-text="cart.name"
                                                    ></a>
                                                </h3>
                                                <p class="ml-4">
                                                    <span>$</span
                                                    ><span
                                                        x-text="cart.perdays * cart.price"
                                                    ></span>
                                                </p>
                                            </div>
                                            <p
                                                class="mt-1 text-sm text-gray-500"
                                                x-text="cart.category"
                                            ></p>
                                        </div>
                                        <div
                                            class="flex flex-1 items-end justify-between text-sm"
                                        >
                                            <div
                                                class="flex items-center space-x-3"
                                            >
                                                <span>Rental Days</span>
                                                <p class="text-gray-500">
                                                    <input
                                                        type="hidden"
                                                        x-bind:disabled="isUploading"
                                                        x-bind:readonly="isUploading"
                                                        x-model="cart.id"
                                                        name="ids[]"
                                                    />

                                                    <input
                                                        type="number"
                                                        name="perdays[]"
                                                        x-model.debounce.500ms="cart.perdays"
                                                        min="1"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                        placeholder="1"
                                                    />
                                                </p>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    type="button"
                                                    @click="removeItem(cart.id)"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500"
                                                >
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </template>
                        </ul>
                    </div> -->

                    <!-- table change -->
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="mt-8 flow-root">
                            <div
                                class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8"
                            >
                                <div
                                    class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8"
                                >
                                    <table
                                        class="min-w-full divide-y divide-gray-300"
                                    >
                                        <thead>
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"
                                                >
                                                    Name
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    Category
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    Rental Days
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    price
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="relative py-3.5 pl-3 pr-4 sm:pr-0"
                                                >
                                                    <span class="sr-only"
                                                        >Delete</span
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <template x-for="cart in carts">
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0 inline-flex items-center space-x-3 flex-col space-y-4"
                                                    >
                                                        <div
                                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200"
                                                        >
                                                            <img
                                                                :src="cart.image"
                                                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                                class="h-full w-full object-cover object-center"
                                                            />
                                                        </div>
                                                        <span
                                                            x-text="cart.name"
                                                            class="text-lg font-bold"
                                                        ></span>
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                        x-text="cart.category"
                                                    ></td>
                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                    >
                                                        <input
                                                            type="number"
                                                            name="perdays[]"
                                                            x-model.debounce.500ms="cart.perdays"
                                                            @change="onChangeQty(cart.id, $event.target.value)"
                                                            min="1"
                                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            placeholder="1"
                                                        />
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                    >
                                                        $
                                                        <span
                                                            x-text="cart.perdays * cart.price"
                                                        ></span>
                                                    </td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0"
                                                    >
                                                        <a
                                                            href="#"
                                                            @click="removeItem(cart.id)"
                                                            class="text-indigo-600 hover:text-indigo-900"
                                                            >Delete<span
                                                                class="sr-only"
                                                                >, Lindsay
                                                                Walton</span
                                                            ></a
                                                        >
                                                    </td>
                                                </tr>
                                            </template>
                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--table-->
                </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                <div
                    class="flex justify-between text-base font-medium text-gray-900"
                >
                    <p>Total</p>
                    <p><span>$</span><span x-text="total"></span></p>
                </div>
                <div class="mt-6 flex justify-end">
                    <a
                        href="/checkout"
                        class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                    >
                        Checkout
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="/" class="text-blue-900 text-lg cursor-pointer">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>

    <script>
        function cart() {
            return {
                carts: [],
                total: 0,
                // isChange: false,
                isUploading: false,
                removeItem: async function (id) {
                    this.isUploading = true;
                    const response = await fetch("/removeItem/" + id)
                        .then((r) => r.json())
                        .catch((e) => {
                            return null;
                        });
                    if (response) {
                        let newCarts = this.carts.filter(
                            (cart) => cart.id !== id
                        );
                        // calculate total
                        let total = newCarts.reduce(
                            (accumulator, item) =>
                                accumulator +
                                parseInt(item.price) * parseInt(item.perdays),
                            0
                        );
                        this.total = total;
                        this.carts = newCarts;

                        window.Alpine.store("totalCount").update(
                            this.carts.length
                        );
                        this.isUploading = false;
                    }
                    this.isUploading = true;
                },
                onChangeQty: async function qty(id, perdays) {
                    // this.isChange = true;
                    // alert("change");
                    console.log("id", id);
                    console.log("qty", perdays);
                    this.isUploading = true;

                    // console.log(newValue);

                    const response = await fetch(
                        "/cart/update?perdays=" + perdays + "&id=" + id
                    )
                        .then((r) => r.json())
                        .catch((e) => {
                            return null;
                        });
                    if (!response) {
                        return;
                    }

                    let total = this.carts.reduce(
                        (accumulator, item) =>
                            accumulator +
                            parseInt(item.price) * parseInt(item.perdays),
                        0
                    );
                    this.total = total;

                    this.isUploading = false;
                },
                fetchCartData: async function () {
                    const carts = await fetch("/cart/api")
                        .then((r) => r.json())
                        .catch((e) => {
                            return null;
                        });
                    if (carts) {
                        this.carts = carts.map((cart) => {
                            return { ...cart, perdays: parseInt(cart.perdays) };
                        });
                        let total = carts.reduce(
                            (accumulator, item) =>
                                accumulator +
                                parseInt(item.price) * parseInt(item.perdays),
                            0
                        );
                        this.total = total;
                    }
                    // this.$watch("carts", async (newValue) => {
                    //     console.log(newValue[0].perdays);
                    //     this.isUploading = true;

                    //     console.log(newValue);

                    //     const response = await fetch(
                    //         "/cart/update?perdays=" +
                    //             newValue[0].perdays +
                    //             "&id=" +
                    //             newValue[0].id
                    //     )
                    //         .then((r) => r.json())
                    //         .catch((e) => {
                    //             return null;
                    //         });
                    //     if (!response) {
                    //         return;
                    //     }

                    //     let total = this.carts.reduce(
                    //         (accumulator, item) =>
                    //             accumulator +
                    //             parseInt(item.price) * parseInt(item.perdays),
                    //         0
                    //     );
                    //     this.total = total;

                    //     this.isUploading = false;
                    // });
                },
            };
        }
    </script>
</x-landing-layout>
