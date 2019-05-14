@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Reading article</div>

                    <div class="card-body text-center">
                        <div class="row d-flex justify-content-around">
                            <div> ID:{{$articles['id']}}</div>
                            <div>Title: {{$articles['title']}}</div>
                            <div> Tags:{{$articles['article_tags']}}</div>
                        </div>

                        <hr>
                        <div>
                            {{$articles['article_info']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection