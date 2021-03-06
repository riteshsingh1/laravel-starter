@extends('layouts.app')

@section('content')
{{-- breadcrumb --}}
@component('components.bread',['icon'=>'users'])
@slot('title')
Users
@endslot
@slot('subtitle')
Edit user
@endslot
Users
@endcomponent
{{-- /breadcrumb --}}
{{-- Edit User --}}
<div class="row">
    <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">  
          <h3 class="tile-title">Edit User - #{{ $user->name }}</h3>
            {{-- form for edit the user information --}}
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('users.edit',$user->id) }}">
                @csrf
                <div class="form-group row">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-8">
                    <input class="form-control" type="text" name="name" placeholder="Enter full name" value="{{ old('name', $user->name) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                    <input class="form-control col-md-8" type="email" name="email" placeholder="Enter email address" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" value="Male" type="radio" name="gender" @if($user->gender == 'Male' || old('gender') == 'Male') checked @endif>Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" value="Female" type="radio" name="gender" @if($user->gender == 'Female' || old('gender') == 'Female') checked @endif>Female
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Profile Pic</label>
                    <div class="col-md-8">
                    <input id="avatar" type="file" class="form-control" name="avatar">
                    </div>
                </div>
            
            {{-- /form for editing the user information --}}
        </div>
        <div class="tile-footer">
            <div class="row">
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </div>
        </div>
    </form>
      </div>
    </div>  
</div>
{{-- /Edit User --}}
@endsection