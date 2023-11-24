<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pengembangan Modern</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            display: inline-block;
        }

        h1 {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Metode Pemrograman Modern</h1>
    </header>

    <body>
        <h1>Tabel Mahasiswa</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Konsentrasi</th>
                    <th>Semester</th>
    </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mahasiswa)
        <tr>
        <td>{{$mahasiswa->id}}</td>
        <td>{{$mahasiswa->NIM}}</td>
        <td>{{$mahasiswa->Nama}}</td>
        <td>{{$mahasiswa->Konsentrasi}}</td>
        <td>{{$mahasiswa->Semester}}</td>
    </tr>
        @endforeach
    </tbody>
        </table>
    </body>

    <body>
    <div class="container text-center">
  <div class="row">
    <div class="">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
    </body>
</body>
