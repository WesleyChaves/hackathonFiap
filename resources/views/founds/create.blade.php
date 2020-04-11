@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<section class="content-header">
    <h1>
        Cadastro de Perdidos
        <!--<small>Preview</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('/home')}}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{{asset('/founds')}}">Listagem de achados</a></li>
        <li class="active">Cadastro de Achados</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro</h3>
                </div>
                @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success"> <?php Illuminate\Support\Facades\Session::get('mensagem_sucesso') ?></div>
                @endif

                @if(Request::is('*/update'))

                {!! Form::model($founds, ['class'=> 'form-horizontal', 'method' => 'PATCH', 'url' => 'founds/update/'.$founds->id]) !!}
                @else 
                {!! Form::open(['action' => ['FoundController@store'], 'class'=> 'form-horizontal', 'method' => 'POST'])!!}
                @endif
                    <div class="form-group">
                        <label class="col-md-2 control-label">Categória</label>
                        <div class="col-md-4">
                            <select class="form-control" name="category">
                              <option>Selecione Categoria</option>
                              <option value="1">Documento</option>
                              <option value="2">Teste</option>  
                          </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label" for="item">Item Encontrado<h11>*</h11></label>  
                    <div class="col-md-4">
                        <input id="item" name="item" placeholder="" class="form-control input-md" required="" type="text" value="{{ old('item') }}">

                        @if ($errors->has('item'))
                        <span class="help-block">
                            <strong>{{ $errors->first('item') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Descrição <h11>*</h11></label>  
                    <div class="col-md-8">
                        <textarea id="description" name="description" placeholder="" class="form-control input-md" required="" type="text" value="{{ old('description') }}"></textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                    <div class="col-md-2">
                        <!--{!! Form::input('search', 'cep', null, ['class' => 'form-control input-md', '', 'placeholder' => 'Apenas números', 'maxlength' =>'8', 'pattern'=> '[0-9]+$', 'Telefone']) !!}-->
                        <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" type="search"  value="" maxlength="8" pattern="[0-9]+$">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="street">Endereço</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rua</span>
                            <input id="street" name="street" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">Bairro</span>
                            <input id="neighborhood" name="neighborhood" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="city"></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">Cidade</span>
                            <input id="city" name="city" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon">Estado</span>
                            <input id="state" name="state" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    <label class="col-md-2 control-label" for="loss_date">Data do item encontrado</label>
                    <div class="col-md-2">
                        <input id="loss_date" name="loss_date" class="form-control date-mask" placeholder="dd/mm/aaaa" type="date" maxlength="10" 
                        OnKeyPress="formatar('dd/mm/aaaa', this)" value="{{ old('loss_date') }}">
                    </div>

                    <label class="col-md-1 control-label" for="status">Ativo <h11>*</h11></label>
                    <div class="col-md-2"> 
                        <label required="" class="radio-inline" for="status-0" >
                            {!!  Form::checkbox('status', '1', true) !!}
                            <!--<input name="ativo" id="ativo" value="1" type="checkbox" required>-->
                        </label>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                        <a class="btn btn-primary" href="javascript:window.history.go(-1)">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
@endsection



