<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Bedroom;
use App\AccomodationTransaction;
use Illuminate\Support\Facades\Auth;


class AccomodationTransactionController extends Controller
{

    public function __construct()
{
    $this->middleware('auth', ['only' => ['store']]);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hotels = Hotel::all();
        $bedroom = Bedroom::all(['id', 'name']);
         return view('accomodation_transactions.create')->with('hotels', $hotels)->with('bedrooms', $bedroom);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
    // The user is logged in...

        $id = Auth::id();
         $validatedData = $request->validate([
        'hotel_id' => 'required',
        'bedroom_id' => 'required',
        'no_of_days' => 'required',
        'no_of_bedrooms' => 'required',
        'payment_method' => 'required',
        'card_number' => 'required',
        'transport' => 'required',

    ]);

        // process the login
      
         $id = Auth::id();
   

            $accomodation_transaction = new AccomodationTransaction;
            $accomodation_transaction->hotel_id= $request->get('hotel_id');
            $accomodation_transaction->bedroom_id= $request->get('bedroom_id');
            $accomodation_transaction->no_of_bedrooms= $request->get('no_of_bedrooms');
            $accomodation_transaction->no_of_days= $request->get('no_of_days');
            $accomodation_transaction->transport= (bool)$request->get('transport');
            $accomodation_transaction->payment_method= $request->get('payment_method');
            $accomodation_transaction->card_number= $request->get('card_number');
            $accomodation_transaction->total_amount= 2000.50;
            $accomodation_transaction->user_id=$id;
            $accomodation_transaction->save();

            // redirect
            
            return redirect()->route('contacts.index')->with('message', 'Successfully made your booking.');
        
       
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
