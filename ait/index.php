<?php
include 'javascript.php';
include 'database.php';
include 'insert.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Timetable</title>
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
      <form action='index.php' method='post'>
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
      <tbody>
        <tr>
          <th scope="row">
            <select id="group" name="group" class="group mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Group</option>
                <?php
                $stmt = $conn->prepare("select * from groups");
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                  ?>
                  <option value="<?php echo $row['G_ID']; ?>"><?php echo $row['G_Name']; ?></option>
                  <?php
                }
                ?>
                </div>
            </select>
          </th>
          <td>
            <select name="room" id="room" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Room</option>
                <?php
                $sql = "select R_Number from room";
                $stmtt = $conn->prepare($sql);
                $stmtt->execute();
                $resultss = $stmtt->fetchAll();
                foreach ($resultss as $outputt) { ?>
                  <option class="dropdown-item"><?php echo $outputt["R_Number"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select id="subject" name="subject" class="subject mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Subject</option>
              </div>
            </select></td>

           <td>
            <select name="time" id="time" onchange="timeselect()" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Time</option>
                <option value="9:00:00">9am </option>
                <option value="11:00:00">11am </option>
                <option value="13:00:00">1pm </option>
                <option value="15:00:00">3pm </option>
                <option value="17:00:00">5pm </option>
                <option value="19:00:00">7pm </option>
              </div>
            </select>
            <p id="timeselect"></p>
          </td>

          <td><select name="teacher" id="teacher" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Teacher</option>
                <?php
                $sql = "select T_Name from teacher";
                $stmtteacher = $conn->prepare($sql);
                $stmtteacher->execute();
                $resultsteacher = $stmtteacher->fetchAll();
                foreach ($resultsteacher as $outputteacher) { ?>
                  <option class="dropdown-item"><?php echo $outputteacher["T_Name"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select name="semester" id="semester" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Semester</option>
                <?php
                $sql = "select Semester from semester";
                $stmtsem = $conn->prepare($sql);
                $stmtsem->execute();
                $resultssem = $stmtsem->fetchAll();
                foreach ($resultssem as $outputsem) { ?>
                  <option class="dropdown-item"><?php echo $outputsem["Semester"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
        </tr>

      </tbody>
    </table>
    <input type="submit" name="insert" id="action" class="btn btn-outline-warning" value="Save" />
      </form>

      <H1>Tuesday</H1>
        <form action='index.php' method='post'>
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
        <tbody>
          <tr>
            <th scope="row">
              <select id="grouptue" name="grouptue" class="grouptue mdb-select browser-default custom-select action">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Group</option>
                  <?php
                  $stmt = $conn->prepare("select * from groups");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <option value="<?php echo $row['G_ID']; ?>"><?php echo $row['G_Name']; ?></option>
                    <?php
                  }
                  ?>
                  </div>
              </select>
            </th>
            <td>
              <select name="roomtue" id="roomtue" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Room</option>
                  <?php
                  $sql = "select R_Number from room";
                  $stmtt = $conn->prepare($sql);
                  $stmtt->execute();
                  $resultss = $stmtt->fetchAll();
                  foreach ($resultss as $outputt) { ?>
                    <option class="dropdown-item"><?php echo $outputt["R_Number"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
            <td><select id="subjecttue" name="subjecttue" class="subjecttue mdb-select browser-default custom-select action">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Subject</option>
                </div>
              </select></td>

             <td>
              <select name="timetue" id="timetue" onchange="timeselect()" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Time</option>
                  <option value="9:00:00">9am </option>
                  <option value="11:00:00">11am </option>
                  <option value="13:00:00">1pm </option>
                  <option value="15:00:00">3pm </option>
                  <option value="17:00:00">5pm </option>
                  <option value="19:00:00">7pm </option>
                </div>
              </select>
              <p id="timeselect"></p>
            </td>

            <td><select name="teachertue" id="teachertue" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Teacher</option>
                  <?php
                  $sql = "select T_Name from teacher";
                  $stmtteacher = $conn->prepare($sql);
                  $stmtteacher->execute();
                  $resultsteacher = $stmtteacher->fetchAll();
                  foreach ($resultsteacher as $outputteacher) { ?>
                    <option class="dropdown-item"><?php echo $outputteacher["T_Name"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
            <td><select name="semestertue" id="semestertue" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Semester</option>
                  <?php
                  $sql = "select Semester from semester";
                  $stmtsem = $conn->prepare($sql);
                  $stmtsem->execute();
                  $resultssem = $stmtsem->fetchAll();
                  foreach ($resultssem as $outputsem) { ?>
                    <option class="dropdown-item"><?php echo $outputsem["Semester"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
          </tr>
        </tbody>
      </table>
      <input type="submit" name="inserttue" id="action" class="btn btn-outline-warning" value="Save" />
      </form>

      <H1>Wednesday</H1>
      <form action='index.php' method='post'>
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
      <tbody>
        <tr>
          <th scope="row">
            <select id="groupwed" name="groupwed" class="groupwed mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Group</option>
                <?php
                $stmt = $conn->prepare("select * from groups");
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                  ?>
                  <option value="<?php echo $row['G_ID']; ?>"><?php echo $row['G_Name']; ?></option>
                  <?php
                }
                ?>
                </div>
            </select>
          </th>
          <td>
            <select name="roomwed" id="roomwed" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Room</option>
                <?php
                $sql = "select R_Number from room";
                $stmtt = $conn->prepare($sql);
                $stmtt->execute();
                $resultss = $stmtt->fetchAll();
                foreach ($resultss as $outputt) { ?>
                  <option class="dropdown-item"><?php echo $outputt["R_Number"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select id="subjectwed" name="subjectwed" class="subjectwed mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Subject</option>
              </div>
            </select></td>

           <td>
            <select name="timewed" id="timewed" onchange="timeselect()" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Time</option>
                <option value="9:00:00">9am </option>
                <option value="11:00:00">11am </option>
                <option value="13:00:00">1pm </option>
                <option value="15:00:00">3pm </option>
                <option value="17:00:00">5pm </option>
                <option value="19:00:00">7pm </option>
              </div>
            </select>
            <p id="timeselect"></p>
          </td>

          <td><select name="teacherwed" id="teacherwed" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Teacher</option>
                <?php
                $sql = "select T_Name from teacher";
                $stmtteacher = $conn->prepare($sql);
                $stmtteacher->execute();
                $resultsteacher = $stmtteacher->fetchAll();
                foreach ($resultsteacher as $outputteacher) { ?>
                  <option class="dropdown-item"><?php echo $outputteacher["T_Name"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select name="semesterwed" id="semesterwed" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Semester</option>
                <?php
                $sql = "select Semester from semester";
                $stmtsem = $conn->prepare($sql);
                $stmtsem->execute();
                $resultssem = $stmtsem->fetchAll();
                foreach ($resultssem as $outputsem) { ?>
                  <option class="dropdown-item"><?php echo $outputsem["Semester"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
        </tr>
      </tbody>
      </table>
      <input type="submit" name="insertwed" id="action" class="btn btn-outline-warning" value="Save" />
      </form>

      <H1>Thusday</H1>
        <form action='index.php' method='post'>
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
        <tbody>
          <tr>
            <th scope="row">
              <select id="groupthus" name="groupthus" class="groupthus mdb-select browser-default custom-select action">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Group</option>
                  <?php
                  $stmt = $conn->prepare("select * from groups");
                  $stmt->execute();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    ?>
                    <option value="<?php echo $row['G_ID']; ?>"><?php echo $row['G_Name']; ?></option>
                    <?php
                  }
                  ?>
                  </div>
              </select>
            </th>
            <td>
              <select name="roomthus" id="roomthus" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Room</option>
                  <?php
                  $sql = "select R_Number from room";
                  $stmtt = $conn->prepare($sql);
                  $stmtt->execute();
                  $resultss = $stmtt->fetchAll();
                  foreach ($resultss as $outputt) { ?>
                    <option class="dropdown-item"><?php echo $outputt["R_Number"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
            <td><select id="subjectthus" name="subjectthus" class="subjectthus mdb-select browser-default custom-select action">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Subject</option>
                </div>
              </select></td>

             <td>
              <select name="timethus" id="timethus" onchange="timeselect()" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Time</option>
                  <option value="9:00:00">9am </option>
                  <option value="11:00:00">11am </option>
                  <option value="13:00:00">1pm </option>
                  <option value="15:00:00">3pm </option>
                  <option value="17:00:00">5pm </option>
                  <option value="19:00:00">7pm </option>
                </div>
              </select>
              <p id="timeselect"></p>
            </td>

            <td><select name="teacherthus" id="teacherthus" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Teacher</option>
                  <?php
                  $sql = "select T_Name from teacher";
                  $stmtteacher = $conn->prepare($sql);
                  $stmtteacher->execute();
                  $resultsteacher = $stmtteacher->fetchAll();
                  foreach ($resultsteacher as $outputteacher) { ?>
                    <option class="dropdown-item"><?php echo $outputteacher["T_Name"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
            <td><select name="semesterthus" id="semesterthus" class="mdb-select browser-default custom-select">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <option value="" disabled selected>Select Semester</option>
                  <?php
                  $sql = "select Semester from semester";
                  $stmtsem = $conn->prepare($sql);
                  $stmtsem->execute();
                  $resultssem = $stmtsem->fetchAll();
                  foreach ($resultssem as $outputsem) { ?>
                    <option class="dropdown-item"><?php echo $outputsem["Semester"]; ?></option>
                  <?php } ?>
                </div>
              </select></td>
          </tr>
        </tbody>
      </table>
      <input type="submit" name="insertthus" id="action" class="btn btn-outline-warning" value="Save" />
      </form>

      <H1>Friday</H1>
      <form action='index.php' method='post'>
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
      <tbody>
        <tr>
          <th scope="row">
            <select id="groupfri" name="groupfri" class="groupfri mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Group</option>
                <?php
                $stmt = $conn->prepare("select * from groups");
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                  ?>
                  <option value="<?php echo $row['G_ID']; ?>"><?php echo $row['G_Name']; ?></option>
                  <?php
                }
                ?>
                </div>
            </select>
          </th>
          <td>
            <select name="roomfri" id="roomfri" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Room</option>
                <?php
                $sql = "select R_Number from room";
                $stmtt = $conn->prepare($sql);
                $stmtt->execute();
                $resultss = $stmtt->fetchAll();
                foreach ($resultss as $outputt) { ?>
                  <option class="dropdown-item"><?php echo $outputt["R_Number"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select id="subjectfri" name="subjectfri" class="subjectfri mdb-select browser-default custom-select action">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Subject</option>
              </div>
            </select></td>

           <td>
            <select name="timefri" id="timefri" onchange="timeselect()" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Time</option>
                <option value="9:00:00">9am </option>
                <option value="11:00:00">11am </option>
                <option value="13:00:00">1pm </option>
                <option value="15:00:00">3pm </option>
                <option value="17:00:00">5pm </option>
                <option value="19:00:00">7pm </option>
              </div>
            </select>
            <p id="timeselect"></p>
          </td>

          <td><select name="teacherfri" id="teacherfri" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Teacher</option>
                <?php
                $sql = "select T_Name from teacher";
                $stmtteacher = $conn->prepare($sql);
                $stmtteacher->execute();
                $resultsteacher = $stmtteacher->fetchAll();
                foreach ($resultsteacher as $outputteacher) { ?>
                  <option class="dropdown-item"><?php echo $outputteacher["T_Name"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
          <td><select name="semesterfri" id="semesterfri" class="mdb-select browser-default custom-select">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option value="" disabled selected>Select Semester</option>
                <?php
                $sql = "select Semester from semester";
                $stmtsem = $conn->prepare($sql);
                $stmtsem->execute();
                $resultssem = $stmtsem->fetchAll();
                foreach ($resultssem as $outputsem) { ?>
                  <option class="dropdown-item"><?php echo $outputsem["Semester"]; ?></option>
                <?php } ?>
              </div>
            </select></td>
        </tr>
      </tbody>
      </table>
      <input type="submit" name="insertfri" id="action" class="btn btn-outline-warning" value="Save" />
      </form>
    </div>

</body>
<!-- Body -->

<!-- Footer -->
<?php include 'footer.php';  ?>
<!-- Footer -->
</html>
