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
                                @if($errors->has('title'))
                                    @foreach($errors->get('title') as $message)
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="article_info">Article:</label>
                                <textarea class="form-control" name="article_info" >{{$article['article_info']}}</textarea>
                                @if($errors->has('article_info'))
                                    @foreach($errors->get('article_info') as $message)
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group ">
                                <div class="d-flex justify-content-center">
                                    <div class="dropdown">
                                        <div class="dropbtn">Tags</div>
                                        <div class="dropdown-content">
                                            @foreach($taglist as $tag)
                                                <div class="col-12">
                                                    <label for="{{$tag['tag_name']}}">{{$tag['tag_name']}}</label>
                                                    <input id="{{$tag['tag_name']}}" type="checkbox" value="{{$tag['tag_name']}}" name="article_tags[]"/>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                                @if($errors->has('article_tags'))
                                    @foreach($errors->get('article_tags') as $message)
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-6 offset-3">
                                <label for="image">Cover image:</label>
                                <input type="text" class="form-control" name="image" value="{{$article['image']}}"/>
                                @if($errors->has('image'))
                                    @foreach($errors->get('image') as $message)
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @endforeach
                                @endif
                            </div>


                            <button id="submitbutton" type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection