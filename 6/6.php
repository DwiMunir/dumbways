<?php
    $user   = "root";
    $pass   = "";
    $host   = "localhost";
    $db     = "dumbways";

    $link   = mysqli_connect($host,$user,$pass,$db);
    $query  = "SELECT * FROM users inner JOIN cities on users.place_of_birth = cities.id";
    $result = mysqli_query($link,$query);
    foreach ($result as $key) {

    $query1 = "SELECT * FROM users_hobbies inner JOIN hobbies on users_hobbies.hobby_id = hobbies.id";
        $result1 = mysqli_query($link,$query1);
        foreach ($result1 as $key1) {
            echo $key1['name'];
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>full_name</th>
            <th>place_of_birth_id</th>
            <th>place_of_birth</th>
            <th>date_of_birth</th>
            <th>phone_number</th>
            <th>last_education</th>
            <th>religion</th>
            <th>hobby</th>
        </tr>
        <tr>
            <td><?php echo $key['id'];?></td>
            <td><?php echo $key['full_name'];?></td>
            <td><?php echo $key['place_of_birth'];?></td>
            <td><?php echo $key['date_of_birth'];?></td>
            <td><?php echo $key['phone_number'];?></td>
            <td><?php echo $key['last_education'];?></td>
            <td><?php echo $key['religion'];?></td>
            <td><?php echo $key['name'];?></td>
        </tr>
    </table>
        <?php
        }
    }
?>