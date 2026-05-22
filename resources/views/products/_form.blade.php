@csrf

<label for="name">Name</label>
<input
    id="name"
    type="text"
    name="name"
    value="{{ old('name', $product->name ?? '') }}"
    required
>

<label for="description">Description</label>
<textarea id="description" name="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="price">Price</label>
<input
    id="price"
    type="number"
    name="price"
    min="0"
    step="0.01"
    value="{{ old('price', $product->price ?? '') }}"
    required
>

<div class="actions">
    <button type="submit">{{ $buttonText }}</button>
    <a class="button secondary" href="{{ route('products.index') }}">Cancel</a>
</div>
