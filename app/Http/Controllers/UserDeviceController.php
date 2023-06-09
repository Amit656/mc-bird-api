<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserDeviceRequest;
use App\Models\UserDevice;
use Illuminate\Http\Request;

class UserDeviceController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDeviceRequest $request)
    {
        $userDevice = new UserDevice;
        $userDevice->fill($request->validated());
        $userDevice->save();

        return response()->json(['message' => 'saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function show(UserDevice $userDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDevice $userDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDevice $userDevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDevice $userDevice)
    {
        //
    }
}
