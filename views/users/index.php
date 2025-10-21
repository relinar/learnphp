<h1>Users List</h1>
<a href="/users/create" class="btn btn-create">Add new user</a>

<table class="users-table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user->email) ?></td>
            <td class="actions">
                <a href="/users/edit?id=<?= $user->id ?>" class="btn btn-edit">Edit</a>
                <form method="post" action="/users/delete" style="display:inline">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<style>
.users-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}
.users-table th, .users-table td {
    border: 1px solid #ccc;
    padding: 0.5rem 1rem;
}
.users-table th { background-color: #f5f5f5; text-align: left; }
.actions { text-align: right; white-space: nowrap; }
.btn {
    padding: 0.3rem 0.7rem;
    margin-left: 0.3rem;
    border-radius: 4px;
    font-size: 0.9rem;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    border: none;
}
.btn-create { background-color: #28a745; color: #fff; }
.btn-edit { background-color: #007bff; color: #fff; }
.btn-delete { background-color: #dc3545; color: #fff; border: none; }
.btn-back { background-color: #6c757d; color: #fff; text-decoration: none; }
</style>
