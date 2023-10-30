<?php include_once 'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal | Georgian College</title>
    <meta name="description" content="Assignment PHP">
    <style>
        
        body {
            background-image: url("img/background.jpg");
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            font-family: Arial, sans-serif;
			opacity: 0.8;
        }

		header {
			background-color: lightblue;
			text-align: center;
			padding: 20px;
		}

        .custom-navbar-brand {
            text-decoration: none;
            color: white;
        }

        .custom-container {
            padding: 20px;
        }

        .custom-form-row {
            margin: 0;
        }

        .custom-form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .custom-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-btn-primary {
            background-color: #007bff;
            color: white;
        }

        .custom-btn-dark {
            background-color: #333;
            color: white;
        }

       .row.justify-content-center {
            justify-content: center;
        }

        @media (max-width: 768px) {
            .custom-form {
                width: 100%;
            }
        }
        .table {
            width: 50%;
            border-collapse: collapse;
            align: center;  
        }

        .table th, .table td {
            border: 1px solid black;
            padding: 8px;
        }

        .table tr:nth-child(odd) {
            background-color: whitesmoke;
        }

        .table tr:nth-child(even) {
            background-color: lightgray;
        }

        footer {
			text-align: center;
			color: white;
		}
    </style>
</head>
<body>
  <header>
    <nav class="custom-navbar bg-custom-blue">
      <div class="container-fluid">
        <a class="custom-navbar-brand" href="index.php"><img src="img/logo.jpg" alt="header logo" width="200" height="200"></a>
        <div>
          <a href="index.php" class="custom-btn custom-btn-primary">Home</a>
          <a href="view.php" class="custom-btn custom-btn-primary">View</a>
        </div>
      </div>
    </nav>
  </header>
<main>
<div class="container">
	<div class="row">
		<table class="table">
<?php
        
        $query = 'SELECT * FROM phpusers';
        $result = $database->getData($query);
      ?>
      <tr>
        <th>Student Name</th>
        <th>Student Id</th>
        <th>Student Grade</th>
      </tr>

      <?php
        foreach($result as $key => $res){
          echo "<tr>";
          echo "<td>".$res['student_name']."</td>";
          echo "<td>".$res['student_id']."</td>";
          echo "<td>".$res['student_grade']."</td>";
          echo "</tr>";
        }
      ?>
		</table>
	</div>
</div>
</main>
</body>
<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Online Education. All rights reserved.</p>
    </div>
</footer>
</html>
