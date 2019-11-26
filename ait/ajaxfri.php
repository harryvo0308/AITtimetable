<?php
include('database.php');
if($_POST['id'])
{
 $id=$_POST['id'];

 $stmt = $conn->prepare("SELECT * FROM subject WHERE G_ID=:id");
 $stmt->execute(array(':id' => $id));
 ?><option selected="selected">Select Subject</option><?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
        <option  value="<?php echo $row['Sub_Name']; ?>"><?php echo $row['Sub_Name']; ?></option>
        <?php
 }
}
?>
