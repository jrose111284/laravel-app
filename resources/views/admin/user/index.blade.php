@extends('layouts.admin')

@section('content')
    <h1>users</h1>

     <table class="table">
         <thead>
           <tr>
               <th>id</th>
               <th>name</th>
               <th>Email</th>
               <th>created</th>
               <th>updated</th>
           </tr>
         </thead>
         <tbody>

         @if($user)

             @foreach($user as $users)
               <tr>
                 <td>{{$users->id}}</td>
                 <td>{{$users->name}}</td>
                 <td>{{$users->email}}</td>
                   <td>{{$users->created_at->diffForHumans()}}</td>
                   <td>{{$users->updated_at->diffForHumans()}}</td>
               </tr>

             @endforeach
           @endif
         </tbody>
       </table>

@stop