<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    public function index()
    {
        return Company::all();
        // $companies = Company::all();
        // return response()->json($companies);
    }
    
    public function show(Company $company)
    {
        return $company;
        // $company = Company::find($id);

        // if(!$company) {
        //     return response()->json([
        //         'message'   => 'Record not found',
        //     ], 404);
        // }

        // return response()->json($company);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return response()->json($company, 201);
        // $company = new Company();
        // $company->fill($request->all());
        // $company->save();

        // return response()->json($company, 201);
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return response()->json($company, 200);
        // $company = Company::find($id);

        // if(!$company) {
        //     return response()->json([
        //         'message'   => 'Record not found',
        //     ], 404);
        // }

        // $company->fill($request->all());
        // $company->save();

        // return response()->json($company);
    }
    
    public function destroy(Company $company)
    {
        $company->delete();

        return response()->json(null, 204);
        // $company = Company::find($id);

        // if(!$company) {
        //     return response()->json([
        //         'message'   => 'Record not found',
        //     ], 404);
        // }

        // $company->delete();
    }
}
