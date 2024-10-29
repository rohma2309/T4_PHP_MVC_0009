<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="width: 24rem;">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Detail Pengguna</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></p>
                <p class="card-text"><strong>Nama:</strong> <?php echo htmlspecialchars($user['nama']); ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            </div>
            <div class="card-footer">
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>