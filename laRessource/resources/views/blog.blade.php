@extends('layouts.base')

@section('title')
    Blog - @parent
@endsection

@section('content')
    <div class="space-y-6">
        <h1 class="text-2xl bold text-center">Blog</h1>
        <div class="mx-auto w-[900px] flex justify-around flex-wrap space-y-5">
            @foreach ($blog as $blog)
                <div class="text-center border w-[200px]">
                    <div class="text-xl bold">
                        {{ $blog->title }}
                    </div>

                    {{ $blog->description }}

                    <img src="{{ $blog->cover }}" alt="" width="100" />
                </div>
            @endforeach
        </div>
    <div>
@endsection