@extends('layouts.app') @section('content')
<div class="container">
  <div class="row"></div>
  <div class="row justify-content-center my-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-dark mt-2"><h1>Editar Endereço</h1></div>

        <div class="card-body text-dark">
          {!! Form::open(['action' => ['EnderecosController@update',
          $endereco->id], 'method' => 'POST']) !!}
          <div class="form-group">
            {{Form::label('endereco', 'Endereço')}}
            {{Form::text('endereco', $endereco->endereco, ['class' => 'form-control', 'placeholder' => 'Endereço'])}}
            {{Form::label('nro_endereco', 'Número')}}
            {{Form::text('nro_endereco', $endereco->nro_endereco, ['class' => 'form-control', 'placeholder' => 'Número'])}}
          </div>
          <div class="form-group">
            {{Form::label('complemento', 'Complemento')}}
            {{Form::text('complemento', $endereco->complemento, ['class' => 'form-control', 'placeholder' => 'Complemento'])}}
          </div>
          <div class="form-group">
            {{Form::label('bairro', 'Bairro')}}
            {{Form::text('bairro', $endereco->bairro, ['class' => 'form-control', 'placeholder' => 'Bairro'])}}
          </div>
          <div class="form-group">
            {{Form::label('cidade', 'Cidade')}}
            {{Form::text('cidade', $endereco->cidade, ['class' => 'form-control', 'placeholder' => 'Cidade'])}}
            {{Form::label('uf', 'UF')}}
            {{Form::text('uf', $endereco->uf, ['class' => 'form-control', 'placeholder' => 'UF'])}}
          </div>
          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
          {!! Form::close() !!}
          <hr />
          <div class="row mx-1">
            <a href="/enderecos" class="btn btn-primary">Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
