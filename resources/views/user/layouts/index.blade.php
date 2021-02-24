@extends("AdminLayout.master")

@section('navbar')
    @include("user.layouts.navbar")
@endsection

@section('sidebar')
    @include("user.layouts.sidebar")
@endsection

@section('head')
    @yield("head")
@endsection

@section('content')
    @yield("content")
@endsection

@section('footer')
    @include("user.layouts.footer")
@endsection

