<x-applayout title="Home">
    <div class="container flex flex-col gap-4">
        <h1 class="font-bold text-[34px] leading-0 max-w-[230px]">
            Delicious food for you
        </h1>
        {{--  Search  --}}
        <div>
            <form action="" method="post" class="flex flex-col gap-2">
                <div class="">
                    <label for="search" class="hidden">Search</label>
                    <input name="search" id="search"/>
                </div>
                <button class="bg-text-error text-white p-2 rounded-md">Search</button>
            </form>
        </div>
    </div>

{{--    <div class="p-4">--}}
{{--        <!-- Horizontal Scrollable Category Tabs -->--}}
{{--        <div class="flex overflow-x-auto space-x-4 pb-4">--}}
{{--            @foreach($products as $category => $product)--}}
{{--                <button--}}
{{--                    class="whitespace-nowrap px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg shadow text-gray-700 font-bold">--}}
{{--                    {{ $category }}--}}
{{--                </button>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--        <!-- Product Grid or List -->--}}
{{--        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">--}}
{{--            @foreach($products as $category => $product)--}}
{{--                @foreach($product as $pro)--}}
{{--                    <div class="bg-white rounded-lg shadow-md p-4">--}}
{{--                        <h3 class="text-lg font-bold text-gray-700">{{ $pro->title }}</h3>--}}
{{--                        <!-- Add additional product details here -->--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

    @livewire('food_display')


</x-applayout>
