<div>
    <label for="category" class="form-label">Category</label>
    <select class="form-select" id="category" name="category" required>
        <option value="">Select...</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ ($category->id == $selectedCategory) ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback">
        Please select a valid Category.
    </div>
</div>