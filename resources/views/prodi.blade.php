@extends('layout.template')

@section('konten')
    
</head>
<body>

    <center>
    <h1> Prodi UINSU </h1>

    <h4> Halaman Prodi UINSU </h4>

        <table border="1" style="border-collapse: collapse;">
            <thead style="background-color: black;">
                <tr style="color: white;">
                    <th> No </th>
                    <th> ID Prodi </th>
                    <th> Nama Prodi </th>
                    <th> Akreditas Prodi </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                
                <tr>
                    <td> {{ $i }} </td>
                    <td> {{ $item->id_prodi }} </td>
                    <td> {{ $item->nama_prodi }} </td>
                    <td> {{ $item->akreditas_prodi }} </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        
        <a href="\prodi\create">Tambah Prodi</h1>
    </center>
</body>
@endsection