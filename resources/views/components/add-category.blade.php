<div class="card">
    <div class="card-body">
        <h3 class="text-center">New Category</h3>
        <form method="POST" action="/category">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>
            </div> 

            <br class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
        </form>
    </div>
</div>