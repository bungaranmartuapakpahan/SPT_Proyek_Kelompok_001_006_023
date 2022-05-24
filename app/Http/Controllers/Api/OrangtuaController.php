<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Orangtua;
use Illuminate\Http\Request;
use Exception;


class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Orangtua::all();

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
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_orangtua' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'no_hp_ayah' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'no_hp_ibu' => 'required',
                'jumlah_tanggungan' => 'required',
                'nama_wali' => 'required',
                'alamat_wali' => 'required',
                'pekerjaan_wali' => 'required',
                'penghasilan_wali' => 'required',
                'no_hp_wali' => 'required',
                'id_mahasiswa' => 'required',

            ]);

            $orangtua = Orangtua::create([
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'alamat_orangtua' => $request->alamat_orangtua,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'no_hp_ayah' => $request->no_hp_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
                'no_hp_ibu' => $request->no_hp_ibu,
                'jumlah_tanggungan' => $request->jumlah_tanggungan,
                'nama_wali' => $request->nama_wali,
                'alamat_wali' => $request->alamat_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
                'penghasilan_wali' => $request->penghasilan_wali,
                'no_hp_wali' => $request->no_hp_wali,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Orangtua::where('id', '=', $orangtua->id)->get();

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
        $data = Orangtua::where('id', '=', $id)->get();

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
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_orangtua' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'no_hp_ayah' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'no_hp_ibu' => 'required',
                'jumlah_tanggungan' => 'required'

            ]);

            $orangtua = Orangtua::findOrFail($id);

            $orangtua->update([
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'alamat_orangtua' => $request->alamat_orangtua,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'no_hp_ayah' => $request->no_hp_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
                'no_hp_ibu' => $request->no_hp_ibu,
                'jumlah_tanggungan' => $request->jumlah_tanggungan,
                'nama_wali' => $request->nama_wali,
                'alamat_wali' => $request->alamat_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
                'penghasilan_wali' => $request->penghasilan_wali,
                'no_hp_wali' => $request->no_hp_wali,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Orangtua::where('id', '=', $orangtua->id)->get();

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
            $orangtua = Orangtua::findOrFail($id);

            $data = $orangtua->delete();

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
