@extends('layouts.admin')

{{-- Page content --}}
@section('content')
<div class="card">
    <div class="card-header">Add new picture</div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="img_file">Choose file</label>
                <input type="file" class="form-control-file" name="img_file">
            </div>

            <div class="form-group">
                <label for="name">Picture name</label>
                <input type="text" class="form-control" name="name">
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
    <li class="breadcrumb-item active">Picture</li>
</ol>
@stop
