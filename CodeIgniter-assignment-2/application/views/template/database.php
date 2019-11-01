<h2>Database table</h2>
<?php
$query =  $this->db->query('SELECT * FROM users');
if(!$query){
    $error = $this->db->error();
    echo $error;
}else{
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($query->result_array() as $row) {
                   
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <?php 
                }
            ?>    
        </tbody>
    </table>
    <?php
    }
    ?>