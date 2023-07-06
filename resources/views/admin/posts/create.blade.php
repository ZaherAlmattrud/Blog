@extends('layouts.admin.main')

@section('title')
    Create
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title text-center">
                    <h3 class="mt-3">
                        Create new post
                    </h3>
                </div>
                <hr>
                <div class="card-body p-3">
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="title_eng" class="col-sm-3 col-form-label">
                                        Title ENG*
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_eng" placeholder="Title ENG"
                                            class="form-control @error('title_en') is-invalid @enderror"
                                            value="{{ old('title_eng') }}">
                                        @error('title_eng')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="title_ar" class="col-sm-3 col-form-label">
                                        Title FR*
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_ar" placeholder="Title FR"
                                            class="form-control @error('title_ar') is-invalid @enderror"
                                            value="{{ old('title_ar') }}">
                                        @error('title_ar')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-3 col-form-label">
                                        Category*
                                    </label>
                                    <div class="col-sm-9">
                                        <select name="category_id" id="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror">
                                            <option selected disabled>Choose a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name_eng }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="body_eng" class="col-sm-3 col-form-label">
                                        Body ENG*
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea name="body_eng" placeholder="Body ENG" class="form-control @error('body_en') is-invalid @enderror">{{ old('body_eng') }}</textarea>
                                        @error('body_eng')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="body_ar" class="col-sm-3 col-form-label">
                                        Body Ar*
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea name="body_ar" placeholder="Body ar" class="form-control @error('body_ar') is-invalid @enderror">{{ old('body_ar') }}</textarea>
                                        @error('body_ar')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-3 col-form-label">
                                        Image*
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="photo" placeholder="Body FR"
                                            class="form-control @error('photo') is-invalid @enderror" />
                                        @error('photo')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="form-check d-flex justify-content-center">
                                    <label for="tags" class="form-check-label">
                                        Tags:
                                    </label>
                                    @foreach ($tags as $tag)
                                        <input type="checkbox" class="form-check-input mx-2" name="tags[]" id="tags"
                                            value="{{ $tag->id }}">
                                        {{ $tag->name }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
