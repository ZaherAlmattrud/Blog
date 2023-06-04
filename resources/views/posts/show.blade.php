@extends('layouts.main')
@section('title')
    {{ ucfirst($post->title_eng) }}
@endsection
@section('content')
    <div class="row my-5">

        <div class="col-md-8">

            <div class="card p-4">

                <div class="row">


                    <div class="col-md-14 mb-2">

                        <div class="card h-100">
                            <img src="{{ $post->photo }}" alt="{{ $post->title_eng }}" class="card-img-top">
                            <div class="card body">

                                <div class="d-flex justify-content-center my-3">

                                    <span class="badge bg-danger">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ $post->created_at->diffForHumans() }}
                                    </span>

                                    <span class="badge bg-success mx-2">
                                        <i class="fas fa-user me-1"></i>
                                        {{ $post->admin->name }}
                                    </span>

                                    <span class="badge bg-primary">
                                        <i class="fas fa-tag me-1"></i>
                                        {{ $post->category->name_eng }}
                                    </span>

                                </div>
                                <div class="card-title fw-bold">
                                    {{ $post->title_eng }}
                                </div>

                                <p class="card-text">
                                    {{ $post->body_eng }}
                                </p>

                                <div class="row my-2">

                                    <div class="col-md-6">
                                        @isset($previous)
                                            <a href="{{ route('posts.show', $previous) }}" class="btn btn-link">
                                                <div>Previous</div>
                                                {{ $previous->title_eng }}
                                            </a>
                                        @endisset
                                    </div>

                                    <div class="col-md-6">
                                        @isset($next)
                                            <a href="{{ route('posts.show', $next) }}" class="btn btn-link">
                                                <div>Next</div>
                                                {{ $next->title_eng }}
                                            </a>
                                        @endisset
                                    </div>
                                </div>


                                <comments-count-component></comments-count-component>
                                <hr class="m-3">
                                <comments-component :post_id="{{ $post->id }}"></comments-component>

                                @auth
                                    <hr class="m-3">

                                    @if (auth()->user()->hasVerifiedEmail())
                                        <add-comment-component :user_id="{{ auth()->user()->id }}"
                                            :post_id="{{ $post->id }}"></add-comment-component>
                                    @else
                                        @if (session('status')==='verification-link-sent')
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif

                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                        </form>
                                    @endif

                                @endauth
                                @guest
                                <div class="alert alert-info">
                                    <a href="{{route('login')}}" class="btn btn-link text-decoration-none text-dark">
                                        Log in to add your comment
                                    </a>
                                </div>
                            @endguest
                            </div>
                        </div>

                    </div>


                </div>




            </div>
        </div>

        <div class="col-md-4">

            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        <a href="{{ route('category.posts', $category) }}"
                            class="btn btn-link text-decoration-none text-dark">
                            {{ $category->name_eng }}
                        </a>
                        <span class="badge bg-primary rounded-pill">
                            {{ $category->posts()->count() }}
                        </span>
                    </li>
                @endforeach

            </ul>
        </div>

    </div>
@endsection
