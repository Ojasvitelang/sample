<?php
// Include database connection
include('db_config.php');

// Fetch data from the form
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

// SQL query to insert data into the database
$sql = "INSERT INTO weekly_sales (start_date, end_date, starting_reserve, gold_bought, pendants_sold, chains_sold, rings_sold, revenue, cost_of_gold, salary_cost, marketing_cost, it_cost, rental_cost, electricity_cost, total_cost, net_revenue, profit_before_tax)
VALUES ('$start_date', '$end_date', '$starting_reserve', '$gold_bought', '$pendants_sold', '$chains_sold', '$rings_sold', '$revenue', '$cost_of_gold', '$salary_cost', '$marketing_cost', '$it_cost', '$rental_cost', '$electricity_cost', '$total_cost', '$net_revenue', '$profit_before_tax')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
