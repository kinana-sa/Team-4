
<h1>Users</h1>
<table>
<<li><a href=" ">Create User</a></li> 

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->getId() ?></td>
                <td><?= $user->getName() ?></td>
                <td><?= $user->getEmail() ?></td>
                <td>
                    <form method="post" action="edite_user&id=<?= $user->getId() ?>">
                        <button>Edit</button>
                    </form>
                    <form method="post" action="delete_user">
                        <input type="hidden" name="id" value="<?= $user->getId() ?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

