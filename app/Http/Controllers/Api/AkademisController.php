<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Akademis;
use Illuminate\Http\Request;
use Exception;

class AkademisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Akademis::all();

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
                'status_akhir' => 'required',
                'angkatan' => 'required',
                'user_name' => 'required',
                'email' => 'required',
                'program_studi' => 'required',
                'kelas' => 'required',
                'wali_mahasiswa' => 'required',
                'jalur_usm' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $akademis = Akademis::create([
                'status_akhir' => $request->status_akhir,
                'angkatan' => $request->angkatan,
                'user_name' => $request->user_name,
                'email' => $request->email,
                'program_studi' => $request->program_studi,
                'kelas' => $request->kelas,
                'wali_mahasiswa' => $request->wali_mahasiswa,
                'jalur_usm' => $request->jalur_usm,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Akademis::where('id', '=', $akademis->id)->get();

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
        $data = Akademis::where('id', '=', $id)->get();

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
                'status_akhir' => 'required',
                'angkatan' => 'required',
                'user_name' => 'required',
                'email' => 'required',
                'program_studi' => 'required',
                'kelas' => 'required',
                'wali_mahasiswa' => 'required',
                'jalur_usm' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $akademis = Akademis::findOrFail($id);

            $akademis->update([
                'status_akhir' => $request->status_akhir,
                'angkatan' => $request->angkatan,
                'user_name' => $request->user_name,
                'email' => $request->email,
                'program_studi' => $request->program_studi,
                'kelas' => $request->kelas,
                'wali_mahasiswa' => $request->wali_mahasiswa,
                'jalur_usm' => $request->jalur_usm,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Akademis::where('id', '=', $akademis->id)->get();

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
            $akademis = Akademis::findOrFail($id);

            $data = $akademis->delete();

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
