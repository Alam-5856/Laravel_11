@extends('products.layout')

@section('title', $product->name)
@section('heading', $product->name)

@section('header_action')
    <div class="actions">
        <a class="button" href="{{ route('products.edit', $product) }}">Edit</a>
        <a class="button secondary" href="{{ route('products.index') }}">Back</a>
    </div>
@endsection

@section('content')
    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $product->description ?: 'No description' }}</p>
@endsection
