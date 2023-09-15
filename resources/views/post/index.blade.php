@extends('layouts.admin')
@section('title', __('user.List User') )
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md">
            <section class="content">
                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm float-sm-right"> <i class="fas fa-plus" ></i> {{__('common.Create')}}</a>
                <table id="set-table" class="table table-bordered table-hover responsive" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center">{{ __('post.Name') }}</th>
                        <th class="text-center">{{ __('post.description') }}</th>
                        <th style="min-width: 200px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $post)
                        <tr>
                            <td>{!! $post['title'] !!}</td>
                            <td>{!! $post['description'] !!}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('post.edit', $post['id']) }}" >Edit</a>
                                <button type="button" class="btn-danger" >
                                    <a href="{{route('post.delete', $post->id)}}" style="color: white;text-decoration: none;" onclick="return confirm ('bạn có muốn xóa post {{$post->title}}')">Delete</a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
@endsection
