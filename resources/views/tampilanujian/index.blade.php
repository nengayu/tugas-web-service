<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="/ujian/tambah" class="btn btn-outline-success my-3">Tambah Data</a>
    <h1>Data Ujian</h1>
    <table class="table">
        <thead class="table-dark">
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Mata Kuliah</th>
              <th scope="col">Dosen</th>
              <th scope="col">Jumlah Soal</th>
              <th scope="col">Keterangan</th>

          </tr>
         
        </thead>
        <tbody>
            @foreach ($ujian as $tabelujian)
            <tr>
                <th>{{ $tabelujian->id }}</th>
                <th>{{ $tabelujian->nama_mk}}</th> 
                <th>{{ $tabelujian->dosen}}</th>
                <th>{{ $tabelujian->jumlah_soal }}</th>
                <th>{{ $tabelujian->keterangan }}</th>
  
  
  
            </tr>
                
            @endforeach
         
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>