<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Asalsekolah;
use Illuminate\Http\Request;
use Exception;

class AsalsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Asalsekolah::all();

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
                'no_ijazah_sma' => 'required',
                'nama_sma' => 'required',
                'alamat_sma' => 'required',
                'kabupaten_sma' => 'required',
                'telepon_sma' => 'required',
                'kode_pos_sma' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $asalsekolah = Asalsekolah::create([
                'no_ijazah_sma' => $request->no_ijazah_sma,
                'nama_sma' => $request->nama_sma,
                'alamat_sma' => $request->alamat_sma,
                'kabupaten_sma' => $request->kabupaten_sma,
                'telepon_sma' => $request->telepon_sma,
                'kode_pos_sma' => $request->kode_pos_sma,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Asalsekolah::where('id', '=', $asalsekolah->id)->get();

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
        $data = Asalsekolah::where('id', '=', $id)->get();

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
                'no_ijazah_sma' => 'required',
                'nama_sma' => 'required',
                'alamat_sma' => 'required',
                'kabupaten_sma' => 'required',
                'telepon_sma' => 'required',
                'kode_pos_sma' => 'required',
                'id_mahasiswa' => 'required'
            ]);

            $asalsekolah = Asalsekolah::findOrFail($id);

            $asalsekolah->update([
                'no_ijazah_sma' => $request->no_ijazah_sma,
                'nama_sma' => $request->nama_sma,
                'alamat_sma' => $request->alamat_sma,
                'kabupaten_sma' => $request->kabupaten_sma,
                'telepon_sma' => $request->telepon_sma,
                'kode_pos_sma' => $request->kode_pos_sma,
                'id_mahasiswa' => $request->id_mahasiswa
            ]);

            $data = Asalsekolah::where('id', '=', $asalsekolah->id)->get();

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
            $asalsekolah = Asalsekolah::findOrFail($id);

            $data = $asalsekolah->delete();

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
