@extends('products.layout')

@section('title', 'Create Product')
@section('heading', 'Create Product')

@section('header_action')
    <a class="button secondary" href="{{ route('products.index') }}">Back</a>
@endsection

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @include('products._form', ['buttonText' => 'Create Product'])
    </form>
@endsection
