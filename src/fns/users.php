<?php include('config/config.php');
    function opendb(){
        global $config;
        $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
        if ($db->connect_error > 0) {
            printf("Connect failed: %s\n", $db->connect_error);
            exit();
        }
        else{
            return $db;
        }
    }
    
    function checkuname($new_uname){
        $db = opendb();
        $stmt = "SELECT user_name FROM Users WHERE user_name='".$new_uname."'";
        if(!$result = $db->query($stmt)){
            return false;
        }
        else{
            return true;
        }
    }
        
    function addUser($user_name, $email, $gender, $password, $pf_name){
        $db = opendb();    
        $stmt = $db->prepare("INSERT INTO users(user_name, email, gender, password, pf_name) VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss',$user_name, $email, $gender, $password, $pf_name);
        if ($stmt->execute() === TRUE) {
            echo "Record created successfully";
        } 
        else {
            echo "Error creating record: " . mysqli_error($db);
        }

        $stmt->close();
        return getUserId($user_name);
    }
    function getUserId($uname){
        $db = opendb(); 
        $stmt2 = "SELECT * FROM users WHERE user_name = '$uname' ";
        if(!$result = $db->query($stmt2)){
            die('There was an error running the query [' . $db->error . ']');
        }   

        $row = $result->fetch_assoc();
        return $row['uid'];
    }
    function loginCheck($uname, $password){
        $db = opendb();
        $result= $db->query("SELECT * from users WHERE user_name='$uname' and password='$password' ");
        if(mysqli_num_rows($result)==1){
            $row = $result->fetch_assoc();
            return $row['uid'];
        }
        else{
            return false;
        }
    }
?>