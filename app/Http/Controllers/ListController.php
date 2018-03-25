<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserListDetails;
use App\NumberList;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userLists = userlistdetails::latest()->paginate(5);
        return view('userList.userList', compact('userLists'))
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
            'ListName' => 'required|unique:userlistdetails',
        ]);


            $userId = Auth::user()->id;

        userlistdetails::create([
                'userId' => $userId,
                'ListName' => $request->input('ListName'),
            ]);


            return redirect()->route('user-list.index')
                ->with('success', 'User List Created Successfully');

    }

    public function storeNo(Request $request)
    {
        //

        request()->validate([
            'NLNumber' => 'required|unique:NumberList',
        ]);


        $userList = userlistdetails::find($request->input('NLNumber'));

//        userlistdetails::create([
//            'userId' => $userId,
//            'ListName' => $request->input('ListName'),
//        ]);

        $comment = $userList->numberList()->create([
            'NLNumber' => $request->input('NLNumber'),
        ]);

        return redirect()
            ->with('success', 'User List Created Successfully');

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
