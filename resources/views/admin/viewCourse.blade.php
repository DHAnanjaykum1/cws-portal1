@extends('admin.adminBase')

@section('content')
    <div class="flex">
        @include('admin.side')
        <div class="w-5/6 bg-slate-300">
            <div class="flex ">
                
                <table class="border-collapes w-full border border-black mt-3">
                    <div>
                        <img src="{{asset('course/'.$item->image)}}" alt="" class="w-full h-64 rounded-3xl mt-3 px-3">
                    </div>
                    <tr>
                      <th class="border border-slate-600 ">Id</th>
                      <td class="border border-slate-500 text-center">{{$item->id}}</td>
                    </tr>
                     <tr>
                        <th class="border border-slate-600">Title</th>
                        <td class="border border-slate-500 text-center">{{$item->title}}</td>    
                    </tr> 
                    <tr>
                        <th class="border border-slate-600">Duration</th>
                        <td class="border border-slate-500 text-center">{{$item->duration}}</td>
                    </tr>
                    <tr>
                        <th class="border border-slate-600">Price</th>
                        <td class="border border-slate-500 text-center">{{$item->price}}</td>
                    </tr>
                    <tr>
                        <th class="border border-slate-600">Discount_price</th>
                        <td class="border border-slate-500 text-center">{{$item->discount_price}}</td>
                    </tr>
                    <tr>
                      <th class="border border-slate-600">Description</th>
                      <td class="border border-slate-500 text-center">{{$item->description}}</td>
                    </tr>
              </table>
              
            </div>
            <div class="text-end mt-7 underline-offset-4">
                <a href="{{route("home")}}" class="px-3 py-2 bg-gradient-to-r from-green-500 to-blue-600 hover:from-pink-600 hover:to-yellow-600 rounded-xl font-semibold ">Go To HomePage</a>
              </div>
        </div>
    </div>
@endsection