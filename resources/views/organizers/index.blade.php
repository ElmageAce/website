@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Pengguna</h3>
            <ol class="breadcumb">
                <li>Pengguna</li>
                <li>Penyelenggara</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Penyelenggara
                </header>

                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Identitas</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Dibuat</th>
                        <th>Diperbarui</th>
                        <th>Pengaturan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @forelse($organizers as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->identity_id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                        <?php $i = $i + 1; ?>
                    @empty
                        <p>Tidak ada data yang ditampilkan</p>
                    @endforelse
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection