<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="update">
        <label>First Name :</label>
        <input type='text' name='first_name' value='<?= $results->getFirstName() ?>'><br>
        
        <label>Middle Name :</label>
        <input type='text' name='middle_name' value='<?= $results->getMiddleName() ?>'><br>
        
        <label>Last Name :</label>
        <input type='text' name='last_name' value='<?= $results->getLastName() ?>'><br>
        
        <label>Members :</label>
        <input type='text' name='members' value='<?= $results->getMembers() ?>'><br>
        
        <label>Phone :</label>
        <input type='text' name='phone' value='<?= $results->getPhone() ?>'><br>
        
        <label>Job Status :</label>
        <input type='text' name='job_status' value='<?= $results->getJobStatus() ?>'><br>
        
        <label>Address :</label>
        <input type='text' name='address' value='<?= $results->getAddress() ?>'><br>

        <input type='hidden' name='id' value="<?= $results->getId()?>">

        <button>Edit</button>
    </form>
</body>
</html>