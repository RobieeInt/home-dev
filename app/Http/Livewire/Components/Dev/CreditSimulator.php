<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;

class CreditSimulator extends Component
{
    public $harga_properti;
    public $down_payment;
    public $persentase;
    public $jumlah_kredit;
    public $jangka_waktu;
    public $bunga;
    public $cicilan_5;
    public $cicilan_10;
    public $cicilan_15;
    public $cicilan_20;

    protected $casts = [
        'harga_properti' => 'integer',
        'down_payment' => 'integer',
        'persentase' => 'integer',
        'jumlah_kredit' => 'integer',

    ];

    protected $rules = [
        'harga_properti' => 'required|not_regex:/^Rp\s\d{1,3}(\.\d{3})*?$/',
        'down_payment' => 'required|numeric',
        'persentase' => 'required|numeric',
        'jangka_waktu' => 'required|numeric',
        'bunga' => 'required|numeric',
    ];



    //numberFormat
    public function updatedDownPayment()
    {


        if ($this->harga_properti && $this->down_payment && $this->persentase != ($this->down_payment / $this->harga_properti * 100)) {
            $this->persentase = $this->down_payment / $this->harga_properti * 100;
            $this->jumlah_kredit = $this->harga_properti - $this->down_payment;

        }
    }

    public function updatedPersentase(){

        if ($this->harga_properti && $this->persentase && $this->down_payment != ($this->harga_properti * $this->persentase / 100)) {
            $this->down_payment = $this->harga_properti * $this->persentase / 100;
            $this->jumlah_kredit = $this->harga_properti - $this->down_payment;
        }
    }


    public function hitungCicilan()
    {
        $this->validate();

        $this->down_payment = (int) str_replace('.', '', $this->down_payment);
        $this->harga_properti = (int) str_replace('.', '', $this->harga_properti);

        $pokok_pinjaman = $this->harga_properti - $this->down_payment;
        $suku_bunga_bulanan = ($this->bunga / 12) / 100;
        $jumlah_bulan_5 = 5 * 12;
        $jumlah_bulan_10 = 10 * 12;
        $jumlah_bulan_15 = 15 * 12;
        $jumlah_bulan_20 = 20 * 12;
        $pembayaran_perbulan_5 = ($pokok_pinjaman * $suku_bunga_bulanan) / (1 - pow(1 + $suku_bunga_bulanan, -$jumlah_bulan_5));
        $pembayaran_perbulan_10 = ($pokok_pinjaman * $suku_bunga_bulanan) / (1 - pow(1 + $suku_bunga_bulanan, -$jumlah_bulan_10));
        $pembayaran_perbulan_15 = ($pokok_pinjaman * $suku_bunga_bulanan) / (1 - pow(1 + $suku_bunga_bulanan, -$jumlah_bulan_15));
        $pembayaran_perbulan_20 = ($pokok_pinjaman * $suku_bunga_bulanan) / (1 - pow(1 + $suku_bunga_bulanan, -$jumlah_bulan_20));
        $this->cicilan_5 = number_format($pembayaran_perbulan_5, 0, ',', '.');
        $this->cicilan_10 = number_format($pembayaran_perbulan_10, 0, ',', '.');
        $this->cicilan_15 = number_format($pembayaran_perbulan_15, 0, ',', '.');
        $this->cicilan_20 = number_format($pembayaran_perbulan_20, 0, ',', '.');

    }

    public function render()
    {
        return view('livewire.components.dev.credit-simulator', [
            //number format
            'down_payment' => number_format($this->down_payment, 0, ',', '.'),
            'jumlah_kredit' => number_format($this->jumlah_kredit, 0, ',', '.'),
        ]);
    }
}
