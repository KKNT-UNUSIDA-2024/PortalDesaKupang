<!DOCTYPE html>
<html>
<head>
    <title>Data Bumdes & Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Bumdes & Wisata</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Bumdes Wisata</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Tanggal Awal Peminjaman</th>
                <th>Jatuh Tempo Peminjaman</th>
                <th>Biaya Penyewaan</th>
                <th>Nama Penyewa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama_bumdes_wisata }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->tanggal_awal_peminjaman }}</td>
                    <td>{{ $item->jatuh_tempo_peminjaman }}</td>
                    <td>{{ number_format((float)$item->biaya_penyewaan, 0, ',', '.') }}</td>
                    <td>{{ $item->nama_penyewa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
