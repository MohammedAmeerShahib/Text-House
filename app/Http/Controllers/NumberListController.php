<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NumberList;
use App\UserListDetails;

class NumberListController extends Controller
{
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'listId' => 'required',
            'NLNumber'=>'unique:numberlist',
        ]);


        $list = UserListDetails::find($request->input('listId'));

        if ($list) {

            foreach ($request->get('contacts') as $contact) {

                if ($this->validateNumber($contact)) {
                    $list->numberList()->create([

                        'NLNumber' => $contact,
                    ]);
                }
            }

        }
        return redirect()->back()->with('success', 'Numbers Added Successfully');

    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contacts=NumberList::where('ListId', $id)->get();



//
//        return view('userList.viewList', compact('contacts'))
//            ->with('success','Contact List');
//        return $contacts;
        return response()->json($contacts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    private function validateNumber($number)
    {

//        if (preg_match('/\d{10}/', $number) === 1) {
//
//            return true;
//        } else {
//
//            return false;
//        }

                    return true;

    }
}


















