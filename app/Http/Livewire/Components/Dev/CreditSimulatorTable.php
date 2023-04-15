<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;

class CreditSimulatorTable extends Component
{
    public $tenor = 10;
    public $propertyPrice = 1000000000;
    public $downPayment = 50000000;
    public $fixRateYears = 3;
    public $fixRateInterest = 5.8;
    public $floatRateYears = 7;
    public $floatRateInterest = 9.4;
    public $paymentType = 'fixrate';
    public $monthlyPayment = 0;
    public $payments = [];

    public function calculate()
    {
        $rate = $this->paymentType === 'fixrate' ? $this->fixRateInterest : $this->floatRateInterest;
        $months = $this->tenor * 12;
        $loanAmount = $this->propertyPrice - $this->downPayment;

        $interestRate = $rate / 100 / 12;
        $interestMultiplier = pow(1 + $interestRate, $months);

        $monthlyPayment = ($loanAmount * $interestRate * $interestMultiplier) / ($interestMultiplier - 1);
        $this->monthlyPayment = round($monthlyPayment, 2);

        $balance = $loanAmount;
        $year = 1;
        $month = 1;

        while ($balance > 0) {
            $interest = $balance * $interestRate;
            $principal = $this->monthlyPayment - $interest;

            if ($balance - $principal < 0) {
                $principal = $balance;
            }

            $balance -= $principal;

            $this->payments[] = [
                'year' => $year,
                'month' => $month,
                'paymentType' => $this->paymentType,
                'monthlyPayment' => $this->monthlyPayment,
                'balance' => round($balance, 2),
            ];

            if ($month === 12) {
                $year++;
                $month = 1;
            } else {
                $month++;
            }

            if ($this->paymentType === 'fixrate') {
                if ($year > $this->fixRateYears) {
                    $this->paymentType = 'floatrate';
                    $interestRate = $this->floatRateInterest / 100 / 12;
                    $interestMultiplier = pow(1 + $interestRate, $months);
                    $this->monthlyPayment = ($loanAmount * $interestRate * $interestMultiplier) / ($interestMultiplier - 1);
                }
            } else {
                if ($year > ($this->fixRateYears + $this->floatRateYears)) {
                    break;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.components.dev.credit-simulator-table');
    }
}
