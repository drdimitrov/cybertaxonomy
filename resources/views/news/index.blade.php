@extends('layouts.main')

@section('content')

<div class="container content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h2>News</h2></div>
                <div class="card-body">
<div class="row">
                    {{-- News item --}}
                    @foreach($news as $newsItem)
                    <div class="col-md-3">
                        <div class="card"> <img class="img-fluid" src="{{ $newsItem->image->url }}" alt="">
                            <div class="card-img-overlay">
                                <span class="badge badge-pill badge-danger">{{ $newsItem->tag->name }}</span>
                            </div>
                            <div class="card-body" style="min-height: 220px;">
                                <div class="news-title">
                                    <h5 class="title-small">
                                        <a href="#">{{ $newsItem->title }}</a>
                                    </h5>
                                    <div class="news-body">
                                        {{ str_limit($newsItem->content, $limit = 50, $end = '...') }}
                                    </div>
                                </div>
                                <p class="card-text">
                                    <small class="text-time">
                                        <em>{{ $newsItem->created_at->diffForHumans() }}</em>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- End of News item --}}
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-img-overlay{
        height: 20px;
    }
    .card-body{
        text-align: left;
    }
</style>
@endsection