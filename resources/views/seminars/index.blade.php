<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Seminar dan Workshop Kampus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Sistem Pengelolaan Seminar dan Workshop Kampus</h2>

        <a href="{{ route('seminars.create') }}" class="btn btn-primary">
            Tambah Seminar
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Data Seminar
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Ormawa</th>
                        <th>Nama Kegiatan</th>
                        <th>Narasumber</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Kuota</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($seminars as $seminar)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $seminar->nama_kegiatan }}</td>
                        <td>{{ $seminar->nama_kegiatan }}</td>
                        <td>{{ $seminar->narasumber }}</td>
                        <td>{{ $seminar->tanggal }}</td>
                        <td>{{ date('H:i', strtotime($seminar->jam)) }} WIB</td>
                        <td>{{ $seminar->lokasi }}</td>
                        <td>{{ $seminar->kuota }}</td>

                        <td>
                            <a href="{{ route('seminars.edit', $seminar->id_event) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('seminars.destroy', $seminar->id_event) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Belum ada data seminar
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>