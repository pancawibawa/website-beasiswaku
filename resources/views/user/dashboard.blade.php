@extends('layouts.templatelogin')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Dashboard Beasiswaku</h1>

        <div class="row">



            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-purple">Syarat &amp; Ketentuan Beasiswa Akademik</h6>
                    </div>
                    <div class="card-body">

                        <li>Sehat jasmani</li>
                        <li>Mahasiswa Aktif ITTP</li>
                        <li>IPK Terakhir: Minimal 3.0</li>
                        <li>Semester 1-8</li>
                        <li>Berperan aktif menjadi Asisten Labolatorium/Student Staff</li>
                        <div class="mt-4 text-center">
                            <a href="{{ route('beasiswa.create') }}?jenis=akademik" class="btn btn-primary">Daftar
                                Sekarang</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Illustrations -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-purple">Syarat &amp; Ketentuan Beasiswa NON - Akademik</h6>
                    </div>
                    <div class="card-body">

                        <li>Sehat jasmani</li>
                        <li>Mahasiswa Aktif ITTP</li>
                        <li>IPK Terakhir: Minimal 3.0</li>
                        <li>Semester 1-8</li>
                        <li>Menghadiri dan mengikuti kegiatan yang diselenggarakan Program Studi/Fakultas/Institut</li>
                        <li>Pernah Mengikuti Kejuaraan Non Akademik</li>
                        <li>Berperan aktif menjadi Asisten Labolatorium/Student Staff</li>
                        <li>Aktif dan menjadi pengurus dalam kegiatan/organisasi kemahasiswaan</li>
                        <li>Mengikuti Kegiatan PKM/PPK Ormawa/P2MW/Gemastik/KDMI/NUDC/Satria Data/ dan LIDM</li>
                        <div class="mt-4 text-center">
                            <a href="{{ route('beasiswa.create') }}?jenis=nonakademik" class="btn btn-primary">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
