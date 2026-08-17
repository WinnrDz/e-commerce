<div>
            {{-- Header of variants--}}
    <div class="flex items-center justify-between mb-8 mt-8">

        <div>
            <h1 class="text-3xl font-bold">
                Variants
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your variants
            </p>
        </div>

    </div>

    {{-- Variants --}}
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr class="border-b border-gray-200 text-left text-sm text-gray-500">

                    <th class="p-5">
                        Product
                    </th>

                    <th class="p-5">
                        Color
                    </th>

                    <th class="p-5">
                        Size
                    </th>

                    <th class="p-5">
                        Price
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
                        50
                    </td>


                    <td class="p-5">

                        <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full text-xs">
                            Active
                        </span>

                    </td>


                    <td class="p-5">

                        <div class="flex gap-2">

                            <button class="px-3 py-2 text-sm">
                                Edit
                            </button>

                            <button wire:click="delete({{ $product }})" class="px-3 py-2 text-sm text-red-500 cursor-pointer">
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

<form wire:submit="create" class="bg-white mt-8 border border-gray-200 rounded-2xl p-6">

    <h2 class="text-2xl font-bold mb-6">Add Variant</h2>

    <select
                        wire:model="product_id"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black mb-4"
                    >
                        <option disabled selected>Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

    <input
        wire:model="price"
        type="number"
        placeholder="Price"
        class="w-full border border-gray-200 rounded-xl px-4 py-3 mb-4"
    >

    <input
        wire:model="stock"
        type="number"
        placeholder="Stock"
        class="w-full border border-gray-200 rounded-xl px-4 py-3"
    >

    <div class="flex justify-end mt-6">
        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full"
        >
            Save Variant
        </button>
    </div>

</form>


<form wire:submit="createColor" class="bg-white mt-8 border border-gray-200 rounded-2xl p-6">

    <h2 class="text-2xl font-bold mb-6">Add Color</h2>

    <input
        wire:model="color_name"
        placeholder="Color name"
        class="w-full border border-gray-200 rounded-xl px-4 py-3 mb-4"
    >

    <input
        wire:model="hex_code"
        placeholder="Hex code"
        class="w-full border border-gray-200 rounded-xl px-4 py-3"
    >

    <div class="flex justify-end mt-6">
        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full"
        >
            Add Color
        </button>
    </div>


</form>


<form wire:submit="create" class="bg-white mt-8 border border-gray-200 rounded-2xl p-6">

    <h2 class="text-2xl font-bold mb-6">Add Size</h2>

    <input
        wire:model="size"
        placeholder="Size"
        class="w-full border border-gray-200 rounded-xl px-4 py-3 mb-4"
    >

    <div class="flex justify-end mt-6">
        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full"
        >
            Add Size
        </button>
    </div>

</form>
</div>
