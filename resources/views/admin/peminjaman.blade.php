@extends('homepage')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Peminjaman Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">Peminjaman</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Peminjaman</h5>
                            <div class="col-lg-12">
                                <!-- General Form Elements -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputId" class="col-sm-2 col-form-label">ID Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="#1" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTanggalPeminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="17-02-2025" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTanggalPengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" placeholder="Tanggal Pengembalian">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputStatus" class="col-sm-2 col-form-label">Status Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="Dipinjam" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputAnggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Anggota">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputIdBuku" class="col-sm-2 col-form-label">ID Buku</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="#1" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputJudulBuku" class="col-sm-2 col-form-label">Judul Buku</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Judul Buku">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form><!-- End General Form Elements -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection