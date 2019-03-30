<h1>Tambah Penjualan</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>penjualan" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Tambah Produk untuk dijual
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>penjualan/add" method="post">
            <div class="form-group">
                <label for="id_produk">Nama Produk</label>
                <select name="id_produk" id="id_produk" class="form-control">
                    <?php foreach($semua_produk->result() as $produk):?>
                        <option value="<?=$produk->id_produk?>"><?=$produk->nama?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah">
            </div>
            <input type="submit" value="Tambahkan" class="btn btn-primary">
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Penjualan
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>penjualan/store" method="post">
            
            
            <div class="form-group">
                <label for="tanggal">Tanggal Penjualan</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>
                        Produk
                    </th>
                    <th>
                        Jumlah
                    </th>
                </tr>
                <?php foreach($produk_produk->result() as $produk):?>
                <tr>
                    <td>
                        <?=$produk->nama?>
                    </td>
                    <td>
                        <?=$produk->jumlah?>
                    </td>
                </tr>
                <?php endforeach?>
            </table>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>