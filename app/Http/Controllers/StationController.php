<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Person;
use App\Models\Station;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $stations = Station::paginate();

        return view('station.index', compact('stations'))
            ->with('i', ($request->input('page', 1) - 1) * $stations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $station = new Station();

        $people = Person::all(); // Obtener todas las personas

        $accesses = Access::all(); // Obtener todos los accesos

        return view('station.create', compact('station', "people", "accesses"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StationRequest $request): RedirectResponse
    {
        Station::create($request->validated());

        return Redirect::route('stations.index')
            ->with('success', 'Station created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $station = Station::find($id);

        return view('station.show', compact('station'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $station = Station::find($id);

        $people = Person::all(); // Obtener todas las personas

        $accesses = Access::all(); // Obtener todos los accesos

        return view('station.edit', compact('station', "people" , "accesses"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StationRequest $request, Station $station): RedirectResponse
    {
        $station->update($request->validated());

        return Redirect::route('stations.index')
            ->with('success', 'Station updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Station::find($id)->delete();

        return Redirect::route('stations.index')
            ->with('success', 'Station deleted successfully');
    }
}
