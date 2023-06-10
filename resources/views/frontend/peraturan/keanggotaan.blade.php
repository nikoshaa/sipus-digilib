@extends('frontend.default')
@section('title', 'Keanggotaan')

@section('content')
    <div class="container-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">::Keanggotaan::</h2>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-6">
            <section class="bg-image"
                style="
        background-image: url('{{ asset('assets/cover/keanggotaan.jpg') }}');
        height: 80vh;
        background-repeat:no-repeat">
            </section>
        </div>
        <div class="col-6">
            <div class="p-5">
                <h2 class="fs-1 fw-5">PERATURAN</h2>
                <h2 style="font-size: 2rem">KEANGGOTAAN</h2>
                <ol>
                    <li>Mengisi formulir keanggotaan.</li>
                    <li>Menyerahkan pas foto terbaru ukuran 2 x 3 cm sebanyak dua lembar.</li>
                    <li>Menunjukkan/melampirkan foto copy Kartu Pelajar SMAN 1 Blega.</li>
                    <li>Kartu Anggota berlaku selama satu tahun Akademik.</li>
                    <li>Kartu Anggota yang telah masa berlakunya dapat diperpanjang kembali.</li>
                    <li>Permintaan penggantian Kartu Anggota yang hilang atau karena rusak dapat dilayani setelah
                        memberitahukan kepada petugas perpustakaan dan mengisi kembali formulir dan persyaratan lain
                        yang ditetapkan.</li>
                    <li>Untuk sementara, siswa dari luar SMAN 1 Blega atau umum tidak dapat menjadi Anggota
                        Perpustakaan.</li>
                </ol>
            </div>
        </div>
    </div>
    <div>
    </div>

@endsection
