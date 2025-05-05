<?php
$employees = [

    ["name" => "Ahmed", 
    "salary" => 6000, 
    "age" => 30, 
    "insurance" => "Yes"],

    ["name" => "Sara", 
    "salary" => 6000,
    "age" => 28,
    "insurance" => "No"],

    ["name" => "Ali",
    "salary" => 4500,
    "age" => 35, 
    "insurance" => "Yes"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>employee list</title>
</head>
<body>

<?php foreach ($employees as $em): ?>
    <div>
        Name: <?= $em['name'] ?><br>
        Salary: <?= $em['salary'] ?><br>
        Age: <?= $em['age'] ?><br>
        Insurance: <?= $em['insurance'] ?><br>
    </div>
    <hr>
<?php endforeach; ?>

</body>
</html>
