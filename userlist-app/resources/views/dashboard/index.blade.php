
<!-- @section('content')
    <h1>Welcome to Dashboard!</h1>
@endsection -->




<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color:  #f1f1f1;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            
        }
        nav a {
            color: blue;
            margin-right: 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        /* footer {
            background-color: #f1f1f1;
            padding: 15px;
            
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #ccc;
        } */

        footer {
            background-color: #f1f1f1;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #ccc;

            display: flex;                
            justify-content: space-between; 
            align-items: center;        
        }
        .nav-left a {
            color: blue;
            margin-right: 15px;
            text-decoration: none;
        }

        .nav-left a:hover {
        text-decoration: underline;
        }

        .user-info {
            display: flex;
            align-items: center;
            color: gray;
            font-size: 14px;
        }

        .user-icon {
            margin-right: 5px;
        }
                
        /* Dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown button */
        .dropbtn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: blue;
        }

        /* Dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show dropdown on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<header>
     <div class="nav-left">
         <a href="#">About</a>
         <div class="dropdown">
            <button class="dropbtn">Function</button>
            <div class="dropdown-content">
                <a href="{{ route('employees.index') }}">Employee List</a>
                <!-- Bạn có thể thêm nhiều mục khác nếu muốn -->
            </div>
        </div>

        
    </div>
  
     <div class="nav-right">
        <div class="user-info">
            <span class="user-icon">👤</span>
            <span class="user-name">{{ Auth::guard('employee')->user()->name }}</span>
        </div>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none;border:none;color:blue;cursor:pointer;">Logout</button>
        </form>
    </div>
</header>

<main>
    <h1>Welcome to Dashboard!</h1>
  
</main>

<footer>
    <div class="nav-left">
         &copy; {{ date('Y') }} My Laravel App. All rights reserved 
    </div>
    <div class="nav-right">
        Author: DUC CUONG BUI &nbsp;&nbsp;&nbsp;
  </div>
</footer>

</body>
</html>
