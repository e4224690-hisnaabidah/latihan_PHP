<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='6' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";
        foreach ($bukuList as $b) {
            echo "<tr>
                    <td>{$b['id']}</td>
                    <td>{$b['judul']}</td>
                    <td>{$b['pengarang']}</td>
                    <td>{$b['tahun']}</td>
                 </tr>";
        }
        echo "</table>";
    }
}
?>
