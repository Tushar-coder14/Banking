<?php include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking Services</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">

</head>

<body>
    <header>
        <nav>
            <div class="logo"><a href="index.php"><img src="./logo10.png" alt=""></a></div>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="customer.php"> Customers</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
                <li><a href="contact.php"> Contact us </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="bg-image">
            <div class="container">
                <?php
                date_default_timezone_set("Asia/Calcutta");
                $date = Date("Y-m-d h:i:s");
                $sql = "INSERT INTO transfer (sender, receiver, amount, transferdate)
            VALUES ('" . $_POST['sender'] . "', '" . $_POST['receiver'] . "', '" . $_POST['amount'] . "', '" . $date . "')";

                if ($conn->query($sql) === TRUE) {
                    //   ?echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


                $conn->close();
                ?>
                <h2>Transaction Successful!</h2>
                <div class="button"><a href="customer.php">View Customers</a></div>
                <div class="button"><a href="transactionhistory.php">View Transaction History</a></div>


            </div>
        </div>
    </main>

    <footer class="flex-all-center">
        <p>Copyright &copy 2022 GRIP BANK. All rights reserved</p>
    </footer>
</body>

</html>