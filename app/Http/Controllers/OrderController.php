<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        // Truncate the descriptions to 20 characters
        foreach ($orders as $order) {
            $order->description = Str::limit($order->description, 25);
        }

        return view("order.order", ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("order.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=> 'required|string',
            'description'=>'required|string',
        ]);

        Order::create($data);

        return redirect()->route('order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);

        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);

        return view("order.edit", ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name'=>'required|string',
            'description'=>'required|string',
        ]);

        Order::find($id)->update($data);

        return redirect()->route('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->route('order');
    }
}
