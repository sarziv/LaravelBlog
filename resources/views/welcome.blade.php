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
                    List of features <a href="{{route('features')}}">features</a>
                </p>
                <div class="links">
                    Developer: Šarūnas Živila
                </div>
            </div>
        </div>
@endsection
