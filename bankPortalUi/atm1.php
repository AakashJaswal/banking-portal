<!DOCTYPE html>
<html>
<style>
body{
	background-size: 1600px 900px;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
</style>
<h1><font color="red"><center><u>ATM Locator</u></h1></font>
<body background="atm.jpg">
<form action="location.php" method="post">
<p><center><font color="red">Enter the pin number: <input type="text" name="pin_no"><br><br></font>
<button class="button button3" type="submit" id="atm">Locate!</button><br><br>
</form>
</body>
</html>