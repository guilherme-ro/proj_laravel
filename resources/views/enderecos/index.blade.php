@extends('layouts.app') @section('content')
<div class="container">
  <div class="row"></div>
  <div class="row justify-content-center my-5">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header text-dark mt-2">
          <h3>Endereços Cadastrados</h3>
        </div>

        <div class="card-body text-dark">
          <form action="search" method="POST" class="form form-inline">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input
              type="text"
              name="nome"
              class="form-control mb-resp"
              placeholder="Nome"
            />
            <input
              type="text"
              name="telefone"
              class="form-control tel mb-resp"
              placeholder="Telefone"
            />
            <button type="submit" class="btn btn-primary">Pesquisar</button>
          </form>

          @if(count($enderecos) > 0)
          <div class="row mt-3">
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-8 col-sm-12 px-auto">
              <table class="table-responsive text-dark">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Opções</th>
                  </tr>
                </thead>
                @foreach($enderecos as $endereco)
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td>{{ $endereco->user->nome}}</td>
                    <td>{{ $endereco->endereco}}</td>
                    <td>{{ $endereco->user->telefone}}</td>
                    <td>
                      <div class="d-flex d-inline-flex">
                        <a
                          href="/enderecos/{{$endereco->id}}"
                          class="btn btn-primary btn-sm mr-2 view_data"
                          >Mostrar</a
                        >

                        @if(!Auth::guest()) @if(Auth::user()->id ==
                        $endereco->cod_pessoa)
                        <a
                          href="/enderecos/{{$endereco->id}}/edit"
                          class="btn btn-warning btn-sm mr-2"
                          >Editar</a
                        >
                        {!!Form::open(['action' =>
                        ['EnderecosController@destroy', $endereco->id], 'method'
                        => 'POST', 'class' => 'delete'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!} @endif @endif
                      </div>
                    </td>
                  </tr>
                  <tr></tr>
                </tbody>

                @endforeach
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-8 col-sm-12">
              <br />
              @if(isset($dataForm))
              {{ $enderecos->appends($dataForm)->links() }}
              @else
              {{ $enderecos->links() }}
              @endif
            </div>
            <div class="col-md-3 col-sm-12"></div>
          </div>
          @else
          <div class="row mt-3">
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-8 col-sm-12 px-auto">
              <p>Nenhum endereço Encontrado</p>
            </div>
            <div class="col-md-3 col-sm-12"></div>
          </div>
          @endif
          <hr />
          <div class="container">
            <div class="row m-3">
              <a href="/" class="btn btn-primary m-2">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
