<?php
    $arr = array(
        "Keyboard" => 150000,
        "Mouse" => 300000,
        "Monitor" => 100000,
    );
    $namabarang = "Keyboard";
    $jumlah = 2;
    define("pajak", 0.1);
    
    echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2>";
    echo "<hr/>";
    echo "Nama Barang: ".$namabarang."<br/>";
    echo "Harga Satuan: Rp ".$arr[$namabarang]."<br/>";  
    echo "Jumlah Beli: ".$jumlah."<br/>";
    echo "Total Harga (Sebelum Pajak): Rp ".$jumlah*$arr[$namabarang]."<br/>";  
    echo "Pajak (10%): Rp ".pajak*$jumlah*$arr[$namabarang]."<br/>";
    echo "<b>Total Bayar: Rp ".$jumlah*$arr[$namabarang] - pajak*$jumlah*$arr[$namabarang]."</b><br/>";
?>