<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\addCustomer;


class AddCustomerController extends Controller
{
    public function index()
    {
        return view('production.addCustomer');
    }

    public function add(Request $request)
    {
        
        $customers = addCustomer::where('customer_id', $request->id)
        ->orderBy('id', 'DESC')
        ->first();

        if($customers == NULL){
        return redirect('/customer/load'); // Why created statement?, to avoid getting value to add latest total property because it's a NULL
        }else{
          $total = $customers->totals;
     
        }
  

      
        switch ($request->option) {

            case "debt":
                $update = $total + $request->amount;
              break;
            case "paid":
                $update = $total; 
              break;
            case "balance":
                $update = $total - $request->amount;
              break;
            default:
              echo "Option not found";
          }

        addCustomer::create([
            'loads' => $request['amount'],
            'options' => $request['option'],
            'method' => $request['methods'],
            'totals' => $update,
            'customer_id' => $request['id']
          ]);

        return $this->load();
    }


    public function load()
    {

        $customers = customer::all();   
        
        return view('production.addCustomer')->with('name', $customers);
       
    }
    
    public function records($id)
    {

        $customers = addCustomer::
        where('customer_id', $id)
        ->get();
         

      
       return view('production.recordsCustomer')->with('list', $customers);
    }

}
