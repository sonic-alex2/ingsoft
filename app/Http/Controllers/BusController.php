<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $buses = Bus::paginate();

        return view('bus.index', compact('buses'))
            ->with('i', ($request->input('page', 1) - 1) * $buses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $bus = new Bus();

        return view('bus.create', compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusRequest $request): RedirectResponse
    {
        Bus::create($request->validated());

        return Redirect::route('buses.index')
            ->with('success', 'Bus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $bus = Bus::find($id);

        return view('bus.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $bus = Bus::find($id);

        return view('bus.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusRequest $request, Bus $bus): RedirectResponse
    {
        $bus->update($request->validated());

        return Redirect::route('buses.index')
            ->with('success', 'Bus updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Bus::find($id)->delete();

        return Redirect::route('buses.index')
            ->with('success', 'Bus deleted successfully');
    }
}
