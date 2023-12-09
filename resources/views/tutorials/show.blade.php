@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $tutorial->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Created on {{ $tutorial->created_at->format('D, Y h:i A') }}</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">From {{ $tutorial->user->name }}</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" style="max-height: 300px; max-width: 300px" src="/images/{{ $tutorial->image_path }}" alt="..."></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{{ $tutorial->description }}</p>
                </section>
                <div class="row">
                    @auth
                        <div class="card m-2 text-bg-dark" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">New Graph</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Create a new graph</h6>
                            
                            <a href="/editors" class="btn btn-light">Create</a>
                            </div>
                        </div>
                    @else
                        <div class="card m-2 text-bg-dark" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">login to create graph</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Create a new graph</h6>
                            
                            <a href="/login" class="btn btn-light">Login</a>
                            </div>
                        </div>
                    @endauth
                    @foreach ($graphs as $graph)
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{ $graph->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">from @ {{ $graph->user->name }}</h6>
                            
                            <a href="{{ $graph->id }}" class="card-link">show</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                  <br><br>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        @if(Auth::check())
                    <div class="">
                    <div class="card" style="border-color: white">
                        <div class="card-body" style="width: 100%">
                        <div class="d-flex flex-start w-100">
                            <div class="w-100">
                            <h5>{{__('Add a comment')}}</h5>
                            <form action="/comments" method="post">
                                @csrf
                                <div class="form-outline">
                                <textarea class="form-control" id="textAreaExample" placeholder="Add a comment..." name="comment" rows="4"></textarea>
                                </div>
                                <input type="hidden" name="tutorial_id" value="{{ $tutorial->id }}">
                                <div class="d-flex justify-content-between mt-3">
                                <button type="submit" class="btn btn-outline-info">
                                    {{__('Send')}}
                                </button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>  
                @else
                    <div class="card" style="text-align: center; padding: 6px">
                        <p style="padding-top: 3px">To write a comment, please <a href="/login">{{__('Log in')}}</a> {{__('OR')}} <a href="/register">{{__('Register')}}</a></p>
                    </div>
                @endif
                <br>
                @foreach ($tutorial->comments as $comment)
                        <!-- Comment with nested comments-->
                        <div class="d-flex mb-4">
                            <!-- Parent comment-->
                            <div class="flex-shrink-0">From:</div>
                            <div class="ms-3">
                                <div class="fw-bold">@ {{ $comment->user->name }}</div>
                                {{ $comment->comment }}
                            </div>
                            <div style="margin-left: auto; margin-right:0;">
                                @auth
                                @if(Auth::user()->id == $comment->user->id)
                                <form action="/comments/{{ $comment->id }}" method="post" style="margin-lift: 10px; margin-top: 10px; ">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" style="margin-lift: 10px; width: 100%;">Delete</button>
                                </form>
                                @endif
                            @endauth
                            </div>
                        </div>
                @endforeach
            </div>
                </div>
            </section>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Resources</div>
                <div class="card-body">
                    <div class="">           
                        <p><a href="/files/{{ $tutorial->file_path }}" class="btn btn-primary my-2" download>Download</a></p>
                        <p><a href="{{ $tutorial->url }}" class="my-2">{{ $tutorial->url }}</a></p>   
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Contributors</div>
                <div class="card-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col"> - </th>
                                <th scope="col">@</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($graphs as $graph)
                                    <tr>
                                        <td>{{ $graph->user->name }}</td>
                                        <td> - </td>
                                        <td>{{ $graph->user->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
                    @auth
                        @if (Auth::user()->id == $tutorial->user->id)
                        <!-- Side widget-->
                        <div class="card mb-4">
                            <div class="card-header">Control Tools</div>
                            <div class="card-body">
                            <form class="dropdown-item" action="/tutorials/{{ $tutorial->id }}" method="post" style="margin-top: 10px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/tutorials/{{ $tutorial->id }}/edit';">Edit</button>
                            </form>
                            </div>
                        </div>
                        @endif
                    @endauth
        </div>
    </div>
</div>

@endsection
