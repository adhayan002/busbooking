<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data logs</title>
    <link rel="stylesheet" href="logs.css">
    <style>
        .container4 {
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        h1 {
            color: #000000;
            border: 2px solid black;
            background-color: #ffffff;
            margin: 32px 572px;
            border-radius: 25px;
        }

        .item4 {
            margin: 20px 0px;
            font-size: 35px;
            color: white;
            font-weight: bold;
        }

        th {
            padding: 13px 42px;
            background-color: #000000;
            color: #ededf4;
            font-size: 24px;
        }

        td {
            padding: 13px 42px;
            font-size: 18px;
            font-weight: bolder;
            background-color: #ffffff;
            color: #000000;
        }
        body{
        
        background: url("bus.jpg") no-repeat center center fixed;
        background-size: cover; 
        
    }
    table a{
        text-decoration: none;
    color: #fffdfc;
    border: 4px solid white;
    padding: 7px 11px;
    border-radius: 24px;
    background-color: #f50c3d
    }
    table a:hover{
        color: black;
    background-color: navajowhite;
    border-color: red;
    }
    p{
        font-size: 22px;
        margin: 34px 0px;
    }
    </style>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="https://imgs.search.brave.com/-9CZHf1fsJ_nzbe7bS_91aziLjWGbfPlW58g_d46tNY/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvcHJl/dmlld3MvMDAwLzQy/MS80MjEvb3JpZ2lu/YWwvdmVjdG9yLWJ1/cy1pY29uLmpwZw">

        </div>
        <ul>
            <li class="item"><a href="./index.php?page=home">Home</a></li>
            <li class="item"><a href="./logout.php">Log Out</a></li>

        </ul>
    </nav>

    <div class="container4">
        <h1>Logs of Trips are </h1>
        <?php
include 'db_connect.php';
session_start();
$sql = "select * from log";
$query = mysqli_query($conn,$sql) or die("Unsucessful");

$num=mysqli_num_rows($query);
if($num!=0){
  
    
    echo"<table>";
        echo"<thead>
            <tr>
                <th>Bus</th>
                <th>Location</th>
                
            </tr>

        </thead>";
        echo"<tbody>";
        while($row = mysqli_fetch_assoc($query)){ 
            echo"<tr>";
            echo "<td>" . $row['bus_id'] . "</td>";
            echo "<td>" . $row['fromid'] . "</td>";
            
            
            
          echo" </tr>";
        }
        echo"</tbody>
    </table>";


}
else{
   echo '<div class = "item4" >Sorry ! No Bus Has Been Schedule</div>';
}
?>
    </div class="container4">


</body>

</html>