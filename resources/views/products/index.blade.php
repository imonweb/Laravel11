<x-layout> 

<h1>Products</h1>

<a href="{{ route('products.create') }}">New product</a>

@foreach ($products as $product)

    <h2><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>
    <p>{{ htmlspecialchars( $product->description ) }}</p>
    <p>{{ htmlspecialchars( $product->size ) }}</p>

@endforeach

</x-layout>
