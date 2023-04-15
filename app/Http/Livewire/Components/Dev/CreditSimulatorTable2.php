<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;

class CreditSimulatorTable2 extends Component
{
    public $harga_properti = 1000000000; //harga properti
    public $dp = 100000000; //dp 20%
    public $harga_pokok_pinjaman; //total pinjaman = $harga_properti - $dp *
    public $tenor = 15; //jangka waktu
    public $bunga_fixed = 5.5; //bunga fixed selama rentan waktu
    public $period_bunga_fixed = 5 ; //rentan waktu untuk bunga fix
    public $bunga_float = 11; //bunga float setelah batas rentan waktu bunga fix
    public $angs_bunga = 0;
    public $angs_pokok = 0;
    public $total_angs = 0;
    public $total_bunga = 0;
    public $sisa_pinjaman ; //= $harga_pokok_pinjaman
    public $installment = [];
    public $data;

    public function calculate()
    {
        $this->harga_pokok_pinjaman = $this->harga_properti - $this->dp;
        $this->sisa_pinjaman = $this->harga_pokok_pinjaman;
        $harga_pokok_pinjaman = $this->harga_pokok_pinjaman;

        $sisa_pinjaman = $this->sisa_pinjaman;
        $harga_properti = $this->harga_properti;
        $dp = $this->dp;
        $tenor = $this->tenor;
        $bunga_fixed = $this->bunga_fixed;
        $period_bunga_fixed = $this->period_bunga_fixed;
        $bunga_float = $this->bunga_float;
        $angs_bunga = $this->angs_bunga;
        $angs_pokok = $this->angs_pokok;
        $total_angs = $this->total_angs;
        $total_bunga = $this->total_bunga;
        $installment = $this->installment;




        for ($i=0; $i <= $this->tenor*12; $i++) {
            if ($i == 0) {
                $installment[$i]['bulan'] = $i;
                $installment[$i]['angsuran_bunga'] = $angs_bunga;
                $installment[$i]['angsuran_pokok'] = $angs_pokok;
                $installment[$i]['total_angsuran'] = $total_angs;
                $installment[$i]['sisa_pinjaman']  = $sisa_pinjaman;
            } else {

                if($i <= $period_bunga_fixed*12){

                    $periodOnMonth = $tenor * 12;
                    $interestMonth = ($bunga_fixed / 12) / 100;
                    $divider = 1-(1/pow(1+$interestMonth,$periodOnMonth));
                    $total_angs = round($harga_pokok_pinjaman / ($divider / $interestMonth));

                    $angs_bunga = round($bunga_fixed/12/100*$sisa_pinjaman);

                    $angs_pokok = $total_angs - $angs_bunga;
                    $sisa_pinjaman = round($sisa_pinjaman - $angs_pokok);
                    // dd($sisa_pinjaman);
                    $sisa_pinjaman_fixrate = round($sisa_pinjaman);
                    $sisa_pinjaman_bunga_float = round($sisa_pinjaman);

                    $installment[$i]['bulan'] = $i;
                    $installment[$i]['angsuran_bunga'] = $angs_bunga;
                    $installment[$i]['angsuran_pokok'] = $angs_pokok;
                    $installment[$i]['total_angsuran'] = $total_angs;
                    $installment[$i]['sisa_pinjaman']  = $sisa_pinjaman;

                    $angsuran_fixed = $total_angs;
                }

                if($i > $period_bunga_fixed*12){
                $periodOnMonth = ($tenor - $period_bunga_fixed)  * 12;
                $interestMonth = ($bunga_float / 12) / 100;
                $divider = 1-(1/pow(1+$interestMonth,$periodOnMonth));
                $angs_bunga = round($bunga_float/12/100*$sisa_pinjaman_bunga_float);
                $total_angs = round($sisa_pinjaman_fixrate / ($divider / $interestMonth));
                $angs_pokok = $total_angs - $angs_bunga;
                $sisa_pinjaman_bunga_float = round($sisa_pinjaman_bunga_float - $angs_pokok);

                $installment[$i]['bulan'] = $i;
                $installment[$i]['angsuran_bunga'] = $angs_bunga;
                $installment[$i]['angsuran_pokok'] = $angs_pokok;
                $installment[$i]['total_angsuran'] = $total_angs;
                $installment[$i]['sisa_pinjaman']  = $sisa_pinjaman_bunga_float;

                $angsuran_floated = $total_angs;
            }
        }
        $total_bunga = $total_bunga + $angs_bunga;

    }

    $this->data = array(
        "harga_properti"              => $harga_properti,
        "dp"                          => $dp,
        "pokok_pinjaman"              => $harga_pokok_pinjaman,
        "angsuran_perbulan_fixed"     => $angsuran_fixed,
        "angsuran_perbulan_floated"   => $angsuran_floated,
        "total_bunga"                 => $total_bunga,
        "installment"                 => $installment
      );

    //   dd($this->data['installment']);
}

    public function render()
    {
        return view('livewire.components.dev.credit-simulator-table2');
    }
}
