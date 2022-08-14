@extends('layouts.main')
@section('title',isset($posts) ? 'Update Post' : 'Post Create')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <form action="{{route('post-store')}}" method="POST" class="form-group">
                @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{isset($post->title) ? $post->title : null}}">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" name="content" placeholder="Content write ..." >
                    {{ isset($post->content) ? $post->content : null}}
                </textarea>
                <label for="description">Description</label>
                <textarea type="text" class="form-control" name="description" placeholder="Description write ...">
                    {{ isset($post->description) ? $post->description : null}}
                </textarea>
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{route('post-index')}}" class="btn btn-xs btn-info">Back</a>
            </form>
        </div>
    </div>
@endsection
