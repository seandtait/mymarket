@props(['product'])

<tr>
    <td colspan="3">{{ $product->name }}</td>
    <td colspan="3">{{ $product->category->name }}</td>
    <td colspan="3">{{ $product->quantity }}</td>
    <td colspan="1" class="text-end">
        <a href="/product/{{ $product->id }}" class="btn btn-primary">
            <i class="bi bi-pencil-square"></i>
        </a>
    </td>
    <form method="POST" action="/product/{{ $product->id }}">
        @csrf
        @method('DELETE')
        <td colspan="1" class="text-end"><button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button></td>
    </form>
</tr>