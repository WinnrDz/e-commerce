<div class="p-6">
    @if (session()->has('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
    @endif


    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            Categories
        </h1>

    </div>

    {{-- Category management --}}

    @if ($editing)
        <form wire:submit="update" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Update Category
                </h2>

                <input
                    type="text"
                    wire:model="name"
                    placeholder="New Category name"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full"
                >
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                

                <div class="flex justify-end gap-3 mt-4">

                    <button
                        wire:click="$set('editing', false)"
                        class="border border-gray-200 px-5 py-2 rounded-full cursor-pointer"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="bg-black text-white px-5 py-2 rounded-full cursor-pointer"
                    >
                        Save
                    </button>

                </div>

        </form>

    @else
    <div>

        {{-- Add Category Form --}}
            <form wire:submit="store" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Add Category
                </h2>

                <input
                    type="text"
                    wire:model="name"
                    placeholder="Category name"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full"
                >
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                

                <div class="flex justify-end gap-3 mt-4">

                    <button
                        {{--wire:click="$set('showForm', false)"--}}
                        class="border border-gray-200 px-5 py-2 rounded-full cursor-pointer"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="bg-black text-white px-5 py-2 rounded-full cursor-pointer"
                    >
                        Save
                    </button>

                </div>

            </form>
        {{-- Categories Table --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

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
                                {{ $category->products->count() }}
                            </td>

                            <td class="p-4">

                                <button wire:click="edit({{ $category->id }})" class="text-sm cursor-pointer">
                                    Edit
                                </button>

                                <button wire:click="delete({{ $category }}) " wire:confirm="Are you sure you want to delete this category?" class="text-sm text-red-500 ml-3 cursor-pointer">
                                    Delete
                                </button>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
    @endif
</div>