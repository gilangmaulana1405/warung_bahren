function confirmDialog() {
	return confirm('Apakah anda yakin akan menghapus data barang ini?');
}

// $(document).ready(function() {
//     $('.tambah_keranjang').click(function() {
//         var id_brg = $(this).data("id_barang");
//         var nama_brg = $(this).data("nama_barang");
//         var harga = $(this).data("harga_barang");
//         var quantity = $('#' + id_brg).val();

//         $.ajax({
//             url: "<?= base_url('dashboard/tambah_ke_keranjang'); ?>",
//             method: "POST",
//             data: {
//                 id_brg : id_brg,
//                 nama_brg : nama_brg,
//                 harga : harga,
//                 quantity : quantity
//             },
//             success: function(data) {
//                 $('#detail_cart').html(data);
//                 // console.log(data);
//             }
//         });
//     });

// });
