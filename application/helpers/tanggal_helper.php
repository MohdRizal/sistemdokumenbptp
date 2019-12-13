<?php

function tgl($tgl){
    $newtgl = explode("-",$tgl);
    
    $bln = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    return $newtgl[2]." ".$bln[$newtgl[1]]." ".$newtgl[0];
}

function tgl_date($tgl){
    $tgl1 = explode(" ",$tgl);
    $newtgl = explode("-",$tgl1[0]);
    
    $bln = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    return $newtgl[2]." ".$bln[$newtgl[1]]." ".$newtgl[0]." ".$tgl1[1];
}

function role($role){
    switch($role){
        case "0":
        $role = 'Administrator Sistem';
        break;
        case "1":
        $role = 'Administrator Tim Program';
        break;
        case "2":
        $role = 'Administrator KSPP';
        break;
        case "3":
        $role = 'Pegawai';
        break;
    }
    return $role;
}