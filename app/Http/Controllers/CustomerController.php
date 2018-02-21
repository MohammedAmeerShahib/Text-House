<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EnterpriseAccount;
use App\User;
use App\SubUser;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $enterprises= DB::table('enterpriseaccount')->leftJoin('users', 'enterpriseaccount.EnterpriseId', '=', 'users.EnterpriseId')
            ->select('enterpriseaccount.*')
           ->whereNull('users.EnterpriseId')
           ->get()
           ;

//        $enterprises= serialize($enterprisesObject);
        return view('user.customer',compact('enterprises'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getSubUsers()
    {

        $subUsers = subuser::latest()->paginate(5);
        return view('user.subUser', compact('subUsers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
        request()->validate([
            'username' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

         User::create([
            'EnterpriseId'=>$request->input('EnterpriseId'),
            'username' =>$request->input('username'),
            'email' =>$request->input('email'),
            'password' => bcrypt($request->input('password')),
            'User_type'=>$request->input('User_type'),
        ]);


//        User::create($request->all());
        return redirect()->route('customer.index')
            ->with('success','Account created successfully');
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
        $enterprise=enterpriseaccount::find($id);
        return view('user.createCustomer',compact('enterprise',$enterprise))->with('status', 'Create User');

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
