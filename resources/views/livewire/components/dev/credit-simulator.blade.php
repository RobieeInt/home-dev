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
                                    class="form-control @error('propertyPrice') is-invalid

                                    @enderror"
                                    id="propertyPrice" wire:model.lazy="propertyPrice">
                                {{-- @error('harga_properti')
                                        <span class="error">{{ $message }}</span>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="downPayment">Down Payment:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                </div>
                                <input type="number" wire:model.lazy="downPayment" id="downPayment"
                                    class="form-control">
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
                            <label for="harga_properti">Jumlah Kredit</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($jumlah_kredit, 0, '.', ',') }}" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="fixedRate">Bunga Fix Rate</label>

                            <div class="input-group">
                                <input class="form-control @error('fixedRate') is-invalid @enderror" type="text"
                                    wire:model="fixedRate" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        %
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="tenorFixed">Fixed Year</label>
                            <div class="input-group">
                                <input class="form-control @error('tenorFixed') is-invalid @enderror" type="number"
                                    wire:model="tenorFixed" />
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Tahun
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="floatingRate">Bunga Floating</label>

                            <div class="input-group">
                                <input class="form-control @error('floatingRate') is-invalid @enderror" type="number"
                                    wire:model="floatingRate" />
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
        @if ($monthlyPaymentFix)
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
                                        <h3 class="text-center">Rp. {{ $monthlyPaymentFix }}
                                        </h3>
                                    </div>
                                    <div class="mt-5">
                                        {{-- show monthlyPaymentFix number format --}}
                                        <h4 class="text-center text-red-400">Angsuran Setelah Floating
                                        </h4>
                                        <h3 class="text-center text-red-400">Rp. {{ $monthlyPaymentFloat }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-7 content-center">
                                    <div class="mt-3">
                                        {{-- show jumlah_kredit, jangka waktu,  bunga fixrate & bunga floating --}}
                                        <h4 class="text-center text-red-400">Pinjaman</h4>
                                        <h4 class="text-center text-red-400">
                                            Rp. {{ number_format($jumlah_kredit, 0) }}</h4>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-lg-6">
                                            {{-- show monthlyPaymentFix number format --}}
                                            <h4 class="text-center text-red-400">Bunga Flat</h4>
                                            <h3 class="text-center text-red-400">{{ $fixedRate }}%
                                            </h3>
                                        </div>
                                        <div class="col-lg-6">
                                            {{-- show monthlyPaymentFix number format --}}
                                            <h4 class="text-center text-red-400">Bunga Floating</h4>
                                            <h3 class="text-center text-red-400">{{ $floatingRate }}%
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
