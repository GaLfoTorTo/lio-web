<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;
use App\Models\Posts;

class UsuariosController extends Controller
{

    public function novo(){
        return view('novo');    
    }

    public function cadastrar(Request $request){
        if($request->senha != ''){
            $request['senha'] = bcrypt($request['senha']);
        }
        if($request->hasFile('foto_temp')){
            if($request->is('api/cadastrar')){
                $nome_foto = $request->user_name.'_'.date('YmdHmi').'.'.$request->ext;
            }else{
                $nome_foto = $request->user_name.'_'.date('YmdHmi').'.'.$request->foto_temp->getClientOriginalExtension();
            }
            $request['foto'] = '/uploads/usersFoto/'.$nome_foto;
            $request->foto_temp->move(public_path('/uploads/usersFoto'), $nome_foto);
        }else{
            $request['foto'] = '/uploads/usersFoto/user-default.png';
        }

        if($request->id != ''){
            $usuario = Usuarios::find($request->id);
            $usuario->update($request->all());
        }else {
            $usuario = Usuarios::create($request->all());
        }
        if($request->is('api/cadastrar')){
            return response()->json(['success' => 'Salvo com sucesso!'],200);
        }else{
            return redirect('/')->with('success', 'Salvo com sucesso!');
        }
    }
    public function perfil(Request $request, $id) {
        $posts = Posts::where('usuario_id','like', $id)->orderBy('created_at', 'DESC')->get();
        return response()->json($posts, 200);
    }

    public function usuarios(Request $request){
        $usuarios = Usuarios::get();
        return response()->json($usuarios, 200);
    }

    public function logarApp(Request $request){
        $usuario = Usuarios::where('email', $request->email)->first();
        if(Hash::check($request->senha, $usuario->senha)){
            $token = $usuario->createToken($request->device_name.'_'.$usuario->name)->plainTextToken;
            return response()->json(['usuario' => $usuario, 'token' => $token],200);
        }
    }
}
