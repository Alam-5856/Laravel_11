@extends('products.layout')

@section('title', 'Products')
@section('heading', 'Products List')

@section('header_action')
    <a class="button" href="{{ route('products.create') }}">Add Product</a>
@endsection

@section('content')
    @if ($products->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description ?: 'No description' }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('products.show', $product) }}">View</a>
                                <a class="button" href="{{ route('products.edit', $product) }}">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="danger" type="submit" onclick="return confirm('Delete this product?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    @else
        <p class="muted">No products yet.</p>
    @endif
@endsection
