@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=" my-5">
                <div class="p-5 text-center bg-white rounded-3" style="border: 0.5px solid black">
                    <h1 class="text-body-emphasis">All Tutorails here !</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach ($tutorials as $tutorial)
                <div class="col">
                  <div class="card h-100">
                    <div class="card-header">
                        <small class="text-body-secondary">{{ $tutorial->user->name }}</small>
                    </div>
                    <img src="/images/{{ $tutorial->image_path }}" class="" alt="..." style="max-height: 200px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $tutorial->title }}</h5>
                      <p class="card-text"><a href="/tutorials/{{ $tutorial->id }}" class="btn btn-primary my-2">Show</a></p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">{{ $tutorial->created_at->format('D, Y h:i A') }}</small>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
        </div>
    </div>
</div>



@auth
@if (Auth::user()->role == "teacher")
<div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <a class="btn bg-info btn-bd-primary p-3 py-1  d-flex align-items-center" type="button" href="tutorials/create">
        <h3><i class="fa-solid fa-plus"></i></h3>
    </a>
</div>
@endif
@endauth
@endsection
