@props(['products'])

<h3>Products</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th colspan="3">Name</th>
            <th colspan="3">Category</th>
            <th colspan="3">Quantity</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </tbody>
</table>
