<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\DetailBantuan;
use Illuminate\Http\Request;
use App\Models\Bantuan;
use App\Models\JenisBantuan;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kemiskinan;
use App\Models\Penerima;

class DetailBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request ,$id_bantuan )
    {

    $donasi = $request->donatur;
    $txt = $request->textwa;
    $no = $request->hp;
    $idBantuan = $request->bantuan;


        return view('detail_bantuan.index', [
            'detail' => DetailBantuan::where('bantuan_id', $id_bantuan)->latest()->paginate(),

            'bantuan' => $idBantuan,
            'donatur' => $donasi,
            'wa' => $txt,
            'hp' => $no,
           'penerima' => Penerima::whereRaw('id not in (select penerima_id from detail_bantuans where bantuan_id = "'.$id_bantuan.'")')->get(),
'pnr' => Penerima::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $idBantuan = $request->bantuan;
        return view('detail.create',[
         //   'b' => Penerima::all(),
            'bantuan' => $idBantuan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {



        foreach(request()->penerima_id as $penerima){
            DetailBantuan::create(
                [
                    'bantuan_id' => $request['bantuan_id'][$penerima],
            'penerima_id' => $request['penerima_id'][$penerima],

                ]
                );
        }





                $idBantuan = $request->bantuan;

          return redirect('/details/'.$idBantuan)->with('success', 'New post has been added!') ;

        }

    /**
     * Display the specified resource.
     */
    public function show(DetailBantuan $detailBantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailBantuan $detailBantuan)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailBantuan $detailBantuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,bantuan $bantuan, DetailBantuan $detailBantuan)
    {
        $idBantuan = $request->bantuan;
        $id = $request->id;
       DetailBantuan::destroy($id);



       // DetailBantuan::where($detailBantuan->id)->delete();
          return redirect('/details/'.$idBantuan)->with('success', ' Post has been deleted!');

    }

    public function ajax_detail_bantuan($id){
     $detailbantuan = DetailBantuan::where(['id'=> $id])->first();
        //return Response::json($bantuan);
        return json_encode($detailbantuan);
    }



    public function wa(Request $request){
        $id_bantuan = $request->bantuan;
        $bantuan= Bantuan::where(['id' => $id_bantuan])->first();
        $detail_bantuan = DetailBantuan::where(['bantuan_id'=>$id_bantuan])->get();

        foreach($detail_bantuan as $db){


            $pesan=$bantuan->text_wa;
		$penerima = Penerima::where(['id' => $db->penerima_id])->first();
        $nohp = $penerima->nohp;
    // $file ="http://kota-terang.test/storage/".$bantuan->gambar;
        $file ='https://cdn1-production-images-kly.akamaized.net/Lp4ZMNdzQ89iphOeDwpz1A0UV5g=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2703835/original/060532300_1547463460-macam-macam_bencana_alam.jpg';

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://192.168.2.62:3000/api",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "nohp=".$nohp."&pesan=".$pesan."&token=1asjdas10280192l(as[]12p23y19239821;lasdsa`!^as,dsa",
          CURLOPT_HTTPHEADER => array(
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Bearer GwD2FV73AgEoHmlB4lvqPp1OfC5ydnR3o2c1REEd33HfASB3zV"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);





        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://192.168.2.62:3000/api",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "nohp=".$nohp."&file=".$file."&token=1asjdas10280192l(as[]12p23y19239821;lasdsa`!^as,dsa",
          CURLOPT_HTTPHEADER => array(
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Bearer GwD2FV73AgEoHmlB4lvqPp1OfC5ydnR3o2c1REEd33HfASB3zV"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        }

    }
}
