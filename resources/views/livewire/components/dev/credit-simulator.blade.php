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
                                {{-- <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Rp.
                                        </span>
                                    </div> --}}
                                <input type="text"
                                    class="form-control @error('harga_properti') is-invalid

                                    @enderror"
                                    id="harga_properti" wire:model.lazy="harga_properti">
                                {{-- @error('harga_properti')
                                        <span class="error">{{ $message }}</span>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="dp">Down Payment:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                </div>
                                <input type="number" wire:model.lazy="dp" id="dp" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="persentase">DP Persentase:</label>
                            <div class="input-group">
                                <input type="number" wire:model.lazy="persentase" id="persentase" class="form-control">
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
                            <div class="row">
                                <div class="col-lg-5 content-center">
                                    <div class="mt-3">
                                        {{-- show monthlyPaymentFix number format --}}
                                        <h4 class="text-center">Angsuran <br> ( {{ $monthsFixRate }} Bulan Pertama )
                                        </h4>
                                        <h3 class="text-center">Rp. {{ number_format($monthlyPaymentFix, 0) }}
                                        </h3>
                                    </div>
                                    <div class="mt-5">
                                        {{-- show monthlyPaymentFix number format --}}
                                        <h4 class="text-center text-red-400">Angsuran Setelah Floating
                                        </h4>
                                        <h3 class="text-center text-red-400">Rp.
                                            {{ number_format($monthlyPaymentFloat) }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-7 content-center">
                                    <div class="mt-3">
                                        {{-- show jumlah_kredit, jangka waktu,  bunga fixrate & bunga floating --}}
                                        <h4 class="text-center text-red-400">Pinjaman</h4>
                                        <h4 class="text-center text-red-400">
                                            Rp. {{ number_format($harga_pokok_pinjaman, 0) }}</h4>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-lg-6">
                                            {{-- show monthlyPaymentFix number format --}}
                                            <h4 class="text-center text-red-400">Bunga Flat</h4>
                                            <h3 class="text-center text-red-400">{{ $bunga_fixed }}%
                                            </h3>
                                        </div>
                                        <div class="col-lg-6">
                                            {{-- show monthlyPaymentFix number format --}}
                                            <h4 class="text-center text-red-400">Bunga Floating</h4>
                                            <h3 class="text-center text-red-400">{{ $bunga_float }}%
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        {{-- show jumlah_kredit, jangka waktu,  bunga fixrate & bunga floating --}}
                                        <h4 class="text-center text-red-400">Jangka Waktu</h4>
                                        <h4 class="text-center text-red-400">{{ $tenor }} Tahun</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@section('js')
    <script>
        //number format currency
        document.addEventListener('livewire:load', () => {

            document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
                element.addEventListener('keyup', function(e) {
                    let cursorPostion = this.selectionStart;
                    let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                    let originalLenght = this.value.length;
                    if (isNaN(value)) {
                        this.value = "";
                    } else {
                        this.value = value.toLocaleString('id-ID', {
                            currency: 'IDR',
                            style: 'currency',
                            minimumFractionDigits: 0
                        });
                        cursorPostion = this.value.length - originalLenght + cursorPostion;
                        this.setSelectionRange(cursorPostion, cursorPostion);
                    }
                });
            });


        });
    </script>
@endsection
