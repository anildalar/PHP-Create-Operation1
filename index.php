<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP QueryString</title>
    </head>
    <body>
        <?php 
            //1. Check if the QueryString Contains Data
            //Condition Checking

            //Syntax = Formula
            // $_GET['paramtername']

            //Statements

            if(isset($_GET['name'])){ //$_GET = Super Global Variable
                //True
                // echo 'yes Url contain paramter';
                //Single Line Comment


                echo $_GET['name'];
                echo $_GET['course'];

                $name = $_GET['name'];
                $course = $_GET['course'];
                $contact = $_GET['contact'];

                //1. Open DB Connection
                //mysqli_connect(hostname,MYSQL_Username,MYSQL_Password,DatabaseName)

                //1 ConnectionID
                //2. ConnectionLink
                //3. Connection Number
                $conn = mysqli_connect('localhost','root','','mydatabase_db');

                //2. Build the query
                //SQL Structered Query Language Query
                //INSERT INTO table_name (column1, column2, column3, ...)VALUES (value1, value2, value3, ...);
                $sql = "INSERT INTO students(student_name,student_course,student_contact)VALUES('$name','$course','$contact')";


                //3. Execute the query

                mysqli_query($conn,$sql);

                //4. Display the result

                echo 'Data Inserted Successfully';




                //5. Close DB Connection

                mysqli_close($conn);



            }else{
                //False
                echo 'No Parameter';
            }

         
        ?>
    </body>
</html>