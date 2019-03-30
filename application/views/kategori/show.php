<h1>Tambah kategori</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>kategori" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>kategori/store" method="post">
            <div class="form-group">
                <label for="nama">Nama kategori</label>
                <input type="hidden" name="id_kategori" value="<?=$kategori->nama?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$kategori->nama?>" disabled>
            </div>
        </form>
    </div>
</div>