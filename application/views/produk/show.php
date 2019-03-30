<h1>Lihat Produk</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>produk" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>produk/store" method="post">
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="hidden" name="id_produk" value="<?=$produk->id_produk?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$produk->nama?>" disabled>
            </div>
            <div class="form-group">
                <label for="stok">Jumlah Stok</label>
                <input type="number" class="form-control" name="stok" id="stok" value="<?=$produk->stok?>" disabled>
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori Produk</label>
                <select name="id_kategori" id="id_kategori" class="form-control" disabled>
                    <option value="<?=$produk->id_kategori?>" selected>Tidak Merubah Kategori</option>
                    <?php foreach($kategori_kategori->result() as $kategori):?>
                        <?php if($kategori->id != $produk->id_kategori):?>
                            <option value="<?=$kategori->id_kategori?>" selected>$kategori->nama</option>
                        <?php endif?>
                    <?php endforeach?>
                </select>
            </div>
        </form>
    </div>
</div>