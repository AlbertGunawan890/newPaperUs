@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (Session::has('error'))
            <p class="alert "> {{ Session::get('error') }}</p>
        @endif
    </div>
@endsection
