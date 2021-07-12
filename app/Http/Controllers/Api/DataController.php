<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataStoreRequest;
use App\Http\Resources\DataResource;
use App\Models\ResumeData;
use http\Env\Response;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResumeData::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataStoreRequest $request)
    {
        $edited_data = ResumeData::create($request->validated());
        return new DataResource($edited_data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new DataResource(ResumeData::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataStoreRequest $request, ResumeData $resumeData)
    {
        $resumeData->update($request->validated());

        return $resumeData;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResumeData $resumeData)
    {
        $resumeData->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
