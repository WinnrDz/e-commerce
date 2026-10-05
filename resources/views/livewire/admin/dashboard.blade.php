<div>
    <div class="space-y-6">

        {{-- Header --}}
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">
                    Dashboard
                </h1>
                <p class="text-gray-500">
                    Welcome back! Here's what's happening with your store today.
                </p>
            </div>

            <button class="px-5 py-2 bg-black text-white rounded-full">
                Add Product
            </button>
        </div>


        {{-- Stats Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">

            <div class="border border-black/10 bg-white rounded-2xl p-5">
                <p class="text-gray-500">
                    Total Sales
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    ${{ $totalSales }}
                </h2>

                <span class="text-green-500 text-sm">
                    ↑ 23.5% vs last week
                </span>
            </div>


            <div class="border border-black/10 bg-white rounded-2xl p-5">
                <p class="text-gray-500">
                    Orders
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    {{ $ordersCount }}
                </h2>

                <span class="text-green-500 text-sm">
                    ↑ 12.4%
                </span>
            </div>


            <div class="border border-black/10 bg-white rounded-2xl p-5">
                <p class="text-gray-500">
                    Products
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    {{ $productsCount }}
                </h2>
            </div>


            <div class="border border-black/10 bg-white rounded-2xl p-5">
                <p class="text-gray-500">
                    Refunds
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    $230
                </h2>
            </div>

        </div>


        {{-- Products Table --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-gray-200 text-left text-sm text-gray-500">

                        <th class="p-5">
                            Product
                        </th>

                        <th class="p-5">
                            Category
                        </th>

                        <th class="p-5">
                            Tags
                        </th>

                        <th class="p-5">
                        </th>

                    </tr>
                </thead>


                <tbody>

                    {{-- Example product --}}
                    @foreach ($products as $product)
                        <tr class="border-b border-gray-100">

                            <td class="p-5">

                                <div class="flex items-center gap-4">

                                    <div class="w-14 h-14 bg-gray-100 rounded-xl">
                                        @if ($product->images->isNotEmpty())
                                            <img src="{{ Storage::url($product->images->first()->path) }}"
                                                alt="" class="w-full h-full object-cover rounded-lg">
                                        @endif
                                    </div>

                                    <div>

                                        <p class="font-medium">
                                            {{ $product->name }}
                                        </p>

                                        <p class="text-sm text-gray-400">
                                            #{{ $product->id }}
                                        </p>

                                    </div>

                                </div>

                            </td>


                            <td class="p-5 text-sm">
                                {{ $product->category->name }}
                            </td>

                            <td class="p-5">
                                @foreach ($product->tags as $tag)
                                    <span class="bg-black text-white px-3 py-2 rounded-2xl">{{ $tag->name }}</span>
                                @endforeach
                            </td>


                            <td class="p-5">

                                <div class="flex gap-2">

                                    <button wire:click="edit({{ $product->id }})" class="px-3 py-2 text-sm">
                                        Edit
                                    </button>

                                    <button wire:click="delete({{ $product }})"
                                        wire:confirm="Are you sure you want to delete this product?"
                                        class="text-sm text-red-500 ml-3 cursor-pointer"
                                        class="px-3 py-2 text-sm text-red-500 cursor-pointer">
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>



    </div>
</div>
