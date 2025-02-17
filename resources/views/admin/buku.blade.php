@extends('homepage')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabel Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Buku</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Table Data Buku</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tahun Terbit</th>
                                        <th scope="col">ISBN</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cara Memahami Wanita</td>
                                        <td>Anonim</td>
                                        <td>PT TERBITLAH</td>
                                        <td>2016-05-25</td>
                                        <td>20160525</td>
                                        <td>Umum</td>
                                        <td>3</td>
                                        <td>90,000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cara Mengubah Dosa Menjadi Saldo</td>
                                        <td>Anonim</td>
                                        <td>PT TERBITLAH</td>
                                        <td>2016-05-25</td>
                                        <td>20160525</td>
                                        <td>Umum</td>
                                        <td>3</td>
                                        <td>90,000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Asli Jawa</td>
                                        <td>Anonim</td>
                                        <td>PT TERBITLAH</td>
                                        <td>2016-05-25</td>
                                        <td>20160525</td>
                                        <td>Umum</td>
                                        <td>3</td>
                                        <td>90,000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Cara Masuk Isekai</td>
                                        <td>Anonim</td>
                                        <td>PT TERBITLAH</td>
                                        <td>2016-05-25</td>
                                        <td>20160525</td>
                                        <td>Umum</td>
                                        <td>3</td>
                                        <td>90,000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Cara Menjadi Ironmen</td>
                                        <td>Anonim</td>
                                        <td>PT TERBITLAH</td>
                                        <td>2016-05-25</td>
                                        <td>20160525</td>
                                        <td>Umum</td>
                                        <td>3</td>
                                        <td>90,000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
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