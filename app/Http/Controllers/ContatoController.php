<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contato;
use App\Mail\EmailEnvio;
use Illuminate\Support\Facades\DB;



class ContatoController extends Controller
{
    public function index(){
        $registros = Contato::all();

        $cadastradosSemana = DB::table('contatos')
        ->select(DB::raw('COUNT(*) as total'))
        ->whereRaw('created_at >= UNIX_TIMESTAMP(DATE_SUB(NOW(),INTERVAL 1 WEEK))')
        ->first();

        $cadastradosHora = DB::table('contatos')
        ->select(DB::raw('COUNT(*) as total'))
        ->whereRaw('created_at >= UNIX_TIMESTAMP(DATE_SUB(NOW(),INTERVAL 1 HOUR))')
        ->first();        

        // dd($cadastradosSemana);

        return view('admin.contatos.index', compact('registros', 'cadastradosSemana', 'cadastradosHora'));
    }

    public function adicionar(){
        $visualizar = 'enabled';
        return view('admin.contatos.adicionar', compact('visualizar'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
    

        $contato = new Contato();
        $contato->nome = $dados['nome'];
        $contato->email = $dados['email'];
        // $contato->telefone = $dados['telefone'];
        $contato->linkLinkedIn = $dados['linkLinkedIn'];
        $contato->linkFacebook = $dados['linkFacebook'];
        $contato->save();
        
        Mail::to($contato->email)->send(new EmailEnvio($contato));

        return redirect()->route('admin.contatos');        
    }

    public function editar($id)
    {
        $visualizar = 'enabled';
        $registro = Contato::find($id);
        return view('admin.contatos.editar', compact('registro', 'visualizar'));
    }  

    public function visualizar($id)
    {
        $registro = Contato::find($id);
        $visualizar = 'disabled';
        return view('admin.contatos.visualizar', compact('registro', 'visualizar'));
    }      
    
    public function atualizar(Request $req, $id){
        $dados = $req->all();
        

        $contato = Contato::find($id);
        $contato->nome = $dados['nome'];
        $contato->email = $dados['email'];
        // $contato->telefone = $dados['telefone'];
        $contato->linkLinkedIn = $dados['linkLinkedIn'];
        $contato->linkFacebook = $dados['linkFacebook'];
        $contato->update();
        
        return redirect()->route('admin.contatos');        
    }    

    public function deletar($id)
    {
        $contato = Contato::find($id)->delete();;
        return redirect()->route('admin.contatos');
    }

    public function visualizarTelefone($id){
        $registro = Contato::find($id);  
        $visualizar = 'disabled';
        return view('admin.contatos.visualizar_telefone', compact('registro', 'visualizar'));
    }    

    public function atualizarTelefone(Request $req, $id){
        $contato = Contato::find($id);  
        $dados = $req->all();
        $contato->telefone = $dados['telefone'];
        $contato->update();

        return redirect()->route('admin.contatos');
    }      
    
    public function editarTelefone($id)
    {
        $visualizar = 'enabled';
        $registro = Contato::find($id);
        return view('admin.contatos.editar_telefone', compact('registro', 'visualizar'));
    }      
}
