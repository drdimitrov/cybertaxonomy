@extends('layouts.main')

@section('content')

<div class="container content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h2>Papers</h2></div>
                <div class="card-body">
                    <table class="table table-striped" style="font-size: .7em; text-align: left;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Author</th>
                                <th scope="col">Year</th>
                                <th scope="col">Title</th>
                                <th scope="col">Journal</th>
                                {{-- <th scope="col">Full text</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php $cnt = 1; @endphp

                            @foreach($papers as $paper)
                            <tr>
                                <th scope="row">{{ $cnt }}</th>
                                <th scope="row">{{ $paper->authors }}</th>
                                <td>{{ $paper->year }}</td>
                                <td>{!! $paper->title !!}</td>
                                <td>{{ $paper->journal }}</td>
                                {{-- <td>
                                    <a href="{{ asset('/storage/articles/' . $paper->link) }}" target="_blank">Open</a>
                                </td> --}}
                            </tr>
                            @php $cnt += 1; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection