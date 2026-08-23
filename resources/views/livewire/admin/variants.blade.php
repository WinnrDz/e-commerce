<div>
    
    {{-- =========================================================
        VARIANTS HEADER
    ========================================================== --}}
    <div class="flex items-center justify-between mt-8 mb-6">

        <div>
            <h1 class="text-3xl font-bold">
                Variants
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your variants
            </p>
        </div>

    </div>

    @if (session()->has('variant_created'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('variant_created') }}
                    </div>
    @endif
    @if (session()->has('variant_updated'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('variant_updated') }}
                    </div>
    @endif
    @if ($editingVariants)
        <form
        wire:submit="updateVariant"
        class="bg-white mt-6 border border-gray-200 rounded-2xl p-6">

        <div class="flex items-center justify-between mb-5">

            <h2 class="text-xl font-bold">
                Edit Variant
            </h2>

        </div>


        <div class="flex gap-4">
            
            <select
                wire:model="product_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">Select a product</option>

                @foreach ($products as $product)

                    <option value="{{ $product->id }}">
                        {{ $product->name }}
                    </option>

                @endforeach

            </select>
            @error('product_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror


            <select
                wire:model="color_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">
                    Select Color
                </option>

                @foreach ($colors as $color)

                    <option value="{{ $color->id }}">
                        {{ $color->name }}
                    </option>

                @endforeach

            </select>
             @error('color_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <select
                wire:model="size_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">
                    Select Size
                </option>

                @foreach ($sizes as $size)

                    <option value="{{ $size->id }}">
                        {{ $size->name }}
                    </option>

                @endforeach

            </select>
             @error('size_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input
                wire:model="price"
                type="number"
                placeholder="Price"
                class="w-32 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
            >
             @error('price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <button
                type="submit"
                class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800"
            >
                Save Variant
            </button>

        </div>

    </form>
    @else


    {{-- =========================================================
        VARIANTS TABLE
    ========================================================== --}}
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead>

                <tr class="border-b border-gray-200 text-left text-sm text-gray-500">

                    <th class="px-6 py-4 font-medium">
                        Product
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Color
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Size
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Price
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Actions
                    </th>

                </tr>

            </thead>


            <tbody>

                @foreach ($variants as $variant)

                    <tr class="border-b border-gray-100 last:border-0">

                        {{-- Product --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-4">

                                <div class="w-12 h-12 bg-gray-100 rounded-xl shrink-0">
                                </div>

                                <div>

                                    <p class="font-medium">
                                        {{ $variant->product->name }}
                                    </p>

                                    <p class="text-sm text-gray-400 mt-0.5">
                                        #{{ $variant->product->id }}
                                    </p>

                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-4">

                            <div
                                class="w-8 h-8 rounded-full border border-gray-200"
                                style="background-color: {{ $variant->color->hex_code }}"
                            ></div>

                        </td>


                        {{-- Size --}}
                        <td class="px-6 py-4 text-sm">
                            {{ $variant->size->name  }}
                        </td>


                        {{-- Price --}}
                        <td class="px-6 py-4">

                            <span class="font-medium">
                                {{ $variant->price }}
                            </span>

                        </td>


                        {{-- Actions --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-4">

                                <button wire:click="editVariant({{ $variant->id }})"
                                    class="text-sm cursor-pointer hover:underline"
                                >
                                    Edit
                                </button>

                                <button
                                    wire:click="deleteVariant({{ $variant->id }})" wire:confirm="Are you sure you want to delete this variant?"
                                    class="text-sm text-red-500 cursor-pointer hover:text-red-600"
                                >
                                    Delete
                                </button>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>



    {{-- =========================================================
        ADD VARIANT
    ========================================================== --}}
    
    <form
        wire:submit="createVariant"
        class="bg-white mt-6 border border-gray-200 rounded-2xl p-6">

        <div class="flex items-center justify-between mb-5">

            <h2 class="text-xl font-bold">
                Add Variant
            </h2>

        </div>


        <div class="flex gap-4">
            
            <select
                wire:model="product_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">Select a product</option>

                @foreach ($products as $product)

                    <option value="{{ $product->id }}">
                        {{ $product->name }}
                    </option>

                @endforeach

            </select>
            @error('product_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror


            <select
                wire:model="color_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">
                    Select Color
                </option>

                @foreach ($colors as $color)

                    <option value="{{ $color->id }}">
                        {{ $color->name }}
                    </option>

                @endforeach

            </select>
             @error('color_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <select
                wire:model="size_id"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
            >

                <option value="">
                    Select Size
                </option>

                @foreach ($sizes as $size)

                    <option value="{{ $size->id }}">
                        {{ $size->name }}
                    </option>

                @endforeach

            </select>
             @error('size_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input
                wire:model="price"
                type="number"
                placeholder="Price"
                class="w-32 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
            >
             @error('price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <button
                type="submit"
                class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800"
            >
                Save Variant
            </button>

        </div>

    </form>


    @endif
    {{-- =========================================================
        COLORS HEADER
    ========================================================== --}}

    

      

    <div class="flex items-center justify-between mt-12 mb-6">

        <h1 class="text-3xl font-bold">
            Colors
        </h1>

    </div>

    @if (session()->has('color_created'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('color_created') }}
                    </div>
    @endif
    @if (session()->has('color_updated'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('color_updated') }}
                    </div>
    @endif

    @if($editingColors)
    <form wire:submit="updateColor" class="bg-white mt-6 border border-gray-200 rounded-2xl p-6">

            <div class="flex items-center justify-between mb-5">

                <h2 class="text-xl font-bold">
                    Edit Color
                </h2>

            </div>


            <div class="flex gap-4">

                <input wire:model="color_name" placeholder="Color name"
                    class="flex-1 border border-gray-200 rounded-xl px-4 py-3 h-12 outline-none focus:border-black">


                <input type="color" wire:model="hex_code"
                    class="w-16 h-12 border border-gray-200 rounded-xl p-1 bg-white cursor-pointer">


                <button type="submit"
                    class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800">
                    Update Color
                </button>

            </div>

        </form>
        @else  

    {{-- =========================================================
        COLORS TABLE
    ========================================================== --}}
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead>

                <tr class="border-b border-gray-200 text-left text-sm text-gray-500">

                    <th class="px-6 py-4 font-medium">
                        Name
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Hex Code
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Color
                    </th>

                    <th class="px-6 py-4 font-medium">
                        Actions
                    </th>

                </tr>

            </thead>


            <tbody>

                @foreach($colors as $color)

                    <tr class="border-b border-gray-100 last:border-0">

                        <td class="px-6 py-4 font-medium">
                            {{ $color->name }}
                        </td>


                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $color->hex_code }}
                        </td>


                        <td class="px-6 py-4">

                            <div
                                class="w-8 h-8 rounded-full border border-gray-200"
                                style="background-color: {{ $color->hex_code }}"
                            ></div>

                        </td>


                        <td class="px-6 py-4">

                            <div class="flex items-center gap-4">

                                <button
                                    wire:click="editColor({{ $color->id }})"
                                    class="text-sm cursor-pointer hover:underline"
                                >
                                    Edit
                                </button>

                                <button
                                    wire:click="deleteColor({{ $color }})"
                                    wire:confirm="Are you sure you want to delete this category?"
                                    class="text-sm text-red-500 cursor-pointer hover:text-red-600"
                                >
                                    Delete
                                </button>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>



    {{-- =========================================================
        ADD COLOR
    ========================================================== --}}
    <form
        wire:submit="createColor"
        class="bg-white mt-6 border border-gray-200 rounded-2xl p-6"
    >

        <div class="flex items-center justify-between mb-5">

            <h2 class="text-xl font-bold">
                Add Color
            </h2>

        </div>


        <div class="flex gap-4">

            <input
                wire:model="color_name"
                placeholder="Color name"
                class="flex-1 border border-gray-200 rounded-xl px-4 py-3 h-12 outline-none focus:border-black"
            >
            @error('color_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror


            <input
                type="color"
                wire:model="hex_code"
                class="w-16 h-12 border border-gray-200 rounded-xl p-1 bg-white cursor-pointer"
            >
             @error('hex_code')
                <span class="text-red-500">{{ $message }}</span>
            @enderror


            <button
                type="submit"
                class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800"
            >
                Add Color
            </button>

        </div>

    </form>
    @endif
    {{-- =========================================================
    SIZES
========================================================== --}}
<div class="flex items-center justify-between mt-12 mb-6">

    <h1 class="text-3xl font-bold">
        Sizes
    </h1>

</div>
@if (session()->has('size_created'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('size_created') }}
                    </div>
    @endif
    @if (session()->has('size_updated'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('size_updated') }}
                    </div>
    @endif

@if ($editingSizes)
    <form
    wire:submit="updateSize"
    class="bg-white mt-6 border border-gray-200 rounded-2xl p-6">

    <div class="flex gap-4">

        <input
            wire:model="size_name"
            placeholder="Size"
            class="flex-1 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
        >

        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800"
        >
            Update Size
        </button>

    </div>

</form>
@else



{{-- Sizes table --}}
<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

    <table class="w-full">

        <thead>

            <tr class="border-b border-gray-200 text-left text-sm text-gray-500">

                <th class="px-6 py-4 font-medium">
                    Size
                </th>

                <th class="px-6 py-4 font-medium">
                    Actions
                </th>

            </tr>

        </thead>


        <tbody>

            @foreach($sizes as $size)

                <tr class="border-b border-gray-100 last:border-0">

                    <td class="px-6 py-4 font-medium">
                        {{ $size->name }}
                    </td>


                    <td class="px-6 py-4">

                        <div class="flex items-center gap-4">

                            <button
                                wire:click="editSize({{ $size->id }})"
                                class="text-sm cursor-pointer hover:underline"
                            >
                                Edit
                            </button>

                            <button
                                wire:click="deleteSize({{ $size->id }})"
                                wire:confirm="Are you sure you want to delete this size?"
                                class="text-sm text-red-500 cursor-pointer hover:text-red-600"
                            >
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>


{{-- Add Size --}}
<form
    wire:submit="createSize"
    class="bg-white mt-6 border border-gray-200 rounded-2xl p-6">

    <div class="flex gap-4">

        <input
            wire:model="size_name"
            placeholder="Size"
            class="flex-1 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
        >
        @error('size_name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full whitespace-nowrap cursor-pointer hover:bg-gray-800"
        >
            Add Size
        </button>

    </div>

</form>

@endif