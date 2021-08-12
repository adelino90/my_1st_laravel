@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
             <form action="{{ route('ToDo_Confirmation') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="TodoDate" class="">Date</label>
                        <input type="date" style="display:none;" name="TodoDate" id="body" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{$TodoDate}}">
                        <div class="text-blue-500 mt-2 text-sm">
                            {{ date('F d Y', strtotime($TodoDate))}}
                        </div>

                    </div>

                    <div class="mb-4">
                        <label for="TodoTitle" class="" for="inline-full-name">Title</label>
                        <input type="text" style="display:none;" name="TodoTitle" id="TodoTitle" placeholder="Title" class="bg-gray-100 border-2 w-full p-4 rounded-lg"  value="{{$TodoTitle}}">
                        <div class="text-blue-500 mt-2 text-sm">
                            {{$TodoTitle}}
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="TodoDescription" class="">Description</label>
                        <textarea name="TodoDescription" style="display:none;" id="TodoDescription" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Description">{{$TodoDescription}}</textarea>
                        <div class="text-blue-500 mt-2 text-sm">
                            {{$TodoDescription}}
                        </div>
                    </div>

                    <div>
                        <button onclick="history.go(-1);" value="Back"  class="bg-gray-500 text-blue px-6 py-2 rounded font-medium">Back</button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Create</button>
                    </div>
                </form>
        </div>    
    </div>

@endsection


