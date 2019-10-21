@extends('layouts.main')

@section('content')
<table class="table table-striped">
    <tbody>
    @foreach($parsed as $p)
    <tr>
       @foreach($p as $data)
       <td>{{ $data }}</td>
       @endforeach
    </tr>
    @endforeach
    </tbody>
</table>
@endsection