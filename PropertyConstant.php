<?php

class Produk {

//Property
public string $kode;
public string $nama;
public float $harga;
public int $stok;

//Constant
public const PAJAK = 0.11;
}
//object
$produk = new produk();

$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$jumlahpajak = $produk->harga * produk::PAJAK; //1,1jt

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "Produk: ", $produk->nama;
echo "<br/>";
echo "Harga: ", $produk->harga;
echo "<br/>";
echo "Stok: ", $produk->stok;
echo "<br/>";
echo "Pajak: ", $pajak."%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp.", $total;
