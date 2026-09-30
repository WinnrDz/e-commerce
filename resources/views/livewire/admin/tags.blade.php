<div class="p-6">
    @if (session()->has('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
    @endif


    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            Tags
        </h1>

    </div>

    {{-- Tag management --}}

    @if ($editing)
        <form wire:submit="update" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Update Tag
                </h2>

                <input
                    type="text"
                    wire:model="name"
                    placeholder="New Tag name"
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

        {{-- Add Tag Form --}}
            <form wire:submit="store" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Add Tag
                </h2>

                <div class="flex flex-row gap-5 items-start">
                    <input
                        type="text"
                        wire:model="name"
                        placeholder="Tag name"
                        class="border border-gray-200 rounded-xl px-4 py-3 w-1/2"
                    >

                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <div x-data="{ open: false }" class="flex flex-col gap-4 w-1/2">

                        <button type="button" @click="open = !open" class="flex justify-between gap-3 border border-gray-200 rounded-xl px-4 py-3 w-full cursor-pointer">
                            <div class="font-satoshim">Select Products</div>
                            <i data-lucide="chevron-down"></i>
                        </button>

                        <div x-show="open" id="product-list" class="border border-gray-200 rounded-xl overflow-hidden ">

                            <label class="flex items-center gap-4 px-5 py-4 cursor-pointer hover:bg-gray-50">
                                <input
                                    type="checkbox"
                                    class="appearance-none w-5 h-5 border border-gray-300 cursor-pointer
                                    checked:bg-black checked:border-black
                                    checked:before:content-['✓']
                                    checked:before:text-white
                                    checked:before:flex
                                    checked:before:items-center
                                    checked:before:justify-center
                                    checked:before:text-xs
                                    checked:before:font-bold"
                                >
                                <span>Example Product</span>
                            </label>

                            <label class="flex items-center gap-4 px-5 py-4 cursor-pointer hover:bg-gray-50">
                                <input
                                    type="checkbox"
                                    class="appearance-none w-5 h-5 border border-gray-300 cursor-pointer
                                    checked:bg-black checked:border-black
                                    checked:before:content-['✓']
                                    checked:before:text-white
                                    checked:before:flex
                                    checked:before:items-center
                                    checked:before:justify-center
                                    checked:before:text-xs
                                    checked:before:font-bold"
                                >
                                <span>Example Product</span>
                            </label>

                            <label class="flex items-center gap-4 px-5 py-4 cursor-pointer hover:bg-gray-50">
                                <input
                                    type="checkbox"
                                    class="appearance-none w-5 h-5 border border-gray-300 cursor-pointer
                                    checked:bg-black checked:border-black
                                    checked:before:content-['✓']
                                    checked:before:text-white
                                    checked:before:flex
                                    checked:before:items-center
                                    checked:before:justify-center
                                    checked:before:text-xs
                                    checked:before:font-bold"
                                >
                                <span>Example Product</span>
                            </label>

                        </div>
                    </div>
                </div>

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
        {{-- Tags Table --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-gray-200 text-left">

                        <th class="p-4">
                            Name
                        </th>

                        <th class="p-4">
                            Actions
                        </th>

                    </tr>
                </thead>


                <tbody>

                    @foreach($tags as $tag)

                        <tr class="border-b border-gray-100">

                            <td class="p-4">
                                {{ $tag->name }}
                            </td>

                            <td class="p-4">

                                <button wire:click="edit({{ $tag->id }})" class="text-sm cursor-pointer">
                                    Edit
                                </button>

                                <button wire:click="delete({{ $tag }}) " wire:confirm="Are you sure you want to delete this tag?" class="text-sm text-red-500 ml-3 cursor-pointer">
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