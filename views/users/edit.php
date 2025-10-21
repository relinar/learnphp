<h1>Edit User</h1>
<form method="post" action="/users/update">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <input name="email" value="<?= htmlspecialchars($user->email) ?>" required>
    <input name="password" type="password" placeholder="New password (leave blank to keep)">
    <button type="submit" class="btn btn-edit">Update</button>
</form>
<a href="/users" class="btn btn-back">Back</a>

<style>
.btn, .btn-back {
    padding: 0.3rem 0.7rem;
    border-radius: 4px;
    font-size: 0.9rem;
    display: inline-block;
    text-decoration: none;
    border: none;
    margin-top: 0.5rem;
    cursor: pointer;
}
.btn-edit { background-color: #007bff; color: #fff; }
.btn-back { background-color: #6c757d; color: #fff; }
</style>
