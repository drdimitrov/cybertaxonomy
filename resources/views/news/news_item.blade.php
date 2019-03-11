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
                        <div style="text-align: center !important; width: 100%;">
                            <h1>{{ $newsItem->title }}</h1>

                            <div>
                                <img class="center" src="{{ $newsItem->image->url }}" alt="">
                            </div>
                        </div>

                        <div class="news-content">{{ $newsItem->content }}</div>
                        <div style="width: 100%; font-style: italic; padding-right: 20px;">
                            <p class="float-right">{{ $newsItem->created_at->diffForHumans() }}</p>
                        </div>
                        {{-- End of News item --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        min-width: 50%;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .news-content{
        padding: 0 20px;
    }
</style>
@endsection