<?php
$database = mysqli_connect("localhost", "root", "", "fasttrack");

if (isset($_POST['received'])) {
    $order_id = $_POST['customer_id1'];
    $branch_id = $_POST['receiverAddress'];
    $status = $_POST['status'];

    // Insert into received table
    $sql = $database->query("INSERT INTO received(order_id, recived_location, status) 
                             VALUES('$order_id', '$branch_id', '$status')");

    // Update the status in customer_section table
    $update_query = "UPDATE customer_section SET status = '$status' WHERE id = $order_id";
    if ($database->query($update_query)) {
        header("Location: index.php");
    } else {
        echo "Error updating status in customer_section: " . $database->error;
    }
}
?>

<style>
    h1 {
        text-align: center;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    select,
    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fafafa;
    }

    select:focus,
    input[type="text"]:focus {
        outline: none;
        border-color: #007BFF;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }
</style>

<div class="container">
    <h1>Order Details</h1>
    <form action="#" method="post">
        <!-- Order ID Field -->
        <div class="form-group">
            <label for="order-id">Order ID</label>
            <select name="customer_id1" id="order-id">
                <?php
                $ns = $database->query("SELECT * FROM customer_section");
                while (list($id) = $ns->fetch_row()) {
                    echo "<option value='$id'>$id</option>";
                }
                ?>
            </select>
        </div>

        <!-- Receiver Address Field -->
        <div class="form-group">
            <label for="receiverAddress">Current Address</label>
            <select name="receiverAddress" id="receiverAddress">
                <option value="">Select Address</option>
                <?php
                $ns = $database->query("SELECT * FROM branch");
                while (list($id, $branch_name, $branch_code) = $ns->fetch_row()) {
                    echo "<option value='$id'>$branch_name</option>";
                }
                ?>
            </select>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="">Select Status</option>
                <option value="Received">Received</option>
                <option value="Returned">Returned</option>
            </select>
        </div>

        <!-- Submit Button -->
        <input type="submit" name="received" value="Received">
    </form>
</div>


<?php
$query = "SELECT * FROM received";
if ($search_query !== "") {
    $query .= " WHERE id LIKE '%$search_query%'";
}
$ns = $database->query($query);

echo "<div class='table-container'> 
    <h3>Received Details</h3>  
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Order ID</th>
                <th>Recived_location</th>
                
                <th>Status</th>
                
            </tr>
        </thead>";
while ($row = $ns->fetch_assoc()) {
    echo " 
        <tbody>
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['order_id']}</td>
                <td>{$row['recived_location']}</td>
                <td><span class='status {$row['status']}'>{$row['status']}</span></td>
              
            </tr>
        </tbody>";
}
echo " </table> </div>";
?>