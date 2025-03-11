<?php
// Fetch all the form data from the previous page (index.html)
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$starting_reserve = $_POST['starting_reserve'];
$gold_bought = $_POST['gold_bought'];
$pendants_sold = $_POST['pendants_sold'];
$chains_sold = $_POST['chains_sold'];
$rings_sold = $_POST['rings_sold'];
$revenue = $_POST['revenue'];
$cost_of_gold = $_POST['cost_of_gold'];
$salary_cost = $_POST['salary_cost'];
$marketing_cost = $_POST['marketing_cost'];
$it_cost = $_POST['it_cost'];
$rental_cost = $_POST['rental_cost'];
$electricity_cost = $_POST['electricity_cost'];
$total_cost = $_POST['total_cost'];
$net_revenue = $_POST['net_revenue'];
$profit_before_tax = $_POST['profit_before_tax'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            font-size: 18px;
        }
        button, input[type="submit"] {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            margin-top: 20px;
        }
        form {
            margin-top: 30px;
        }
        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        select, input[type="date"] {
            padding: 8px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculation Results</h1>
        <p><strong>Start Date:</strong> <?= $start_date ?></p>
        <p><strong>End Date:</strong> <?= $end_date ?></p>
        <p><strong>Total Revenue:</strong> INR <?= $revenue ?></p>
        <p><strong>Cost of Gold:</strong> INR <?= $cost_of_gold ?></p>
        <p><strong>Total Costs:</strong> INR <?= $total_cost ?></p>
        <p><strong>Net Revenue:</strong> INR <?= $net_revenue ?></p>
        <p><strong>Profit Before Tax:</strong> INR <?= $profit_before_tax ?></p>

        <!-- Form to upload data to the database -->
        <form action="upload.php" method="post">
            <input type="hidden" name="start_date" value="<?= $start_date ?>">
            <input type="hidden" name="end_date" value="<?= $end_date ?>">
            <input type="hidden" name="starting_reserve" value="<?= $starting_reserve ?>">
            <input type="hidden" name="gold_bought" value="<?= $gold_bought ?>">
            <input type="hidden" name="pendants_sold" value="<?= $pendants_sold ?>">
            <input type="hidden" name="chains_sold" value="<?= $chains_sold ?>">
            <input type="hidden" name="rings_sold" value="<?= $rings_sold ?>">
            <input type="hidden" name="revenue" value="<?= $revenue ?>">
            <input type="hidden" name="cost_of_gold" value="<?= $cost_of_gold ?>">
            <input type="hidden" name="salary_cost" value="<?= $salary_cost ?>">
            <input type="hidden" name="marketing_cost" value="<?= $marketing_cost ?>">
            <input type="hidden" name="it_cost" value="<?= $it_cost ?>">
            <input type="hidden" name="rental_cost" value="<?= $rental_cost ?>">
            <input type="hidden" name="electricity_cost" value="<?= $electricity_cost ?>">
            <input type="hidden" name="total_cost" value="<?= $total_cost ?>">
            <input type="hidden" name="net_revenue" value="<?= $net_revenue ?>">
            <input type="hidden" name="profit_before_tax" value="<?= $profit_before_tax ?>">
            <button type="submit">Upload to Database</button>
        </form>

        <!-- Form to generate historical reports -->
        <form action="export.php" method="post">
            <h2>Generate Historical Reports</h2>
            <label for="report_start_date">Start Date:</label>
            <input type="date" id="report_start_date" name="report_start_date" required>

            <label for="report_end_date">End Date:</label>
            <input type="date" id="report_end_date" name="report_end_date" required>

            <label for="columns">Select Columns:</label>
            <select id="columns" name="columns[]" multiple required>
                <option value="start_date">Start Date</option>
                <option value="end_date">End Date</option>
                <option value="starting_reserve">Starting Reserve</option>
                <option value="gold_bought">Gold Bought</option>
                <option value="pendants_sold">Pendants Sold</option>
                <option value="chains_sold">Chains Sold</option>
                <option value="rings_sold">Rings Sold</option>
                <option value="revenue">Revenue</option>
                <option value="cost_of_gold">Cost of Gold</option>
                <option value="salary_cost">Salary Cost</option>
                <option value="marketing_cost">Marketing Cost</option>
                <option value="it_cost">IT Cost</option>
                <option value="rental_cost">Rental Cost</option>
                <option value="electricity_cost">Electricity Cost</option>
                <option value="total_cost">Total Cost</option>
                <option value="net_revenue">Net Revenue</option>
                <option value="profit_before_tax">Profit Before Tax</option>
            </select>

            <input type="submit" value="Download CSV">
        </form>
    </div>
</body>
</html>
