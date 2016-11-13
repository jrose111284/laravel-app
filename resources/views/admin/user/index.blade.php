@extends('layouts.admin')

@section('content')
    <h1>users</h1>

     <table class="table">
         <thead>
           <tr>
               <th>id</th>
               <th>Photo</th>
               <th>name</th>
               <th>Email</th>
               <th>Role</th>
               <th>Active</th>
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
                   <td><img height="50" src="{{$users->photos ? $users->photos->file : 'no user photo'}}" alt=""></td>
                   <td>{{$users->email}}</td>
                   <td>{{$users->role ? $users->role->name : 'User has no role'}}</td>
                   <td>{{$users->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                   <td>{{$users->created_at->diffForHumans()}}</td>
                   <td>{{$users->updated_at->diffForHumans()}}</td>
               </tr>

             @endforeach
         @endif
         </tbody>
       </table>

@stop