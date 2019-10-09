<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Company $company){
        return view('orders.create', compact('company'));
    }


    public function store(Request $request, Company $company){
        $company->orders()->create($request->all());
        return redirect(route('companies.show', $company));
    }
}
