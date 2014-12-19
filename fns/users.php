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
    }
    
?>