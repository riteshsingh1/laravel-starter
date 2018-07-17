<div class="app-title">
    <div>
    <h1><i class="fa fa-dashboard"></i> {{ $title }}</h1>
    <p>{{ $subtitle ?? '' }}</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">{{ $slot }}</a></li>
    </ul>
  </div>