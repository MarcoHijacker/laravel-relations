<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class EmployeeController extends Controller
{
    public function index() {
      $emps = Employee::all();

      return view('employee-index', compact('emps'));
    }

    public function show($id) {
      $emp = Employee::findOrFail($id);
      return view('employee-show', compact('emp'));
    }

    public function create() {
      $locs = Location::all();
      return view('employee-create', compact('locs'));
    }

    public function store(Request $request) {
      $data = $request -> all();
      Employee::create($data);

      return redirect() -> route('employee-index');
    }

    public function destroy($id) {
      $emp = Employee::findOrFail($id);
      $emp -> delete();

      return redirect() -> route('employee-index');
    }

    public function edit($id) {
      $emp = Employee::findOrFail($id);
      $locs = Location::all();

      return view('employee-edit', compact('emp', 'locs'));
    }
}
