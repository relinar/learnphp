<h1>Add User</h1>
<form method="post" action="/users/store">
    <input name="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit" class="btn btn-create">Save</button>
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
.btn-create { background-color: #28a745; color: #fff; }
.btn-back { background-color: #6c757d; color: #fff; }
</style>
