@extends('layouts.app')

@section('content')
{{-- breadcrumb --}}
@component('components.bread',['icon'=>'users'])
@slot('title')
Users
@endslot
@slot('subtitle')
Registered users
@endslot
Users
@endcomponent
{{-- /breadcrumb --}}
{{-- list of users --}}
<div class="row">
    <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">List of Users</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
               @foreach($users as $user)   
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                </tr>
               @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
{{-- /list of users --}}
@endsection