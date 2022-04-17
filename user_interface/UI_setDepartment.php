
    <?php
      require_once('../php/classes/payrollClass.php');
      $pdo = $classPayroll->openConnection();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set Department | Symtech</title>
    </head>

    <style>
        body {
            background-color: #6C6169;
        }

        form {
            text-align: center;
            margin-top: 5px;       
        }

        label, input , textarea, select{
            margin-top: 10px;
        }

        button {
            margin-top: 8px;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, tr, th, td{
            border:1px solid black;
        }

        th, td{
            padding: 10px 20px;
        }
    </style>

    <body>

        <form action="../php/CP_search_dept.php" method="post">
            <div>
                <label>Search For Employee E_ID:</label>
                <input type="number" name="search_E_ID" id="search_E_ID" >
                <button type="submit" name="search_d" id="search_d">-></button>
            </div>
        </form>


        <form action="../php/CP_add_em.php" method="post">
            <div>
                <!-- NEED VALUE BELOW FOR CRIDENTIAL IN TBL_EMPLOYEE_DEPARTMENT_POSITION -->
                <label>E_ID:</label>
                <input disabled type="number" name="E_ID" id="E_ID" ><br>
                <label>First Name:</label>
                <input disabled type="text" name="fname" id="fname" ><br>
                <label>Last Name:</label>
                <input disabled type="text" name="lname" id="lname" ><br>
                <label>Email:</label>
                <input disabled type="email" name="email" id="email" ><br>
                <label>Contact:</label>
                <input disabled type="number" name="contact" id="contact" ><br>
                <label>Employee Dept:</label>
                <select name="dept" id="dept" required>
                    <option selected disabled value="">- Select -</option>
                    <option value="1">BSIT</option>
                    <option value="2">BSOA</option>
                    <option value="3">BSED</option>
                    <option value="4">BEED</option>
                    <option value="5">BSCRIM</option>
                    <option value="6">BSTM</option>
                </select> <br>
                <!-- <input list="dept1" name="dept" id="dept">
                <datalist id="dept1">
                    <option value="BSIT">
                    <option value="BSOA">
                    <option value="BSED">
                    <option value="BEED">
                    <option value="BSCRIM">
                    <option value="BSTM">
                </datalist> <br> -->
                <label>Position:</label>
                <select name="position" id="position" required>
                    <option selected disabled value="">- Select -</option>
                    <option value="Office Staff">Office Staff</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Security Guard">Security Guard</option>
                    <option value="Utility">Utility</option>
                    <option value="Dept. Head">Dept. Head</option>
                </select><br>
                <label>Dept. Assigned Date:</label>
                <input type="date" name="ass_date" id="ass_date" required><br>
            </div>

            <div>
                <button type="submit" name="setDepartment">Save</button>
                <button disabled="disabled">Update</button>
                <button disabled="disabled">Delete</button>
                <!-- <button type="submit" name="editEmployee">Update</button>
                <button type="submit" name="deleteEmployee">Delete</button> -->
            </div>
        </form>

            <br><br>   <hr>   <br><br>      

<!------------------------------------------ TABLE BELOW IS FOR SHOWING DATA FROM DATABASE ---------------------------------------->

        <div>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Assigned Date</th>
                    </tr>
                </thead>

                <tbody> 
                    <?php
                        $pdo = $classPayroll->openConnection();
                        $sql = "SELECT * FROM employee WHERE isActive = 1;";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            while($row = $stmt->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $row['employee_id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php //echo $row['dept_code']; ?></td>
                        <td><?php //echo $row['position_desc']; ?></td>
                        <td><?php //echo $row['date_assigned']; ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>