<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
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
        return view('layout.members.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
