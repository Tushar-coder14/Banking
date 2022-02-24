<?php include('config.php');
if ($_GET['id'] == '') {
    header('location:customer.php');
}
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
                <h2>Transfer Money</h2>
                <hr>
                <br>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                    </tr>
                    <?php
                    $sendername = "";
                    $sql = "SELECT id, name, email, balance FROM customers where id='" . $_GET['id'] . "'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $sender = $row['name'];
                    ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['balance']; ?></td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>

                </table>


                <form id="transferform" name="transferform" action="savedata.php" method="post">
                    <input type="hidden" id="sender" name="sender" value="<?php echo $sender; ?>" />

                    <table>
                        <tr>
                            <td>To: </td>
                            <td>
                                <select id="receiver" name="receiver">
                                    <?php
                                    $sql = "SELECT id, name, email, balance FROM customers";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php }
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Amount (Rs.):</td>
                            <td><input type="text" id="amount" name="amount" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" id="submit" name="submit" value="TRANSFER" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>

    <footer class="flex-all-center">
        <p>Copyright &copy 2022 GRIP BANK. All rights reserved</p>
    </footer>
</body>

</html>