<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-3">Data Karyawan</h1>
        <a href="{{ route ('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Data +</a>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session ('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>no</th>
                        <th>nama</th>
                        <th>nik</th>
                        <th>alamat</th>
                        <th>jabatan</th>
                        <th>gaji</th>
                        <th>Fitur</th>
                    </thead>
                    <tbody>
                       @if ($karyawan -> count() > 0)
                       @foreach ($karyawan as $no => $hasil)
                       <tr>
                           <th>{{ $no+1 }}</th>
                           <td>{{ $hasil->nama }}</td>
                           <td>{{ $hasil->nik }}</td>
                           <td>{{ $hasil ->alamat }}</td>
                           <td>{{ $hasil ->jabatan }}</td>
                           <td>{{ $hasil ->gaji }}</td>
                           <td>
                               <form action="{{ route('karyawan.destroy', $hasil->id) }}" method="POST">
                                   @csrf
                                   @method('delete')
                                   <a href="{{ route ('karyawan.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                                   <button class="btn btn-danger btn-sm">Hapus</button>
                               </form>
                           </td>
                       </tr>
                       @endforeach
                       <tr>
                           <td colspan="10" align="center">Tidak ada data</td>
                       </tr>

                            @else
                                <td colspan="10" align="center">Tidak ada data</td>
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>