@extends('admin.adminBase')

@section('content')
    <div class="flex bg-gradient-to-r from-indigo-300 to-pink-300">
        @include('admin.side')
        <div class="w-5/6  px-5">
            <div class="flex justify-between mt-3">
                <h2 class="text-2xl font-bold">Manage Course</h2>
                <a href=""class="px-3 py-2 bg-gradient-to-r from-green-500 to-blue-600 hover:from-pink-600 hover:to-yellow-600 rounded-full font-semibold ">Add New Course</a>
            </div>
            <table class="border-separate border border-slate-800">
                
                  <tr>
                    <th class="border border-slate-500 ">Id</th>
                    <th class="border border-slate-500">Name</th>
                    <th class="border border-slate-500">Contact</th>
                    <th class="border border-slate-500">Duration</th>
                    <th class="border border-slate-500">Fees</th>
                  </tr>
                  <tr>
                    <td class="border border-slate-500">1</td>
                    <td class="border border-slate-500">Dhananjay kumar</td>
                    <td class="border border-slate-500">9608715796</td>
                    <td class="border border-slate-500">5000</td>
                    <td class="border border-slate-500">700</td>
                  </tr>  
                  <tr>
                    <td class="border border-slate-500">2</td>
                    <td class="border border-slate-500">Dhananjay kumar</td>
                    <td class="border border-slate-500">9608715796</td>
                    <td class="border border-slate-500">5000</td>
                    <td class="border border-slate-500">700</td>
                  </tr>  
                  <tr>
                    <td class="border border-slate-500">3</td>
                    <td class="border border-slate-500">Dhananjay kumar</td>
                    <td class="border border-slate-500">9608715796</td>
                    <td class="border border-slate-500">5000</td>
                    <td class="border border-slate-500">700</td>
                  </tr>  
            </table>
        </div>
    </div>
@endsection