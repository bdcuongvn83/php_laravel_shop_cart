<h2>Employee List</h2>
<a href="{{ route('employees.create') }}">+ Add Employee</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    @foreach($employees as $emp)
        <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ $emp->name }}</td>
            <td>{{ $emp->email }}</td>
            <td>
                <a href="{{ route('employees.edit', $emp->id) }}">Edit</a> |
                <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete?')" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
