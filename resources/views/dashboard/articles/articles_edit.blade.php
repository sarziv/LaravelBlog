@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Edit: {{$article['id']}}</div>

                    <div class="card-body text-center">

                        <form method="post" action="{{ route('articles.update',$article['id']) }}"  >
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{$article['title']}}"/>
                            </div>
                            <div class="form-group">
                                <label for="article_info">Article:</label>
                                <textarea class="form-control" name="article_info" >{{$article['article_info']}}</textarea>
                            </div>
                            <div class="form-group ">
                                <div class="d-flex justify-content-center">
                                    <div class="dropdown">
                                        <div class="dropbtn">Tags</div>
                                        <div class="dropdown-content">
                                            @foreach($taglist as $tag)
                                                <div class="col-12">
                                                    <label for="{{$tag['tag_name']}}">{{$tag['tag_name']}}</label>
                                                    <input id="{{$tag['tag_name']}}" type="checkbox" value="{{$tag['tag_name']}}" name="article_tags[]" checked/>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group col-6 offset-3">
                                <label for="image">Cover image:</label>
                                <input type="text" class="form-control" name="image" value="{{$article['image']}}"/>
                            </div>


                            <button id="submitbutton" type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection