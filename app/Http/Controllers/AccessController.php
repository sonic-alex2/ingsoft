<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AccessRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $accesses = Access::paginate();

        return view('access.index', compact('accesses'))
            ->with('i', ($request->input('page', 1) - 1) * $accesses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $access = new Access();

        return view('access.create', compact('access'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccessRequest $request): RedirectResponse
    {
        Access::create($request->validated());

        return Redirect::route('accesses.index')
            ->with('success', 'Access created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $access = Access::find($id);

        return view('access.show', compact('access'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $access = Access::find($id);

        return view('access.edit', compact('access'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccessRequest $request, Access $access): RedirectResponse
    {
        $access->update($request->validated());

        return Redirect::route('accesses.index')
            ->with('success', 'Access updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Access::find($id)->delete();

        return Redirect::route('accesses.index')
            ->with('success', 'Access deleted successfully');
    }
}
