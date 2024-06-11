<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Halaman Mahasiswa </h1>

    <h4> Halaman Tabel Mahasiswa </h4>

    <a href="/mahasiswa/create">Tambah Mahasiswa</h1>

    <center>
        <table border="1" style="border-collapse: collapse; width: 28px;">
            <thead style="background-color: yellow;">
                <tr>
                    <th> NIM </th>
                    <th> Nama </th>
                    <th> JK </th>
                    <th> Alamat </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $m)
            </thead>
            </tbody>
        </table>

    </center>
    
</body>
</html>