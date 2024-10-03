<x-applayout title="Home">
    {{$product->title}}
    {{$product->description}}
    {{--  Product Images  --}}
    <div>
        @foreach($product->images as $images)
            <img src="{{$images->path}}" alt="product image"/>
        @endforeach
    </div>
</x-applayout>
