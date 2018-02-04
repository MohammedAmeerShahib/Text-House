<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnterpriseAccount;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enterprises = EnterpriseAccount::latest()->paginate(5);
        return view('enterprise.enterprise',compact('enterprises'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
//        return view('AddEnterprise');


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
        request()->validate([
            'EnterpriseName' => 'required|string|unique:EnterpriseAccount',
            'EnterpriseContactnumber' => 'required',
            'EnterpriseEmail' => 'required|email',
            'EnterpriseAddress' => 'required',
        ]);


        EnterpriseAccount::create($request->all());
        return redirect()->route('enterprise.index')
            ->with('success','Enterprise created successfully');

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
    public function edit(EnterpriseAccount $enterprise)
    {

        return view('enterprise.editEnterprise',compact('enterprise',$enterprise))->with('status', 'Profile updated!');

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
        request()->validate([
//            'EnterpriseName' => 'required|string|unique:EnterpriseAccount',
            'EnterpriseContactnumber' => 'required',
            'EnterpriseEmail' => 'required|email',
            'EnterpriseAddress' => 'required',
        ]);

        EnterpriseAccount::find($id)->update($request->all());

        return redirect()->route('enterprise.index')

            ->with('success','Article updated successfully');
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
