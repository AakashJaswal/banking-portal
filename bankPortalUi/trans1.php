<!DOCTYPE html>
<style>
body{
	background-size: 1400px 600px;
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
}
</style>
<html>
<h1><center><u><font color="red">Transfer Money</u></h1></font>
<body background="trans.jpg">
<form action="checktrans.php" method="post">
<p><font color="red">Enter the amount to be transferred: </font><input type="text" name="money">
<p><font color="red">Enter the account number the money is to be transferred to: </font><input type="text" name="rece"><br><br>
<button class="button button3" type="submit" value="Transfer">Transfer!</button>
</body>
</html>