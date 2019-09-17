<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Endereco;
use App\User;

class EnderecosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$enderecos = Endereco::where('endereco', 'Rua da Ponta')->get();
        $enderecos =  Endereco::orderBy('created_at', 'desc')->paginate(5);
        return view('enderecos.index')->with('enderecos', $enderecos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enderecos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'endereco' => 'required',
            'nro_endereco' => 'required',
            'complemento' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required'
        ]);

        $endereco = new Endereco;
        $endereco->endereco = $request->input('endereco');
        $endereco->nro_endereco = $request->input('nro_endereco');
        $endereco->complemento = $request->input('complemento');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->uf = $request->input('uf');
        $endereco->cod_pessoa = auth()->user()->id;
        $endereco->save();

        return redirect('/enderecos')->with('success', 'Endereço Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cod_pessoa = auth()->user()->id;
        // $user = User::find($cod_pessoa);
        // return view('dashboard')->with('enderecos', $user->enderecos);

        $endereco = Endereco::find($id);
        //return view('enderecos.show')->with('endereco', $endereco);
        return view('enderecos.show')->with('endereco', $endereco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endereco = Endereco::find($id);

        if(auth()->user()->id !== $endereco->cod_pessoa) {
            return redirect('/enderecos')->with('error', 'Endereço não autorizado.');
        }
        //Check if address exists before edit
        if (!isset($endereco)){
            return redirect('/enderecos')->with('error', 'Nenhum endereço encontrado.');
        }

        return view('enderecos.edit')->with('endereco', $endereco);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'endereco' => 'required',
            'nro_endereco' => 'required',
            'complemento' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required'
        ]);

        $endereco = Endereco::find($id);
        $endereco->endereco = $request->input('endereco');
        $endereco->nro_endereco = $request->input('nro_endereco');
        $endereco->complemento = $request->input('complemento');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->uf = $request->input('uf');
        $endereco->save();

        return redirect('/enderecos')->with('success', 'Endereço Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::find($id);

        if(auth()->user()->id !== $endereco->cod_pessoa) {
            return redirect('/enderecos')->with('error', 'Endereço não autorizado.');
        }
        //Check if address exists before deleting
        if (!isset($endereco)){
            return redirect('/enderecos')->with('error', 'Nenhum endereço encontrado');
        }

        $endereco->delete();
        return redirect('/enderecos')->with('success', 'Endereço Removido');
    }     

    public function search(Request $request, Endereco $enderecos) {
            
        $dataForm = $request->all();

        if(isset($dataForm['nome']) && (isset($dataForm['telefone']))) {
            $enderecos = Endereco::whereHas('user', function($q) use ($dataForm)
            {
            $q->where('nome', $dataForm['nome']);

            })->orWhereHas('user', function($q) use ($dataForm)
            {
            $q->where('telefone', $dataForm['telefone']);

            })
            ->paginate(5);
        }

        if(isset($dataForm['nome'])) {
            $enderecos = Endereco::whereHas('user', function($q) use ($dataForm)
            {
            $q->where('nome', $dataForm['nome']);

            })->paginate(5);
        }
        
        if(isset($dataForm['telefone'])) {
            $enderecos = Endereco::whereHas('user', function($q) use ($dataForm)
            {
            $q->where('telefone', $dataForm['telefone']);

            })->paginate(5);
            //->orderBy('created_at', 'desc')
        }
           
        
 


        //return view('enderecos.index')->with('enderecos', $e, $dataForm );
        return view('enderecos.index', compact('enderecos', 'dataForm'));
    } 


}



