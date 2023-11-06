
    <?php
    $da="localhost";
    $dd="root";
    $pass="";
    $mn="rakesh";
    $conn=mysqli_connect($da,$dd,$pass,$mn);
    if($conn)
    {
        echo"connection succseful";
    }
    else
    {
            echo"someting went";
        }
        mysqli_query($conn,"insert into `student` (name,age,class) values ('yashu','19','bca')");
        ?>