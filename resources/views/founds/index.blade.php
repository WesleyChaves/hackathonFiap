@extends('layouts.app')

@section('content')
@if (!Auth::guest())
<section class="content-header">
    <h1>
        Listagem de Encontrados
        <!--<small>Preview</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('/home')}}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Encontrados</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Encontrados</h3>
                </div>

                <div class="col-md-5">
                    <a href="{{url('founds/create')}}" class="btn btn-primary h2">Cadastrar Encontrados</a>
                    <br>
                    <br>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" role="search" action="{{ url('founds/busca') }}" method="post">
                        {!! csrf_field() !!}
                        {!! Form::input('text', 'busca_aberta', '', ['class' => 'form-control input-md', 'style' => 'width:50%','placeholder' => 'Digite aqui..',  'Busca Aberta']) !!}
                        <br>
                        <button class="btn btn-primary" type="submit">Buscar </button>
                        <a class="btn btn-primary" href="{{ url('founds/') }}">Limpar Filtros</a>
                    </form>
                </div>
            </br>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div id="list" class="row">

                    <div class="table-responsive col-md-12">
                        <table class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Categorias</th> 
                                    <th>Item</th>
                                    <th>Estado</th>
                                    <th>Cidade</th> 
                                    <th>Bairro</th> 
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($founds as $found)
                                <tr>
                                    <td>{{$found->id}}</td>
                                    <td>{{$found->category}}</td> 
                                    <td>{{$found->item}}</td>
                                    <td>{{$found->state}}</td>
                                    <td>{{$found->city}}</td>
                                    <td>{{$found->ativo}}</td>
                                    <td class="actions">
                                        <a class="btn btn-warning btn-xs" href="found/{{$found->id}}/editar">Editar</a>
                                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        {!! $founds ->links() !!}
                    </div>
                </div>
            </div>
        </section>s
        @endif
        <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        @endsection
