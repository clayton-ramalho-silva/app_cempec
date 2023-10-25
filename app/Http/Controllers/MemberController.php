<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $members = Member::all();



        return view('layout.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layout.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'data_nascimento' => 'date',
        //     'cpf' => 'required|string|unique:members,cpf',
        //     'email' => 'email',
        //     'telefone_fixo' => 'string|max:20',
        //     'celular' => 'string|max:20',
        //     'endereco' => 'string|max:100',
        //     'cidade' => 'string|max:50',
        //     'estado' => 'string|max:10',
        //     'cep' =>'string|max:10',
        //     'cargo' => 'string|max:20',
        //     'departamentos' => 'string|max:50',
        //     'cargo_admin' => 'string|max:50',
        //     'data_membresia' => 'date',
        //     // 'foto_perfil' => 'file|image:jpg,jpeg,png',
        // ],[
        //     'name.required' => 'O nome é obrigatório',
        //     'name.max' => 'O nome deveter no máximo 50 caracteres',
        //     'cpf.required' => 'O CPF é obrigatório',
        //     'cpf.unique' => 'O CPF deve ser único',
        //     'email' => 'O email deve ser válido ex: example@email.com.br',


        // ]);

       $member = new Member;

       $member->name = $request->name;
       $member->data_nascimento = $request->data_nascimento;
       $member->cpf = $request->cpf;
       $member->email = $request->email;
       $member->telefone_fixo = $request->telefone_fixo;
       $member->celular = $request->celular;
       $member->endereco = $request->endereco;
       $member->cidade = $request->cidade;
       $member->estado = $request->estado;
       $member->cep = $request->cep;
       $member->cargo = $request->cargo;
       $member->departamentos = $request->departamentos;
       $member->cargo_admin = $request->cargo_admin;
       $member->data_membresia = $request->data_membresia;

       // upload foto
       if($request->hasFile('foto_perfil') && $request->file('foto_perfil')->isValid()){
        $requestImage = $request->foto_perfil;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $requestImage->move(public_path('img/members'), $imageName);

        $member->foto_perfil = $imageName;

       }
       $member->save();

       return redirect()->route('members.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member): View
    {

        return view('layout.members.show', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member): View
    {
        return view('layout.members.edit',['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'data_nascimento' => 'date',
            'cpf' => 'required|string|unique:members,cpf,'.$member->id,
            'email' => 'email',
            'telefone_fixo' => 'string|max:20',
            'celular' => 'string|max:20',
            'endereco' => 'string|max:100',
            'cidade' => 'string|max:50',
            'estado' => 'string|max:10',
            'cep' =>'string|max:10',
            'cargo' => 'string|max:20',
            // 'departamentos' => 'string|max:50',
            'cargo_admin' => 'string|max:50',
            'data_membresia' => 'date',
            // 'foto_perfil' => 'file|image:jpg,jpeg,png',
        ],[
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome deveter no máximo 50 caracteres',
            'cpf.required' => 'O CPF é obrigatório',
            'cpf.unique' => 'O CPF deve ser único',
            'email' => 'O email deve ser válido ex: example@email.com.br',

        ]);

        $data = $request->all();

        $imagem_atual = $member->foto_perfil;

        // upload foto
       if($request->hasFile('foto_perfil') && $request->file('foto_perfil')->isValid()){
            $requestImage = $request->foto_perfil;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/members'), $imageName);

            $data['foto_perfil'] = $imageName;

            if($imagem_atual){
                unlink(public_path('img/members/'.$imagem_atual));

            }
       }

       Member::findOrFail($member->id)->update($data);


       return redirect()->route('members.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        unlink(public_path('img/members/'.$member->foto_perfil));
        $member->delete();

        return redirect()->route('members.index');
    }
}
