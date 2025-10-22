<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1 class="mb-3">Edit User</h1>
    <form action="/users/update" method="POST" class="mb-3">
        <input type="hidden" name="id" value="<?= htmlspecialchars($user->id) ?>">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?= htmlspecialchars($user->email) ?>" name="email" id="email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New password (leave blank to keep)</label>
            <input name="password" id="password" type="password" class="form-control" placeholder="New password (leave blank to keep)">
        </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-secondary" href="/users">Back</a>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>