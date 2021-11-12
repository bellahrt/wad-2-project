<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';
    date_default_timezone_set('Asia/Singapore');
    $username = $_POST["username"]; 
    if ( strlen($username) == 0 ) {
        $errors[] = "Username cannot be empty nor blank.";
    }else{


        $calories = $_POST['calorie'];
        $protein = $_POST['protein'];
        $carbs = $_POST['carbohydrate'];
        $nutritionCount =array("Calories"=>$calories, "Protein"=>$protein, "Carbohydrates"=>$carbs);
        //        descriptions: {"Calories":values.Calories, "Protein":values.Protein, "Carbohydrates":values.Carbohydrates},

        $obj=(object)$nutritionCount;

        if( isset($_POST['foodName']) && isset($_POST['foodName'])) {
            $foodName = $_POST['foodName'];
            $date=date("Y-m-d H:i:s");
            // $starts = ;
            // $ends = ;
            $className = 'fc-bg-default';
            $icon = 'circle';
            //<input type="hidden" style="display:none;" name="foodDescription" value="${{"Calories":(response.hits[i].recipe.calories/ response.hits[i].recipe.yield).toFixed(0), "Protein":(response.hits[i].recipe.totalNutrients.PROCNT.quantity/ response.hits[i].recipe.yield).toFixed(0), "Carbohydrates":(response.hits[i].recipe.totalNutrients.CHOCDF.quantity/ response.hits[i].recipe.yield).toFixed(0)}}">

            $foodDescription= "{\"Calories\":\"{$calories}\",\"Protein\":\"{$protein}\",\"Carbohydrates\":\"{$carbs}\"}";
            //echo $name." ".$lastName; // Outputs John Travolta
            echo$foodDescription;
            $new_user = new calender($username, $foodName, $foodDescription, $date, $date, $className, $icon);
            $dao = new getcalenderDAO();
            
            $status = $dao->create($new_user);
            
            if($status==true){

                $message = "Food Calorie Submitted";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Location: ../foodCalorieTrackerPage.html");
                return;
            }else{
                $message = "Food Calorie Not Submitted";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Location: ../login/loginpage.php");
                return;
            }
        }

    }



?>