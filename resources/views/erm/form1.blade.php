<div class="card scroll container">
    <div class="card-header">
        RM.02.01-RJ / Pasien Baru ( dewasa )
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <form action="" class="simpanrm2">
        <table class="table table-sm text-xs">
            <tr>
                <td class="text-bold">Tanggal & Jam Kunjungan</td>
                <td><input readonly class="form-control form-control-sm" name="tgldanjamkunjungan_pasienbaru" id="tgldanjamkunjungan_pasienbaru" value="{{ $now }}"></td>
            </tr>
            <tr>
                <td class="text-bold">Tanggal & Jam Pengkajian</td>
                <td><input class="form-control form-control-sm" value="{{ $now }}" id="tgldanjampengkajian_pasienbaru" name="tgldanjampengkajian_pasienbaru"></td>
            </tr>
            <tr>
                <td class="text-bold">Sumber Data</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="sumberdata_pasienbaru" id="sumberdata_pasienbaru" value="1 | Pasien Sendiri " checked>
                        <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="sumberdata_pasienbaru" id="sumberdata_pasienbaru" value="2 | Keluarga">
                        <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Keluhan Utama</td>
                <td>
                    <textarea class="form-control form-control-sm" name="keluhanutama_pasienbaru" id="keluhanutama_pasienbaru"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-center bg-secondary">Tanda tanda Vital</td>
            </tr>
            <tr>
                <td class="text-bold">Tekanan Darah</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="tekanandarah_pasienbaru" id="tekanandarah_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">mmHg</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Frekuensi Nadi</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="frekuensinadi_pasienbaru" id="frekuensinadi_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Frekuensi Napas</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="frekuensinapas_pasienbaru" id="frekuensinapas_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Suhu</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="suhu_pasienbaru" id="suhu_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">C</div>
                        </div>
                    </div>
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Assesmen
                    Psikologi,Sosial,Ekonomi,Kultural Dan Spiritual</td>
            </TR>
            <tr>
                <td class="text-bold">Pekerjaan Pasien</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="5">
                        <label class="form-check-label" for="inlineRadio1">PNS/TNI/POLRI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="3">
                        <label class="form-check-label" for="inlineRadio2">Wiraswasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="15">
                        <label class="form-check-label" for="inlineRadio1">Pegawai
                            Swasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="11">
                        <label class="form-check-label" for="inlineRadio2">Pensiun</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="6" checked>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Tinggal Bersama</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="1 | suami">
                        <label class="form-check-label" for="inlineRadio1">Suami /
                            Istri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="2 | sendiri">
                        <label class="form-check-label" for="inlineRadio2">Sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="3 | anak ">
                        <label class="form-check-label" for="inlineRadio1">Anak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="4 | teman">
                        <label class="form-check-label" for="inlineRadio2">Teman</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="5 | orang tua" checked>
                        <label class="form-check-label" for="inlineRadio2">Orang Tua</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Suku</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="1 | jawa" checked>
                        <label class="form-check-label" for="inlineRadio1">Jawa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="2 | sunda">
                        <label class="form-check-label" for="inlineRadio2">Sunda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="3 | batak">
                        <label class="form-check-label" for="inlineRadio1">Batak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="4 | tionghoa">
                        <label class="form-check-label" for="inlineRadio2">Tionghoa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="5 | lain - lain">
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Agama</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="1" checked>
                        <label class="form-check-label" for="inlineRadio1">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="2">
                        <label class="form-check-label" for="inlineRadio2">Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="4">
                        <label class="form-check-label" for="inlineRadio1">Hindu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="5">
                        <label class="form-check-label" for="inlineRadio2">Budha</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="8">
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Riwayat Psikologis</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="1 | cemas ">
                        <label class="form-check-label" for="inlineRadio1">Cemas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="2 | takut">
                        <label class="form-check-label" for="inlineRadio2">Takut</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="3 | sedih">
                        <label class="form-check-label" for="inlineRadio1">Sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="4 | lainnya" checked>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Status Fungsional</td>
            </TR>
            <tr>
                <td class="text-bold">Penggunaan Alat Bantu</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="1 | tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="2 | tongkat">
                        <label class="form-check-label" for="inlineRadio2">Tongkat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="3 | kursi roda">
                        <label class="form-check-label" for="inlineRadio1">Kursi Roda</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Cacat Tubuh</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="cacat_pasienbaru" id="cacat_pasienbaru" value="1 | tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="cacat_pasienbaru" id="cacat_pasienbaru" value="2 | ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" placeholder="Sebutkan cacat tubuh ...">
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Assement Nyeri</td>
            </TR>
            <tr>
                <td class="text-bold">Apakah Pasien Mengeluh Nyeri</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="nyeri_pasienbaru" id="nyeri_pasienbaru" value="1 | tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="nyeri_pasienbaru" id="nyeri_pasienbaru" value="2 | ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" name="skalenyeripasien" placeholder="skala nyeri ...">
                    <img src="{{ asset('public/img/skalanyeri.jpg') }}" width="350px" alt="">
                </td>
            </tr>
        </table>
        <table class="table table-bordered table-sm">
            <thead>
                <th colspan="2">Assement Resiko Jatuh</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="bg-warning">Metode Get Up and Go</td>
                </tr>
                <tr class="bg-secondary">
                    <td>Faktor resiko</td>
                    <td>Skala</td>
                </tr>
                <tr>
                    <td class="text-center">a</td>
                    <td>Perhatikan cara berjalan pasien saat akan duduk dikursi. Apakah pasien tampak tidak seimbang (
                        sempoyongan / limbung ) ?</td>
                </tr>
                <tr>
                    <td class="text-center">b</td>
                    <td>Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang saat akan
                        duduk ?</td>
                </tr>
            </tbody>
            <tr>
                <td colspan="2" class="text-bold">Hasil</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="1 | Tidak beresiko" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b
                            )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="2 | Resiko Rendah">Risiko rendah ( ditemukan a atau
                        b)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="3 | Risiko tinggi">Risiko tinggi ( a dan b ditemukan
                        )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="4 | Tidak beresiko">
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b
                            )</label>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-bordered table-sm">
            <thead>
                <th colspan="3">Skrinning Gizi</th>
                <tr>
                    <th colspan="3">Metode Malnutrition Screnning Tools ( Pasien Dewasa )</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-bold" colspan="2">1. Apakah pasien mengalami penurunan berat badan yang tidak
                        diinginkan dalam 6 bulan
                        terakhir ?</td>
                    <td>Skor</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="1 | Tidak ada penurunan berat badan" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak ada penurunan berat badan</label>
                        </div>
                    </td>
                    <td rowspan="3">
                        <textarea readonly class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="2 | tidak yakin / tidak tahu ">
                            <label class="form-check-label" for="inlineRadio1">Tidak yakin / tidak tahu / terasa baju
                                lebih
                                longgar</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="3 | Ya">
                            <label class="form-check-label" for="inlineRadio1">Jika YA,berapa berat badan
                                tersebut</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="Tidak">
                            <label class="form-check-label" for="inlineRadio1" checked>Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="1 | 1 sd 5 kg">
                            <label class="form-check-label" for="inlineRadio1">1 - 5 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="2 | 6 sd 10 kg">
                            <label class="form-check-label" for="inlineRadio2">6 - 10 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="3 | 11 sd 15 kg">
                            <label class="form-check-label" for="inlineRadio2">11 - 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="4 | >15 kg">
                            <label class="form-check-label" for="inlineRadio2"> > 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="5 | tidak yakin penurunannya">
                            <label class="form-check-label" for="inlineRadio2"> Tidak yakin penurunannya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-bold">2. Apakah asupan makanan berkurang karena berkurangnya nafsu
                        makan</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="asupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="1 | tidak" checked>
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td rowspan="2">
                        <textarea readonly class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="asupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="2 | ya">
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="2" class="text-center">
                        <h5>Total Skor</h5>
                    </td>
                    <td><input readonly type="text" class="form-control form-control-sm"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-bold">3. Pasien dengan diagnosa khusus : Penyakit DM / Ginjal /
                        Hati /
                        Paru / Stroke / Kanker
                        / Penurunan imunitas geriatri, lain lain...</td>
                    <td>
                        <textarea class="form-control form-control-sm" name="penyakitlainpasien" placeholder="sebutkan jika ada penyakit lain ...."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="1 | Tidak">
                            <label class="form-check-label" for="inlineRadio2"> Tidak </label>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="2 | ya" checked>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-bold">Bila skor >= 2, pasien beresiko malnutrisi dilakukan
                        pengkajian
                        lanjut oleh ahli gizi</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="1 | Tidak">
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="2 | Ya" checked>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="" class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Diagnosa Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="diagnosakeperawatan" class="form-control" placeholder="ketik diagnosa keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Rencana Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="rencanakeperawatan" class="form-control" placeholder="ketik rencana keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Tindakan Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="tindakankeperawatan" class="form-control" placeholder="ketik tindakan keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Evaluasi Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="evaluasikeperawatan" class="form-control" placeholder="ketik evaluasi keperawatan ..."></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 justify-content-end mb-2">
            <button type="button" class="btn btn-success float-right mr-2 tombol-simpanrm2">Simpan</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunjungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $(".tombol-simpanrm2").click(function() {
            var data = $('.simpanrm2').serializeArray();
            kodekunjungan = $('#kodekunjungan').val()
            rm = $('#nomorrm').val()
            tglmasuk = $('#tglmasuk').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    data: JSON.stringify(data),
                    kodekunjungan,
                    rm,
                    tglmasuk
                },
                url: '<?= route('simpanrm02') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah ...',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            footer: ''
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: 'Data berhasil disimpan!',
                            footer: ''
                        })
                    }
                }
            });
        });
    });
</script>