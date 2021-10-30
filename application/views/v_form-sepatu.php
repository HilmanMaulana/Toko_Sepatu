<section>
    <h1><?php echo $judul ?></h1>
    <center>
        <form action="<?= base_url('sepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th class="item">Nama</th>
                    <th>:</th>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th class="item">No Hp</th>
                    <th>:</th>
                    <td><input type="text" name="noHp" id="noHp"></td>
                </tr>
                <tr>
                    <th class="item">Sepatu</th>
                    <th>:</th>
                    <td>
                        <select name="sepatu" id="sepatu">
                            <option value="">Pilih Sepatu</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="item">Nomor Sepatu</th>
                    <th>:</th>
                    <td>
                        <select name="noSepatu" id="noSepatu">
                            <?php
                                for ($noSepatu = 32; $noSepatu <= 44; $noSepatu++)
                                echo "<option value = " .$noSepatu. ">" .$noSepatu. "</option>";
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</section>