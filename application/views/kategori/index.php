<div class="card">
    <div class="card-header">
        <a href="<?=base_url('kategori/create')?>" class="btn btn-success">Tambah Kategori</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Id_kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
            <?php foreach($kategori_kategori->result() as $kategori):?>
                <?php $no = 0?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$kategori->id_kategori?></td>
                    <td><?=$kategori->nama?></td>
                    <td>
                        <a href="<?=base_url('kategori/show/'.$kategori->id_kategori)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('kategori/edit/'.$kategori->id_kategori)?>" class="btn btn-primary">Ubah</a>
                        <a href="<?=base_url('kategori/destroy/'.$kategori->id_kategori)?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>