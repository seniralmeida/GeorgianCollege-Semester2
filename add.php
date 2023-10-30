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
			opacity: 100%;
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
          <a href="index.php" class="custom-btn custom-btn-home">Home</a>
          <a href="view.php" class="custom-btn custom-btn-view">View</a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php
    
    include_once ('validate.php');
    include_once ('database.php');
    
    $valid = new validate();

    if (!empty($_POST['Submit'])) {
        
        $student_name = $_POST['student_name'];
        $student_grade = $_POST['student_grade'];
        $student_id = $_POST['student_id'];
        $msg = $valid->checkEmpty($_POST, array('student_name', 'student_grade', 'student_id'));
        $checkStudentId = $valid->validStudentId($_POST['student_id']);
        if ($msg != null) {
            echo '<div style="background-color: white; border: 1px solid black; padding: 10px; margin: 10px;">';
            echo $msg;
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
            echo '</div>';
        } elseif (!$checkStudentId) {
            echo '<div style="background-color: white border: 1px solid black; padding: 10px; margin: 10px;">';
            echo '<p>Please provide a valid 9-digit student ID.</p>';
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
            echo '</div>';
        } else {
            
            $result = $database->execute("INSERT INTO phpusers(student_name,student_grade,student_id) VALUES('$student_name','$student_grade','$student_id')");
            if ($result) {
                echo '<div style="background-color: white; border: 1px solid black; padding: 10px; margin: 10px;">';
                echo "<p>Data added successfully.</p>";
                echo "<a href='view.php'>View Result</a>";
                echo '</div>';
            }
        }
    }
    ?>
  </main>
</body>
<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Online Education. All rights reserved.</p>
    </div>
</footer>
</html>

