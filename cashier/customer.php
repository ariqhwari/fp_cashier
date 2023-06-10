<?php include '../conn.php'; ?>

<?php

if (isset($_POST['submit'])) {
    $name_customer = $_POST["name_customer"];
    $email_customer = $_POST["email_customer"];
    $address_customer = $_POST["address_customer"];

    $query = "INSERT INTO customer (name_customer, email_customer,address_customer) VALUES ('$name_customer', '$email_customer', '$address_customer')";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// $conn->close();
?>

<?php include 'header.php' ?>

<div class="container">
    <div class="content-list">
        <div class="content1">
        <table>
        <thead>
                <tr>
                    <th>Id Customer</th>
                    <th>Name Customer</th>
                    <th>E-mail Customer</th>
                    <th>Address Customer</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM customer";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['name_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['email_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['address_customer']; ?>
                        </td>
                        <td>
                            <!-- <a href="customer_update.php" class="btn btn-danger">Update</a> -->
                            <?php echo "<a  href='customer_update.php?id=".$data['id_customer']."' class='btn btn-danger'>Update</a>"; ?>
                            <a href="customer_delete.php" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
        </div>
</div>
<a href="customer_form.php" class="btn btn-danger">Add Customer</a>
