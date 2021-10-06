<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income;
use App\interest;
use App\profetion;
use App\member;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $income = income::all();
        $interest = interest::all();
        $profetion = profetion::all();

        return view('content.member_form',compact(['income','interest','profetion']));
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

        $member = new member();
        $member->nama = $request->nama;
        $member->email = $request->email;
        $member->no_wa = $request->no_wa;
        $member->tempat_lahir = $request->tempat_lahir;
        $member->tanggal_lahir = $request->tanggal_lahir;
        $member->alamat = $request->alamat;
        $member->link_akun_instagram = $request->link_akun_instagram;
        $member->link_akun_facebook = $request->link_akun_facebook;
        $member->link_akun_tiktok = $request->link_akun_tiktok;
        $member->link_akun_twitter = $request->link_akun_twitter;
        $member->link_akun_youtube = $request->link_akun_youtube;
        $member->profetion_id = $request->profetion_id;
        $member->detail_profesi = $request->detail_profesi;
        $member->interest_id = $request->interest_id;
        $member->jumlah_anak = $request->jumlah_anak;
        $member->tahun_lahir_anak_sulung = $request->tahun_lahir_anak_sulung;
        $member->tahun_lahir_anak_bungsu = $request->tahun_lahir_anak_bungsu;
        $member->income_id = $request->income_id;
        $member->alasan_bergabung = $request->alasan_bergabung;
        $member->harapan_bergabung = $request->harapan_bergabung;
        $member->save();

        return redirect('/hello');
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
