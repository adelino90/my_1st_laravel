<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Ding</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href ="{{ route('home') }}" class="p-3">Home</a>
                </li>
                <li>
                    <a href ="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href ="{{ route('post')}}" class="p-3">Post</a>
                </li>
            </ul>

            <ul class="flex items-center">
                
                @auth
                    <li>
                        <a href ="" class="p-3">{{ auth()->user()->name}}</a>
                    </li>
                    <li>
                        <a href ="{{ route('ToDo_List') }}" class="p-3">To Do List</a>
                    </li>

                    <li>
                        <form action="{{ route('logout')}}" method="post">
                            @csrf
                            <button type ="submit" class="p-3">Logout</button>


                        </form>


                    </li>
                @endauth    
                @guest
                    <li>
                        <a href ="{{ route('login')}}"  class="p-3">Login</a>
                    </li>
                    <li>
                        <a href ="{{ route('register')}}" class="p-3">Register</a>
                    </li>

                @endguest

               
               
          
              


            </ul>

        </nav>
        @yield('content')
    </body>


</html>