<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\WorkStep;
use Illuminate\Http\Request;

class WorkStepsController extends Controller
{

    public function index()
    {
        $steps = WorkStep::all();
        return view('control-panel.work-steps.index',compact('steps'));
    }


    public function create()
    {
        return view('control-panel.work-steps.create');
    }


    public function store(Request $request)
    {
        WorkStep::create($request->all());
        return redirect()->route('work-steps.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $step = WorkStep::findOrFail($id);
        return view('control-panel.work-steps.edit',compact('step'));
    }


    public function update(Request $request, $id)
    {
        $step = WorkStep::findOrFail($id);
        $step->update($request->all());
        return redirect()->route('work-steps.index');
    }


    public function destroy($id)
    {
        $step = WorkStep::findOrFail($id);
        $step->delete();
        return redirect()->back();
    }
}
