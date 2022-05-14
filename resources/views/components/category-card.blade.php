<tr>
    <td colspan="8">{{ $category->name }}</td>
    <td colspan="1" class="text-end">
        <a href="/category/{{ $category->id }}" class="btn btn-primary">
            <i class="bi bi-pencil-square"></i>
        </a>
    </td>
    <td colspan="1" class="text-end">
        <form method="POST" action="/category/{{ $category->id }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">
                <i class="bi bi-trash-fill"></i>
            </button>
        </form>
        
    </td>
</tr>