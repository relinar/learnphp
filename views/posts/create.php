<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1 class="mb-3">Add User</h1>
    <form action="/users/store" method="POST" class="mb-3">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <button class="btn btn-primary">Create</button>
        <a class="btn btn-secondary" href="/users">Back</a>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>