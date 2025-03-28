@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Stranice</li>
</ol>
<h1>Stranice</h1>
<hr>
@if($editing) 
<div class="row change-language">
    <div class="col-md-12">
        <a href="{{ url()->current() }}?lang=sr"><button class="btn btn{{ $lang=='sr' ? '-danger' : '' }} mb-3">SR</button></a>
        <a href="{{ url()->current() }}?lang=en"><button class="btn btn{{ $lang=='en' ? '-danger' : '' }} mb-3">EN</button></a>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{ url('cms/texts/'.$item->id) }}" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <input type="hidden" value="{{ $lang }}" name="language">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv </label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv " value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subtitle">Podnaslov </label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Podnaslov " value="{{ old('subtitle', $item->getTranslation('subtitle', $lang, false)) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>   
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('text') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="description">Tekst  </label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $item->getTranslation('description', $lang, false)) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('text') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="description2">Tekst 2</label>
                        <textarea name="description2" id="description2" class="form-control">{{ old('description2', $item->getTranslation('description2', $lang, false)) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image))
                            <a href="{{ url('cms/texts/imagedelete/'.$item->id.'?image=image') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                            @if(is_null($item->image))
                            <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                            </a>
                            @else
                            <a href="{{ asset('storage/'.$item->image) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item->image) }}" alt="img">
                            </a>
                            @endif
                    </span>
                    <input name="image" class="input-file input-file1" id="my-file1" type="file">
                    <label tabindex="0" for="my-file1" class="input-file-trigger input-file-trigger1">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file1"),
                            button = document.querySelector(".input-file-trigger1");

                        button.addEventListener("keydown", function (event) {
                            if (event.keyCode == 13 || event.keyCode == 32) {
                                fileInput.focus();
                            }
                        });
                        button.addEventListener("click", function () {
                            fileInput.focus();
                            return false;
                        });
                    </script>
                </div>
                @for ($i = 2; $i <= 4; $i++)
                @php
                 $img = 'image'.$i;   
                @endphp
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                        </div>
                        <div class="input-file-container" {!! $errors->has('image{{$i}}') ? 'style="border-color:red;"' : '' !!}>
                            @if(!is_null($item->$img))
                                <a href="{{ url('cms/texts/imagedelete/'.$item->id.'?image=image'.$i) }}"><span><i class="fa fa-close"></i></span></a>
                            @endif
                            <span class="img-placeholder">
                                @if(is_null($item->$img))
                                <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                                </a>
                                @else
                                <a href="{{ asset('storage/'.$item->$img) }}" data-fancybox="gallery">
                                    <img src="{{ asset('storage/'.$item->$img) }}" alt="img">
                                </a>
                                @endif
                        </span>
                        <input name="image{{$i}}" class="input-file input-file1" id="my-file1" type="file">
                        <label tabindex="0" for="my-file1" class="input-file-trigger input-file-trigger1">Odaberite sliku...</label>
                        </div>
                        <script>
                            var fileInput = document.querySelector(".input-file1"),
                                button = document.querySelector(".input-file-trigger1");

                            button.addEventListener("keydown", function (event) {
                                if (event.keyCode == 13 || event.keyCode == 32) {
                                    fileInput.focus();
                                }
                            });
                            button.addEventListener("click", function () {
                                fileInput.focus();
                                return false;
                            });
                        </script>
                    </div>
                @endfor
            </div>
            <button type="submit" class="btn btn-danger mb-3">Sačuvaj</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3 ml-auto" style="margin-left: 10px">Odustani</a>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('input[type="file"]').change(function() {        
        readURL(this, $(this).parent().find('img'));
    });

    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table paste "],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    });
</script>
@endsection