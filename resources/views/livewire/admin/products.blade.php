<div class="p-6">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-3xl font-bold">
                Products
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your products
            </p>
        </div>

        <button
            class="bg-black text-white px-5 py-3 rounded-full text-sm font-medium"
        >
            + Add Product
        </button>

    </div>




    {{-- Products --}}
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
                        Price
                    </th>

                    <th class="p-5">
                        Stock
                    </th>

                    <th class="p-5">
                        Status
                    </th>

                    <th class="p-5">
                    </th>

                </tr>
            </thead>


            <tbody>

                {{-- Example product --}}

                <tr class="border-b border-gray-100">

                    <td class="p-5">

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 bg-gray-100 rounded-xl">
                            </div>

                            <div>

                                <p class="font-medium">
                                    T-shirt
                                </p>

                                <p class="text-sm text-gray-400">
                                    #001
                                </p>

                            </div>

                        </div>

                    </td>


                    <td class="p-5 text-sm">
                        T-shirts
                    </td>


                    <td class="p-5 font-medium">
                        $120
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

                            <button class="px-3 py-2 text-sm text-red-500">
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

    {{-- Add Product Form --}}
<div class="mt-8 border border-gray-200 rounded-2xl p-6">

    {{-- Form Header --}}
    <div class="mb-6">
        <h2 class="text-2xl font-bold">
            Add Product
        </h2>

        <p class="text-gray-500 mt-1">
            Create a new product
        </p>
    </div>


    {{-- Main Form --}}
    <div class="grid grid-cols-2 gap-6">

        {{-- Product Information --}}
        <div class="border border-gray-200 rounded-2xl p-5">

            <h3 class="text-lg font-semibold mb-5">
                Product Information
            </h3>


            {{-- Name --}}
            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Name
                </label>

                <input
                    type="text"
                    placeholder="Enter product name"
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
                >

            </div>


            {{-- Category --}}
            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Category
                </label>

                <select
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black"
                >
                    <option>Select category</option>
                </select>

            </div>


            {{-- Description --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    Description
                </label>

                <textarea
                    rows="5"
                    placeholder="Enter product description..."
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 resize-none outline-none focus:border-black"
                ></textarea>

            </div>

        </div>


        {{-- Right Side --}}
        <div class="space-y-6">

            {{-- Image --}}
            <div class="border border-gray-200 rounded-2xl p-5">

                <h3 class="text-lg font-semibold mb-5">
                    Product Image
                </h3>

                <label
                    class="h-48 border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50"
                >

                    <span class="text-2xl">
                        +
                    </span>

                    <span class="mt-2 font-medium">
                        Upload image
                    </span>

                    <span class="text-sm text-gray-400 mt-1">
                        PNG, JPG or WEBP
                    </span>

                    <input
                        type="file"
                        class="hidden"
                    >

                </label>

            </div>


            {{-- Pricing & Inventory --}}
            <div class="border border-gray-200 rounded-2xl p-5">

                <h3 class="text-lg font-semibold mb-5">
                    Pricing & Inventory
                </h3>

                <div class="grid grid-cols-2 gap-4">

                    {{-- Price --}}
                    <div>

                        <label class="block text-sm font-medium mb-2">
                            Price
                        </label>

                        <input
                            type="number"
                            placeholder="$0.00"
                            class="w-full border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
                        >

                    </div>


                    {{-- Stock --}}
                    <div>

                        <label class="block text-sm font-medium mb-2">
                            Stock
                        </label>

                        <input
                            type="number"
                            placeholder="0"
                            class="w-full border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-black"
                        >

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Buttons --}}
    <div class="flex justify-end gap-3 mt-6">

        <button
            type="button"
            class="border border-gray-200 px-6 py-3 rounded-full hover:bg-gray-50"
        >
            Cancel
        </button>

        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800"
        >
            Save Product
        </button>

    </div>

</div>

</div>