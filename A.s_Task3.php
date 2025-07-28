
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <style>
        .employee-card {
            background-color: #d59de5ff;
            border: 1px solid #ccc;
            padding-left: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 10px 10px rgba(131, 161, 241, 0.5);
        }
        .employee-card h5 {
            color: black;
        }
        .employee-card p {
            margin: 5px 0;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Employee Information</h1>

    <?php
    $employees = [
        ["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
        ["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"],
        ["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"]
    ];

    foreach ($employees as $employee) {
        echo "<div class='employee-card'>";
        echo "<h2>Name: " . $employee['name'] . "</h2>";
        echo "<p>Salary: " . $employee['salary'] . "$</p>";
        echo "<p>Age: " . $employee['age'] . " years</p>";
        echo "<p>Insurance: " . $employee['insurance'] . "</p>";
        echo "</div>";
    }
    ?>

</body>
</html>

