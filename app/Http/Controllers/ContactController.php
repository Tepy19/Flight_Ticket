<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $data['header_title'] = "Contact";
        return view('customer.contact.contact', $data);
    }
    public function record(Request $request)
    {
        $data['getRecord'] = ContactModel::getRecord();
        return view('customer.contact.record', $data);
    }
    public function insert(Request $request)
    {
        $contact = new ContactModel;
        $contact->email = $request->email;
        $contact->issue = $request->issue;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect('customer/contact/record');
    }
    public function edit($id)
    {
        $data['header_title'] = "Edit";
        $data['getRecord'] = ContactModel::find($id);
        return view('customer.contact.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $contact = ContactModel::find($id);
        $contact->email = $request->email;
        $contact->issue = $request->issue;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect(route('customer.contact.record'));
    }
    public function delete($id)
    {
        $contact = ContactModel::find($id);
        $contact->delete();
        return redirect(route('customer.contact.record'));
    }
}
