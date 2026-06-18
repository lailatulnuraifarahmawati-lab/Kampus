<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::all();
        return view('seminars.index', compact('seminars'));
    }

    public function create()
    {
        return view('seminars.create');
    }

    public function store(Request $request)
    {
        Seminar::create($request->all());

        return redirect()->route('seminars.index');
    }

    public function show(Seminar $seminar)
    {
        //
    }

    public function edit(Seminar $seminar)
    {
        return view('seminars.edit', compact('seminar'));
    }

    public function update(Request $request, Seminar $seminar)
    {
        $seminar->update($request->all());

        return redirect()->route('seminars.index');
    }

    public function destroy(Seminar $seminar)
    {
        $seminar->delete();

        return redirect()->route('seminars.index');
    }
}