@extends('layouts.admin')

{{-- Page content --}}
@section('content')
<div class="card">
    <div class="card-header">Add new paper</div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="authors">Authors</label>
                <input type="text" class="form-control" name="authors">
                @if ($errors->has('authors'))
                    <p style="color: red">{{ $errors->first('authors') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year">
                @if ($errors->has('year'))
                    <p style="color: red">{{ $errors->first('year') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
                @if ($errors->has('title'))
                    <p style="color: red">{{ $errors->first('title') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="journal">Journal</label>
                <input type="text" class="form-control" name="journal">
                @if ($errors->has('journal'))
                    <p style="color: red">{{ $errors->first('journal') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="pdf">Upload PDF</label>
                <input type="file" class="form-control-file" name="pdf">
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
