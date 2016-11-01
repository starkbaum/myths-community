@extends('layouts.app')

@section('breadcrumb')
    <div class="row">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <div class="container">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Administration</a>
                        <a href="#!" class="breadcrumb">Rollen</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')



    <div class="row">
        <div class="col s3">
            @include('admin.partials.navigation')
        </div>
        <div class="col s9">

        </div>
    </div>

@endsection