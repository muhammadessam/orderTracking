<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\companyRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(!(Auth::user()->email=="admin@admin.com"), 403);
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(companyRequest $request)
    {
        /*
         * since we are using request the validation layer is implemented with the request so
         * it won't enter the method unless the request is valid
         * */
        Company::create($request->all());
        return redirect(route('companies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edite', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect(route('companies.index'));
    }


    public function addTags(Company $company)
    {
        $tags = Tag::all();
        return view('tags.create', [
            'company' => $company,
            'tags' => $tags
        ]);
    }

    public function storeTag(Company $company, Tag $tag)
    {
        $company->tags()->attach($tag);
        return redirect(route('companies.show', $company));
    }
}
