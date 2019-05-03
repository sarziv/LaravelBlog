@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Dashboard</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="col-12"><h3>Search</h3></div>
                            <div class="d-inline ">
                                <button class="btn btn-outline-primary">Search Articles</button>
                                <button class="btn btn-outline-primary">Search by Tags</button>
                            </div>
                        <div class="col-12"><h3>Articles</h3></div>
                        <div class="d-inline ">
                           <a href="{{route('articles.index')}}"><button class="btn btn-outline-primary">Read Articles</button></a>
                           <a href="{{route('articles.create')}}"><button class="btn btn-outline-primary">Add Articles</button></a>
                           <a href="{{route('articles.create')}}"><button class="btn btn-outline-primary">Update Articles</button></a>
                           <a href="{{route('articles.create')}}"><button class="btn btn-outline-danger">Delete Articles</button></a>
                        </div>
                            <div class="col-12"><h3>Tags</h3></div>
                            <div class="d-inline ">
                                <button class="btn btn-outline-primary">Add tags</button>
                                <button class="btn btn-outline-danger">Delete Tags</button>
                            </div>
                            <div class="col-12"><h3>History</h3></div>
                            <div class="d-inline ">
                                <button class="btn btn-outline-primary">Records</button>
                                <button class="btn btn-outline-primary">Actions</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
