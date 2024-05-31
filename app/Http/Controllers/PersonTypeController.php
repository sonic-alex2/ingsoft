<?php

namespace App\Http\Controllers;

use App\Models\PersonType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PersonTypeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PersonTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $personTypes = PersonType::paginate();

        return view('person-type.index', compact('personTypes'))
            ->with('i', ($request->input('page', 1) - 1) * $personTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $personType = new PersonType();

        return view('person-type.create', compact('personType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonTypeRequest $request): RedirectResponse
    {
        PersonType::create($request->validated());

        return Redirect::route('person-types.index')
            ->with('success', 'PersonType created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $personType = PersonType::find($id);

        return view('person-type.show', compact('personType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $personType = PersonType::find($id);

        return view('person-type.edit', compact('personType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonTypeRequest $request, PersonType $personType): RedirectResponse
    {
        $personType->update($request->validated());

        return Redirect::route('person-types.index')
            ->with('success', 'PersonType updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PersonType::find($id)->delete();

        return Redirect::route('person-types.index')
            ->with('success', 'PersonType deleted successfully');
    }
}
