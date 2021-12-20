<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $team = $request->user()->currentTeam;
        if ($request->user()->hasTeamPermission($team, 'read')) {
            return 'permission';
        } else {
            abort(401, 'No Permission');
        }
    }

    public function read()
    {
        $order = Order::all();
        return view('alldata/alldata', compact('order'));
    }

    public function create()
    {
        return view('alldata/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product' => 'required',
            'quantity' => 'required',
        ]);

        $products = $request->product;
        $quantity = $request->quantity;
        $rate     = $request->rate;
        $total = $quantity * $rate;
        $user = auth::user()->id;

        $order = new Order;
        $order->product = $products;
        $order->quantity = $quantity;
        $order->rate = $rate;
        $order->total = $total;
        $order->user_id = $user;

        $order->save();
        return redirect('/read');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('alldata.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $products = $request->product;
        $quantity = $request->quantity;
        $rate     = $request->rate;

        $order->product = $products;
        $order->quantity = $quantity;
        $order->rate = $rate;

        $order->save();
        return redirect('/read');
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/read');
    }

    public function userorder()
    {
        $order = Order::all();
        return view('alldata.userOrder', compact('order'));
    }

    public function userid($id)
    {
        $user = User::find($id);
        $user_order = $user->order;
        return view('alldata.user', compact('user', 'user_order'));
    }

    public function search(Request $request)
    {
        $srch_value = $request->searchvalue;
        $srch_result = User::where('name', 'like', '%' . $srch_value . '%')->get();
        return view('alldata.searchuser', compact('srch_result'));
    }
}
