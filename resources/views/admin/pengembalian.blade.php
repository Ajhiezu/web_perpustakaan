@extends('homepage')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pengembalian Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">Pengembalian</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pengembalian</h5>
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
                                        <label for="inputTanggalPeminjaman" class="col-sm-2 col-form-label">Tanggal
                                            Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="17-02-2025" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTanggalPengembalian" class="col-sm-2 col-form-label">Tanggal
                                            Pengembalian</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="17-02-2025" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status Pengembalian</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="1">Kembali</option>
                                                <option value="2">Dipinjam</option>
                                                <option value="3">Hilang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputAnggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="Sukuna" readonly>
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
                                            <input type="text" class="form-control" value="Cara Memahami Wanita" readonly>
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