@extends('layouts.admin')

{{-- Page content --}}
@section('content')
<div class="card">
    <div class="card-header">Add new picture</div>
    <div class="card-body">

        <script>
            UPLOADCARE_LIVE = false;
            UPLOADCARE_IMAGES_ONLY = true;
            UPLOADCARE_CROP = 'free';
        </script>
        <p>Add new Image:</p>
        {!! $api->widget->getScriptTag() !!}

        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                {!! $api->widget->getInputTag('img_file') !!}
            </div>

            <div class="form-group">
                <label for="description">Picture name</label>
                <input type="text" class="form-control" name="description">
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
