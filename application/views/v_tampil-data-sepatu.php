<?php 
$harga;

if ($sepatu == 'Nike'){
    $harga = 375000;
}
elseif ($sepatu == 'Adidas'){
    $harga =300000;
}
elseif ($sepatu == 'Kickers'){
    $harga =250000;
}
elseif ($sepatu == 'Eiger'){
    $harga =275000;
}
elseif ($sepatu == 'Bucherri'){
    $harga =400000;
}
else {
    $harga =0;
}

?>
<section>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No Hp</th>
                <th>:</th>
                <td>
                    <?= $noHp; ?>
                </td>
            </tr>
            <tr>
                <th>Sepatu</th>
                <th>:</th>
                <td>
                    <?= $sepatu ?>
                </td>
            </tr>
            <tr>
                <th>Nomor Sepatu</th>
                <th>:</th>
                <td>
                    <?= $noSepatu ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</section>