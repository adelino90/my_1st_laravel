@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

                        <table>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($todos->count())
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ date('F d, Y', strtotime($todo->TodoDate))}}</td>
                                <td>{{$todo->TodoTitle}}</td>
                                <td>{{$todo->TodoDescription}}</td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>There are no posts</td>
                            </tr>
                        @endif
                    
                 
                    
                        </tbody>
                        </table>
        

   
                     <form action="{{ route('ToDo') }}" class="mt-4">
                          <button type="submit" class="bg-blue-500 text-white px-4 py-2  font-medium">Create To Do</button>
                        </form>
            
        </div>               
          
    </div>

@endsection


