@extends('layouts.admin')

{{-- Page content --}}
@section('content')
<div class="card">
    <div class="card-header">Add news</div>
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="news_content" name="content" rows="20"></textarea>
            </div>

            <div class="form-group">
                <label for="picture">Add picture</label>
                <select class="form-control" name="picture">
                  @foreach($pictures as $picture)
                    <option value="{{ $picture->id }}">{{ $picture->description }}</option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tag">Add tag</label>
                <select class="form-control" name="tag">
                  @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
            </div>

            {{ csrf_field() }}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop

@section('bredcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin/news">Admin</a>
    </li>
    <li class="breadcrumb-item active">News</li>
</ol>
@stop
