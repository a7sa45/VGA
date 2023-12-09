@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your Tutorials') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                    @if (Auth::user()->role == "teacher")
                        <a class="btn bg-info btn-bd-primary p-3 py-1 m-3" type="button" style="float: right" href="tutorials/create">
                            <h3><i class="fa-solid fa-plus"></i></h3>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
