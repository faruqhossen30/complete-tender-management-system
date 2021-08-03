<?php

namespace App\Http\Controllers\BackendController\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::where('role', '=', 'client')->get();

        // return $clients;
        return view('backend.admin.client.allclient', compact('clients'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = User::where('id', $id)->get()->first();

        // return $client;
        return view('backend.admin.client.singleclient', compact('client'));
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
    public function changeStatus($id)
    {
        try {
            $client = User::find($id);
            $status = $client->active;
            if (!$status) {
                $client->active = 1;
            } else {
                $client->active = 0;
            }
            $client->save();
            return redirect()->back()->with(['success' => 'Status Changed successfully']);
        } catch (Exception $e) {
            return 'An error ocurd';
        }
    }
}
