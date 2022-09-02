<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        return view("alunos.alunos")
            ->with('alunos', $alunos);
    }

    public function show() {
    }

    public function create() {
        return view("alunos.alunosCreate");
    }

    public function store(Request $request) {
        $aluno = new Aluno;
        $aluno->nome = $request->input("nome");
        $aluno->cpf = $request->input("cpf");
        $aluno->sexo = $request->input("sexo");

        $aluno->save();
        return view('alunos.alunos');
    }

    public function edit(){
    }

    public function update() {
    }

    public function destroy() {
    }
}
