<div class="p-6">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-2xl font-bold">
                Categories
            </h1>

            <p class="text-gray-500">
                Manage your product categories
            </p>
        </div>

        <button
            wire:click="$set('showForm', true)"
            class="bg-black text-white px-5 py-3 rounded-full"
        >
            + Add Category
        </button>

    </div>


    {{-- Add Category Form --}}

        <form wire:submit="create" class="border border-gray-200 rounded-2xl p-6 mb-6">

            <h2 class="text-lg font-semibold mb-4">
                Add Category
            </h2>

            <input
                type="text"
                wire:model="name"
                placeholder="Category name"
                class="border border-gray-200 rounded-xl px-4 py-3 w-full"
            >

            <div class="flex justify-end gap-3 mt-4">

                <button
                    wire:click="$set('showForm', false)"
                    class="border border-gray-200 px-5 py-2 rounded-full"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="bg-black text-white px-5 py-2 rounded-full"
                >
                    Save
                </button>

            </div>

        </form>

    


    {{-- Categories Table --}}
    <div class="border border-gray-200 rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr class="border-b border-gray-200 text-left">

                    <th class="p-4">
                        Name
                    </th>

                    <th class="p-4">
                        Products
                    </th>

                    <th class="p-4">
                        Actions
                    </th>

                </tr>
            </thead>


            <tbody>

                @foreach($categories as $category)

                    <tr class="border-b border-gray-100">

                        <td class="p-4">
                            {{ $category->name }}
                        </td>

                        <td class="p-4">
                            {{ $category->products_count }}
                        </td>

                        <td class="p-4">

                            <button class="text-sm">
                                Edit
                            </button>

                            <button class="text-sm text-red-500 ml-3">
                                Delete
                            </button>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>