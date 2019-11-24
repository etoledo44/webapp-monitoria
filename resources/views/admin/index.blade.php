@extends('adminlte::page')

@section('title', 'Usuário')

@section('content_header')
    <h1>Usuário</h1>
@stop

@section('content')
    @foreach($admin as $adminInfo)
    <p>{{ $adminInfo->id}}</p>
    <p>{{ $adminInfo->name}}</p>
    @endforeach


@stop

@section('css')
@stop

@section('js')
@stop