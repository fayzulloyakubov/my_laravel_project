@extends('layouts.main')
@section('title','Post Index')
@section('content')
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @elseif(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
    <div class="col-md-12">
        <div class="pull-right no-print" style="margin-bottom: 15px;">
            <a href="{{route('post-create')}}" class="btn btn-xs btn-success">Create Post</a>
        </div>
        <table class="table table-bordered">
            <theed class="table">
                <tr>
                    <th>№</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </theed>
            <tbody>
                @foreach($posts ?? '' as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{date('d.m.Y',strtotime($post->created_at))}}</td>
                        <td>
                            <a href="{{route('post-edit',$post)}}" class="btn btn-xs btn-primary"><span class="fa fa-pencil">Edit</span></a>
                            <a href="{{route('post-view',$post)}}" class="btn btn-xs btn-warning"><span class="fa fa-eye">View</span></a>
                            <a href="{{route('post-delete',$post)}}" class="btn btn-xs btn-danger"><span class="fa fa-trash">Delete</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

