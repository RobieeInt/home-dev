<div>
    <form wire:submit.prevent="calculate">
        <div class="form-group">
            <label for="harga_properti">Harga Property</label>
            <input type="number" class="form-control" id="harga_properti" wire:model="harga_properti">
        </div>
        <div class="form-group">
            <label for="dp">Down Payment</label>
            <input type="number" class="form-control" id="dp" wire:model="dp">
        </div>
        <div class="form-group">
            <label for="tenor">Tenor</label>
            <input type="number" class="form-control" id="tenor" wire:model="tenor">
        </div>
        <div class="form-group">
            <label for="period_bunga_fixed">Period Bunga Fix</label>
            <input type="number" class="form-control" id="period_bunga_fixed" wire:model="period_bunga_fixed">
        </div>
        <div class="form-group">
            <label for="bunga_fixed">Bunga fix</label>
            <input type="number" step="0.01" class="form-control" id="bunga_fixed" wire:model="bunga_fixed">
        </div>
        <div class="form-group">
            <label for="bunga_float">Floating Rate Interest</label>
            <input type="number" step="0.01" class="form-control" id="bunga_float" wire:model="bunga_float">
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    @if ($data)
        {{-- <h3>Monthly Payment: {{ number_format($monthlyPayment, 2) }}</h3> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Angsuran Bunga</th>
                    <th>angsuran_pokok</th>
                    <th>total_angsuran</th>
                    <th>sisa_pinjaman</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['installment'] as $data)
                    <tr>
                        <td>{{ $data['bulan'] }}</td>
                        <td>{{ $data['angsuran_bunga'] }}</td>
                        <td>{{ $data['angsuran_pokok'] }}</td>
                        <td>{{ $data['total_angsuran'] }}</td>
                        <td>{{ $data['sisa_pinjaman'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
