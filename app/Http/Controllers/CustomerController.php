<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\MCustomer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = MCustomer::paginate(10);
        return view("customer.index", compact("customers"));
    }

    public function create()
    {
        return view("customer.create");
    }

    public function store(CustomerRequest $request)
    {
        $customer = new MCustomer;
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->name_kana = $request->name_kana;
        $customer->zip_code = $request->zip_code;
        $customer->address = $request->address;
        $customer->building_name = $request->building_name;
        $customer->tel = $request->tel;
        $customer->fax = $request->fax;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        $customer = MCustomer::find($id);
        return view("customer.show", compact('customer'));
    }

    public function edit($id)
    {
        $customer = MCustomer::find($id);
        return view("customer.edit", compact('customer'));
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = MCustomer::find($id);
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->name_kana = $request->name_kana;
        $customer->zip_code = $request->zip_code;
        $customer->address = $request->address;
        $customer->building_name = $request->building_name;
        $customer->tel = $request->tel;
        $customer->fax = $request->fax;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customer = MCustomer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
