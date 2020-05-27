@extends('layouts.main')

@section('content')

<div class="container content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h2>Picture gallery</h2></div>
                <div class="card-body">
                    @foreach($pictures as $picture)
                        <div class="card" style="display: inline-block; margin-bottom: 10px; margin-right: 10px">
                            <div class="card-body">
                                <a href="{{ $picture->url }}" class="image featured fancybox fancyimg" rel="gallery1" title="{{ $picture->description }}">
                                    <img src="{{ app('uploadcare')->getFile($picture->url)->op('quality/lightest')->op('progressive/yes')->resize(200, 150, true)->getUrl() }}" alt="" />
                                </a>
                            </div>
                            <div class="card-footer text-center">{!! $picture->description !!}</div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('.fancyimg').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        type : 'image'
    });
</script>
@endsection