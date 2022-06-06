<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\addCustomer;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('production.customer');
    }

    public function home()
    {
        
       return view('production.home');
    }

    
    public function view()
    {

        $customers = customer::all();
        
        $data = $customers;

        // foreach ($customers as $data) {

        // $id  = $data->id;
       
        // $sample= addCustomer::
        // join('customers', 'customers.id', '=', 'add_customers.customer_id')
        // ->where('customer_id', '=', $id)
        // ->orderBy('add_customers.id', 'DESC')
        // ->get();
      
        
        // return view('production.viewCustomer')->with('list', $sample);
        // }

        return view('production.viewCustomer')->with('list', $data);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'firstname' => 'required | regex:(^[a-zA-Z]+$) | unique:customers',
            'lastname' => 'required | regex:(^[a-zA-Z]+$)',
            'amount' => 'required | regex:(^[0-9]+$)',  
            'option' => 'required | regex:(^[a-zA-Z]+$)',  
            'methods' => 'required | regex:(^[a-zA-Z]+$)', 
            'details' => 'required | regex:(^[a-zA-Z]+$)'
 
        ]);
   
        

        $options = $request['option'];

        if($options == 'debt'){
            $total = $request['amount'];
        }
        else if($options == 'paid'){
            $total = 0;
        }
        else{
            echo 'No options was found';
        }



        $id = customer::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'details' => $request['details']
          ]);


          addCustomer::create([
            'loads' => $request['amount'],
            'options' => $request['option'],
            'method' => $request['methods'],
            'totals' => $total,
            'customer_id' => $id->id
          ]);


        return view('production.customer');
    }


    public function total()
    {

        addCustomer::create([
            'loads' => $request['amount'],
            'options' => $request['option'],
            'method' => $request['methods'],
            'totals' => $request,
            'customer_id' => $id->id
          ]);

    }


}
