<div class="card">
    <div class="card-header">
        <a href="<?=base_url('produk/create')?>" class="btn btn-success">Tambah Produk</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
            <?php foreach($produk_produk->result() as $produk):?>
                <?php $no = 0?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$produk->nama?></td>
                    <td><?=$produk->kategori?></td>
                    <td><?=$produk->stok?></td>
                    <td>
                        <a href="<?=base_url('produk/show/'.$produk->id_produk)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('produk/edit/'.$produk->id_produk)?>" class="btn btn-primary">Ubah</a>
                        <a href="<?=base_url('produk/destroy/'.$produk->id_produk)?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</div>