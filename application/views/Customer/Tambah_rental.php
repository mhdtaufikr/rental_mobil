<div class="container">
    <div>
    <h3 class=" mb-3" style="margin-top: 150px; " >Bacalah Ketentuan rental sebelum melakukan transaksi <a href="<?php echo base_url('Customer/Ketentuan') ?>">disini!</a> </h3>
    </div>
    <div class="card" style=" margin-bottom: 50px">
        <div class="card-header">
            Form Rental Mobil
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
            <form action="<?php echo base_url('Customer/Rental/tambah_rental_aksi') ?>" method="POST">
                <div class="form-group">
                    <label for="">Harga Sewa Kendaraan</label>
                    <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                    <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?> " readonly>
                </div>
                <div class="form-group">
                    <label for="">Harga Denda Kendaraan</label>
                    <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?> " readonly>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Rental</label>
                    <input type="date" name="tgl_rental" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control">
                </div>

                <button type="submit" class="btn btn-warning">Rental</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>