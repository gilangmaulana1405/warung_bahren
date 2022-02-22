<body>

    <h4 class="text-center">Print Pembayaran</h4>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID BARANG</th>
                        <th>NAMA PRODUK</th>
                        <th>JUMLAH PESANAN</th>
                        <th>HARGA SATUAN</th>
                        <!-- <th>CATATAN</th> -->
                        <th>SUB-TOTAL</th>
                    </tr>
                </thead>

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
        </div>
        </tbody>
    </div>
    <script type="text/javascript">
        window.print();
    </script>

</body>