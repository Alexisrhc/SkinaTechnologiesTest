<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories     = SubCategory::where('deleted_at', NULL)->paginate(5);
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories     = Category::all();
        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SubCategory $subCategory)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $subCategory->name         = $request->name;
        if ($request->status == 'on') {
            $subCategory->status       = '1';
        }else{
            $subCategory->status       = '0';
        }
        $subCategory->category_id   = $request->category_id;
        $subCategory->quantity_products = '0';
        $subCategory->save();

        return redirect('subcategories')->with('success', 'sub category created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory, $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return view('subcategories.show', compact('subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory, $id)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $subCategory = SubCategory::findOrFail($id);
        return view('subcategories.edit', compact('subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $subCategory->name = $request->name;
        if ($request->status == 'on') {
            $subCategory->status       = '1';
        }else{
            $subCategory->status       = '0';
        }
        $subCategory->category_id = '1';
        $subCategory->quantity_products = '0';
        $subCategory->save();

        return redirect('subcategories')->with('success', 'record edited successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $subCategory->delete();
        return redirect('subcategories')->with('success', 'sub categories deleted successfull');
    }
}
