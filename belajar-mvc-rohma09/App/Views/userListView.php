<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Rohmanisah 23.230.0009</a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Daftar Pengguna</h1>
        <a href="?action=create" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i> Tambah User
        </a>

        <table class="table table-hover table-striped table-bordered shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nama']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td class="text-center">
                                <a href="?action=show&id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i> Detail
                                </a>
                                <a href="?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>

</html>