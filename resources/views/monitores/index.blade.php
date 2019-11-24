@extends('adminlte::page')

@section('title', 'Monitores')

@section('content_header')
    <h1><i class="fas fa-fw fa-address-book"></i> Listagem de Monitores</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relação dos monitores cadastrados
            <div class="pull-right">
                <a href="#" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{route('monitores.create')}}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo monitor</a>
            </div>
        </div>
        <div class="panel-body">
            <table id="table-monitores" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monitores as $monitor)
                    <tr>
                        <td>{{ $monitor->id}}</td>
                        <td>{{ $monitor->nome}}</td>
                        <td>{{ $monitor->email}}</td>
                        <td>
                            <!-- Botão de visualização -->
                            <a href="" class="btn btn-primary btn-xs"><i class="fas fa-fx fa-eye"></i></a>
                            <!-- Botão de edição -->
                            <a href="" class="btn btn-warning btn-xs"><i class="fas fa-fx fa-pencil-alt"></i></a>
                            <!-- Botão de exclusão | envia um formulário ao invés de link -->
                            <form action="" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="">
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-fx fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready( function () {
    $('#table-monitores').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
            }
        }
    );
} );
</script>
@stop