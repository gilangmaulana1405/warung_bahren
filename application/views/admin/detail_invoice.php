<div class="container-fluid">
    <h4>Detail Pesanan
        <div class="btn btn-sm btn-success">No. Invoice : <?= $invoice->id ?></div>
        <!-- <div class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> Cetak Pembayaran</div> -->


        <!-- <a class="btn btn-info btn-sm" href="<?= base_url('admin/invoice/print') ?>"><i class="fas fa-print"></i> Print</a> -->
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID BARANG</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <!-- <th>CATATAN</th> -->
            <th>SUB-TOTAL</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $pesan) :

            $subtotal = $pesan->jumlah * $pesan->harga;
            $total += $subtotal;
        ?>

            <tr>
                <td><?php echo $pesan->id_brg ?></td>
                <td><?php echo $pesan->nama_brg ?></td>
                <td><?php echo $pesan->jumlah ?></td>
                <td align="right">Rp. <?php echo number_format($pesan->harga, 0, ',', '.') ?></td>
                <td align="right">Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right"><b>Total Pesanan :</b></td>
            <td align="right"><b>Rp. <?php echo number_format($total, 0, ',', '.') ?></b></td>
        </tr>

    </table>

    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>

</div>