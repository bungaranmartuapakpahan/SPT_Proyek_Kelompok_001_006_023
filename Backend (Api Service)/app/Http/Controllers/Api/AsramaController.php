<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Models\Asrama;
use Exception;


class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Asrama::all();

        if ($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400, 'failed');

        }
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
        try {
            //code...
            $request->validate([
                'nama_asrama' => 'required',
                'kamar' => 'required',
                'pengurus_asrama' => 'required',
                'nilai_asrama' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $asrama = Asrama::create([
                'nama_asrama' => $request->nama_asrama,
                'kamar' => $request->kamar,
                'pengurus_asrama' => $request->pengurus_asrama,
                'nilai_asrama' => $request->nilai_asrama,
                'id_mahasiswa' => $request->id_mahasiswa

            ]);

            $data = Asrama::where('id', '=', $asrama->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
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
        $data = Asrama::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
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
        try {
            //code...
            $request->validate([
                'nama_asrama' => 'required',
                'kamar' => 'required',
                'pengurus_asrama' => 'required',
                'nilai_asrama' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $asrama = Asrama::findOrFail($id);


            $asrama->update([
                'nama_asrama' => $request->nama_asrama,
                'kamar' => $request->kamar,
                'pengurus_asrama' => $request->pengurus_asrama,
                'nilai_asrama' => $request->nilai_asrama,
                'id_mahasiswa' => $request->id_mahasiswa

            ]);

            $data = Asrama::where('id', '=', $asrama->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
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
        try {
            $asrama = Asrama::findOrFail($id);

            $data = $asrama->delete();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success Destory data');
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
