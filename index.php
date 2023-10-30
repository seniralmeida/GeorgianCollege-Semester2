<!DOCTYPE html>
<html>
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
        <a class="custom-navbar-brand" href="index.php"><img src="img/logo.jpg" alt="header logo" width="200" height="160"></a>
        <div>
          <a href="index.php" class="custom-btn custom-btn-primary">Home</a>
          <a href="view.php" class="custom-btn custom-btn-primary">View</a>
        </div>
      </div>
    </nav>
  </header>
	<main class="custom-container">
	   <section class="custom-form-row row justify-content-center">
       <form method="post" action="add.php" class="custom-form col-md-6 col-md-offset-3">
           <p><input type="text" name="student_name" placeholder="Student Name"></p>
           <p><input type="text" name="student_id" placeholder="Student ID"></p>
           <p><input type="text" name="student_grade" placeholder="Student Grade"></p>
           <input class="custom-btn custom-btn-primary" type="submit" name="Submit" value="Add">
           <input class="custom-btn custom-btn-dark" type="reset" value="Clear">
       </form>
      </section>
     </main>
   </body>
   <footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Online Education. All rights reserved.</p>
    </div>
</footer>
</html>
