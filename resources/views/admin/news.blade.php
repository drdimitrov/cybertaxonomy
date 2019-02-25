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
                <textarea class="form-control" name="content" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Add picture</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
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
