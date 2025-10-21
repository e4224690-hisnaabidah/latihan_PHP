<?php
class Buku {
    private $dataBuku = [
        ["id" => 1, "judul" => "Amba", "pengarang" => "Laksmi Pamuntjak", "tahun" => 2012],
        ["id" => 2, "judul" => "Lelaki Harimau", "pengarang" => "Eka Kurniawan", "tahun" => 2004],
        ["id" => 3, "judul" => "Cantik Itu Luka", "pengarang" => "Eka Kurniawan", "tahun" => 2002],
        ["id" => 4, "judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
        ["id" => 5, "judul" => "Kambing dan Hujan", "pengarang" => "Mahfud Ikhwan", "tahun" => 2015],
        ["id" => 6, "judul" => "Home", "pengarang" => "Leila S. Chudori", "tahun" => 2012],
        ["id" => 7, "judul" => "Laut Bercerita", "pengarang" => "Leila S. Chudori", "tahun" => 2017],
        ["id" => 8, "judul" => "Pulang", "pengarang" => "Tere Liye", "tahun" => 2015],
        ["id" => 9, "judul" => "Sepotong Senja untuk Pacarku", "pengarang" => "Seno Gumira Ajidarma", "tahun" => 1991],
        ["id" => 10, "judul" => "9 dari Nadira", "pengarang" => "Leila S. Chudori", "tahun" => 2009],
    ];

    // Mengambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
