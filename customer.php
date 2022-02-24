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
                <h2>Customer Details</h2>
                <hr>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance (Rs.)</th>
                        <th>Transfer</th>
                    </tr>
                    <?php
                    $sql = "SELECT id, name, email, balance FROM customers";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['balance']; ?></td>
                                <td class="transfer"><a href="transfer.php?id=<?php echo $row['id']; ?>">Transfer</a></td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

                </table>

            </div>
        </div>
    </main>

    <footer class="flex-all-center">
        <p>Copyright &copy 2022 GRIP BANK. All rights reserved</p>
    </footer>
</body>

</html>