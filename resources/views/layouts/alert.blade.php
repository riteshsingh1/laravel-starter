{{-- validation error messages --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- success message --}}
@if(Session::has('success'))
<div class="alert alert-success">
    <p>{{ session('success') }}</p>
</div>
@endif

{{-- warning message --}}
@if(Session::has('warning'))
<div class="alert alert-success">
        <p>{{ session('warning') }}</p>
</div>
@endif
