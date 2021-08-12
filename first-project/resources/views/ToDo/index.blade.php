@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
             <form action="{{ route('ToDo') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="TodoDate" class="sr-only">Date</label>
                        <input type="date" name="TodoDate" id="body" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('ToDoDate') border-red-500 @enderror">

                        @error('TodoDate')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="TodoTitle" class="sr-only" for="inline-full-name">TodoTitle</label>
                        <input type="text" name="TodoTitle" id="TodoTitle" placeholder="Title" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('TodoTitle') border-red-500 @enderror" value="{{ old('TodoTitle') }}">
                        
                    @error('TodoTitle')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                      @enderror

                    </div>

                    <div class="mb-4">
                        <label for="TodoDescription" class="sr-only">Description</label>
                        <textarea name="TodoDescription" id="TodoDescription" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('TodoDescription') border-red-500 @enderror" placeholder="Description"></textarea>

                        @error('TodoDescription')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="reset" class="bg-gray-500 text-blue px-6 py-2 rounded font-medium">clear</button>
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded font-medium">Next</button>
                    </div>
                </form>
        </div>    
    </div>

@endsection


