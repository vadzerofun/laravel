<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;

class RuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = Rule::all();

        return view("rule.rule", ["rules" => $rules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("rule.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=> 'required|string',
        ]);

        Rule::create($data);

        return redirect()->route('rule');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rule = Rule::find($id);
        return view("rule.edit", ["rule" => $rule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name'=>'required|string',
        ]);

        Rule::find($id)->update($data);

        return redirect()->route('rule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rule::findOrFail($id)->delete();

        return redirect()->route('rule');
    }
}
