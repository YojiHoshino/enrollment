<?php
    include('db.php');
    include('function.php');
    if(isset($_POST["user_id"]))
    {
        $output = array();
        $statement = $connection->prepare(
            "SELECT * FROM student 
            WHERE id = '".$_POST["user_id"]."' 
            LIMIT 1"
        );
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $output["studentnum"] = $row["studentnum"];
            $output["first_name"] = $row["first_name"];
            $output["last_name"] = $row["last_name"];
            $output["middle_name"] = $row["middle_name"];
            $output["email"] = $row["email"];
            $output["gender"] = $row["gender"];
            $output["section"] = $row["section"];
            $output["lrn"] = $row["lrn"];
            $output["birthdate"] = $row["birthdate"];
            $output["address"] = $row["address"];
            $output["parent_contact"] = $row["parent_contact"];
            if($row["image"] != '')
            {
                $output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
            }
            else
            {
                $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
            }
        }
        echo json_encode($output);
    }
?>
