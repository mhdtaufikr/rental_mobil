<div class="container">
<style type="text/css">
	</style>
    <div class="card mx-auto" style="margin-top: 180px; width: 80%">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span>
        <div class="card-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No Plat Mobil</th>
                    <th>Tanggal Rental</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga Sewa /Hari</th>
                    <th>Aksi</th>
                    <th>Batal</th>
                </tr>
                <?php $no=1;
                foreach($transaksi as $tr) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->merk ?></td>
                    <td><?php echo $tr->nopol ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>
                    <td>Rp. <?php echo number_format($tr->harga,0,',','.'); ?></td>
                    <td>
                        <?php if($tr->status_rental == "Selesai") {?>
                            <button class="btn btn-sm btn-danger">Rental Selesai</button>
                        <?php }else{ ?>
                            <a href="<?php echo base_url('Customer/Transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                        <?php } ?>
                        
                    </td>
                    <td>
                            <?php 
                                if($tr->status_rental=='Belum Selesai') {?>
                                     <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('Customer/Transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
                            <?php }else{ ?>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Batal
                                </button>
                            <?php }?>
 
                    </td>
                    </tr>
                <?php endforeach; ?> 
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf, Tranksaksi ini sudah selesai, dan tidak bisa dibatalkan!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Oke</button>
      </div>
    </div>
  </div>
</div>