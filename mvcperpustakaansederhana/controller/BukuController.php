<?php
require_once "model/Buku.php";
require_once "view/bukuView.php";

class BukuController {
    public function index() {
        $model = new Buku();
        $view = new BukuView();
        // Ambil data dari model
        $bukuList = $model->getAllBuku();
        // Kirim data ke view
        $view->tampilkan($bukuList);
    }
}
?>
