@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="headline">
                        <h4>Welcome to AusExile.com</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <home-view></home-view>
                </div>
                @include('partials.widgets')
            </div>
        </div>
@endsection
