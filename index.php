<?php
require_once "database.php";
require_once "form.php";

$db = new Database();

// Logika Simpan Data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'nim' => $_POST['txtnim'],
        'nama' => $_POST['txtnama'],
        'alamat' => $_POST['txtalamat']
    ];
    $db->insert("mahasiswa", $data);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa - Lab 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary-subtle">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 text-center">Form Input Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $form = new Form("", "Simpan Data Mahasiswa");
                        $form->addField("txtnim", "Nomor Induk Mahasiswa (NIM)");
                        $form->addField("txtnama", "Nama Lengkap");
                        $form->addField("txtalamat", "Alamat Tinggal");
                        $form->displayForm();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>