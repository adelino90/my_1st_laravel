@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

                        <p>Successfully Added To Do</p>
                        <form action="{{ route('ToDo_List') }}" class="mb-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Show To Do List</button>
                        </form>
        

        </div>    
    </div>

@endsection


