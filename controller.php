<?php
$eid = $_POST['eid'];
$ename = $_POST['name'];
$phone = $_POST['phone'];
$gen = $_POST['gen'];
$email = $_POST['email'];
$dep = $_POST['department'];
$address = $_POST['addr'];


$option_fun = $_POST['func'];
$con = mysqli_connect('localhost', 'root', '', 'employe_db');

switch ($option_fun) {
    case 'save':
        // show($eid, $ename, $phone, $gen, $email, $dep, $address);
        save($con, $eid, $ename, $phone, $gen, $email, $dep, $address);
        break;
    case 'update':
        updateData($con, $eid, $ename, $phone, $gen, $email, $dep, $address);
        break;
    case 'delete':
        deleteData($con, $eid);
        break;

    case 'search':
        searchData($con, $eid);
        break;
    default:
        echo "Invalid function";
}

function save($con, $eid, $ename, $phone, $gen, $email, $dep, $address) {
    $query = "INSERT INTO emp (id, emp_name, emp_phone, emp_gender, emp_email, emp_dept, address) VALUES ('$eid', '$ename', '$phone', '$gen', '$email', '$dep', '$address')";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Upload Successful.....'); window.location='index.php'</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

function updateData($con, $eid, $ename, $phone, $gen, $email, $dep, $address) {
    $query = "UPDATE emp SET emp_name='$ename', emp_phone='$phone', emp_gender='$gen', emp_email='$email', emp_dept='$dep', address='$address' WHERE id='$eid'";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Update Successful.....'); window.location='index.php'</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

function deleteData($con, $eid) {
    $query = "DELETE FROM emp WHERE id='$eid'";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Delete Successful.....'); window.location='index.php'</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

function searchData($con, $eid) {
    // $eid = $_POST['eid'];
    $query = "SELECT * FROM emp WHERE id='$eid'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Employee ID: " . $row['id'] . "<br>";
            echo "Employee Name: " . $row['emp_name'] . "<br>";  
            echo "Phone no.: " . $row['emp_phone'] . "<br>";
            echo "Gender: " . $row['emp_gender'] . "<br>";
            echo "Email ID: " . $row['emp_email'] . "<br>";
            echo "Department: " . $row['emp_dept'] . "<br>";
            echo "Address: " . $row['address'] . "<br>";
        }
    } else {
        echo "No employee found with ID: $eid";
    }
    
}

function show($eid, $ename, $phone, $gen, $email, $dep, $address){

    echo "Employee ID: " . $eid . "<br>";
    echo "Employee Name: " . $ename . "<br>";  
    echo "Phone no.: " . $phone . "<br>";
    echo "Gender: " . $gen . "<br>";
    echo "Email ID: " . $email . "<br>";
    echo "Department: " . $dep . "<br>";
    echo "Address: " . $address . "<br>";
}

mysqli_close($con);
?>
