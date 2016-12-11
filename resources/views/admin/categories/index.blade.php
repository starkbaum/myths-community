@extends('layouts.app')

@section('breadcrumb')
    <div class="row">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <div class="container">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Administration</a>
                        <a href="#!" class="breadcrumb">Kategorien</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col s2">
            @include('admin.partials.navigation')
        </div>
        <div class="col s10 card blue-grey darken-3">
            @foreach($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
    </div>
@endsection

@section('fab')
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light cyan darken-1" href="#add-role"><i class="material-icons">library_add</i></a>
    </div>
@endsection

@section('modals')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        <div id="add-role" class="modal bottom-sheet blue-grey darken-2 grey-text">
            <div class="modal-content container">
                <h4>Neue Kategorie hinzufügen</h4>
                {{ csrf_field() }}
                <div class="input-field col s6">
                    <input id="category-name" name="name" type="text" class="validate">
                    <label for="category-name">Kategorie</label>
                </div>
                <div class="input-field col s6">
                    <input id="category-description" name="description" type="text" class="validate">
                    <label for="category-description">Beschreibung</label>
                </div>
            </div>
            <div class="modal-footer blue-grey darken-3">
                <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Kategorie hinzufügen</button>
            </div>
        </div>
    </form>
@endsection