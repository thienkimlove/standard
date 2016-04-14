<?php namespace App\Http\Controllers;


use App\Delivery;
use App\Http\Requests;

use App\Http\Requests\DeliveryRequest;


class DeliveriesController extends AdminController
{
   
    public function index()
    {
        $deliveries = Delivery::paginate(env('ITEM_PER_PAGE'));
        return view('admin.delivery.index', compact('deliveries'));
    }

    public function create()
    {        
        return view('admin.delivery.form');
    }

    public function store(DeliveryRequest $request)
    {
        Delivery::create($request->all());

        flash('Create delivery success!', 'success');
        return redirect('admin/deliveries');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {      
        $delivery = Delivery::find($id);
        return view('admin.delivery.form', compact('delivery'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, DeliveryRequest $request)
    {
        $delivery = Delivery::find($id);

        $delivery->update($request->all());

        flash('Update delivery success!', 'success');
        return redirect('admin/deliveries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::find($id);
        $delivery->delete();

        flash('Success deleted delivery!');
        return redirect('admin/deliveries');
    }



}
