@extends('layouts.dashboard')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th.actions-col,
        table td.actions-col {
            width: 150px; /* hoặc điều chỉnh theo nhu cầu: 120px, 130px */
            text-align: center;
        }
    </style>


    <h2>Employee List</h2>
    <a href="{{ route('employees.create') }}">+ Add Employee</a>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <table border="1" style="border-collapse: collapse; width: 100%;">
        <tr><th>Name</th><th>Email</th>
        <th style="width: 100px ; text-align: center ">Actions</th>

    </tr>
        @foreach($employees as $emp)
            <tr>
                
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->email }}</td>
                <td >
                    <a href="{{ route('employees.edit', $emp->id) }}">Edit</a> |
                    <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete?')" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
