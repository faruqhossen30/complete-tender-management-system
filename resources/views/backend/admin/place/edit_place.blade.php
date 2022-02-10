@extends('backend.admin.app')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Place Edit Informations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Clients</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <!-- Profile Image -->
        <div class="row">
            <div class="col">
                <div class="card card-primary card-outline">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('place.update', $place->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title <span class="text-danger">*</span></label>
                                    <input name="title" type="text" class="form-control @error('title')is-invalid @enderror"
                                        id="exampleInputEmail1" value="{{ $place->title }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Desription <span class="text-danger">*</span></label>
                                    <textarea id="summernote" name="content" type="text"
                                        class="form-control @error('content')is-invalid @enderror"
                                        rows="3">{{ $place->content }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address<span class="text-danger">*</span></label>
                                    <input name="address" type="text"
                                        class="form-control @error('address')is-invalid @enderror"
                                        id="exampleInputPassword1" value="{{ $place->address }}">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Google map</label>
                                    <input name="google_map" type="text"
                                        class="form-control @error('google_map')is-invalid @enderror"
                                        id="exampleInputPassword1" value="{{ $place->google_map }}">
                                    @error('google_map')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Location<span class="text-danger">*</span></label>
                                            <select name="location_id"
                                                class="form-control custom-select rounded-5  @error('location_id')is-invalid @enderror"
                                                id="exampleSelectRounded0" value="Enter your location">
                                                <option value=""> Select Division Id </option>
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}" @if ($location->id == $place->location_id) selected @endif>
                                                        {{ $location->name }}</option>
                                                @endforeach

                                            </select>
                                            @error('location_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label> Video Link </label>
                                        <input type="text" name="video_link"
                                            class="form-control  @error('video_link')is-invalid @enderror"
                                            value="{{ $place->video_link }}">
                                        @error('video_link')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label> Image <span class="text-danger">*</span></label>
                                            <input type="file" name="image"
                                                class="form-control  @error('image')is-invalid @enderror">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <img class="img-thumbnail" style="width: 100px; height:100px; padding:5px"
                                                src="{{ asset('public/uploads/place/' . $place->image) }}" alt="sdfsdf">
                                        </div>

                                        <div class="form-group">
                                            <label> Slider Image </label>
                                            <input type="file" name="slider_image[]"
                                                class="form-control  @error('slider_image')is-invalid @enderror" multiple>
                                            @error('slider_image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="item image active">
                                                @foreach ($place_image as $image)

                                                    <!-- slider images -->
                                                    <img src="{{ asset('public/uploads/placeimages/' . $image->name) }}"
                                                         alt="{{ $image->name }}" title="Image Slideshow" style="width: 100px; padding:5px">

                                                    <!-- slider images -->
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update place</button>
                                    </div>
                            </form>
                        </div>
                    @endsection

                    @push('css')
                        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                                                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                                                crossorigin="anonymous"></script>
                        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css"
                            rel="stylesheet">
                    @endpush

                    @push('js')
                        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                        <script>
                            $(function() {
                                // Summernote
                                $('#summernote').summernote({
                                    placeholder: 'Describe your place in details.',
                                    tabsize: 2,
                                    height: 300,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                })

                                // CodeMirror
                                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                                    mode: "htmlmixed",
                                    theme: "monokai"
                                });
                            })
                        </script>

                    @endpush
