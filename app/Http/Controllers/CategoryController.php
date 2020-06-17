<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories     = Category::paginate(6);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('onlyAdmin', Auth::user());
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(category $category, CategoryRequest $request)
    {
        $category->name         = $request->name;
        if ($request->status == 'on') {
            $category->status       = '1';
        }else{
            $category->status       = '0';
        }
        $category->save();

        return redirect('categories')->with('success', 'category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $this->authorize('onlyAdmin', Auth::user());
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, category $category)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $category->name = $request->name;
        if ($request->status == 'on') {
            $category->status       = '1';
        }else{
            $category->status       = '0';
        }

        $category->save();

        return redirect('categories')->with('success', 'record edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $category->delete();
        return redirect('categories')->with('success', 'category deleted successfully');
    }
}
