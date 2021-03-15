<form action="{{ route('clientes.destroy', $id) }}" method="post">
@csrf
@method('DELETE')
<input type="submit" name="submit" value="DELETE" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
</form>
