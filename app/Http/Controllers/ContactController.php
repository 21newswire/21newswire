<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Request;
use Session;
use Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Front-end.Pages.contact-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'          => 'required',
            'email'         => 'required|email',
            'subject'       => 'required',
            'message'       => 'required'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/contact-us')
                ->withErrors($validator);
        } else {
            // store
            $contact = new contact;
            $contact->name       = Request::get('name');
            $contact->email       = Request::get('email');
            $contact->subject       = Request::get('subject');
            $contact->message       = Request::get('message');
            $contact->save();

            // redirect
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        
    }
}
