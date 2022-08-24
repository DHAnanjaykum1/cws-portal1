@extends('base')

@section('content')
    <div class="bg-gradient-to-l from-indigo-300 to-pink-300 h-96">
        <div class="px-12 py-5 ">
            <div class="bg-white shadow-lg w-1/2 rounded-xl p-5 px-3 mt-12">
            <h1 class="font-bold mb-3 font-sans text-4xl">First Course 100% Free</h1>
            <p class="text-gray-600 font-semibold text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quos iusto incidunt dignissimos placeat rem amet rerum dolorum veniam, beatae in, eveniet illo quaerat voluptatum blanditiis corrupti, consequatur id repellat.</p>
            <div class="flex justify-end">
                <a href="" class=" hover:text-black text-white px-3 py-2 bg-gradient-to-r from-pink-600 to-yellow-600 hover:from-green-500 hover:to-blue-600 rounded-xl font-semibold font-sans text-xl mt-2">Explorer Course</a>
            </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-5">
        <h2 class="text-2xl font-semibold text-green-500 ">Our Courses</h2>
        <p class="text-sm">Lorem ipsum dolor sit amet</p>
    </div>
    <div class="flex gap-5 px-10">
        @foreach ($data as $item)
        
            <a class="w-1/6" href="{{ route('viewcourse',['id' =>$item->id]) }}">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2">
                <img src="{{asset('course/'.$item->image)}}" alt="" class="w-full h-32 rounded-sm">
                <hr>
                <h2>{{$item->title}}</h2>
            </div>
            <div class="bg-teal-800 font-bold text-white w-full p-3 rounded-bl-lg rounded-br-lg">Duration : {{$item->duration}} Month</div>   
            </div>

        </a>
        @endforeach
        
    </div>      
    <div class="px-10 py-5">
        <h2 class="text-2xl font-semibold text-green-500 ">Our Students In Industry</h2>
        <p class="text-sm">Contributing Nation Development</p>
    </div>  
    <div class="flex px-10">
        <div class="w-1/5 p-2">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640427948.jpg" class="rounded h-64 w-full object-cover" alt="">
                    <h1 class="font-bold">Dhananjay kumar</h1>
                    <h2 class="text-xs font-semibold">Softwere Eneineer</h2>
                    <h6 class="text-xs font-sm">HCL india @qune</h6>
                </div>   
            </div>
        </div>
        <div class="w-1/5 p-2">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640427948.jpg" class="rounded h-64 w-full object-cover" alt="">
                    <h1 class="font-bold">Dhananjay kumar</h1>
                    <h2 class="text-xs font-semibold">Softwere Eneineer</h2>
                    <h6 class="text-xs font-sm">HCL india @qune</h6>
                </div>   
            </div>
        </div>
        <div class="w-1/5 p-2">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640427948.jpg" class="rounded h-64 w-full object-cover" alt="">
                    <h1 class="font-bold">Dhananjay kumar</h1>
                    <h2 class="text-xs font-semibold">Softwere Eneineer</h2>
                    <h6 class="text-xs font-sm">HCL india @qune</h6>
                </div>   
            </div>
        </div>
        <div class="w-1/5 p-2">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640427948.jpg" class="rounded h-64 w-full object-cover" alt="">
                    <h1 class="font-bold">Dhananjay kumar</h1>
                    <h2 class="text-xs font-semibold">Softwere Eneineer</h2>
                    <h6 class="text-xs font-sm">HCL india @qune</h6>
                </div>   
            </div>
        </div>
        <div class="w-1/5 p-2">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640427948.jpg" class=" rounded h-64 w-full object-cover" alt="">
                    <h1 class="font-bold">Dhananjay kumar</h1>
                    <h2 class="text-xs font-semibold">Softwere Eneineer</h2>
                    <h6 class="text-xs font-sm">HCL india @qune</h6>
                </div>   
            </div>
        </div>
    </div>
    @include('footer')
@endsection