<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon_cabinet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
    .logout {
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}     
    
    </style>
</head>
<body>
<a href="logout.php" class="btn btn-danger logout " >Logout</a>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="/mon_cabinet/create.php" role="button">Registration</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date de reservation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mon_cabinet";

                // create connection
                $connection = new mysqli($servername,$username,$password,$database);

                //check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                //read all row from database table
                $sql = "SELECT *FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query : " . $connection->error);
                }

                //read data of each row 
                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[type]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[date_res]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/mon_cabinet/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/mon_cabinet/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }


                ?>

                <tr>
                    <td>10</td>
                    <td>Doctor</td>
                    <td>Bill Gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+111333555</td>
                    <td>New York, USA</td>
                    <td>2023-05-07</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/mon_cabinet/edit.php">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/mon_cabinet/delete.php">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>