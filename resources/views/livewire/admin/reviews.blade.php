<div class="p-6">
    @if (session()->has('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
    @endif


    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            Reviews
        </h1>

    </div>

    {{-- Review management --}}

    @if ($editing)
        <form wire:submit="update" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Update Review
                </h2>

                <textarea
                    type="text"
                    wire:model="review"
                    placeholder="New Review"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full"
                ></textarea>
                @error('review')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <input
                    type="number"
                    wire:model="rating"
                    placeholder="New Rating"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4"
                >
                @error('rating')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <select wire:model="product_id" class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4">
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <select wire:model="user_id" class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
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

        {{-- Add Review Form --}}
            <form wire:submit="create" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Add Review
                </h2>
                <select wire:model="product_id" class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4">
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <select wire:model="user_id" class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <input
                    type="number"
                    wire:model="rating"
                    placeholder="Rating"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mb-4"
                >
                @error('rating')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <textarea
                    type="text"
                    wire:model="review"
                    placeholder="Review"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full"
                ></textarea>
                @error('review')
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
        {{-- Reviews Table --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-gray-200 text-left">

                        <th class="p-4">
                            Review
                        </th>

                        <th class="p-4">
                            Rating
                        </th>

                        <th class="p-4">
                            Product
                        </th>

                        <th class="p-4">
                            User
                        </th>

                        <th class="p-4">
                            Actions
                        </th>

                    </tr>
                </thead>


                <tbody>

                    @foreach($reviews as $review)

                        <tr class="border-b border-gray-100">

                            <td class="p-4">
                                {{ $review->review }}
                            </td>

                            <td class="p-4">
                                {{ $review->rating }}
                            </td>

                            <td class="p-4">
                                {{ $review->product->name }}
                            </td>

                            <td class="p-4">
                                {{ $review->user->name }}
                            </td>

                            <td class="p-4">

                                <button wire:click="edit({{ $review->id }})" class="text-sm cursor-pointer">
                                    Edit
                                </button>

                                <button wire:click="delete({{ $review }}) " wire:confirm="Are you sure you want to delete this review?" class="text-sm text-red-500 ml-3 cursor-pointer">
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