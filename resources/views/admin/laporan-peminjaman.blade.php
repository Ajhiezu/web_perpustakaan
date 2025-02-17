@extends('homepage')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabel Laporan Peminjaman</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Laporan</li>
                    <li class="breadcrumb-item active">Laporan Peminjaman</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Table Laporan Peminjaman</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal Peminjaman</th>
                                        <th scope="col">Tanggal Pengembalian</th>
                                        <th scope="col">ID Buku</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Nama Anggota</th>
                                        <th scope="col">Status Peminjaman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>17-02-2025</td>
                                        <td>17-02-2025</td>
                                        <td>#1</td>
                                        <td>Cara Memahami Wanita</td>
                                        <td>Sukuna</td>
                                        <td class="green"><span class="badge bg-success">Dipinjam</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection