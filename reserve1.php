<html>
<head>
<title>
Bus Booking Portal
</title>
</head>
<body>
<h3>Where to ? </h3>
<br><br>
<form action="reserve.php" method="post">
<h3>From :</h3>
<select name ="from">
<option value="ISBT_DELHI">ISBT_DELHI</option>
<option value="FARIDABAD">FARIDABAD</option>
<option value="AGRA">AGRA</option>
<option value="KARNAL">KARNAL</option>
<option value="JAMMU">JAMMU</option>
</select>
<h3>To</h3>
<select name ="to">
<option value="ISBT_DELHI">ISBT_DELHI</option>
<option value="FARIDABAD">FARIDABAD</option>
<option value="AGRA">AGRA</option>
<option value="KARNAL">KARNAL</option>
<option value="JAMMU">JAMMU</option>
</select>
<h3>Date : </h3>
<input type="date" name="dat" id="date" value="<?php echo date('y-m-d'); ?>">
<br>
<br>
<input type="submit" value="Submit" name="sub">
</form<
</body>
</html>