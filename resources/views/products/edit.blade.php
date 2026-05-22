@extends('products.layout')

@section('title', 'Edit Product')
@section('heading', 'Edit Product')

@section('header_action')
    <a class="button secondary" href="{{ route('products.index') }}">Back</a>
@endsection

@section('content')
    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        @include('products._form', ['buttonText' => 'Update Product'])
    </form>
@endsection
