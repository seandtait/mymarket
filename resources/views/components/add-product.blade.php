
<div class="card">
    <div class="card-body">
        <h3 class="text-center">New Product</h3>
        <form method="POST" action="/product">
            @csrf 
            <div class="col-sm-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
            </div>

            <div class="col-sm-12">
                <x-category-dropdown />
            </div>
            
            <div class="col-sm-12">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
            </div>

            <br class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
        </form>
    </div>
</div>