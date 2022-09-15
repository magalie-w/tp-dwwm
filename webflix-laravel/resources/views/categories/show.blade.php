@extends('layouts.base')

@section('tilte')
    {{ $category->name }} - @parent
@endsection

@section('content')
<a href="{{ route('categories') }}">Retour aux Catégories</a>
    <h1>{{ $category->name }}</h1>
@endsection