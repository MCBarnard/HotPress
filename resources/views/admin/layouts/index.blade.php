@extends("AdminLayout.master")

@section('navbar')
    @include("admin.layouts.navbar")
@endsection

@section('sidebar')
    @include("admin.layouts.sidebar")
@endsection

@section('head')
    @yield("head")
@endsection

@section('content')
    @yield("content")
@endsection

@section('rightSideBar')
    @include("admin.layouts.rightInfo")
@endsection

@section('footer')
    @include("admin.layouts.footer")
@endsection
