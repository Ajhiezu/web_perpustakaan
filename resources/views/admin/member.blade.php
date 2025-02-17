@extends('homepage')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabel Member</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Member</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Table Data Member</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telephone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status Keanggotaan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hiory</td>
                                        <td>Ngawi</td>
                                        <td>1234567890</td>
                                        <td>anime@gmail.com</td>
                                        <td class="green"><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Gojo</td>
                                        <td>Ngawi</td>
                                        <td>1234567890</td>
                                        <td>anime@gmail.com</td>
                                        <td class="green"><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sukuna</td>
                                        <td>Ngawi</td>
                                        <td>1234567890</td>
                                        <td>anime@gmail.com</td>
                                        <td class="green"><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Itadori</td>
                                        <td>Ngawi</td>
                                        <td>1234567890</td>
                                        <td>anime@gmail.com</td>
                                        <td class="green"><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Jin Woo</td>
                                        <td>Ngawi</td>
                                        <td>1234567890</td>
                                        <td>anime@gmail.com</td>
                                        <td class="green"><span class="badge bg-success">Aktif</span></td>
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