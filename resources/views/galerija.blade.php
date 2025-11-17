@extends('layouts.app')
@section('content')
<main>
    <section class="gallery">
        <div class="container">
            @foreach ($albums as $album)
            <div class="wrapper">
                <h2 class="subtitle">{{$album->title}}</h2>
                <div
                 {{-- @class([
                    'building-slider' => $album->type == 1,
                    'location-slider' => $album->type == 2,
                    'apartments-slider' => $album->type == 3,
                ]) --}}
                >
                <div class="row">
                    @foreach ($album->gallery as $item)
                    <div class="col-2">
                    <a
                        href="{{asset('storage/'.$item->image)}}"
                        data-fancybox="building"
                        data-caption="{{ $album->title }}"
                    >
                        <img
                            {{-- class="img-fluid" --}}
                            src="{{asset('storage/'.$item->image)}}" width="220px" height="220px"
                        />
                    </a>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</main>

@endsection