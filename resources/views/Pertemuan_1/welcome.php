<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .ktp-container {
            width: 800px;
            height: 420px;
            padding: 40px;
            background-color: #0090FF;
            border: 3px solid #708090;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .text-container {
            flex-grow: 1;
            margin-right: 20px;
        }

        .header {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            padding-bottom: 10px;
        }

        .ktp-table {
            width: 100%;
            border-collapse: collapse;
            color: white;
            text-align: right;
        }

        .ktp-table th, .ktp-table td {
            padding: 5px;
            font-size: 14px;
        }

        .ktp-table th {
            text-align: left;
            font-weight: bold;
        }

        .ktp-table td {
            text-align: left;
        }

        .photo-signature-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            margin-top: 10px; /* Tambahkan margin top untuk menyesuaikan posisi */
        }

        .photo-container {
            width: 4cm;
            height: 6cm;
            background-color: white;
            border: 2px ;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px; /* Tambahkan margin bawah agar ada jarak dengan tanda tangan */
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .signature-container {
            width: 150px;
            height: 50px;
            text-align: center;
            margin-top: 0px; /* Atur margin top agar tanda tangan lebih dekat dengan foto */
        }

        .signature-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer {
            font-size: 12px;
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="ktp-container">
        <div class="text-container">
            <div class="header">PROVINSI JAWA TIMUR<br>KOTA SIDOARJO</div>
            <table class="ktp-table">
                <tr>
                    <th>NIK</th>
                    <td>: 2241760030</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>: FARDIYANI AFRO'UL YASINTA</td>
                </tr>
                <tr>
                    <th>Tempat/Tgl Lahir</th>
                    <td>: SIDOARJO, 17-01-2004</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: PEREMPUAN</td>
                    <th>Gol. Darah</th>
                    <td>: A</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: JIMBARAN KULON, KEC. WONOAYU, KAB. SIDOARJO</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">RT/RW</th>
                    <td>: 001/001</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">Kel/Desa</th>
                    <td>: JIMBARAN KULON</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">Kecamatan</th>
                    <td>: WONOAYU</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>: ISLAM</td>
                </tr>
                <tr>
                    <th>Status Perkawinan</th>
                    <td>: BELUM KAWIN</td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>: PELAJAR/MAHASISWA</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>: WNI</td>
                </tr>
                <tr>
                    <th>Berlaku Hingga</th>
                    <td>: SEUMUR HIDUP</td>
                </tr>
            </table>
        </div>
        <div class="photo-signature-container">
            <div class="photo-container">
                <img src="http://localhost/PWL_2024/2241760030.jpg" alt="Foto KTP">
            </div>
            <div class="signature-container">
                <div>KOTA SIDOARJO</div>
                <div>10-09-2021</div>
                <img src="http://localhost/PWL_2024/signature.jpg" alt="Tanda Tangan">
            </div>
        </div>
    </div>
</body>
</html>
