<?php

namespace App\Http\Controllers;

use App\ImplementorOrganization;
use Illuminate\Http\Request;

class ImplementorOrganizationController extends Controller
{
    public function index()
    {
        $implementorOrganization = implementorOrganization;

        return view('implementorOrganization.index',compact('implementorOrganization'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('implementorOrganization.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ministry'=> 'required',
            'sub_ministry'=> 'required',
            'sector'=> 'required',
            'sub_sector'=> 'required',
            'division'=> 'required',
            'subdivision'=> 'required',
        ]);

        ImplementorOrganization::create($request->all());

        return redirect()->route('implementorOrganization.index')
            ->with('success','ImplementorOrganization created successfully.');
    }
}
