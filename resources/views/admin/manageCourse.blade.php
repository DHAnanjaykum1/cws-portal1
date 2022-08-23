@extends('admin.adminBase')

@section('content')
    <div class="flex bg-gradient-to-r from-indigo-300 to-pink-300">
        @include('admin.side')
        <div class="w-5/6  px-5">
            <div class="flex justify-between mt-3">
                <h2 class="text-2xl font-bold">Manage Course</h2>
                <a href="{{route("course.create")}}"class="px-3 py-2 bg-gradient-to-r from-green-500 to-blue-600 hover:from-pink-600 hover:to-yellow-600 rounded-xl font-semibold ">Add New Course</a>
            </div>
            <table class="border-separate w-full border border-black mt-3">
                
                  <tr>
                    <th class="border border-slate-600 ">Id</th>
                    <th class="border border-slate-600">Title</th>
                    <th class="border border-slate-600">Duration</th>
                    <th class="border border-slate-600">Price</th>
                    <th class="border border-slate-600">Discount_price</th>
                    <th class="border border-slate-600">Description</th>
                    <th class="border border-slate-600">Image</th>
                    <th class="border border-slate-600">Action</th>
                  </tr>
                  @foreach ($course as $item)
                  <tr>
                    <td class="border border-slate-500 text-center">{{$item->id}}</td>
                    <td class="border border-slate-500 text-center">{{$item->title}}</td>
                    <td class="border border-slate-500 text-center">{{$item->duration}}</td>
                    <td class="border border-slate-500 text-center">{{$item->price}}</td>
                    <td class="border border-slate-500 text-center">{{$item->discount_price}}</td>
                    <td class="border border-slate-500 text-center">{{$item->description}}</td>
                    <td class="border border-slate-500 text-center">{{$item->image}}</td>
                    <td class="flex border border-slate-500">
                      <form action="{{route('course.destroy',$item)}}" method="POST" class="flex gap-2 px-2 ">
                        @csrf
                        @method("delete")
                        <button type="submit" class=" bg-red-600 py-0.5 text-sm rounded-xl hover:bg-red-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg></button>
                    </form>
                    <a href="{{ route('course.edit',$item)}}" class="bg-teal-700 px-2 py-0.5 text-xs rounded-xl hover:bg-teal-900"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg></a>
                    <a href="" class="bg-yellow-700 px-2 py-0.5 text-xs rounded-xl hover:bg-yellow-900"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg></a>
                    </td>
                  </tr>
                  @endforeach  
                  
            </table>
        </div>
    </div>
@endsection