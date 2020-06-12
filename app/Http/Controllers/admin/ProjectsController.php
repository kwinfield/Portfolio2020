<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('admin/all-projects');
    }
    public function create(){
        return view('admin/add-project');
    }
    public function edit(){
        return view('admin/edit-project');
    }
    public function delete(){
        return view('admin/delete-project');
    }
}
