<h3 style="text-align: center">Laporan Transaksi Rental Mobil</h3>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
    </tr>
</table>
<table class="table table-hover table-striped table-borderd mt-4">
<thead>
    <tr>
    <th>No</th>
    <th>Nama Customer</th>
    <th>Merk Mobil</th>
    <th>Tanggal Rental</th>
    <th>Tanggal Kembali</th>
    <th>Harga Sewa </th>
    <th>Harga Denda </th>
    <th>Total Denda</th>
    <th>Tanggal dikembalikan</th>
    <th>Status Pengembalian</th>
    <th>Status Rental</th>
    
    </tr>
</thead>
<tbody>
<?php
    $no=1;
    foreach($laporan as $tr) : ?> 
    <tr>
        <td><?php echo $no++ ?></td>

        <td><?php echo $tr->nama ?></td>

        <td><?php echo $tr->merk ?></td>

        <td><?php echo date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>

        <td><?php echo date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>

        <td>Rp. <?php echo number_format($tr->harga,0,',','.'); ?> /Hari</td>

        <td>Rp. <?php echo number_format($tr->denda,0,',','.'); ?> /Hari</td>

        <td>Rp. <?php echo number_format($tr->total_denda,0,',','.'); ?> /Hari</td>
        
        <td><?php if ($tr->tgl_pengembalian == "0000-00-00"){
                        echo "-";
                    }else{
                        echo date('d/m/Y', strtotime($tr->tgl_pengembalian));
                    } ?></td>
        <td><?php 
        echo $tr->status_pengembalian
        ?></td>
        <td><?php 
        echo $tr->status_rental
        ?></td>
        
        </tr>
    <?php endforeach; ?>
</tbody>
</table>

<script type="text/javascript" >
    window.print();
</script>