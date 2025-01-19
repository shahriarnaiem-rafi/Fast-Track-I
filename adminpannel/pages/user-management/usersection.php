<?php
$database = mysqli_connect("localhost", "root", "", "fasttrack");
if (isset($_POST["submitted"])) {
    $service_type = $_POST['service'];
    $sender_name = $_POST['senderName'];
    $sender_address = $_POST['senderAddress'];
    $sender_phone = $_POST['senderPhone'];
    $receiver_name = $_POST['receiverName'];
    $receiver_address = $_POST['receiverAddress'];
    $receiver_phone = $_POST['receiverPhone'];
    $product = $_POST['receiverProduct'];
    $date = $_POST['date'];
    $status = 'pending';
   
    $sql = $database->query("INSERT INTO customer_section(service_type,sender_name,sender_address,sender_phone,receiver_name,receiver_address,receiver_phone,product,date_of_order, status) VALUES('$service_type','$sender_name','$sender_address','$sender_phone','$receiver_name','$receiver_address','$receiver_phone','$product','$date', '$status')");
    header("location:index.php");
}
?>

    <style>
        /* General Styling */


        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            background: #ffffff;
            border-radius: 15px;
            padding: 20px 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            width: 100%;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #2575fc;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            font-size: 0.9rem;
            color: #333;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #2575fc;
        }

        select {
            background-color: #f9f9f9;
            appearance: none;
            font-size: 1rem;
        }

        .button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .form-section {
            flex: 1;
            margin-bottom: 20px;
        }

        /* Receipt Styling */
        #receipt {
            background: #fff;
            border: 1px solid #000;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.2rem;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }

        .receipt-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .receipt-row div {
            flex: 1;
            text-align: center;
            font-size: 0.9rem;
            padding: 5px;
            border: 1px solid #000;
        }

        .receipt-ref {
            text-align: right;
            margin: 10px 0;
            font-weight: bold;
        }

        .receipt-details {
            border: 1px solid #000;
            padding: 10px;
            margin-top: 10px;
        }

        .receipt-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.8rem;
            border-top: 1px solid #000;
            padding-top: 10px;
        }

        .receipt-footer p {
            margin: 2px 0;
        }

        .print-button {
            margin-top: 10px;
            text-align: center;
        }

        /* Hide Print Button during Printing */
        @media print {
            .print-button {
                display: none;
            }
        }

        .print-button {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Sender Form -->
        <div class="form-section">
            <h2>Sender</h2>
            <form id="myForm" method="post">
                <label for="service">Service Type</label>
                <select id="service" name="service">
                    <option value="Standard">Standard</option>
                    <option value="Express">Express</option>
                </select>

                <label for="senderName">Name</label>
                <input type="text" id="senderName" name="senderName" required>

                <label for="senderAddress">Address</label>

                <select name="senderAddress" id="senderAddress">
                    
                    <?php
                    echo "<option value=''>Select Address</option>";
                    $ns = $database->query("select * from branch");
                    while (list($id, $branch_name, $branch_code) = $ns->fetch_row()) {
                        
                        echo "<option value='$id $branch_name'>$branch_name</option>";
                    }
                    ?>


                </select>

                <label for="senderPhone">Phone</label>
                <input type="tel" id="senderPhone" name="senderPhone" required>

                <h2>Receiver</h2>

                <label for="receiverName">Name</label>
                <input type="text" id="receiverName" name="receiverName" required>

                <label for="receiverAddress">Address</label>
                <select name="receiverAddress" id="receiverAddress">
                <?php
                 echo "<option value=''>Select Address</option>";
                    $ns = $database->query("select * from branch");
                    while (list($id, $branch_name, $branch_code) = $ns->fetch_row()) {
                       
                        echo "<option value='$id $branch_name'>$branch_name</option>";
                    }
                    ?>
                </select>

                <label for="receiverPhone">Phone</label>
                <input type="tel" id="receiverPhone" name="receiverPhone" required>

                <label for="receiverProduct">Product</label>
                <input type="text" id="receiverProduct" name="receiverProduct" required>

                
                <label for="date">Date</label>
                <input type="text" id="date" name="date" required>


                <input type="submit" value="Submit" id="submitBtn" class="button" name="submitted">
            </form>
        </div>
    </div>
