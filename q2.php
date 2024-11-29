<?php
$studentsInformation = 
[
    [
        'name' => 'Alice',
        'program'=> 'BIP',
        'age' => 21,
    ],
    [
        'name'=>'Bob',
        'program'=>'BIS',
        'age'=>20,
    ],
    [
        'name'=>'Raju',
        'program'=>'BIT',
        'age'=>22,
    ],
];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students Table</title>

</head>

<body>

    <table border="1" cellspacing="0" cellpadding="5">

        <th>

            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>

            </tr>

        </th>

        <tbody>
            
            <?php foreach ($studentsInformation as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['program']); ?></td>
                    <td><?php echo htmlspecialchars($student['age']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
