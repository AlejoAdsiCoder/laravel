@extends('layouts.app')
@section('title', 'child title')
@section('sidebar')
    @parent
    <p>Sidebar hijo</p>
@endsection
@section('content')
    <p>Contenido</p>
@endsection