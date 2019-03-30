<div class="card">
    <div class="card-header">
        <a href="<?=base_url('penjualan/create')?>" class="btn btn-success">Tambah Penjualan</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Waktu Penjualan</th>
            <th>Id Penjualan</th>
            <th>Aksi</th>
        </tr>
            <?php foreach($penjualan_penjualan->result() as $penjualan):?>
                <?php $no = 0?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$penjualan->waktu_penjualan?></td>
                    <td><?=$penjualan->id_p?></td>
                    <td>
                        <a href="<?=base_url('penjualan/show/'.$penjualan->id_p)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('penjualan/destroy/'.$penjualan->id_p)?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>