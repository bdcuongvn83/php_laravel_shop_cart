@extends('layout')

@section('content')
    <h2>Add New Employee</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ $employee->exists ? route('employees.update', $employee->id) : route('employees.store') }}">
    
        @csrf
        @if ($employee->exists)
            @method('PUT')
        @endif
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $employee->exists ? $employee->name : old('name') }}">
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $employee->email  }}">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
