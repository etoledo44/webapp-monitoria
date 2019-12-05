@extends('adminlte::page')

@section('title', 'Adicionar Monitor')

@section('content_header')
    <h1>Adicionar monitor</h1>
@stop

@section('content')
    <form action="{{ route('monitores.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="panel-default">
            <div class="panel-heading">
                Informe os dados do monitor.
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="nome">Nome do monitor</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="email">Disciplina</label>
                        <select name="disciplina" id="disciplina" class="form-control" required >
                            <option value=""disabled selected>-- Escolha --</option>
                            <option value="Analise e Desenvolvimento de Sistemas">Análise e Desenv. de Sistemas</option>
                            <option value="Eletrônica Automotiva">Eletronônica Automotiva</option>
                            <option value="Gestão de Recursos Humanos">RH</option>
                        </select>
                        <!-- <input type="email" name="email" id="email" class="form-control"> -->
                    </div>
                </div>
                <div class="row">
                <div class='col-sm-1'>
                    <div class="form-group">
                    <label for="">Horário</label>
                    <p>De:</p>
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='time' class="form-control" name="horaDe" id="horaDe"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                        <p>Até:</p>
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='time' class="form-control" name="horaAte" id="horaAte" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="panel-footer">
                <a href="{{ route('monitores.index') }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-success">Gravar</button>
            </div>
        </div>
    </form>
    
@stop

@section('css')
@stop

@section('js')
@stop