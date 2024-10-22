@extends('admin.layouts.master')
@section('title', 'Parametrlər')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/node_modules/dropify/dist/css/dropify.min.css') }}"/>
    <style>
        textarea {
            display: block;
            height: 5rem;
        }
    </style>
@endsection
@section('content')
    <!-- Bread crumb -->
    <x-admin.breadcrumb/>
    <!-- End Bread crumb -->
    <div class="card">
        <div class="card-body">
            <!-- Nav tabs -->
            <x-admin.form-lang-switch/>
            <!-- Tab panes -->
            <form action="{{ route('admin.settings') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="tab-content tabcontent-border">
                    @foreach($languages as $language)
                        <div @class(['tab-pane', 'active' => $loop->first]) id="{{ $language }}" role="tabpanel">
                            <div class="form-floating my-3">
                                <input class="form-control" name="title_{{ $language }}" id="title" type="text"
                                       placeholder="Başlıq"
                                       value="{{ $settings->getTranslation('title', $language) }}"/>
                                <label class="form-label" for="title">
                                    Başlıq
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="author_{{ $language }}" type="text" id="author"
                                       placeholder="Müəllif"
                                       value="{{ $settings->getTranslation('author', $language) }}"/>
                                <label class="form-label" for="author">
                                    Müəllif
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">
                                    Açıqlama
                                </label>
                                <textarea class="form-control" placeholder="Açıqlama" id="description"
                                          name="description_{{ $language }}">{{ $settings->getTranslation('description', $language) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="keywords">
                                    Açar sözlər
                                </label>
                                <textarea class="form-control" placeholder="Açar sözlər" id="keywords"
                                          name="keywords_{{ $language }}">{{ $settings->getTranslation('keywords', $language) }}</textarea>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label text-white-50">
                        Loqo
                    </label>
                    <input type="file" name="logo" id="logo" class="dropify" data-show-remove="false"
                           accept="image/*" data-default-file="{{ asset('storage/' . $settings->logo) }}"/>
                </div>
                <div class="mb-3">
                    <label for="favicon" class="form-label text-white-50">
                        Favicon
                    </label>
                    <input type="file" name="favicon" id="favicon" class="dropify" data-show-remove="false"
                           accept="image/*" data-default-file="{{ asset('storage/' . $settings->favicon) }}"/>
                </div>
                <button type="submit" class="btn btn-primary float-end">
                    Saxla
                </button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset("back/node_modules/dropify/dist/js/dropify.min.js") }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
