@extends('layouts.Index')

@section('title')
Profile
@endsection

@section('content')

    <section class="about py-5 border-bottom ">
        <div class="text-center ">
            <h1 class="mb-4">Tentang Perusahaan</h1>
        </div>
        <div class="container text-left">

            <div class="row align-items-left ">
                <div class="col-md-5">
                    <h2>PT. Putera Adhi Perkasa</h2>
                    <p>PT. Putera Adhi Perkasa merupakan perusahaan supplier aksesoris bangunan tangan pertama yang telah memiliki brand hardware dan sanitary ternama di Indonesia, diantaranya adalah FLUSSO, VELOCE, PROSPERO, VINCITORY dan MATCH.</p>
                    <p>Kualitas dan kenyamanan produk untuk konsumen selalu menjadi fokus utama kami, sehingga kami dapat terus berkembang dan telah menjangkau pasar hampir ke seluruh wilayah di Indonesia.</p>
                    <a href="https://wa.me/6289651502727" class="btn btn-dark">Hubungi Kami</a>
                </div>
                <div class="col-md-6 " align = "right" >
                    <img src   = "{{ url('frontend/images/logo_tokontol.png') }}" alt = "Logo" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>


    <section class="vision-mission py-5 bg-white">
        <div class="container">
            <h2 class="text-left mb-4 ">VISI</h2>
            <p class="text-left mb-5">"Menjadi Perusahaan Aksesoris Bangunan yang Unggul dan Terkemuka"</p>
            <h3>MISI</h3>
            <ul>
                <li>Mengembangkan bisnis yang berorientasi pada kebutuhan serta kepuasan pelanggan.</li>
                <li>Menciptakan produk-produk berkualitas yang dinamis dan inovatif dengan harga yang terjangkau.</li>
                <li>Memperluas jangkauan pemasaran ke seluruh wilayah Indonesia maupun Internasional.</li>
            </ul>
            <p><strong>Komitmen Kami:</strong> Putera Adhi Perkasa terbukti mampu menempatkan posisi sebagai salah satu perusahaan yang berkredebilitas tinggi dalam menciptakan produk yang dinamis serta inovatif dan telah disesuaikan dengan standar kenyamanan konsumen di Indonesia.</p>
            <p>Kesuksesan PT. Putera Adhi Perkasa lahir karena adanya pelayanan optimal yang profesional dan komitmen untuk selalu fokus akan kebutuhan konsumen di Indonesia.</p>
        </div>
    </section>
@endsection
