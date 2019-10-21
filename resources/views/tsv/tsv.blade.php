@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-sm">
        <form class="form-inline" action="/tsv" enctype="multipart/form-data"  method="POST">
            &nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label for="tsv">Select file: </label>
                <input class="form-control-file" type="file" name="tsv">
            </div>

            &nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label for="exampleFormControlSelect1">Choose action: </label>
                <select class="form-control" name="action">
                    <option value="1">Show</option>
                    <option value="2">Export</option>
                </select>
            </div>

            @csrf
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">Render</button>
        </form>
    </div>
</div>

@endsection