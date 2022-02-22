<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h4>Total belanja : Rp." . number_format($grand_total, 0, ',', '.');

                ?>
            </div><br><br>

            <h3>Form Alamat Pengiriman & Pembayaran</h3>

            <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" id="" placeholder="Nama Lengkap Anda" class="form-control" required>
                    <div class="invalid-feedback">
                        Nama harus diisi
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" id="" placeholder="Alamat Lengkap Anda" class="form-control" required>
                    <div class="invalid-feedback">
                        Alamat harus diisi
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="no_telp" id="" placeholder="Nomor Telepon Lengkap Anda" class="form-control" required>
                    <div class="invalid-feedback">
                        No Telepon harus diisi
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Catatan Pesanan</label>
                    <input type="text" name="catatan" id="" placeholder="Contoh : Jus Jambu / Pepes Ikan Mas / Kopi Kapal Api " class="form-control">
                </div>


                <div class="form-group">
                    <label for="jasa_pengiriman">Jasa Pengiriman</label>
                    <select name="jasa_pengiriman" type="text" id="" class="form-control">
                        <option value="Driver 1 (Fery)">Driver 1 (Fery)</option>
                        <option value="Driver 2 (Dadan)">Driver 2 (Dadan)</option>
                        <option value="Sapari Delivery">Sapari Delivery</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                    <select name="" id="" class="form-control">
                        <option value="COD - Bayar di tempat">COD - Bayar di tempat</option>
                        <option value="DANA - Dompet Digital" disabled>DANA - Dompet Digital</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Pesan Sekarang</button>

            </form>

        <?php
                } else {
                    echo "<h4>Keranjang Belanja Masih Kosong";
                }

        ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>