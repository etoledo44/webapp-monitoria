@extends('adminlte::page')

@section('title', 'Monitoria')

@section('content_header')
    <h1>Seja bem-vindo, <strong>{{Auth::user()->name}}</strong> </h1>
@stop

@section('content')
    <h4><strong>Monitoria</strong> é um sistema onde é possível encontrar todos os monitores cadastrado na faculdade.</h4>
    <p>Para começar, vá até o menu lateral e clique em Monitores ou <a href="/monitores" class="btn btn-sm btn-primary ">Clique aqui</a> </p>
@stop