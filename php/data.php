<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhihsek chauhan : contact form data.</title>

    <link href="../image/my_img.webp" rel="icon" style="border-radius:50%;">
    <link href="../image/my_img.webp" rel="apple-touch-icon" style="border-radius:50%;">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=New+Tegomin&display=swap');
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid #fff;
            margin: 10px;
            padding: 10px;
            color: red;
            font-weight: bold;
            font-family: 'New Tegomin', serif;
            text-align: center;
            letter-spacing: 2px;    
        }
        h2 {
            margin: 20px;
            color: #000;
            font-weight: bold;
            text-align: center;
            text-shadow: 0.1px 0.1px 0px #fff,
                0.1px 0.1px 0px #fff;
                letter-spacing: 4px;
        }
        @media only screen and (max-width:500px){
            table {
                width:98%;
            }
            table,
            td,
            th {
            margin: 5px;
            padding: 5px;
            color: red;
            font-weight: bold;
            font-family: 'New Tegomin', serif;
            text-align: center;
            letter-spacing: 1px;    
            }
        }
    </style>

</head>

<body>
    <h2>Messageses of portfolio</h2>
    <?php
    require('conn.php');

    $sql = "SELECT * FROM port_mess";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
              <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Number</th>
              <th>Email</th>
              <th>Message</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $con->close();
    ?>
</body>

</html>