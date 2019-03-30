<h1>Tambah produk</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>produk" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>produk/store" method="post">
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            
            <div class="form-group">
                <label for="nama">Kategori Produk</label>
                <select class="form-control" name="id_kategori" id="id_kategori">
                    <?php foreach($kategori_kategori->result() as $kategori):?>
                        <option value="<?=$kategori->id_kategori?>"><?=$kategori->nama?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Stok Produk</label>
                <input type="number" class="form-control" name="stok" id="stok">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>