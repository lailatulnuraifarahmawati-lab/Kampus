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
        return view('seminars.index', compact('seminar'));
    }

   public function edit($id)
{
    $seminar = Seminar::findOrFail($id);

    return view('seminars.edit', compact('seminar'));
}

   public function update(Request $request, $id)
{
    $seminar = Seminar::findOrFail($id);

    $seminar->update($request->all());

    return redirect()->route('seminars.index');
}

   public function destroy($id)
{
    $seminar = Seminar::findOrFail($id);

    $seminar->delete();

    return redirect()->route('seminars.index');
}
}