<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\SewaDetail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreSewaDetailRequest;
use App\Http\Requests\UpdateSewaDetailRequest;

class SewaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSewaDetailRequest $request)
    {
        try {
            $validated = $request->validated();

            $validated['asset_detail_id'] = $validated['asset'];
            unset($validated['asset']);

            SewaDetail::create($validated);

            Alert::success('Sukses', 'Asset berhasil disimpan');
            return redirect()->route('sewa.detail', $validated['kode_transaksi']);
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menyimpan asset');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SewaDetail $sewaDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SewaDetail $sewaDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSewaDetailRequest $request, SewaDetail $sewaDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SewaDetail $sewaDetail)
    {
        try {
            $sewaDetail->delete();
            Alert::success('Berhasil', 'Asset sewa berhasil dihapus');
        } catch (Exception $e) {
            Alert::error('Gagal', 'Terjadi kesalahan saat menghapus asset sewa');
        }
        return redirect()->back();
    }
}
