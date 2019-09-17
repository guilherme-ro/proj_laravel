@extends('layouts.app') @section('content')
<div class="container">
  <div class="row"></div>
  <div class="row justify-content-center my-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-dark mt-2">
          <h1>Cadastrar Endereço</h1>
        </div>

        <div class="card-body text-dark">
          {!! Form::open(['action' => 'EnderecosController@store', 'method' =>
          'POST']) !!}
          <div class="form-group">
            {{Form::label('endereco', 'Endereço')}}
            {{Form::text('endereco', '', ['class' => 'form-control mb-1', 'placeholder' => 'Endereço'])}}
            {{Form::label('nro_endereco', 'Número')}}
            {{Form::text('nro_endereco', '', ['class' => 'form-control mb-1', 'placeholder' => 'Número'])}}
          </div>
          <div class="form-group">
            {{Form::label('complemento', 'Complemento')}}
            {{Form::text('complemento', '', ['class' => 'form-control mb-1', 'placeholder' => 'Complemento'])}}
          </div>
          <div class="form-group">
            {{Form::label('bairro', 'Bairro')}}
            {{Form::text('bairro', '', ['class' => 'form-control mb-1', 'placeholder' => 'Bairro'])}}
          </div>
          <div class="form-group">
            {{Form::label('cidade', 'Cidade')}}
            {{Form::text('cidade', '', ['class' => 'form-control mb-1', 'placeholder' => 'Cidade'])}}
            {{Form::label('uf', 'UF')}}
            {{Form::text('uf', '', ['class' => 'form-control mb-1', 'placeholder' => 'UF'])}}
          </div>
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

