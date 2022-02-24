<?php include('config.php'); ?>
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
        <div class="navbar">
            <nav>
                <div class="logo"><a href="index.php"><img src="./logo10.png" alt=""></a></div>
                <ul>
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="customer.php"> Customers</a></li>
                    <li><a href="transactionhistory.php">Transaction History</a></li>
                    <li><a href="contact.php"> Contact us </a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="bg-image">
            <div class="container">
                <h2>Welcome User!</h2>
                <hr>
                <div class="button"><a href="customer.php">Transfer Money</a></div>
                <div class="button"><a href="transactionhistory.php">Transaction History</a></div>
            </div>
        </div>
    </main>

    <footer class="flex-all-center">
        <p>Copyright &copy 2022 GRIP BANK. All rights reserved</p>
    </footer>
</body>

</html>