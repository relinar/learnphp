<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <a class="btn btn-primary mb-3" href="/users">Back</a>

    <h1 class="mb-3">View User</h1>

    <div class="mb-3"><strong>ID:</strong> <?= htmlspecialchars($user->id) ?></div>
    <div class="mb-3"><strong>Email:</strong> <?= htmlspecialchars($user->email) ?></div>

    <div class="btn-group" role="group" aria-label="User actions">
        <a class="btn btn-info" href="/users/view?id=<?= $user->id ?>">View</a>
        <a class="btn btn-warning" href="/users/edit?id=<?= $user->id ?>">Edit</a>
        <a class="btn btn-danger" href="/users/delete?id=<?= $user->id ?>">Delete</a>
        <a class="btn btn-secondary" href="/users">Back</a>
    </div>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>