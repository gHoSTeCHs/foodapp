<div class="container mt-5">
    <!-- Horizontal Scrollable Category Tabs -->
    <div class="flex overflow-x-auto space-x-4 pb-4">
        @foreach($categories as $category => $products)
            <button
                wire:click="selectCategory('{{ $category }}')"
                class="whitespace-nowrap px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg shadow text-gray-700 font-bold {{ $selectedCategory == $category ? 'bg-gray-300' : '' }}">
                {{ $category }}
            </button>
        @endforeach
    </div>

    <!-- Product Grid or List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        @foreach($foodProducts as $product)
            <a href="/{{$product->title}}">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-700">{{ $product->title }}</h3>
                    <!-- Add additional product details here -->
                </div>
            </a>

        @endforeach
    </div>
</div>
