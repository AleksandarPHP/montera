@extends('layouts.app')
@section('content')
<main>
    <section class="gallery">
        <div class="container">
            @foreach ($albums as $album)
            <div class="wrapper gallery-wrapper">
                <h2 class="subtitle">{{ __('Gallery') }}</h2>
                <div
                 {{-- @class([
                    'building-slider' => $album->type == 1,
                    'location-slider' => $album->type == 2,
                    'apartments-slider' => $album->type == 3,
                ]) --}}
                >
                    @foreach ($album->gallery as $item)
                    <a
                        href="{{asset('storage/'.$item->image)}}"
                        data-fancybox="building"
                        data-caption="{{ $album->title }}"
                    >
                        <img
                            class="img-thumbnail"
                            src="{{asset('storage/'.$item->image)}}"
                        />
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>
    </section>
</main>

@endsection