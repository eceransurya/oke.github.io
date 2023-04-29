<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihController extends Controller
{
    public function showProgramer() {
        return view('latih1');
    }
    public function welcome() {
        return view('welcome');
    }

    public function showtext() {
        return view('text ini di buat otomatis');
    }

    public function showvar() {
        $nama = 'habib';
        return $nama;
    }
    
    public function showarray() {
        $arrNama = ['Aris','Yanti', 'Jamal' ];
        return dd($arrNama);
    }

    public function showtextformat() {
       
    $kataleft = "<p style='text-align: left; color: red;'>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Eaque possimus quod eligendi enim nisi quas molestias accusantium
    </p>";
    $katacenter = "<p style='text-align: center; color: green;'>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Eaque possimus quod eligendi enim nisi quas molestias accusantium
    </p>";
    $kataright = "<p style='text-align: right; color: blue;'>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Eaque possimus quod eligendi enim nisi quas molestias accusantium
    </p>";

    return $kataleft.$katacenter.$kataright;
    }

    public function showbiodata() {
        $biodata = "<h2>BIODATAKU</h2>
    <table border='1' cellspacing='0' cellpadding='0' width='100%'>
        <tr>
            <td style='font-weight:bold; color:black; padding: 10px 10px; '>NIM</td>
            <td style='text-align: center;'>:</td>
            <td style='font-weight:bold; color:red; padding-left: Spx;'>2022120094</td>
        </tr>
        <tr>
            <td style='font-weight:bold; color:black; padding: 10px 10px;'>NAMA LENGKAP</td>
            <td style='text-align: center;'>:</td>
            <td style='font-weight:bold; color:green; padding-left: Spx;'>Ahmad Hamdan Habibulloh</td>
        </tr>
        <tr>
            <td style='font-weight:bold; color:black; padding: 10px 10px; ' >ALAMAT</td>
            <td style='text-align: center;'>:</td>
            <td style='font-weight:bold; color:orange; padding-left: 5px;'>DONOMULYO</td>
        </tr>
    </table>";
    return $biodata;
    }
    
}
