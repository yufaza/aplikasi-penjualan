<h1>Ubah kategori</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>kategori" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url('kategori/update/'.$kategori->id_kategori)?>" method="post">
            <div class="form-group">
                <label for="nama">Nama kategori</label>
                <input type="hidden" name="id_kategori" value="<?=$kategori->id_kategori?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$kategori->nama?>">
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
</div>