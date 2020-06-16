<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users              = User::all();
        $categories         = Category::all();
        $sub_categories     = SubCategory::all();
        $products           = Product::all();
        return view('home', compact('users', 'categories', 'sub_categories', 'products'));
    }

    public function users()
    {
        $users              = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::where('id' ,$id)->get();
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        if (intval($id) === Auth::user()->id) {
        }else{
            $this->authorize('onlyAdmin', Auth::user());
        }
        $user              = User::where('id', $id)->get();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->save();
        return redirect('users')->with('success', 'record edited successfully');
    }

    public function store(Request $request)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $user = new User;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->role         = $request->role;
        if ($request->status == 'on') {
            $user->status       = '1';
        }else{
            $user->status       = '0';
        }
        $user->password     = Hash::make($request->password);
        $user->save();

        return redirect('users')->with('success', 'user created successfully');
    }

    public function destroy($id)
    {
        $this->authorize('onlyAdmin', Auth::user());
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with('success', 'user deleted successfully');
    }
}
