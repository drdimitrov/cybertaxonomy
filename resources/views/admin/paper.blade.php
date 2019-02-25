@extends('layouts.admin')

{{-- Page content --}}
@section('content')
<div class="card">
    <div class="card-header">Add new paper</div>
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="authors">Authors</label>
                <input type="text" class="form-control" name="authors">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year">
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="journal">Journal</label>
                <input type="text" class="form-control" name="journal">
            </div>

            <div class="form-group">
                <label for="file">File location</label>
                <input type="text" class="form-control" name="file">
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
        <a href="/admin/paper">Admin</a>
    </li>
    <li class="breadcrumb-item active">Paper</li>
</ol>
@stop
