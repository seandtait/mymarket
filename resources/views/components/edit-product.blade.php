@props(['editProduct'])

<div class="card">
    <div class="card-body">
        <h3 class="text-center">Edit Product</h3>
        <form method="POST" action="/product/{{ $editProduct->id }}}">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{ $editProduct->name }}" required>
            </div>
            <div class="col-12">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="{{ $editProduct->quantity }}" required>
            </div>

            <div class="col-sm-12">
                <x-category-dropdown />
            </div>
            
            <br class="my-4">

            <button class="w-100 btn btn-danger btn-lg" type="submit">Update</button>
        </form>
        <br>
        <br>
        <a href="/product" class="w-100 btn btn-primary btn-lg">
            Cancel
        </a>
    </div>
</div>