<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        
        $name = "YOAGHINI D/O LETCHMANAN";
        $matric_number="CI230154";
        $course="BACHELOR OF COMPUTER SCIENCE(INFORMATION SECURITY)WITH HONOURS";
        $Yearsofstudy="3 AND 1/2";
        $Address="71,TAMAN BUKIT MEDAN 31100 SUNGAI SIPUT UTARA PERAK DARUL RIDZUAN";
    ?>

    <table border ="1"cellspacing="0" cellpadding="5">
        
        <tr>
            <td>Student Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>

        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric_number"; ?></td> 
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>

        <tr>
            <td>Years of study</td>
            <td><?php echo "$Yearsofstudy"; ?></td> 
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo "$Address"; ?></td> 
        </tr>

    </table>
    
</body>
</html>


