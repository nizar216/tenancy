<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        $clients = Tenant::all();
        return view('central.tenant.index', compact('clients'));
    }
    public function create()
    {
        return view('central.tenant.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'domain' => 'required',
        ]);

        $tenant = Tenant::create(['id' => $validatedData['name']]);
        $tenant->domains()->create(['domain' => $validatedData['domain'] . '.localhost']);


        return redirect('/clients/create')->with('success', 'Client added successfully!');
    }

}
