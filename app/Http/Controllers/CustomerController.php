<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    // record
    public function customer() //add
    {
        $data['header_title'] = "Customer";
        return view('customer.customer', $data);
    }
    public function record(Request $request)
    {
        $data['getRecord'] = CustomerModel::getRecord();
        return view('customer.record', $data);
    }

    public function insert(Request $request)
    {
        $customer = new CustomerModel;
        $customer->from = $request->from;
        $customer->to = $request->to;
        $customer->class = $request->class;
        $customer->departure = $request->departure;
        $customer->return = $request->return;
        $customer->adult = $request->adult;
        $customer->children = $request->children;
        $customer->infants = $request->infants;
        $customer->save();
        return redirect('record')->with('success', 'You book successfully.');
    }
    public function about()
    {
        $data['header_title'] = "About";
        return view('customer.about', $data);
    }
    public function singapore()
    {
        $data['header_title'] = "Guide";
        return view('customer.singapore', $data);
    }
    public function terms()
    {
        $data['header_title'] = "Terms";
        return view('customer.terms', $data);
    }
    public function seoul()
    {
        $data['header_title'] = "Guide";
        return view('customer.seoul', $data);
    }
    public function kuala()
    {
        $data['header_title'] = "Guide";
        return view('customer.kuala', $data);
    }
    public function bangkork()
    {
        $data['header_title'] = "Guide";
        return view('customer.bangkork', $data);
    }
    public function beijing()
    {
        $data['header_title'] = "Guide";
        return view('customer.beijing', $data);
    }
    public function dubai()
    {
        $data['header_title'] = "Guide";
        return view('customer.dubai', $data);
    }
    public function hanoi()
    {
        $data['header_title'] = "Guide";
        return view('customer.hanoi', $data);
    }
    public function jakata()
    {
        $data['header_title'] = "Guide";
        return view('customer.jakata', $data);
    }
    public function information()
    {
        $data['header_title'] = "Information";
        return view('customer.information', $data);
    }
    public function phnompenh()
    {
        $data['header_title'] = "Guide";
        return view('customer.phnompenh', $data);
    }
    public function edit($id)
    {
        // $data['getRecord']=CustomerModel::getSingle($id);
        $getRecord = CustomerModel::find($id);
        return view('customer.edit', compact('getRecord'));
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = 'Flight Edit';
            return view('customer.edit', $data);
        }
        else
        {
            return redirect('customer/edit')->with('error',"Record not found");
        }
    }
    public function update(Request $request, $id)
    {
        $customer = CustomerModel::find($id);
        $customer->from = $request->from;
        $customer->to = $request->to;
        $customer->class = $request->class;
        $customer->departure = $request->departure;
        $customer->return = $request->return;
        $customer->adult = $request->adult;
        $customer->children = $request->children;
        $customer->infants = $request->infants;
        $customer->save();
        return redirect('record')->with('success', 'You book successfully.');
   
    }

    public function delete($id)
    {
        $customer = CustomerModel::find($id);
        $customer->delete();
        return redirect('record');
    }

    public function UserLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    
}
