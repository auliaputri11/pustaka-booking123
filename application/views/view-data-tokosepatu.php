<html>

<head>
    <title>Transaksi</title>
</head>

<body>
    <center>
        <table bgcolor='pink'>
            <tr>
                <th colspan="5">
                    <h3>Toko Sepatu Kim</h3>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Size Sepatu</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp.<?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    <hr>
                </td>
            </tr>
        </table>
        <p><botton><a href="<?php echo base_url() . 'index.php/tokosepatu' ?>">Kembali</a></button>
    </center>
</body>

</html>