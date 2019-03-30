<h1>Lihat Penjualan</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>penjualan" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Penjualan
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>penjualan/store" method="post">
            
             <div class="form-group">
                <label for="id">Id Penjualan</label>
                <input type="number" class="form-control" name="id" id="id" value="<?=$penjualan->id_penjualan?>" disabled required>
            </div>
            
            <div class="form-group">
                <label for="tanggal">Tanggal Penjualan</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?=$penjualan->waktu_penjualan?>" disabled required>
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
                <?php foreach($produk_produk as $produk):?>
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
        </form>
    </div>
</div>