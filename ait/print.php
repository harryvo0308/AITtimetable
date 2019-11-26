<?php
include 'javascript.php';
include 'database.php';

  $sql = "select * from m_timetable";
                $stmtt = $conn->prepare($sql);
                $stmtt->execute();
                $resultss = $stmtt->fetchAll();
				$all_property = array();

  $sqltue = "select * from t_timetable";
                $stmttue = $conn->prepare($sqltue);
                $stmttue->execute();
                $resultstue = $stmttue->fetchAll();
      	$all_property = array();

  $sqlwed = "select * from w_timetable";
                $stmtwed = $conn->prepare($sqlwed);
                $stmtwed->execute();
                $resultswed = $stmtwed->fetchAll();
        $all_property = array();

  $sqlthus = "select * from th_timetable";
                $stmtthus = $conn->prepare($sqlthus);
                $stmtthus->execute();
                $resultsthus = $stmtthus->fetchAll();
        $all_property = array();

  $sqlfri = "select * from f_timetable";
                $stmtfri = $conn->prepare($sqlfri);
                $stmtfri->execute();
                $resultsfri = $stmtfri->fetchAll();
        $all_property = array();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Print Timetable</title>
</head>

<body>
   <!--Navbar -->
  <?php include 'navibar.php'; ?>
  <!--Navbar -->

   <!-- Body -->
  <div class="container" style="padding-bottom: 200px">
    <br>
    <!-- MONDAY -->
    <H1>Monday</H1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Group</th>
          <th scope="col">Room</th>
          <th scope="col">Subject</th>
          <th scope="col">Time</th>
          <th scope="col">Teacher</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
	  <?php foreach($resultss as $item){?>
	  <tr>
          <th scope="row">
                <?php
                $stmt = $conn->prepare("select * from groups WHERE G_ID={$item['Groups']}");
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                  ?>
                  <?php echo $row['G_Name']; ?>
                  <?php
                }
                ?>
          </th>
          <td>
		  <?php echo $item['Room'];?>
            </td>
          <td>
		   <?php echo $item['Subject'];?>
              </td>

           <td>
            <?php echo $item['Time'];?>
          </td>

          <td>
		   <?php echo $item['Teacher'];?>
              </td>
          <td>
              <?php echo $item['Semester'];?>
              </td>
        </tr>
		<?php } ?>
    </table>
      <a href="export.php?export=true"><input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Export"/></a>
      <br>
	<br>
    <!-- TUESDAY -->
    <H1>Tuesday</H1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Group</th>
          <th scope="col">Room</th>
          <th scope="col">Subject</th>
          <th scope="col">Time</th>
          <th scope="col">Teacher</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
      <?php foreach($resultstue as $item){?>
      <tr>
            <th scope="row">
                  <?php
                  $stmt = $conn->prepare("select * from groups WHERE G_ID={$item['Groups']}");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <?php echo $row['G_Name']; ?>
                    <?php
                  }
                  ?>
            </th>
            <td>
        <?php echo $item['Room'];?>
              </td>
            <td>
         <?php echo $item['Subject'];?>
                </td>

             <td>
              <?php echo $item['Time'];?>
            </td>

            <td>
         <?php echo $item['Teacher'];?>
                </td>
            <td>
                <?php echo $item['Semester'];?>
                </td>
          </tr>
      <?php } ?>
    </table>
      <a href="export.php?export1=true"><input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Export"/></a>
      <br>
	<br>
    <!-- WEDNESDAY -->
    <H1>Wednesday</H1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Group</th>
          <th scope="col">Room</th>
          <th scope="col">Subject</th>
          <th scope="col">Time</th>
          <th scope="col">Teacher</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
      <?php foreach($resultswed as $item){?>
      <tr>
            <th scope="row">
                  <?php
                  $stmt = $conn->prepare("select * from groups WHERE G_ID={$item['Groups']}");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <?php echo $row['G_Name']; ?>
                    <?php
                  }
                  ?>
            </th>
            <td>
        <?php echo $item['Room'];?>
              </td>
            <td>
         <?php echo $item['Subject'];?>
                </td>

             <td>
              <?php echo $item['Time'];?>
            </td>

            <td>
         <?php echo $item['Teacher'];?>
                </td>
            <td>
                <?php echo $item['Semester'];?>
                </td>
          </tr>
      <?php } ?>
    </table>
      <a href="export.php?export2=true"><input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Export"/></a>
      <br>
	<br>
    <!-- THUSDAY -->
    <H1>Thusday</H1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Group</th>
          <th scope="col">Room</th>
          <th scope="col">Subject</th>
          <th scope="col">Time</th>
          <th scope="col">Teacher</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
      <?php foreach($resultsthus as $item){?>
      <tr>
            <th scope="row">
                  <?php
                  $stmt = $conn->prepare("select * from groups WHERE G_ID={$item['Groups']}");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <?php echo $row['G_Name']; ?>
                    <?php
                  }
                  ?>
            </th>
            <td>
        <?php echo $item['Room'];?>
              </td>
            <td>
         <?php echo $item['Subject'];?>
                </td>

             <td>
              <?php echo $item['Time'];?>
            </td>

            <td>
         <?php echo $item['Teacher'];?>
                </td>
            <td>
                <?php echo $item['Semester'];?>
                </td>
          </tr>
      <?php } ?>
    </table>
      <a href="export.php?export3=true"><input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Export"/></a>
      <br>
	<br>
    <!-- FRIDAY -->
    <H1>Friday</H1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Group</th>
          <th scope="col">Room</th>
          <th scope="col">Subject</th>
          <th scope="col">Time</th>
          <th scope="col">Teacher</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
      <?php foreach($resultsfri as $item){?>
      <tr>
            <th scope="row">
                  <?php
                  $stmt = $conn->prepare("select * from groups WHERE G_ID={$item['Groups']}");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <?php echo $row['G_Name']; ?>
                    <?php
                  }
                  ?>
            </th>
            <td>
        <?php echo $item['Room'];?>
              </td>
            <td>
         <?php echo $item['Subject'];?>
                </td>

             <td>
              <?php echo $item['Time'];?>
            </td>

            <td>
         <?php echo $item['Teacher'];?>
                </td>
            <td>
                <?php echo $item['Semester'];?>
                </td>
          </tr>
      <?php } ?>
    </table>
      <a href="export.php?export1=true"><input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Export"/></a>
      <br>
	</div>
</body>
<!-- Body -->

<!-- Footer -->
<?php include 'footer.php';  ?>
<!-- Footer -->
</html>
