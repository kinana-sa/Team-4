<h1>Families</h1>

<nav>
        <ul>
            <li><a href="/Team-4/">Home</a></li>
            
        </ul>
    </nav>
<table>
    <thead>
        <tr>
            <th>FirstName</th>
            <th>MiddleName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>JobStatus</th>
            <th>Members</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($families as $family): ?>
            <tr>
                <td><?= $family->getFirstName() ?></td>
                <td><?= $family->getMiddleName() ?></td>
                <td><?= $family->getLastName() ?></td>
                <td><?= $family->getAddress() ?></td>
                <td><?= $family->getJobStatus() ?></td>
                <td><?= $family->getMembers() ?></td>
                <td><?= $family->getPhone() ?></td>
                <td>
                    <form method="post" action="edit?id=<?php echo $family->getId();?>" >
                    <input type="submit" value="Edit">
                    </form>
                    <form method="post" action="delete?id=<?php echo $family->getId();?>" >
                    <input type="submit" value="Delete">
                    </form>
            </td>
        
            </tr>
        <?php endforeach ?>
    </tbody>
</table>