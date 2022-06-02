<?php 
    session_start();
    require('function.php') ;
    require('db.php') ;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $data = $_SESSION;

        foreach($_POST as $key=>$value){
            $$key=validate($value);
        }

        //name validate 
        if(!required($name)){
            $errors[]= "plz input your name, name is required";
        }elseif(!minRange($name,3)){
            $errors[]= "name must be larger than 3 letters";

        }elseif(!maxRange($name,20)){
                $errors[]= "name must be less than 20 letters";
        }

        //email validate 
        if(!required($email)){
            $errors[]= "plz input your email, email is required";
        }elseif(!minRange($email,10)){
            $errors[]= "email must be larger than 4 letters";

        }elseif(!maxRange($email,60)){
                $errors[]= "email must be less than 60 letters";
        }/*elseif(!emailvalidate($email)){
            $errors[]= "plz enter valid email";
        }*/

        //password validate 
        if(!required($password)){
            $errors[]= "plz input your password, password is required";
        }elseif(!minRange($password,4)){
            $errors[]= "password must be larger than 4 letters and numbers";

        }elseif(!maxRange($password,30)){
            $errors[]= "password must be less than 30 letters and numbers";
        }

        //phone validate 
        if(!required($phone)){
            $errors[]= "plz input your phone, phone is required";
        }elseif(!minRange($phone,4)){
            $errors[]= "phone must be larger than 4 numbers";

        }elseif(!maxRange($phone,30)){
                $errors[]= "phone must be less than 21 numbers";
        }


        //country validate 
        if(!required($country)){
            $errors[]= "plz input your country, country is required";
        }elseif(!minRange($country,3)){
            $errors[]= "country must be larger than 3 letters";

        }elseif(!maxRange($country,21)){
                $errors[]= "country must be less than 21 letters";
        }
        //state validate 
        if(!required($state)){
            $errors[]= "plz input your state, state is required";
        }elseif(!minRange($state,3)){
            $errors[]= "state must be larger than 3 letters";

        }elseif(!maxRange($state,30)){
                $errors[]= "state must be less than 30 letters";
        }
        //zip validate 
        if(!required($zip)){
            $errors[]= "plz input your zip, zip is required";
        }elseif(!minRange($zip,3)){
            $errors[]= "zip must be larger than 3 numbers";

        }elseif(!maxRange($zip,21)){
                $errors[]= "zip must be less than 21 numbers";
        }
        //address validate 
        if(!required($address)){
            $errors[]= "plz input your address, address is required";
        }elseif(!minRange($address,3)){
            $errors[]= "address must be larger than 3 letters";

        }elseif(!maxRange($address,30)){
                $errors[]= "address must be less than 30 letters";
        }


        if(empty($errors)){
            register("customer","Name,Email,Password,Phone,Address,Country,Zip,State" ," '$name','$email','$password','$phone','$address','$country','$zip','$state' ");
        }else{
            $_SESSION['errors']=$errors ;
            header('location: ../register.php') ;
        }
}
    else {
        header('location: ../profile.php') ;
    }

?>