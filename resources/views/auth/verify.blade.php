@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"></div>
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar Endereço de E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu email.') }}
                        </div>
                    @endif

                    {{ __('Verifique se recebeu o email de confirmação.') }}
                    {{ __('Se você não recebeu o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para enviar novamente') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
