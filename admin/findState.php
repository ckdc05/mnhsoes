

<?php $country=$_GET['country'];
require "../connect.php";
$query="SELECT * FROM avesection WHERE level='$country'";
$result=mysqli_query($link,$query);

?>
<select name="state" class="ed">
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?php echo $row['section']?>"><?php echo $row['section']?></option>
<?php } ?>
</select>
