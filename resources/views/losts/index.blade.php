@extends('layouts.app')

@section('content')
@if (!Auth::guest())
<section class="content-header">
    <h1>
        Listagem de Perdidos
        <!--<small>Preview</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('/home')}}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Perdidos</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Perdidos</h3>
                </div>

                <div class="col-md-5">
                    <a href="{{url('losts/create')}}" class="btn btn-primary h2">Cadastrar Perdidos</a>
                    <br>
                    <br>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" role="search" action="{{ url('losts/busca') }}" method="post">
                        {!! csrf_field() !!}
                        {!! Form::input('text', 'busca_aberta', '', ['class' => 'form-control input-md', 'style' => 'width:50%','placeholder' => 'Digite aqui..',  'Busca Aberta']) !!}
                        <br>
                        <button class="btn btn-primary" type="submit">Buscar </button>
                        <a class="btn btn-primary" href="{{ url('lost/') }}">Limpar Filtros</a>
                    </form>
                </div>
            </br>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                @foreach($losts as $lost)
                <div class="col-md-3" style="margin-top: 20px;">
                    <div class="thumbnail">
                        @if($lost->archive)
                        <img src="{{$lost->archive}}"s alt="...">
                        @else
                        <img src="{{asset('images/image_empty.png')}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="card-title" align="center">{{$lost->item}}</h4>
                            </div>
                            <p class="card-text" style="margin-left: 10px;"><b>Descrição:</b> {{$lost->description}}</p>
                            <p class="card-text" style="margin-left: 10px;"><b>Data da perda:</b> {{date( 'd/m/Y' , strtotime($lost->loss_date))}}</p>
                            <div align="center" >
                                <a href="#" class="btn btn-primary">Editar</a>
                                <a href="#" class="btn btn-primary">Finalizar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
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
                                @foreach($losts as $lost)
                                <tr>
                                    <td>{{$lost->id}}</td>
                                    <td>{{$lost->category}}</td> 
                                    <td>{{$lost->item}}</td>
                                    <td>{{$lost->state}}</td>
                                    <td>{{$lost->city}}</td>
                                    <td>{{$lost->ativo}}</td>
                                    <td class="actions">
                                        <a class="btn btn-warning btn-xs" href="lost/{{$lost->id}}/editar">Editar</a>
                                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        {!! $losts ->links() !!}
                    </div>
                </div>
            </div>
        </section>
        @endif
        <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        @endsection
