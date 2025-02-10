<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Berita Acara Pemeriksaan</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 2.5cm;
            color: #000;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .header table {
            width: 100%;
            border-spacing: 0;
        }

        .header .logo {
            width: auto;
            height: 90;
            vertical-align: top;
            margin-right: 15px;
        }

        .header-text {
            text-align: center;
            padding-left: 10px;
            line-height: 1.2;
        }

        .header .bold-text {
            font-weight: bold;
            margin: 1px 0;
            font-size: 12pt;
        }

        .header .small-text {
            font-size: 9pt;
            margin: 1px 0;
            color: #333;
        }

        .header-line {
            border-bottom: 2px double #000;
            margin: 6px 0 25px 0;
        }

        .title {
            text-align: center;
            font-weight: bold;
            margin: 30px 0;
        }

        .title p {
            margin: 5px 0;
            font-size: 14pt;
        }

        .content {
            text-align: justify;
            margin: 30px 0;
            line-height: 1.6;
        }

        .section {
            margin: 15px 0;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .indent {
            margin-left: 30px;
        }

        .petugas-list {
            margin: 20px 0;
        }

        .signatures {
            margin-top: 50px;
            text-align: center;
        }

        .signatures table {
            width: 100%;
            margin-top: 20px;
        }

        .signatures td {
            width: 50%;
            text-align: center;
            vertical-align: top;
        }

        .signatures img {
            max-width: 150px;
            margin: 10px 0;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="header">
        <table>
            <tr>
                <td style="width: 55px;">
                    <img src="{{ public_path('img/logo-dokumen.png') }}" class="logo" alt="Logo">
                </td>
                <td class="header-text">
                    <p class="bold-text">KEMENTERIAN KEUANGAN REPUBLIK INDONESIA</p>
                    <p class="bold-text">DIREKTORAT JENDERAL BEA DAN CUKAI</p>
                    <p class="bold-text">KANTOR WILAYAH DJBC JAWA TIMUR II</p>
                    <p class="bold-text">KANTOR PENGAWASAN DAN PELAYANAN BEA DAN CUKAI</p>
                    <p class="bold-text">TIPE MADYA PABEAN C BLITAR</p>
                    <p class="small-text">JALAN SUDANCO SUPRIADI NO. 60 KOTAK POS 23 – Blitar</p>
                    <p class="small-text">TELEPON (0342) 801655; FAKSIMILE (0342) 801546; SITUS www.beacukai.go.id</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="header-line"></div>

    <div class="title">
        <p>BERITA ACARA PEMERIKSAAN</p>
        <p>Nomor : {{ $penindakan->no_print }}</p>
    </div>

    <div class="content">
        <p>Pada hari ini tanggal {{ $penindakan->tanggal_print->format('d F Y') }}, berdasarkan Surat Perintah / Surat
            Tugas nomor : {{ $penindakan->no_print }} tanggal {{ $penindakan->tanggal_print->format('d F Y') }}, Kami
            yang bertanda tangan di bawah ini:</p>

        <div class="petugas-list">
            <p>1. Nama / NIP : {{ $penindakan->petugas_1 }} / {{ $penindakan->petugas_1 }}</p>
            <div class="indent">
                <p>Pangkat / Gol : PENGATUR / II/C</p>
                <p>Jabatan : PELAKSANA PEMERIKSA</p>
            </div>

            <p>2. Nama / NIP : {{ $penindakan->petugas_2 }} / {{ $penindakan->petugas_2 }}</p>
            <div class="indent">
                <p>Pangkat / Gol : Pengatur Tk.I / II.d</p>
                <p>Jabatan : PELAKSANA PEMERIKSA</p>
            </div>
        </div>

        <p>Telah melakukan pemeriksaan atas :</p>

        <div class="section">
            <p class="section-title">a. Barang yang ditimbun/disimpan di Kawasan Pabean / Kawasan Berikat/Bangunan atau
                tempat lain</p>
            <div class="indent">
                <table>
                    <tr>
                        <td width="250">Nama pemilik / yang menguasai</td>
                        <td width="10">:</td>
                        <td>{{ $penindakan->nama_pemilik }}</td>
                    </tr>
                    <tr>
                        <td>Alamat pemilik yang menguasai</td>
                        <td>:</td>
                        <td>{{ $penindakan->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Alamat bangunan / tempat lain</td>
                        <td>:</td>
                        <td>{{ $penindakan->bangunan }}</td>
                    </tr>
                    <tr>
                        <td>Identitas pemilik yang menguasai (KTP)</td>
                        <td>:</td>
                        <td>{{ $penindakan->no_ktp }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Jenis/Ukuran</td>
                        <td>:</td>
                        <td>{{ $penindakan->jenis_barang }} sebanyak {{ $penindakan->jumlah }}
                            {{ $penindakan->kemasan }}</td>
                    </tr>
                    <tr>
                        <td>Pemilik/Yang Menguasai</td>
                        <td>:</td>
                        <td>{{ $penindakan->nama_pemilik }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Lokasi Penindakan</td>
                        <td>:</td>
                        <td>{{ $penindakan->lokasi_penindakan }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section">
            <p class="section-title">b. Sarana pengangkut dan atau barang diatasnya</p>
            <div class="indent">
                <table>
                    <tr>
                        <td width="250">Nama dan Jenis Sarana Pengangkut</td>
                        <td width="10">:</td>
                        <td>{{ $penindakan->nama_jenis_sarkut }}</td>
                    </tr>
                    <tr>
                        <td>Nahkoda/Pilot/Pengemudi</td>
                        <td>:</td>
                        <td>{{ $penindakan->pengemudi }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Register/Polisi</td>
                        <td>:</td>
                        <td>{{ $penindakan->no_polisi }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <p>Hasil pemeriksaan : {{ $penindakan->uraian_bhp }}</p>

        <p>Pemeriksaan disaksikan oleh pemilik barang/kuasanya :</p>
        <div class="indent">
            <table>
                <tr>
                    <td width="250">Nama</td>
                    <td width="10">:</td>
                    <td>{{ $penindakan->nama_pemilik }}</td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $penindakan->tempat_lahir }}, {{ $penindakan->tanggal_lahir->format('Y-m-d') }}</td>
                </tr>
                <tr>
                    <td>Alamat Tempat Tinggal</td>
                    <td>:</td>
                    <td>{{ $penindakan->alamat }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $penindakan->pekerjaan }}</td>
                </tr>
                <tr>
                    <td>Identitas (KTP)</td>
                    <td>:</td>
                    <td>{{ $penindakan->no_ktp }}</td>
                </tr>
            </table>
        </div>

        <p>Demikian Berita Acara ini dibuat dengan sebenarnya.</p>
    </div>

    <div class="signatures">
        <p style="text-align: right">Blitar, {{ $penindakan->tanggal_print->format('d F Y') }}</p>
        <table>
            <tr>
                <td>
                    <p>Pemilik/Yang Menguasai</p>
                    <br><br><br>
                    <p>{{ $penindakan->nama_pemilik }}</p>
                </td>
                <td>
                    <p>Yang Melakukan Pemeriksaan :</p>
                    @if ($penindakan->ttd_petugas_1)
                        <img src="{{ $penindakan->ttd_petugas_1 }}" alt="Tanda Tangan Petugas 1" style="height: 60px;">
                    @else
                        <br><br><br>
                    @endif
                    <p>{{ $penindakan->petugas_1 }}</p>
                    <p>NIP {{ $penindakan->petugas_1 }}</p>
                    <br>
                    @if ($penindakan->ttd_petugas_2)
                        <img src="{{ $penindakan->ttd_petugas_2 }}" alt="Tanda Tangan Petugas 2" style="height: 60px;">
                    @else
                        <br><br><br>
                    @endif
                    <p>{{ $penindakan->petugas_2 }}</p>
                    <p>NIP {{ $penindakan->petugas_2 }}</p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
