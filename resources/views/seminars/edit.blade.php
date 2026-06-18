<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Seminar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            Edit Seminar dan Workshop
        </div>

        <div class="card-body">

            <form action="{{ route('seminars.update', $seminar->id_event) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ormawa</label>
                    <input type="text"
                            name="nama_ormawa"
                            class="form-control"
                            value="{{ $seminar->nama_ormawa }}"
                            required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input type="text"
                           name="nama_kegiatan"
                           class="form-control"
                           value="{{ $seminar->nama_kegiatan }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Narasumber</label>
                    <input type="text"
                           name="narasumber"
                           class="form-control"
                           value="{{ $seminar->narasumber }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ $seminar->tanggal }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="time"
                           name="jam"
                           class="form-control"
                           value="{{ $seminar->jam }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text"
                           name="lokasi"
                           class="form-control"
                           value="{{ $seminar->lokasi }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kuota</label>
                    <input type="number"
                           name="kuota"
                           class="form-control"
                           value="{{ $seminar->kuota }}"
                           required>
                </div>

                <button type="submit" class="btn btn-success">
                    Update
                </button>

                <a href="{{ route('seminars.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>