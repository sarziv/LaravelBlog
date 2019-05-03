@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Add Article</div>

                    <div class="card-body text-center">

                        <form method="post" action="{{ route('articles.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title"/>
                            </div>
                            <div class="form-group">
                                <label for="article_info">Article:</label>
                                <textarea class="form-control" name="article_info"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="article_tags">Tags:</label>
                                <input type="text" class="form-control" name="article_tags"/>
                            </div>
                            <div class="form-group">
                                <label for="image">IMG:</label>
                                <input type="file" class="form-control" name="image"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
