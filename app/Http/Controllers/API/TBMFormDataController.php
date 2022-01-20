<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RunnerCollection;
use App\Http\Resources\RunnerResource;
use App\Models\TBMFormLastRunner;
use App\Models\TBMMeeting;
use App\Models\TBMRace;
use App\Models\TBMRunner;
use Illuminate\Http\Request;

class TBMFormDataController extends Controller
{

    /**
     * Display the runners resource.
     *
     * @param  int  $runner_id
     * @return \Illuminate\Http\Response
    */
    public function getFromData($runner_id){


        $data = TBMRunner::find($runner_id);

        return new RunnerResource($data);

        // dd($data->tbm_form_last_runners);
        // // $response_data = {
        // //     ''
        // // }

        // return response()->json($data,200);

    }














    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('here');
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
