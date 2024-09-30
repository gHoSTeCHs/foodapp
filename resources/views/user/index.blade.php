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

</x-applayout>
