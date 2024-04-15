@extends('layouts.app')

@section('title') Home @endsection

@section('content')
    @if(Auth::check())
        <!-- @include('pages._dashboard') -->
        @include('pages._logged_out')
    @else
        @include('pages._logged_out')
    @endif
@endsection
