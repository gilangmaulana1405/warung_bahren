<div class="container-fluid" id="welcome">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider3.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-4">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
                    <small><?= $brg->keterangan ?></small><br>
                    <span class="badge badge-warning mb-3">Rp. <?= number_format($brg->harga, 0, ',', '.') ?></span>


                    <?php if ($brg->stok == '0') { ?>
                        <a href="<?= base_url('dashboard/tambah_ke_keranjang/' . $brg->id_brg) ?>"><button type="button" class="btn btn-lg btn-primary btn-sm" disabled>Barang Habis</button></a>
                    <?php } else { ?>

                        <!-- count plus minus -->
                        <!-- <div class="col-md-5 mb-2 mx-auto">
                            <input type="number" name="quantity" value="1" class="quantity form-control" id="<?= $brg->id_brg; ?>">
                        </div> -->

                        <a href="<?= base_url('dashboard/tambah_ke_keranjang/' . $brg->id_brg) ?>">
                            <button type="button" id="button" class="tambah_keranjang btn btn-lg btn-primary btn-sm" data-id_barang="<?= $brg->id_brg; ?>" data-nama_barang="<?= $brg->nama_brg; ?>" data-harga_barang="<?= $brg->harga; ?>">Tambah Ke Keranjang</button>
                        </a>

                    <?php } ?>

                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>