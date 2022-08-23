@extends('admin.adminBase')

@section('content')
    <div class="flex">
        @include('admin.side')
        <div class="w-5/6 ">
            <form action="{{route("course.update",$course)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="grid grid-cols-3 gap-4 px-32 py-5">
                    <div class="flex mb-3 flex-col">
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$course->title}}" class="border border-gray-400 py-2 px-1 rounded">
                        @error('title')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Duration</label>
                        <input type="text" name="duration" value="{{$course->duration}}" class="border  border-gray-400 py-2 px-1 rounded">
                        @error('duration')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Price</label>
                        <input type="number" name="price" value="{{$course->price}}" class="border border-gray-400 py-2 px-1 rounded">
                        @error('price')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Discount_price</label>
                        <input type="number" name="discount_price" value="{{$course->discount_price}}" class="border border-gray-400 py-2 px-1 rounded">
                        @error('discount_price')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col col-span-2">
                        <label for="">Image</label>
                        <input type="file" name="image" value="{{$course->image}}" class="border border-gray-400 py-2 px-1 rounded">
                        @error('image')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col col-span-3">
                        <label for="">Description</label>
                        <textarea name="description" cols="30" rows="10" class="border border-gray-400 py-2 px-1 rounded"> {{$course->description}}</textarea>
                        @error('description')
                            <p class="text-sm bg-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex mb-3 flex-col">
                        <input type="submit" class=" bg-green-800 hover:bg-gray-900 text-white px-3 py-2 text-xl rounded-xl">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection