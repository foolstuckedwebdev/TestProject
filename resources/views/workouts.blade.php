@extends('layouts.app')

@section('body')
    <body class="bg-white">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card border-none">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello <strong>{{ Auth::user()->firstname }}</strong>, this is the Workouts Tab.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('home')
    <div class="row">
        <img id="logo1" class="margin-equal" src="{{ asset('includes/resources/white_home.png') }}">
    </div>
    <div class="row justify-content-center pt-1">
        <span id="tab" class="margin-equal">Home</span>
    </div>
@endsection

@section('wods')
    <div class="row">
        <img id="logo1" class="margin-equal" src="{{ asset('includes/resources/white_calendar.png') }}">
    </div>
    <div class="row justify-content-center pt-1">
        <span id="tab" class="margin-equal">WODs</span>
    </div>
@endsection

@section('workouts')
    <div class="row">
        <img id="logo1" class="margin-equal" src="{{ asset('includes/resources/blue_dumbbell.png') }}">
    </div>
    <div class="row pt-1">
        <span id="active-tab" class="margin-equal">Workouts</span>
    </div>
@endsection

@section('me')
    <div class="row">
        <img id="logo1" class="margin-equal" src="{{ asset('includes/resources/white_trophy.png') }}">
    </div>
    <div class="row pt-1">
        <span id="tab" class="margin-equal">Me</span>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
