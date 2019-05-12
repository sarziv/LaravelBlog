@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Articles List</div>

                    <div class="card-body text-center">
                        <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>View</td>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Tags</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>
                                <a href="{{ route('articles.show',$article->id)}}" class="btn btn-primary">View</a>
                                </td>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->article_tags}}</td>

                                <td>
                                    <a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
