<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daily_Challenge - Day2</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>Daily Challenge: Chess Board</h1>
            <table width="270px" border="1px">
                <?php
                for ($row=1; $row <= 8; $row++) { 
                    echo "<tr>";
                        for($col = 1; $col <=8; $col++)
                        {
                            $total = $row + $col;
                            if($total % 2 == 0)
                            {
                                echo "<td height=30px width=30px bgcolor=#fff></td>";
                            }
                            else
                            {
                                echo "<td height=30px width=30px bgcolor=#000></td>";
                            }
                        }
                    echo "</tr>";
                }
                ?>
            </table>
        </center>
        
    </div>
</body>
</html>