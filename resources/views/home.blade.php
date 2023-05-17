@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <div class="row my-5">

        <div class="col md-8">

            <div class="card p-4">

                <div class="row">

                    @isset($postsPremium)
                        @foreach ($postsPremium as $post)
                            <div class="col-md-4 mb-2">

                                <div class="card h-100">
                                    <img src="{{ $post->photo }}" alt="{{ $post->title_eng }}" class="card-img-top">
                                    <div class="card body">
                                        <div class="card-title">
                                            {{ $post->title_eng }}
                                        </div>

                                        <p class="card-text">
                                            {{ Str::limit($post->body_eng, 100) }}
                                        </p>

                                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
        <div class="col-md-4">

            all Categoryies
        </div>


    </div>
@endsection
