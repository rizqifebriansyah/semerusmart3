<div class="card">
    <div class="card-header">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI ( CPPT )</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm table-bordered text-xs">
                   <thead>
                    <th>Tanggal / Jam</th>
                    <th>Profesi</th>
                    <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan dalam assesmen.</th>
                   </thead>
                   <tbody>
                    @foreach ($ass_kep as $d)
                        <tr>
                            <td>{{ $d->tglwaktu_assesmen }}</td>
                            <td>Perawat Ruangan</td>
                            <td>
                                Sumber Data {{ $d->sumber_data }} <br> 
                                Keluhan Utama {{ $d->keluhan_utama   }} <br>
                                tekanan darah {{ $d->ttv_tekanan_darah }} <br>
                                frekuensi nafas {{ $d->ttv_freq_napas }} <br>
                                frekuensi nadi {{ $d->ttv_freq_nadi }} <br>
                                suhu badan {{ $d->ttv_suhu }} <br><br>                           
                                {{-- Riwayat Psikologis -> {{ $d->riwayat_Psikologis }} <br>                           
                                Status Fungsi Alat Bantu -> {{ $d->stafungsi_Alatbantu }} <br>                           
                                Cacat Tubuh -> {{ $d->stafungsi_cacattubuh }} <br><br> --}}
                                <p class="text-bold">Rencana Keperawatan</p>                           
                                    {{ $d->rencana_perawat }}
                                <p class="text-bold">Tindakan Keperawatan</p>                           
                                    {{ $d->tindakan_perawat }}
                                <p class="text-bold">Evaluasi Keperawatan</p>                           
                                    {{ $d->evaluasi_perawat }}
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                </table>
            </div>
        </div>        
    </div>
</div>