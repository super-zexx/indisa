<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Pengantar SKCK</title>
    <style>
        @page {
            size: A4;
            margin: 2cm;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            line-height: 1.5;
            margin: 0;
            padding: 20px;
            font-size: 12pt;
        }

        .kop-surat {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 5px solid #000;
            padding-bottom: 8px;
            position: relative;
        }

        .kop-surat:after {
            content: '';
            position: absolute;
            bottom: -10px;
            /* Jarak antara dua garis */
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #000;
        }


        .logo {
            position: absolute;
            left: 30px;
            top: 0;
            width: 80px;
            height: 80px;
        }

        .kop-content {
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
        }

        .kop-surat h3,
        .kop-surat h2,
        .kop-surat p {
            margin: 0;
            padding: 0;
            line-height: 1.2;
            /* Reduced from 1.3 */
        }

        .nomor-surat {
            text-align: center;
            margin: 15px 0;
            /* Reduced from 20px */
        }

        .isi-surat {
            margin: 15px 0;
            /* Reduced from 20px */
        }

        .data-table {
            margin: 8px 0;
            /* Reduced from 10px */
        }

        .data-table td {
            padding: 2px 0;
            /* Reduced from 3px */
            vertical-align: top;
        }

        .penutup {
            margin-top: 15px;
            /* Reduced from 20px */
            text-align: justify;
        }

        .tandatangan {
            margin-top: 5px;
            /* Significantly reduced from 10px */
            float: right;
            text-align: center;
            width: 250px;
        }

        .masa-berlaku {
            margin: 15px 0;
            /* Reduced from 20px */
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="kop-surat">
        <img src="/assets/images/kab_cirebon.png" alt="Logo Kabupaten Cirebon" class="logo" />
        <div class="kop-content">
            <h3>PEMERINTAH KABUPATEN CIREBON</h3>
            <h3>KECAMATAN PANGENAN</h3>
            <h2>KUWU ASTANAMUKTI</h2>
            <p>Jalan Syekh Lemahabang No. 01 Astanamukti - Pangenan 45182</p>
            <p>Email : astanamukti01@gmail.com</p>
        </div>
    </div>

    <div class="nomor-surat">
        <b>PENGANTAR SURAT KETERANGAN CATATAN KEPOLISIAN</b><br>
        Nomor : {{ $surat->nomor_surat }}
    </div>

    <div class="isi-surat">
        <div>Yang bertanda tangan di bawah ini :</div>
        <div class="data-table">
            <table>
                <tr>
                    <td style="width: 200px;">Nama</td>
                    <td>: DUROHMAN</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>: KUWU ASTANAMUKTI</td>
                </tr>
            </table>
        </div>

        <div>Dengan ini menerangkan bahwa :</div>
        <div class="data-table">
            <table>
                <tr>
                    <td style="width: 200px;">Nama Lengkap</td>
                    <td>: {{ $surat->penduduk->nama }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{ $surat->penduduk->nik }}</td>
                </tr>
                <tr>
                    <td>NKK</td>
                    <td>: {{ $surat->penduduk->no_kk }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>: {{ $surat->penduduk->tempat_lahir }},{{ $surat->penduduk->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin / Umur</td>
                    <td>: {{ $surat->penduduk->jenis_kelamin }} / {{ $surat->penduduk->umur }}</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan/Agama</td>
                    <td>: {{ $surat->penduduk->agama }}</td>
                </tr>
                <tr>
                    <td>Status / Pekerjaan</td>
                    <td>: .................................................</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $surat->penduduk->alamat }}</td>
                </tr>
            </table>
        </div>

        <div style="text-align: justify;">
            Adalah penduduk Desa kami yang beralamat sebagaimana tertera di atas dan yang bersangkutan berdasarkan data
            kami tidak pernah
            terlibat perkara polisi dan berkelakuan baik.
        </div>

        <div style="margin-top: 8px;">
            Tujuan Dikeluarkannya Pengantar Surat Keterangan Catatan Kepolisian adalah
            ................................................
        </div>

        <div class="masa-berlaku">
            Masa berlaku Pengantar Surat Keterangan Catatan Kepolisian ini adalah sebagai berikut :<br>
            Dikeluarkan Tanggal : ................................................<br>
            Berlaku Sampai : ................................................
        </div>

        <div class="penutup">
            Demikian Surat Keterangan ini kami buat dengan sebenarnya dan untuk dapat dipergunakan sebagaimana mestinya.
            Segala akibat dari
            dikeluarkannya surat keterangan ini menjadi tanggung jawab pemohon dan pihak yang berkepentingan.
        </div>

        <div class="tandatangan">
            Astanamukti, .........................<br>
            @if ($surat->perangkat->jabatan !== 'Kuwu')
                a/n. KUWU ASTANAMUKTI<br>
            @endif
            {{ $surat->perangkat->jabatan }}<br><br><br>
            <span>{{ $surat->perangkat->penduduk->nama }}</span>
            <hr style="margin: 0; border: 1px solid black; width: 100%; text-align: left;">
            <div>NRPD. {{ $surat->perangkat->nrpd }}</div>
        </div>

    </div>
</body>

</html>
