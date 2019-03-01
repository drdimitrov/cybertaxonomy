@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header')
            Cybertaxonomy website notification
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Cybertaxonomy © {{ date('Y') }}
        @endcomponent
    @endslot
@endcomponent
