<?php
    include('db.php');
    include('function.php');
    if(isset($_POST["operation"]))
    {
        if($_POST["operation"] == "Add")
        {
            $image = '';
            if($_FILES["user_image"]["name"] != '')
            {
                $image = upload_image();
            }
            $statement = $connection->prepare("
                INSERT INTO student (studentnum, first_name, last_name, middle_name, email, gender, section, lrn, birthdate, address, parent_contact, image) 
                VALUES (:studentnum, :first_name, :last_name, :middle_name, :email, :gender, :section, :lrn, :birthdate, :address, :parent_contact, :image)
            ");
            $result = $statement->execute(
                array(
                    ':studentnum'   =>  $_POST["studentnum"],
                    ':first_name'   =>  $_POST["first_name"],
                    ':last_name'    =>  $_POST["last_name"],
                    ':middle_name'  =>  $_POST["middle_name"],
                    ':email'        =>  $_POST["email"],
                    ':gender'       =>  $_POST["gender"],
                    ':section'      =>  $_POST["section"],
                    ':lrn'          =>  $_POST["lrn"],
                    ':birthdate'    =>  $_POST["birthdate"],
                    ':address'      =>  $_POST["address"],
                    ':parent_contact'      =>  $_POST["parent_contact"],
                    ':image'        =>  $image
                )
            );
            if(!empty($result))
            {
                echo 'Data Inserted';
            }
        }
        if($_POST["operation"] == "Edit")
        {
            $image = '';
            if($_FILES["user_image"]["name"] != '')
            {
                $image = upload_image();
            }
            else
            {
                $image = $_POST["hidden_user_image"];
            }
            $statement = $connection->prepare(
                "UPDATE student 
                SET studentnum = :studentnum, first_name = :first_name, last_name = :last_name, middle_name = :middle_name, email = :email, gender = :gender, section = :section, lrn = :lrn, birthdate = :birthdate, address = :address, parent_contact = :parent_contact, image = :image  
                WHERE id = :id
                "
            );
            $result = $statement->execute(
                array(
                    ':studentnum'   =>  $_POST["studentnum"],
                    ':first_name'   =>  $_POST["first_name"],
                    ':last_name'    =>  $_POST["last_name"],
                    ':middle_name'  =>  $_POST["middle_name"],
                    ':email'        =>  $_POST["email"],
                    ':gender'       =>  $_POST["gender"],
                    ':section'      =>  $_POST["section"],
                    ':lrn'          =>  $_POST["lrn"],
                    ':birthdate'    =>  $_POST["birthdate"],
                    ':address'      =>  $_POST["address"],
                    ':parent_contact'    =>  $_POST["parent_contact"],
                    ':image'        =>  $image,
                    ':id'           =>  $_POST["user_id"]
                )
            );
            if(!empty($result))
            {
                echo 'Data Updated';
            }
        }
    }
?>
