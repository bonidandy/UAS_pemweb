<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA KARYAWAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-3">Data Karyawan</h1>
        <a href="{{ route ('karyawan.index') }}" class="btn btn-primary mb-3">Data Mahasiswa</a>

        @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>

            @foreach ($errors -> all () as $error)
            <span>{{ $error }}</span>
            @endforeach
        </div>
        @endif


        <div class="card">
            <div class="card-body">
                <form action="{{ route('karyawan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                      <label for="nik" class="form-label">Nik</label>
                      <input type="text" class="form-control" name="nik"id="nik">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat">
                    <div class="mb-3">
                      <label for="jabatan" class="form-label">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" id="jabatan">
                    </div>
                    <div class="mb-3">
                      <label for="gaji" class="form-label">gaji</label>
                      <input type="text" class="form-control" name="gaji" id="gaji">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Save</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>