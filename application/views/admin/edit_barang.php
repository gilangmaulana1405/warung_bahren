<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>

    <?php foreach ($barang as $brg) : ?>

        <form action="<?= base_url() . 'admin/data_barang/update' ?>" method="POST">
            <div class="form-group">
                <label for=""> Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label for=""> keterangan</label>
                <input type="hidden" name="id_brg" id="form-control" value="<?= $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label for=""> kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>">
            </div>

            <div class="form-group">
                <label for=""> harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>">
            </div>

            <div class="form-group">
                <label for=""> stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>">
            </div>

            <!-- <div class="form-group">
                <label for=""> gambar</label>
                <input type="file" name="gambar" class="form-control" value="<?= $brg->gambar ?>">
            </div> -->

            <button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>