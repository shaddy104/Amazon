<?php
    include("functions.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="I love to develop small features of a tools">
    <meta name="author" content="P. Shadrach Sudershan">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Reactive Scheduling Tool</title>

    

   
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Reactive Scheduling Tool</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              
              
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Atrops
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Reactive Scheduling
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  SSP
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Adhoc Confirmation
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reactive Scheduling Adhoc confirmation form</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
			
			<?php 
          
			  if(isset($_POST['submit'])){
				  $facility = $_POST['facility'];
				  $description = $_POST['description'];
				  $vrid = $_POST['vrid'];
				  $cpt = $_POST['cpt'];
				  $status = 'pending';
				  $query ="INSERT INTO `$facility` (`id`, `facility`, `description`, `vrid`, `cpt`, `status`, `date`) VALUES (NULL, '$facility', '$description', '$vrid', '$cpt', '$status', CURRENT_TIMESTAMP)";
				  
				  if(performQuery($query)){
					  
				  }
				  
				  $name = "ppsder";
				  
				  
				  $message = "Facility : $facility. \n $description. \n VRID : $vrid \n CPT : $cpt.";
				  
				  $to = "prashri@amazon.com, ppsder@amazon.com";

					$email_subject = "Transmitting RS new tool FUNCTION";

					$email_body = "You have received a new message from the user $name.\n".
											"Here is the message:\n\n $message".
				
				
				$headers = "From => shadrachid@gmail.com";
				


				mail($to,$email_subject,$email_body,$headers);
				
				
				  
				  
				  
			  }
					
			?>
		  
			<form method="post" class="col-md-6">
			  <div class="form-row">
				<div class="form-group col-md-12">
				  <label for="inputState">Facility Center</label>
				  <select name="facility" id="inputState" class="form-control">
					<option selected>alaska</option>
					<option>nsa</option>
					<option>india</option>
					<option>newze</option>
					<option>bhel</option>
					<option>doc</option>
					<option>na</option>
					<option>usa</option>
				  </select>
				</div>
				<div class="form-group col-md-12">
					<label for="inputAddress">Description</label>
					<input name="description" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				  </div>
			  </div>
			  
			  
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">VRID</label>
				  <input name="vrid" type="text" class="form-control" id="inputCity">
				</div>
				
				<div class="form-group col-md-2">
				  <label for="inputZip">CPT</label>
				  <input name="cpt" type="text" class="form-control" id="inputZip">
				</div>
			  </div>
			  
			  <button name="submit" type="submit" class="btn btn-primary">Request Confirmation</button>
			</form>
			
          <canvas class="my-4 w-50 col-md-6" id="myChart" width="100" height="50"></canvas>

          
        </main>
      </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
