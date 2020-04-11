@extends('site.layout')

@section('title', 'Cadastrar Perda')

@section('content_header')

@section('content')

<div class="row">
	<div class="col-sm-10 col-md-5">
		<h1>Já sou cadastrado</h1>
		<div class="resp-wrapper">
			<form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
				{{ csrf_field() }}

				<div class="control-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
					<label class="control-label" for="email">E-mail</label>
					<input class="form-control" id="email" type="text" name="email" value="{{ old('email') }}" />
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif                        
				</div>
				<div class="control-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
					<label class="control-label" for="password">Senha</label>
					<input class="form-control" id="password" type="password" name="password" value="" autocomplete="off" />
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				<div class="control-group">
					<div class="controls checkbox">
						<input id="remember" type="checkbox" name="remember" value="1" /> 
						<label for="remember">Me mantenha logado</label>
					</div>
					<div class="text">
						<button type="submit" class="input-btn">Entrar</button></div>
					</div>
					<div>
						<a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}">Esqueceu a senha?</a>
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-12 col-md-1">
			<div class="resp-wrapper">
				<div align="right" style="border-right: 4px solid #c5c1c1;height: 488px;margin-top: 20px;"></div>
			</div> 
		</div> 
		<div class="col-sm-12 col-md-5">
			<h1>Ainda não tenho cadastro</h1>
			<div class="resp-wrapper">
				<form action="{{ url(config('adminlte.register_url', 'store')) }}" method="post">
					{{ csrf_field() }}
					<ul id="error_list"></ul>
					<div class="control-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
						<label class="control-label" for="name">Nome</label>
						<input class="form-control" type="text" name="name" value="{{ old('name') }}" />
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif                       
					</div>
					<div class="control-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
						<label class="control-label" for="email">E-mail</label>
						<input class="form-control" type="text" name="email" value="{{ old('email') }}" /> 
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif   
					</div>
					<div class="control-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
						<label class="control-label" for="password">Senha</label>
						<input class="form-control" type="password" name="password" value="" autocomplete="off" /> 
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif    
					</div>
					<div class="control-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
						<label class="control-label" for="password-2">Repetir senha</label>
						<input class="form-control" type="password" name="password_confirmation" value="" autocomplete="off" />
						<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
						@if ($errors->has('password_confirmation'))
						<span class="help-block">
							<strong>{{ $errors->first('password_confirmation') }}</strong>
						</span>
						@endif
						<p id="password-error" style="display:none;">As senhas não combinam</p>
					</div>
				</br>
				<div class="g-recaptcha" data-sitekey="teste.com" data-theme='light'></div>
				<noscript>
					<div style='width: 302px; height: 352px;'>
						<div style='width: 302px; height: 352px; position: relative;'>
							<div style='width: 302px; height: 352px; position: absolute;'>
								<iframe src='https://www.google.com/recaptcha/api/fallback?k=6LcOvQgTAAAAAJl3ojKnucNR5cr1QdF6Lx2I0h9S'
								frameborder='0' scrolling='no'
								style='width: 302px; height:352px; border-style: none;'>
							</iframe>
						</div>
						<div style='width: 250px; height: 80px; position: absolute; border-style: none;
						bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;'>
						<textarea id='g-recaptcha-response' name='g-recaptcha-response'
						class='g-recaptcha-response'
						style='width: 250px; height: 80px; border: 1px solid #c1c1c1;
						margin: 0px; padding: 0px; resize: none;' value=''>
					</textarea>
				</div>
			</div>
		</div>
	</noscript> 
</div>
</br>
<div class="control-group">                    
	<div class="text"><button type="submit" class="input-btn">Criar</button></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</br>
</br>
<section class="p-3 mb-2 bg-success">
	<div class="container" id="content">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-xl-4">
				<img class="app-mobile" src="images/iphone.png" style="max-width: 69%">
			</div>
		</br>
	</br>
	<div class="col-xs-12 col-md-6 col-xl-8 text-center ptb60">
		<h2>
			<a href="https://play.google.com/store/apps/details?id=br.com.perdiomeu.perdiomeu" target="_blank">Baixe o app I Found!
			</a>
		</h2>
		<p>Experimente essa incrível ferramenta também no Android, gratuitamente.</p>
		<a href="https://play.google.com/store/apps/details?id=br.com.perdiomeu.perdiomeu" target="_blank">
			<img class="" src="https://www.perdiomeu.com.br/oc-content/themes/perdiomeu/images/disponivel-no-google-play.png">
		</a>
	</div>
</div>
</div>
</section>
@stop

@section('adminlte_js')
@yield('js')
@stop