<!-- PHP code to establish connection with the localserver -->
<?php
session_start();  
if(isset($_POST["sub"]))  
{  
     $_SESSION["name"] = $_POST["name"];  
     $_SESSION['last_login_timestamp'] = time();  
     header("location:index.php");       
} 
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

// Username is root
$user = 'root';
$password = '';

$database = 'login';

// Server is localhost with
// port number 3306
$servername = 'localhost:3306';
$mysqli = new mysqli(
  $servername,
  $user,
  $password,
  $database
);

// Checking for connections
if ($mysqli->connect_error) {
  die('Connect Error (' .
    $mysqli->connect_errno . ') ' .
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM accounts ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Details</title>
  <!-- CSS FOR STYLING THE PAGE -->
  <style>
    table {
      margin: 0 auto;
      font-size: large;
      border: 1px solid black;
    }

    h1 {
      text-align: center;
      color: #006600;
      font-size: xx-large;
      font-family: 'Gill Sans', 'Gill Sans MT',
        ' Calibri', 'Trebuchet MS', 'sans-serif';
    }

    td {
      background-color: #E4F5D4;
      border: 1px solid black;
    }

    th,
    td {
      font-weight: bold;
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }

    td {
      font-weight: lighter;
    }
  </style>
</head>

<body>
  <div class="page-wrapper">
    <div class="content container-fluid">
      <section>
        <h1>Juniiors</h1>
        <!-- TABLE CONSTRUCTION -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title mb-2">Student Datatable</h1>
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="datatable table table-stripped">
                      <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Grade</th>
                      </tr>
                      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                      <?php
                      // LOOP TILL END OF DATA
                      while ($rows = $result->fetch_assoc()) {
                        ?>
                        <tr>
                          <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                          <td>
                            <?php echo $rows['id']; ?>
                          </td>
                          <td>
                            <?php echo $rows['username']; ?>
                          </td>
                          <td>
                            <?php echo $rows['email']; ?>
                          </td>
                          <td>
                            <?php echo $rows['Grade']; ?>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>

</html>
<?php
include('includes/footer.php');
?>