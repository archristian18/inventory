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
       
        if($customers !== 0){
            return $this->viewCustomer();
            
        }
        else{
            $sample= 0;
            return view('production.viewCustomer')->with('list', $sample);;
            
        }
   
             
    }



    public function viewCustomer()
    {

        $customers = customer::all();
   
        foreach ($customers as $data) {

        $id  = $data->id;
     
        $sample[] = addCustomer::
        join('customers', 'customers.id', '=', 'add_customers.customer_id')
        ->where('customer_id', '=', $id)
        ->orderBy('add_customers.id', 'DESC')
        ->first();

        }

       return view('production.viewCustomer')->with('list', $sample);
             
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
    public function store(Request $request)
    {
       
 
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
