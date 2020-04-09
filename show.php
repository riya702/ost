<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .form-style-5{
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
    </style>
</head>
<body>
    <div class="form-style-5">
        <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $conn = mysqli_connect('localhost','root','','Riya');
                if(!$conn){
                    echo "Connection Failed!<br>".mysqli_error($conn);
                }
                $sql2 = "SELECT * FROM users ORDER BY first_name DESC";
                $result = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result) > 0) {
                echo "<table><tr>
                    <th>ID</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["first_name"]."</td>
                    <td>".$row["last_name"]."</td>
                    <td>".$row["email"]."</td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            }
         ?>
    </div>
</body>
</html>
