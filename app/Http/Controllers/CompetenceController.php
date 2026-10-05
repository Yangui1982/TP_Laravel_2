<?php

// app/Http/Controllers/CompetenceController.php



namespace App\Http\Controllers;



use App\Models\Competence;

use Illuminate\Http\Request;



class CompetenceController extends Controller

{

    public function index()

    {

        $competences = Competence::orderBy('nom')->get();

        return view('competences.index', compact('competences'));

    }



    public function create()

    {

        return view('competences.create');

    }



    public function store(Request $request)

    {

        $validated = $this->validateCompetence($request);

        Competence::create($validated);

        return redirect()->route('competences.index')->with('success', 'Compétence ajoutée.');

    }



    public function show(Competence $competence)

    {

        return view('competences.show', compact('competence'));

    }



    public function edit(Competence $competence)

    {

        return view('competences.edit', compact('competence'));

    }



    public function update(Request $request, Competence $competence)

    {

        $validated = $this->validateCompetence($request, $competence->id);

        $competence->update($validated);

        return redirect()->route('competences.index')->with('success', 'Compétence mise à jour.');

    }



    public function destroy(Competence $competence)

    {

        $competence->delete();

        return redirect()->route('competences.index')->with('success', 'Compétence supprimée.');

    }



    private function validateCompetence(Request $request, ?int $ignoreId = null): array

    {

        return $request->validate([

            'slug'        => 'required|alpha_dash|max:255|unique:competences,slug' . ($ignoreId ? ",$ignoreId" : ''),

            'nom'         => 'required|string|max:255',

            'niveau'      => 'required|string|max:255',

            'description' => 'required|string',

        ]);

    }

}
