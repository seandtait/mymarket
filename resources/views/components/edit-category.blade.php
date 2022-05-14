@props(['editCategory'])

<div class="card">
    <div class="card-body">
        <h3 class="text-center">Edit Category</h3>
        <form method="POST" action="/category/{{ $editCategory->id }}}">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $editCategory->name }}" required>
            </div>

            <br class="my-4">

            <button class="w-100 btn btn-danger btn-lg" type="submit">Update</button>
        </form>
        <br>
        <a href="/category" class="w-100 btn btn-primary btn-lg">
            Cancel
        </a>
    </div>
</div>

