<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>No Telepon</th>
            <th>Catatan</th>
            <th>Jasa Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Pilihan</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>

            <tr>
                <td><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->no_telp ?></td>
                <td><?= $inv->catatan ?></td>
                <td><?= $inv->jasa_pengiriman ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td>
                    <?= anchor('admin/invoice/detail/' . $inv->id, ' <div class="btn btn-sm btn-info"><i class="fas fa-search-plus" ></i> Detail</div>') ?>

                    <?= anchor('admin/invoice/hapus/' . $inv->id, ' <div class="btn btn-sm btn-danger mt-2"><i class="fas fa-trash" ></i> Hapus</div>') ?>

                    <?= anchor('admin/invoice/print/' . $inv->id, ' <div class="btn btn-sm btn-success mt-2"><i class="fas fa-print" ></i> Print</div>') ?>

                </td>

            </tr>

        <?php endforeach; ?>
    </table>
</div>