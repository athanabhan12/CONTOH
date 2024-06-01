<?php

namespace App\Library;

class helper
{
    public static function format_date_ind($tgl, $param = 'long')
    {
        if (trim($tgl) != '' && $tgl != '0000-00-00') {
            $d = substr($tgl, 8, 2);
            $m = substr($tgl, 5, 2);
            $y = substr($tgl, 0, 4);
            $getbulan = array();
            $getbulan[1] = (($param == 'short') ? 'Jan' : 'Januari');
            $getbulan[2] = (($param == 'short') ? 'Feb' : 'Februari');
            $getbulan[3] = (($param == 'short') ? 'Mart' : 'Maret');
            $getbulan[4] = (($param == 'short') ? 'Apr' : 'April');
            $getbulan[5] = (($param == 'short') ? 'Mei' : 'Mei');
            $getbulan[6] = (($param == 'short') ? 'Jun' : 'Juni');
            $getbulan[7] = (($param == 'short') ? 'Jul' : 'Juli');
            $getbulan[8] = (($param == 'short') ? 'Agst' : 'Agustus');
            $getbulan[9] = (($param == 'short') ? 'Sept' : 'September');
            $getbulan[10] = (($param == 'short') ? 'Okt' : 'Oktober');
            $getbulan[11] = (($param == 'short') ? 'Nov' : 'November');
            $getbulan[12] = (($param == 'short') ? 'Des' : 'Desember');
            $tanggal = $d . " " . $getbulan[(int)$m] . " " . $y;
            return $tanggal;
        }
    }
}
