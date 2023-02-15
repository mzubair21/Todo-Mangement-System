<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role', compact('roles'));
    }
    public function create(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        session()->flash('status', " $request->name has been added successfully.");
        return redirect()->back();
    }
}
