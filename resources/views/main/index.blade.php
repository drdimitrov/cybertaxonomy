@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card">
                <div class="card-header"><h2>The project</h2></div>
                <div class="card-body">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-header"><h2>News:</h2></div>
                <div class="card-body">
                    @foreach($news as $newsItem)
                    <aside style="text-align: left;">
                        <h5>
                            <a href="{{ route('newsitem', $newsItem->id) }}">{{ $newsItem->title }}</a>
                        </h5>

                        <p>{{ str_limit($newsItem->content, $limit = 80, $end = '...') }}</p>

                        <p style="font-size: .8em; font-style: italic;">
                            {{ $newsItem->created_at->diffForHumans() }}
                        </p>
                    </aside>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection