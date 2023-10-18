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
                <div class="col">
                  <div class="card h-100">
                    <div class="card-header">
                        <small class="text-body-secondary">from username</small>
                    </div>
                    <img src="{{ asset('images/tutorial.jpeg') }}" class="" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tutorail title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-header">
                        <small class="text-body-secondary">from username</small>
                    </div>
                    <img src="{{ asset('images/tutorial.jpeg') }}" class="" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tutorail title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-header">
                        <small class="text-body-secondary">from username</small>
                    </div>
                    <img src="{{ asset('images/tutorial.jpeg') }}" class="" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tutorail title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>



@auth
@if (Auth::user()->role == "teacher")
<div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <a class="btn bg-info btn-bd-primary py-2  d-flex align-items-center" type="button" href="tutorials/create">
        <i class="fa-solid fa-plus"></i>
    </a>
</div>
@endif
@endauth
@endsection
