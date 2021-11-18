@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h5 class="card-title mt-2">
                            <span class="fs-5 badge bg-primary rounded-pill">{{ $posts->count() }}</span> 
                            Total Posts
                        </h5>
                        <a href="/dashboard/posts" class="mb-0 position-absolute bottom-0 mb-2 text-decoration-none">
                            Manage
                            <span data-feather="arrow-right"></span>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <i class="bi bi bi-file-earmark-text display-3 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h5 class="card-title mt-2">
                            <span class="fs-5 badge bg-primary rounded-pill">{{ $comments->count() }}</span> 
                            Total Comments
                        </h5>
                        <a href="#" class="mb-0 position-absolute bottom-0 mb-2 text-decoration-none">
                            Manage
                            <span data-feather="arrow-right"></span>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <i class="bi bi-chat-left-text display-3 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h5 class="card-title mt-2">
                            <span class="fs-5 badge bg-primary rounded-pill">{{ $users->count() }}</span> 
                            Total User
                        </h5>
                        <a href="#" class="mb-0 position-absolute bottom-0 mb-2 text-decoration-none">
                            Manage
                            <span data-feather="arrow-right"></span>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <i class="bi bi-people display-3 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection