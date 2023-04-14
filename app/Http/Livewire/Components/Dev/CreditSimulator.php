<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;

class CreditSimulator extends Component
{
    public $propertyPrice;
    public $downPayment;
    public $persentase;
    public $tenor;
    public $fixedRate;
    public $tenorFixed;
    public $floatingRate;
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
        $principal = $this->propertyPrice - $this->downPayment;
        $interestFixRate = $this->fixedRate;
        $interestFloatingRate = $this->floatingRate;

        // if ($this->tenor > $this->yearFixed) {
        //     $interestRate = $this->floatingRate;
        // }

        $months = $this->tenor * 12;
        $months2 = ($this->tenor * 12) - ($this->tenorFixed);
        $monthsFixRate = $this->tenorFixed * 12;
        $this->monthsFixRate = $monthsFixRate;
        $monthlyFixRate = $interestFixRate / 1200;
        $monthlyFloatingRate = $interestFloatingRate / 1200;
        $monthlyPaymentFixRate = $principal * ($monthlyFixRate + ($monthlyFixRate / (pow(1 + $monthlyFixRate, $months) - 1)));

        //kalkulasi sisa pinjaman
        $sisaPinjaman = $principal - $monthlyPaymentFixRate;

        // dd($sisaPinjaman);

        $monthlyPaymentFloatingRate = $sisaPinjaman * ($monthlyFloatingRate + ($monthlyFloatingRate / (pow(1 + $monthlyFloatingRate, $months) - 1)));
        // $this->monthlyPaymentFix = number_format($monthlyPaymentFixRate, 0);
        $this->monthlyPaymentFix = number_format(floatval($monthlyPaymentFixRate), 0, ',', '.');
        $this->monthlyPaymentFloat = number_format(floatval($monthlyPaymentFloatingRate), 0, ',', '.');
    }

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


        if ($this->propertyPrice && $this->downPayment && $this->persentase != ($this->downPayment / $this->propertyPrice * 100)) {
            $this->persentase = $this->downPayment / $this->propertyPrice * 100;
            $this->jumlah_kredit = $this->propertyPrice - $this->downPayment;

        }
    }

    public function updatedPersentase(){

        if ($this->propertyPrice && $this->persentase && $this->downPayment != ($this->propertyPrice * $this->persentase / 100)) {
            $this->downPayment = $this->propertyPrice * $this->persentase / 100;
            $this->jumlah_kredit = $this->propertyPrice - $this->downPayment;
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
