<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;



class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::all();
        return view('sentinel.clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('sentinel.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'clientname' => 'required|unique:posts|max:255',
            'clientdescription' => 'required',
            'clientweburl'=> 'required|unique'
        ]);
         $user_id= \Sentry::getUser()->id;

         $client = new Client($request->all());
         $client->user_id = $user_id;
         if($client->save())
             return redirect('clients')->with('success', 'Client '.$client->clientname.' Created!');
        return redirect('clients')->with('error', 'Client '.$client->clientname.' Not created!');



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
        $client = Client::find($id);
        return view('sentinel.clients.edit',['client'=>$client]);
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
        $client = Client::find($id);
        if($client->update($request->except('_token','_method','action')))
            return redirect('clients')->with(['success'=>$client->portfolioname.' Successfully updated!']);
        return redirect('clients')->with(['error'=>$client->portfolioname.' Not updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::find($id);
        if($client && $client->delete()){
            return redirect('clients')->with('success', $client->clientname.' Successfully deleted');
        }else{
            return redirect('clients')->with('error',  $client->clientname.' Failed to delete! ');
        }
    }
}
