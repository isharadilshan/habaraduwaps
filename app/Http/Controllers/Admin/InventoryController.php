<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\InventoryCar;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = InventoryCar::get();
        
        return view('admin.inventory.show')->with('inventoryCars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventoryCar = InventoryCar::where('id', $id)->get()->first();

        return view('admin.inventory.edit')->with('item', $inventoryCar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventoryCar = InventoryCar::find($id);

        $this->validate($request, [
            'engine_no' => 'required',
            'chasis_no' => 'required'
        ]);

        $inventoryCar->engine_no = $request->engine_no;
        $inventoryCar->chasis_no = $request->chasis_no;

        $customer = $inventoryCar->customer()->get()->first();
        $customer->name = $request->customer_name;
        $customer->address = $request->customer_address;
        $customer->email = $request->customer_email;

        $customer->save();
        $inventoryCar->save();

        return redirect(route('inventory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventoryCar = InventoryCar::find($id);

        $inventoryCar->delete();
    }
}
