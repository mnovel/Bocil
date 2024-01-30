@section('title', 'Kategori')
@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">List SKRD {{ str_replace('-', ' ', ucwords(request()->status)) }}</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Asset</th>
                                <th>Mulai Sewa</th>
                                <th>Akhir Sewa</th>
                                <th class="{{ request()->status == 'terbit' ? '' : 'd-none' }}">Denda</th>
                                <th class="{{ request()->status == 'terbit' ? '' : 'd-none' }}">Pengurangan</th>
                                <th class="{{ request()->status == 'terbit' ? '' : 'd-none' }}">Tanggal Terbit</th>
                                <th class="{{ request()->status == 'selesai' ? 'd-none' : '' }}">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (request()->status == 'belum-terbit')
                                @foreach ($data['skrd'] as $index => $resSkrd)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $resSkrd->nama }}</td>
                                        <td>{{ $resSkrd->asset->nama }}</td>
                                        <td>{{ $resSkrd->tgl_sewa_mulai }}</td>
                                        <td>{{ $resSkrd->tgl_sewa_selesai }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <button
                                                    onclick="window.location.href='{{ route('skrd.store', ['penanggungJawab' => $data['penanggungJawab'], 'sewa' => $resSkrd->kode_transaksi]) }}'"
                                                    type="button" class="btn btn-success btn-flat">
                                                    <i class="fas fa-plus-square"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            @if (request()->status == 'terbit')
                                @foreach ($data['skrd'] as $index => $resSkrd)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $resSkrd->sewa->nama }}</td>
                                        <td>{{ $resSkrd->sewa->asset->nama }}</td>
                                        <td>{{ $resSkrd->sewa->tgl_sewa_mulai }}</td>
                                        <td>{{ $resSkrd->sewa->tgl_sewa_selesai }}</td>
                                        <td>{{ $resSkrd->denda }}</td>
                                        <td>{{ $resSkrd->pengurangan }}</td>
                                        <td>{{ $resSkrd->tanggal_cetak }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-warning btn-flat" data-toggle="modal"
                                                    data-target="#editSkrd-{{ $index + 1 }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-flat">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editSkrd-{{ $index + 1 }}">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('skrd.update', $resSkrd->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header bg-info">
                                                        <h4 class="modal-title">Form Edit SKRD</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Denda</label>
                                                            <input type="number" class="form-control" name="denda"
                                                                id="denda" value="{{ old('denda') }}">
                                                            @error('denda')
                                                                <small
                                                                    class="text-danger font-italic font-weight-bold">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Pengurangan</label>
                                                            <input type="number" class="form-control" name="pengurangan"
                                                                id="pengurangan" value="{{ old('pengurangan') }}">
                                                            @error('pengurangan')
                                                                <small
                                                                    class="text-danger font-italic font-weight-bold">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="submit" class="btn btn-info">Edit</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batalkan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                @endforeach
                            @endif
                            @if (request()->status == 'selesai')
                                @foreach ($data['skrd'] as $index => $resSkrd)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $resSkrd->sewa->nama }}</td>
                                        <td>{{ $resSkrd->sewa->asset->nama }}</td>
                                        <td>{{ $resSkrd->sewa->tgl_sewa_mulai }}</td>
                                        <td>{{ $resSkrd->sewa->tgl_sewa_selesai }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
    </script>
@endpush
