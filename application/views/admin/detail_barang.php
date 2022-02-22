<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>

        <div class="col-md-6 mx-auto">


            <?php foreach ($barang as $brg) : ?>

                <div class="card col-lg-10 mt-4">
                    <div class="col-lg-15 mt-3">
                        <img class="card-img-top img-fluid" src="<?= base_url() . '/uploads/' . $brg->gambar ?>" alt="">
                    </div>

                    <div class="card-body">
                        <h3 class="card-title"><?php echo $brg->nama_brg ?></h3>
                        <p class="card-text"><?php echo $brg->keterangan ?></p>
                        Stok Barang : <div class="btn btn-sm btn-danger"><?php echo $brg->stok ?></div>
                        <h4 class="mt-3">
                            <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?></div>
                            <div class="btn btn-sm btn-info"><?php echo $brg->kategori ?></div>
                        </h4>

                    </div>
                </div>
                <!-- /.card -->
            <?php endforeach; ?>


        </div>
    </div>
</div>