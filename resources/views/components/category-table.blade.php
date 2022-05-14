@props(['categories'])

<h3>Categories</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th colspan="10">Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <x-category-card :category="$category" />
        @endforeach
    </tbody>
</table>