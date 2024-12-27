<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container">
    <h2 class="mb-5">checkout</h2>
    <div class="mb-3">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Detail Buku</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="<?= base_url('images/buku.png'); ?> " alt="" style = "width:150px; height:auto;"> 
                    <h6>Pengantar Filsafat</h6>
                </td>
                <td>
                    x1
                </td>
                <td>
                    Rp.65.000,00
                </td>
                <td>
                Rp.65.000,00
                </td>
               
                
            </tr>
        </tbody>
    </table>
    </div>
    <h2 class="mb-5">Total: Rp. 65.000,00</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Emely Smith <br />
        083172293224 <br />
        nadhifpandia@gmail.com
    </div>
    <h2 class="mb-3">Alamat Pengiriman</h2>
    <div class="mb-5">
        <span>Jl. Km 16, Simpang Sungai Duren, Muaro Jambi.</span>
    </div>

    <h2 class="mb-3">Metode Bayar</h2>
    <div class="mb-5">
        Tranfer Bank <br />
        BCA, James Smith <br />
        701230024
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">Submit</a>
    </div>
</div>
<?= $this->endSection()?>