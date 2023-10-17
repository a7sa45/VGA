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
                    <img src="https://dytvr9ot2sszz.cloudfront.net/wp-content/uploads/2019/05/1200x628_logstash-tutorial-min.jpg" class="card-img-top" alt="...">
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
                    <img src="https://dytvr9ot2sszz.cloudfront.net/wp-content/uploads/2019/05/1200x628_logstash-tutorial-min.jpg" class="card-img-top" alt="...">
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
                    <img src="https://dytvr9ot2sszz.cloudfront.net/wp-content/uploads/2019/05/1200x628_logstash-tutorial-min.jpg" class="card-img-top" alt="...">
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
@endsection
