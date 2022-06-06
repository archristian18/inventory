<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;


class AccountController extends Controller
{
    public function index()
    {
        return view('production.account');
    }
    public function histories()
    {
        $data = account::all();

        return view('production.viewAccount')->with('list', $data);
    }

    public function loads(Request $request)
    {
        $total = account::
        orderBy('id', 'DESC')
        ->first();

        if($total== NULL)
        {
            $total=0;

            $updateGcash = $total + $request->gcash;
            $updateLoad = $total + $request->wallet;
          
        }
        else
        {
            $updateGcash = $total->gcash + $request->gcash;
            $updateLoad = $total->loads + $request->wallet;
        
        }

        account::create([
            'gcash' =>  $updateGcash,
            'loads' => $updateLoad
          ]);

    

      return redirect('/account/view');

    }
    public function destroy($id)
    {
        account::destroy($id);
        return redirect('/account/view');  
    }


}
