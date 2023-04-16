<div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="tr-single-box">
                <div class="tr-single-body">
                    <div class="tr-single-header">
                        <h4><i class="far fa-address-card pr-2"></i>Simulasi KPR</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="harga_properti">Harga Rumah</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                </div>
                                <input type="text"
                                    class="form-control @error('harga_properti') is-invalid

                                    @enderror"
                                    type-currency="IDR" id="harga_properti" wire:model.lazy="harga_properti">
                                {{-- @error('harga_properti')
                                        <span class="error">{{ $message }}</span>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="dp">Down Payment</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                </div>
                                <input type="text"
                                    class="form-control @error('harga_properti') is-invalid

                                @enderror"
                                    type-currency="IDR" id="dp" wire:model.lazy="dp">
                                {{-- @error('harga_properti')
                                        <span class="error">{{ $message }}</span>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="persentase">DP Persentase:</label>
                            <div class="input-group">
                                <input type="number" wire:model.lazy="persentase" id="persentase"
                                    class="form-control @error('persentase') is-invalid

                                @enderror">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        %
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="jumlah_kredit">Jumlah Kredit</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($jumlah_kredit, 0, '.', ',') }}" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="bunga_fixed">Bunga Fix Rate</label>

                            <div class="input-group">
                                <input class="form-control @error('bunga_fixed') is-invalid @enderror" type="text"
                                    wire:model="bunga_fixed" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        %
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="period_bunga_fixed">Fixed Year</label>
                            <div class="input-group">
                                <input class="form-control @error('period_bunga_fixed') is-invalid @enderror"
                                    type="number" wire:model="period_bunga_fixed" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Tahun
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="bunga_float">Bunga Floating</label>

                            <div class="input-group">
                                <input class="form-control @error('bunga_float') is-invalid @enderror" type="number"
                                    wire:model="bunga_float" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        %
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="tenor">Jangka Waktu / Tenor </label>
                            <div class="input-group">
                                <input class="form-control @error('tenor') is-invalid @enderror" type="number"
                                    wire:model="tenor" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Tahun
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{-- <button type="submit" class="btn btn-primary mt-3">Hitung Cicilan</button> --}}
                        <button class="btn btn-primary mt-3" wire:click="calculate">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
        @if ($data)
            <div class="col-md-12 col-lg-6">
                <div class="col-lg-12">
                    <div class="tr-single-box">
                        <div class="tr-single-body">
                            <div class="tr-single-header">
                                <h4><i class="far fa-credit-card pr-2"></i>Hasil</h4>
                            </div>
                            {{-- <div class="table-responsive"> --}}
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Plafon Pinjaman</td>
                                        <td> Rp. {{ number_format($harga_pokok_pinjaman, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Suku Bunga Flat</td>
                                        <td>{{ $bunga_fixed }}%</td>
                                    </tr>
                                    <tr>
                                        <td>Angsuran <br> ({{ $period_bunga_fixed }} Tahun Pertama)</td>
                                        <td style="align-items: center;">Rp. {{ number_format($monthlyPaymentFix, 0) }}0
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Suku Bunga Floating</td>
                                        <td>{{ $bunga_float }}%</td>
                                    </tr>
                                    <tr>
                                        <td>Angsuran Floating <br> ({{ $SisaTahun }} Tahun)</td>
                                        <td>Rp.
                                            {{ number_format($monthlyPaymentFloat) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@section('js')
    <script>
        document.addEventListener('livewire:load', () => {
            document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
                // Format nilai pada saat halaman pertama kali dimuat
                formatCurrencyValue(element);

                // Tambahkan event listener untuk event change dan input pada elemen input
                element.addEventListener('change', function(e) {
                    formatCurrencyValue(this);
                });
                element.addEventListener('input', function(e) {
                    formatCurrencyValue(this);
                });
            });
        });

        function formatCurrencyValue(element) {
            let cursorPosition = element.selectionStart;
            let value = parseInt(element.value.replace(/[^,\d]/g, ''));
            let originalLength = element.value.length;
            if (isNaN(value)) {
                element.value = "";
            } else {
                element.value = value.toLocaleString('id-ID', {
                    // currency: 'IDR',
                    // style: 'currency',
                    minimumFractionDigits: 0
                });
                cursorPosition = element.value.length - originalLength + cursorPosition;
                element.setSelectionRange(cursorPosition, cursorPosition);
            }
        }
    </script>
@endsection
