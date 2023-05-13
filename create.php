<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mon_cabinet";

// create connection
$connection = new mysqli($servername , $username , $password , $database);

$type = "";
$name = "";
$email = "";
$phone = "";
$address = "";
$passw = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $type = $_POST['type'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $passw = $_POST["passw"];


    $passwordHash = password_hash($passw, PASSWORD_DEFAULT);

    
    do {
        if( empty($name) || empty($email) || empty($phone) || empty($address) || empty($passw) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        // add new client to database
        $sql = "INSERT INTO clients (type, name, email, phone, address, passw) " .
                "VALUES ('$type', '$name', '$email', '$phone', '$address', '$passw')";
        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = " Invalid query: " . $connection->error;
            break;
        }

        $type = "";
        $name = "";
        $email = "";
        $phone = "";
        $address = "";
        $passw = "";

        $successMessage = " Client added correctly";

        header("location:/mon_cabinet/index.php");
        exit;

    } while ( false ) ;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon_cabinet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Registration</h2>
        
        <?php
        if( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
        
        <div class="row mb-3">
             <label for="type">You are a:</label>
             <select name="type" id="type" value="<?php echo $type; ?>">
             <optgroup label="Doctor">
             <option value="General Practitioners">General Practitioners</option>
             <option value="Psychiatrists">Psychiatrists</option>
             <option value="dentist">dentist</option>      
             <option value="Surgeon">Surgeon</option>
            </optgroup>
            <optgroup label="Others">
            <option value="Secretary">Secretary</option>
            <option value="Client">Client</option>
        </optgroup>
    </select> 
        </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="passw" value="<?php echo $passw; ?>">
                </div>
            </div>

            <?php
        if ( !empty($successMessage) ) {
            echo "
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" href="/mon_cabinet/login.php">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/mon_cabinet/login.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
        <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">        
        <div><p>Already have an account? <a href="login.php">Sign in .</a></p></div>
    </div> 
</div>
</div>
</body>
</html>