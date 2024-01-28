@section('title', 'Jenis')
@extends('layout')
@section('content')
    <div class="container-fluid">
        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambahJenis">
            <i class="fas fa-plus-square"></i>
            Tambah Jenis
        </button>
        <div class="modal fade" id="tambahJenis">
            <div class="modal-dialog">
                <form action="{{ route('jenis.store') }}" method="POST">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Form Tambah Jenis</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kategori</label>
                                <select class="form-control" name="kategori" id="kategori">
                                    @foreach ($data['kategori'] as $resKategori)
                                        <option value="{{ $resKategori->id }}">{{ $resKategori->nama }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <small class="text-danger font-italic font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <small class="text-danger font-italic font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Tarif</label>
                                <input type="number" class="form-control" name="tarif" id="tarif"
                                    value="{{ old('tarif') }}">
                                @error('tarif')
                                    <small class="text-danger font-italic font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-info">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">List Jenis</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tarif</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['jenis'] as $index => $resJenis)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $resJenis->nama }}</td>
                                    <td>{{ $resJenis->tarif }}</td>
                                    <td>{{ $resJenis->kategori->nama }}</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button
                                                onclick="window.location.href='{{ route('jenis.edit', $resJenis->id) }}'"
                                                type="button" class="btn btn-warning btn-flat">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="{{ route('jenis.delete', $resJenis->id) }}"
                                                class="btn btn-danger btn-flat" data-confirm-delete="true">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('template') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('template') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('template') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ url('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "paging": true,
                "autoWidth": false,
            })
        });

        @if ($errors->any())
            $('#tambahJenis').modal('show')
        @endif
    </script>
@endpush
