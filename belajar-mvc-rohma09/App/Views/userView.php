<tbody>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nama']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="?action=show&id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                    <a href="?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Tidak ada data pengguna.</td>
        </tr>
    <?php endif; ?>
</tbody>