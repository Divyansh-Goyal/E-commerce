<?php
if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root');
    $username = $_POST['name'];
    $password = $_POST['password'];
    $sql = "select * from `admin_users` where `username` = '$name' and `password` = '$password";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        echo "Working";
    } 
    else{
        echo "Please enter correct details";
    }
}
?>

<form action="POST">
    
<table>
    <tr>
        <td>Name</td>
        <td><input type="textname" name="name"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit"></td>
    </tr>

</table>
</form>