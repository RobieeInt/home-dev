<div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="tr-single-box">
                <div class="tr-single-body">
                    <div class="tr-single-header">
                        <h4><i class="far fa-address-card pr-2"></i>Simulasi KPR</h4>
                    </div>
                    <form wire:submit.prevent="hitungCicilan">
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
                                <label for="down_payment">Down Payment:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Rp.
                                        </span>
                                    </div>
                                    <input type="number" wire:model.lazy="down_payment" id="down_payment"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="persentase">DP Persentase:</label>
                                <div class="input-group">
                                    <input type="number" wire:model.lazy="persentase" id="persentase"
                                        class="form-control">
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
                                <label for="jangka_waktu">Jangka Waktu / Tenor </label>
                                <div class="input-group">
                                    <input class="form-control @error('jangka_waktu') is-invalid @enderror"
                                        type="number" wire:model="jangka_waktu" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Tahun
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="bunga">Bunga</label>

                                <div class="input-group">
                                    <input class="form-control @error('bunga') is-invalid @enderror" type="text"
                                        wire:model="bunga" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            %
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <label for="jangka_waktu_floating">Jangka Waktu Floating</label>
                                <div class="input-group">
                                    <input class="form-control @error('jangka_waktu_floating') is-invalid @enderror"
                                        type="number" wire:model="jangka_waktu_floating" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Tahun
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-6">
                                <label for="bunga_floating">Bunga floating <code>/ 5 thn</code></label>

                                <div class="input-group">
                                    <input class="form-control @error('bunga_floating') is-invalid @enderror"
                                        type="number" wire:model="bunga_floating" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            %
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submi" class="btn btn-primary mt-3">Hitung Cicilan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    @if ($cicilan_5 || $cicilan_10 || $cicilan_15)
                                        <h5>Fix Rate</h5>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jangka Waktu</th>
                                                    <th>PerBulan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- if cicilan_new > 0 show --}}
                                                @if ($cicilan_new > 0)
                                                    <tr>
                                                        <td>{{ $jangka_waktu }} Tahun</td>
                                                        <td>Rp {{ $cicilan_new }}</td>
                                                    </tr>
                                                @else
                                                @endif
                                                <tr>
                                                    <td>5 Tahun</td>
                                                    <td>Rp {{ $cicilan_5 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>10 Tahun</td>
                                                    <td>Rp {{ $cicilan_10 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>15 Tahun</td>
                                                    <td>Rp {{ $cicilan_15 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>20 Tahun</td>
                                                    <td>Rp {{ $cicilan_20 }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-7 content-center">
                                <div class="mt-3">
                                    @if ($cicilan_5_floating > 0)
                                        <h5>Floating</h5>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jangka Waktu</th>
                                                    <th>PerBulan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($cicilan_new > 0)
                                                    <tr>
                                                        <td>{{ $jangka_waktu }} Tahun</td>
                                                        <td>Rp {{ $cicilan_new_floating }}</td>
                                                    </tr>
                                                @else
                                                @endif
                                                <tr>
                                                    <td>5 Tahun</td>
                                                    <td>Rp {{ $cicilan_5_floating }}</td>
                                                </tr>
                                                <tr>
                                                    <td>10 Tahun</td>
                                                    <td>Rp {{ $cicilan_10_floating }}</td>
                                                </tr>
                                                <tr>
                                                    <td>15 Tahun</td>
                                                    <td>Rp {{ $cicilan_15_floating }}</td>
                                                </tr>
                                                <tr>
                                                    <td>20 Tahun</td>
                                                    <td>Rp {{ $cicilan_20_floating }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
