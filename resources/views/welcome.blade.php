@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   Dynamic Blog
                </div>
                <p>
                    Design laravel simplified.
                </p>
                <p>
                    What is this?
                    <a href="{{route('features')}}">
                        <button class="btn btn-outline-dark">Features</button>
                    </a>
                </p>
                <div class="links">
                    Developer: Šarūnas Živila
                </div>
            </div>
        </div>
@endsection
