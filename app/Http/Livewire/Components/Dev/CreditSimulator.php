<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;

class CreditSimulator extends Component
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
    public $persentase;
    public $jumlah_kredit;

    public $monthsFixRate;
    public $monthlyPaymentFix;
    public $monthlyPaymentFloat;


    // public $propertyPrice = 1000000000;
    // public $downPayment = 50000000;
    // public $fixedRateTenor = 3;
    // public $fixedRateInterest = 5.8;
    // public $floatingRateInterest = 9.4;
    // public $tenor = 10;

    public function calculate()
    {
        $this->harga_pokok_pinjaman = $this->harga_properti - $this->dp;
        $this->sisa_pinjaman = $this->harga_pokok_pinjaman;
        $harga_pokok_pinjaman = $this->harga_pokok_pinjaman;
        $this->monthsFixRate = $this->period_bunga_fixed * 12;

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

                    $this->monthlyPaymentFix = $total_angs;
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

                $this->monthlyPaymentFloat = $total_angs;

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



    //   dd($this->data['installment']);
        // $monthlyPaymentFloatingRate = $principal * ($monthlyFloatingRate + ($monthlyFloatingRate / (pow(1 + $monthlyFloatingRate, $months) - 1)));
        // $this->monthlyPaymentFix = number_format($monthlyPaymentFixRate, 0);
        // $this->monthlyPaymentFix = number_format(floatval($total_angs), 0, ',', '.');
        // $this->monthlyPaymentFloat = number_format(floatval($total_angsFloat), 0, ',', '.');
    // }

    public function render()
    {

        return view('livewire.components.dev.credit-simulator');
    }

    // public function calculateFixedRateTotalPayment()
    // {
    //     $fixedRateMonthlyInterest = $this->fixedRateInterest / 12 / 100;
    //     $fixedRateTenorMonths = $this->fixedRateTenor * 12;
    //     $totalLoan = $this->propertyPrice - $this->downPayment;
    //     $fixedRateTotalPayment = ($fixedRateMonthlyInterest * $totalLoan * pow(1 + $fixedRateMonthlyInterest, $fixedRateTenorMonths)) / (pow(1 + $fixedRateMonthlyInterest, $fixedRateTenorMonths) - 1) * $fixedRateTenorMonths;

    //     // dd($fixedRateTotalPayment);
    //     return $fixedRateTotalPayment;
    // }

    //     return view('livewire.components.dev.credit-simulator');
    // }



    // public function calculateLoan()
    // {
    //     $principal = $this->propertyPrice - $this->downPayment;

    //     $fixRateMonth = $this->fixRateYear * 12;
    //     $fixRateInterestMonthly = $this->fixRateInterest / 100 / 12;
    //     $fixRatePayment = ($principal * $fixRateInterestMonthly) / (1 - pow(1 + $fixRateInterestMonthly, -$fixRateMonth));

    //     $floatingRateMonth = $this->floatingRateYear * 12;
    //     $floatingRateInterestMonthly = $this->floatingRateInterest / 100 / 12;
    //     $floatingRatePayment = ($principal * $floatingRateInterestMonthly) / (1 - pow(1 + $floatingRateInterestMonthly, -$floatingRateMonth));

    //     $remainingYears = $this->loanTerm - $this->fixRateYear;
    //     if ($remainingYears > 0) {
    //         $remainingMonths = $remainingYears * 12;
    //         $remainingInterestMonthly = $this->floatingRateInterest / 100 / 12;
    //         $remainingPayment = ($principal * $remainingInterestMonthly) / (1 - pow(1 + $remainingInterestMonthly, -$remainingMonths));
    //         $monthlyPayment = $fixRatePayment + $remainingPayment;
    //     } else {
    //         $monthlyPayment = $fixRatePayment;
    //     }

    //     return view('livewire.components.dev.credit-simulator', [
    //         'principal' => $principal,
    //         'fixRatePayment' => $fixRatePayment,
    //         'floatingRatePayment' => $floatingRatePayment,
    //         'monthlyPayment' => $monthlyPayment,
    //     ]);
    // }

    // public function updatedFixRateInterest()
    // {
    //     if ($this->fixRateInterest < $this->floatingRateInterest) {
    //         $this->floatingRateInterest = $this->fixRateInterest;
    //     }
    // }

    // public function updatedFloatingRateInterest()
    // {
    //     if ($this->floatingRateInterest > $this->fixRateInterest) {
    //         $this->fixRateInterest = $this->floatingRateInterest;
    //     }
    // }

    //numberFormat
    public function updatedDownPayment()
    {


        if ($this->harga_properti && $this->dp && $this->persentase != ($this->dp / $this->harga_properti * 100)) {
            $this->persentase = $this->dp / $this->harga_properti * 100;
            $this->jumlah_kredit = $this->harga_properti - $this->dp;

        }
    }

    public function updatedPersentase(){

        if ($this->harga_properti && $this->persentase && $this->dp != ($this->harga_properti * $this->persentase / 100)) {
            $this->dp = $this->harga_properti * $this->persentase / 100;
            $this->jumlah_kredit = $this->harga_properti - $this->dp;
        }
    }


    // public function calculate()
    // {
    //     $fixRateTenor = $this->fixRateTenor * 12; // konversi tenor fix rate ke dalam bulan
    //     $floatingRateTenor = $this->floatingRateTenor * 12; // konversi tenor floating rate ke dalam bulan

    //     $totalLoanAmount = $this->propertyPrice - $this->downPayment;
    //     $remainingLoanAmount = $totalLoanAmount;
    //     $interestRate = $this->fixRateInterest / 100 / 12; // konversi suku bunga fix rate menjadi suku bunga per bulan
    //     $floatingRateInterestRate = $this->floatingRateInterest / 100 / 12; // konversi suku bunga floating rate menjadi suku bunga per bulan

    //     $payments = [];

    //     for ($i = 1; $i <= $fixRateTenor; $i++) {
    //         $monthlyInterest = $remainingLoanAmount * $interestRate;
    //         $fixRatePayment = $this->calculatePayment($totalLoanAmount, $interestRate, $fixRateTenor - $i + 1);

    //         $payments[] = [
    //             'month' => $i,
    //             'fixRatePayment' => $fixRatePayment,
    //             'floatingRatePayment' => 0, // inisialisasi biaya floating rate dengan 0
    //             'remainingLoanAmount' => $remainingLoanAmount - $fixRatePayment,
    //             'year' => ceil($i / 12)
    //         ];

    //         $remainingLoanAmount -= $fixRatePayment;
    //         $remainingLoanAmount += $monthlyInterest;
    //     }

    //     for ($i = $fixRateTenor + 1; $i <= $fixRateTenor + $floatingRateTenor; $i++) {
    //         $monthlyInterest = $remainingLoanAmount * $floatingRateInterestRate;
    //         $floatingRatePayment = $this->calculatePayment($totalLoanAmount, $floatingRateInterestRate, $floatingRateTenor - ($i - $fixRateTenor) + 1);

    //         $payments[] = [
    //             'month' => $i,
    //             'fixRatePayment' => 0, // biaya fix rate di set 0
    //             'floatingRatePayment' => $floatingRatePayment,
    //             'remainingLoanAmount' => $remainingLoanAmount - $floatingRatePayment,
    //             'year' => ceil($i / 12)
    //         ];

    //         $remainingLoanAmount -= $floatingRatePayment;
    //         $remainingLoanAmount += $monthlyInterest;
    //     }

    //     $this->payments = $payments;
    // }

    // private function calculatePayment($totalLoanAmount, $interestRate, $numberOfPayments)
    // {
    //     $payment = $totalLoanAmount * $interestRate * pow(1 + $interestRate, $numberOfPayments) / (pow(1 + $interestRate, $numberOfPayments) - 1);

    //     return round($payment, 2);
    // }



}
