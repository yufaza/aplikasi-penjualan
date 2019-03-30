<h1>Ubah Produk</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>produk" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url('produk/update/'.$produk->id_produk)?>" method="post">
            <div class="form-group">
                <label for="nama">Nama produk</label>
                <input type="hidden" name="id_produk" value="<?=$produk->id_produk?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$produk->nama?>">
            </div>
            <div class="form-group">
            
                <label for="nama">Kategori Produk</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                    <option value="<?=$produk->id_kategori?>" selected>Tidak Merubah Kategori</option>
                    <?php foreach($kategori_kategori->result() as $kategori):?>
                        <?php if($kategori->id != $produk->id_kategori):?>
                            <option value="<?=$kategori->id_kategori?>" selected><?=$kategori->nama?></option>
                        <?php endif?>
                    <?php endforeach?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="stok">Stok produk</label>
                <input type="number" class="form-control" name="stok" id="nstok" value="<?=$produk->stok?>">
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
</div>