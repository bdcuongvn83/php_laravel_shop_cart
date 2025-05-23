@extends('layouts.dashboard')

@section('content')
<style>
    /* Dán đoạn CSS trên vào đây */
.form-container form {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

form div {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 6px 6px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

 form button[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    cursor: pointer;
}

form button[type="submit"]:hover {
    background-color: #45a049;
} 
 .form-container h2{
        text-align: center; /* căn giữa tiêu đề và khối form */
        margin-top: 30px;
    }
</style>


<div class="form-container">

    @if ($employee->exists)
       <h2>Edit Employee</h2>
   @else        
       <h2>Add New Employee</h2>
       @endif
   
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
           <div>
               <label>Password:</label>
               <!-- Form edit -->
               <input type="password" name="password" placeholder="Leave blank to keep current password">
   
           </div>
           <button type="submit">Save</button>
       </form>
</div>
@endsection
