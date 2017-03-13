<!DOCTYPE html>
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
}
</style>
<html>
<h1><center><u>Locker Management</u></h1>
<body background="lock.jpg">
<form action="lockercheck.php" method="post">

<p>No of free lockers available is: </p>

<br><br><br><br><br><br><br><br>
<button class="button button3" type="submit" id="atm">Check!</button><br><br>

</body>
</html>