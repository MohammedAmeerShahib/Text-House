<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\TextMessage;
use Yajra\Datatables\Datatables;
use App\EnterpriseAccount;
use App\User;


class SingleMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $singleMSgs = TextMessage::latest()->paginate(5);
//        return view('message.SingleMsg', compact('singleMSgs'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);

        return view('message.SingleMsg');
    }

    public function getIndex()
    {
        return view('message.SingleMsg');
    }

    public function getData(){

        $enterpriseId=Auth::user()->EnterpriseId;


        $users=EnterpriseAccount::find($enterpriseId)->user;

//        $userId=$users->pluck('id');

        $messages = DB::table('TextMessage')
            ->whereIn('userId',$users->pluck('id') )->get();

//        $message=TextMessage::where('userId',$userId)->get();
//
        return Datatables::of($messages)
            ->addColumn('checkbox', function ($message) {
                return '<input type="checkbox" id="'.$message->MessageId.'" class="icheckbox_flat-blue" >';
            })
            ->rawColumns(['checkbox'])
            ->make(true);

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
            'MessageReceiver' => 'required',
            'SentMessage'=>'required',
        ]);

        $userId=Auth::user()->id;

        TextMessage::create([
            'userId'=> $userId,
            'MessageReceiver' => $request->input('receiverNo'),
            'SentMessage' => $request->input('message'),
            'Status' => 'Delivered',
        ]);


        return redirect()->route('singleMsg.index')
        ->with('success', 'Message Sent Successfully');

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
