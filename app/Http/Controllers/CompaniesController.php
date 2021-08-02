<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Company;

class CompaniesController extends Controller
{
    public function companies() {
        $companies = Company::select('*')->get();
        dd($companies);
    }

    public function new_company(Request $request) {

        $company = new Company();
        $company->name = $request->name;
        $company->save();

        return response()->json($company, 200);
    }
}
