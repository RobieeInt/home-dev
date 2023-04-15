<div>
    <form wire:submit.prevent="calculate">
        <div class="form-group">
            <label for="paymentType">Payment Type</label>
            <select class="form-control" id="paymentType" wire:model="paymentType">
                <option value="fixrate">Fix Rate</option>
                <option value="floatrate">Floating Rate</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tenor">Tenor (Years)</label>
            <input type="number" class="form-control" id="propertyPrice" wire:model="propertyPrice">
        </div>
        <div class="form-group">
            <label for="downPayment">Down Payment</label>
            <input type="number" class="form-control" id="downPayment" wire:model="downPayment">
        </div>
        <div class="form-group">
            <label for="fixRateYears">Fix Rate Years</label>
            <input type="number" class="form-control" id="fixRateYears" wire:model="fixRateYears">
        </div>
        <div class="form-group">
            <label for="fixRateInterest">Fix Rate Interest</label>
            <input type="number" step="0.01" class="form-control" id="fixRateInterest" wire:model="fixRateInterest">
        </div>
        <div class="form-group">
            <label for="floatRateYears">Floating Rate Years</label>
            <input type="number" class="form-control" id="floatRateYears" wire:model="floatRateYears">
        </div>
        <div class="form-group">
            <label for="floatRateInterest">Floating Rate Interest</label>
            <input type="number" step="0.01" class="form-control" id="floatRateInterest"
                wire:model="floatRateInterest">
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    @if ($monthlyPayment > 0)
        {{-- <h3>Monthly Payment: {{ number_format($monthlyPayment, 2) }}</h3> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Month</th>
                    <th>Payment Type</th>
                    <th>Monthly Payment</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment['year'] }}</td>
                        <td>{{ $payment['month'] }}</td>
                        <td>{{ ucfirst($payment['paymentType']) }}</td>
                        <td>{{ number_format($payment['monthlyPayment'], 2) }}</td>
                        <td>{{ number_format($payment['balance'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
