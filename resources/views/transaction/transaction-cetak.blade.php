<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Transaksi</title>
    <style>
    /* Resetting default margin and padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h3 {
        margin-bottom: 20px;
        text-align: center;
    }

    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data th,
    .table-data td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .table-data th {
        background-color: #2c3e50;
        color: #fff;
    }

    .table-data tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-data tbody tr:hover {
        background-color: #e0e0e0;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Data Categories</h3>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>nomorhp</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaction as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->updated_at }}</td>
                    <td>{{ $transaction->nama }}</td>
                    <td>{{ $transaction->category->nama}}</td>
                    <td>Rp. {{ number_format($transaction->harga) }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->nomorhp }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" align="center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>