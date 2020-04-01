<div class="container-fluid">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div class="btn btn-sm btn-success"><?php $grand_total = 0;
    if($keranjang = $this->cart->contents()){
        foreach($keranjang as $item){
            $grand_total = $grand_total + $item['subtotal'];
        }
        echo "<h4>Total Belanja Anda : Rp.".number_format($grand_total, 0, ',','.');
    ?>


</div><br><br>

<h3>Input Alamat Pengiriman dan Pembayaran</h3>

<form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Alamat Lengkap</label>
        <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
    </div>

    <div class="form-group">
        <label for="">No Tlp</label>
        <input type="text" name="no_tlp" placeholder="No Tlp" class="form-control">
    </div>

    <div class="form-group">
        <label>Jasa Pengiriman</label>
       <select class="form-control">
           <option>JNE</option>
           <option>Tiki</option>
           <option>Pos Indonesia</option>
           <option>Gojek</option>
           <option>Grab</option>
       </select>
    </div>


    <div class="form-group">
        <label>Pilih Bank</label>
       <select class="form-control">
           <option>Bca</option>
           <option>Bni</option>
           <option>Bri</option>
           <option>Mandiri</option>
       </select>
    </div>

    <button type="submit" class="btn btn-sm btn-primary mb-3" >Pesan</button>

</form>

<?php 
}else{
    echo "<h4>Keranjang belanja anda masih kosong";
}
?>
</div>



<div class="col-md-2"></div>
</div>
</div>
