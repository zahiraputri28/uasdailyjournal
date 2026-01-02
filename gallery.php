<div class="container">
    <h2 class="mb-4">Manajemen Gallery</h2>

    <a href="admin.php?page=gallery&action=tambah" class="btn btn-primary mb-3"><i class="bi bi-plus-square"></i> Tambah Gambar</a>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY id DESC"; 
                    $hasil = $conn->query($sql);

                    $no = 1;
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <?php
                                if ($row["gambar"] != '' && file_exists('img/' . $row["gambar"])) {
                                ?>
                                    <img src="img/<?= $row["gambar"] ?>" width="100">
                                <?php
                                } else {
                                    echo "No Image";
                                }
                                ?>
                            </td>
                            <td><?= $row["username"] ?></td>
                            <td>
                                <a href="admin.php?page=gallery&action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="admin.php?page=gallery&action=hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>