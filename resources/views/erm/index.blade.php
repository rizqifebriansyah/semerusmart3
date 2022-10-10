@extends('semeru.header')
@section('container')
<div class="container-fluid" style="margin-top:90px">
        <div id="tabelpasien" class="container" >
            <p>Data Pasien</p>
            <table id="datapasien" class="table table-sm text-xs table-bordered table-hover">
                <thead>
                    <th>Kode kunjungan</th>
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>alamat</th>
                    <th>Unit</th>
                </thead>
                <tbody>
                    @foreach ($pasien as $p )                        
                    <tr class="pilihpasien toastsDefaultSuccess" nomor-rm="{{ $p->no_rm }}" nama="{{ $p->nama }}" kodekunjungan="{{ $p->kode_kunjungan }}" alamat="{{ $p->alamat }}" counter="{{ $p->counter }}"umur="{{ $p->umur }}" unit="{{ $p->unit }}" tglmasuk = {{ $p->tgl_masuk }}>
                        <td>{{ $p->kode_kunjungan }}</td>
                        <td>{{ $p->no_rm }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->umur }} tahun</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->unit }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="pasienterpilih" class="card pasienterpilih">
            
        </div>
        <!-- /.card -->
    </div>
@endsection
