
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Data Entry</title>
</head>

<body style="background-color: blue;">
    <form action="controller.php" method="POST">
    <h1><center>Employee Data Entry Software</center></h1>
        <center>
            <div class="colored-box">
                <input type="text" id="input_data" name="eid" placeholder="Employee ID" ><br>
                <input type="text" id="input_data" name="name" placeholder="Name" ><br>
                <input type="number" id="input_data" name="phone" placeholder="Phone No."><br>
                <select id="gender" name="gen" >
                    <option value="" disabled selected hidden>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other" >Other</option>
                </select><br>
                <input type="email" id="input_data" name="email" placeholder="abc@gmail.com" ><br>
                <select id="gender" name="department" >
                    <option value="" disabled selected hidden>Select Department</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="FOOD TECNOLOGY">FOOD TECNOLOGY</option>
                    <option value="AI">AI</option>
                    <option value="IT">IT</option>
                    <option value="MACHIN LEARNING">MACHINE LEARNING</option>
                </select><br>
                <input type="text" id="input_data" name="addr" placeholder="Address" ><br>
                <div id="bt">
                    
                    <button id="b1" name="func" value="search">Search</button>
                    <button id="b2"name="func" value="save">Save</button>
                    <button id="b3"name="func" value="update">Update</button>
                    <button id="b4"name="func" value="delete">Delete</button>
                    <button id="b5" type="reset" value="Clear">Clear</button>
                </div>
            </div>
        </center>
    </form>
    <!-- <form action="search.php" method="post">
       </form> -->
       
</body>
</html>





