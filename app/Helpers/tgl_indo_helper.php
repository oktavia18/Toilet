<?php 

if (!function_exists("tgl_indo")) {
    function date_indo($tgl)
    {
        $ubah = gmdate($tgl, time() + 60 * 60 * 8);
        $pecah = explode("-", $ubah);
        $tanggal = $pecah[2];
        $bulan = bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal . " " . $bulan . " " . $tahun;
    }
}

if (!function_exists("bulan")) {
    function bulan($bln)
    {
        $bulan = [
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        ];
        return $bulan[(int)$bln] ?? '';
    }
}

if (!function_exists("shortdate_indo")) {
    function shortdate_indo($tgl)
    {
        $ubah = gmdate($tgl, time() + 60 * 60 * 8);
        $pecah = explode("-", $ubah);
        $tanggal = $pecah[2];
        $bulan = short_bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal . "/" . $bulan . "/" . $tahun;
    }
}

if (!function_exists("short_bulan")) {
    function short_bulan($bln)
    {
        return str_pad($bln, 2, '0', STR_PAD_LEFT);
    }
}

if (!function_exists("mediumdate_indo")) {
    function mediumdate_indo($tgl)
    {
        $ubah = gmdate($tgl, time() + 60 * 60 * 8);
        $pecah = explode("-", $ubah);
        $tanggal = $pecah[2];
        $bulan = medium_bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal . "-" . $bulan . "-" . $tahun;
    }
}

if (!function_exists("medium_bulan")) {
    function medium_bulan($bln)
    {
        $bulan = [
            1 => "Jan",
            2 => "Feb",
            3 => "Mar",
            4 => "Apr",
            5 => "Mei",
            6 => "Jun",
            7 => "Jul",
            8 => "Ags",
            9 => "Sep",
            10 => "Okt",
            11 => "Nov",
            12 => "Des"
        ];
        return $bulan[(int)$bln] ?? '';
    }
}

if (!function_exists("longdate_indo")) {
    function longdate_indo($tanggal)
    {
        $ubah = gmdate($tanggal, time() + 60 * 60 * 8);
        $pecah = explode("-", $ubah);
        $tgl = $pecah[2];
        $bln = $pecah[1];
        $thn = $pecah[0];
        $bulan = bulan($pecah[1]);

        $nama_hari = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $nama = date("l", mktime(0, 0, 0, $bln, $tgl, $thn));
        
        return ($nama_hari[$nama] ?? '') . ", " . $tgl . " " . $bulan . " " . $thn;
    }
}