@extends('layouts.app')

@section('breadcrumb')
    <div class="row">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <div class="container">
                    <div class="col s12">
                        <a href="{{ route('forum.index') }}" class="breadcrumb">Forum</a>
                        <a href="{{ route('forum.index') }}" class="breadcrumb">{{ $category->name }}</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-3">
            @include('forums.partials.categoriesList')
        </div>
        <div class="col-sm-9">
            <div class="collection">
                <a href="#!" class="collection-item">Alvin</a>
                <a href="#!" class="collection-item active">Alvin</a>
                <a href="#!" class="collection-item">Alvin</a>
                <a href="#!" class="collection-item">Alvin</a>
            </div>
        </div>
    </div>
@endsection