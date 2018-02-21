<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\EnterpriseAccount;
use App\BalanceMessage;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $enterprises = enterpriseaccount::latest()->paginate(5);
        return view('enterprise.enterprise', compact('enterprises'))
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
     * @param  \Illuminate\Http\Request $request
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


        enterpriseaccount::create($request->all());
        return redirect()->route('enterprise.index')
            ->with('success', 'Enterprise created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EnterpriseAccount $enterprise)
    {

        return view('enterprise.editEnterprise', compact('enterprise', $enterprise))->with('status', 'Edit Enterprise');

    }

    public function reserve($id)
    {
        $enterprise = enterpriseaccount::find($id);
//        return "hello";

        return view('enterprise.reserve-msg', compact('enterprise', $enterprise))->with('status', 'Reserve Enterprise');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
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

        enterpriseaccount::find($id)->update($request->all());

        return redirect()->route('enterprise.index')
            ->with('success', 'Article updated successfully');
    }

    public function updateBalance(Request $request,$id)
    {

        $userId=User::where('EnterpriseId',$id)->first()->id;

        if(balancemessage::where('userId',$userId)->count()>0) {

            $balance=BalanceMessage::where('userId',$userId)->first();

            $dialogBalance=$balance->DialogBalance;
            $mobitelBalance=$balance->MobitelBalance;
            $airtelBalance=$balance->AirtelBalance;
            $etisalatBalance=$balance->EtisalatBalance;
            $dialog =$dialogBalance+=$request->input('dialog');
            $mobitel=$mobitelBalance +=$request->input('mobitel');
            $airtel=$airtelBalance+=$request->input('airtel');
            $etisalat=$etisalatBalance+=$request->input('etisalat');

            $balance->update(['DialogBalance'=>$dialog,'MobitelBalance'=>$mobitel,'AirtelBalance'=>$airtel,'EtisalatBalance'=>$etisalat]);

        }else{

            balancemessage::create([
                'userId'=> $userId,
                'DialogBalance' => $request->input('dialog'),
                'MobitelBalance' => $request->input('mobitel'),
                'AirtelBalance' => $request->input('airtel'),
                'EtisalatBalance' => $request->input('etisalat'),
            ]);
        }

        return redirect()->route('enterprise.index')
            ->with('success', 'Message Reserved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
