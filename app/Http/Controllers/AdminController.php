<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('admin.index',
            [
                'plans' => $plans,
            ]);
    }

    public function newPlan()
    {
        return view('admin.newPlan');
    }

    public function createPlan(Request $request)
    {
        $data = [];

        $data['name'] = $request->get('name');
        $data['price'] = $request->get('price');
        $data['mb'] = $request->get('mb');

        Plan::create($data);

        flash('Planas sukurtas', 'success');

        return redirect()->route('plan.index');
    }

    public function removePlan($id)
    {
        Plan::find($id)->delete();

        return redirect()->route('plan.index');
    }
}
