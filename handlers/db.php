<?php
    if(!isset($_SESSION)){ 
        session_start(); 
    } 
require_once('connect.php');

function getAll($table){
    global $conn ;
    $getAll = "SELECT * FROM $table";
    $getAll = mysqli_query($conn,$getAll);
    $getAllData = mysqli_fetch_all($getAll,MYSQLI_ASSOC);

    return $getAllData;
}

function getWhere($table, $where){
    global $conn ;
    $getAll = "SELECT * FROM $table where $where ";
    $getAll = mysqli_query($conn,$getAll);
    $getAllData = mysqli_fetch_all($getAll,MYSQLI_ASSOC);

    return $getAllData;
}

function getIdByRoleName($table, $name){
    global $conn ;
    $getAll = "SELECT id FROM $table where name = '{$name}' ";
    $getAll = mysqli_query($conn,$getAll);
    $getId = mysqli_fetch_all($getAll,MYSQLI_ASSOC);
    
    return $getId;
}

function getNameByRoleId($table, $id){
    global $conn ;
    $getAll = "SELECT name FROM $table where id = '{$id}' ";
    $getAll = mysqli_query($conn,$getAll);
    $getId = mysqli_fetch_all($getAll,MYSQLI_ASSOC);
    
    return $getId;
}

function getOnce($table, $where=1){
    global $conn ;
    $getAll = "SELECT * FROM $table where $where ";
    $getAll = mysqli_query($conn,$getAll);
    $getAllData = mysqli_fetch_assoc($getAll);
    return $getAllData;
}

function getJoin($table1,$table2,$col){
    global $conn ;
    $table_=rtrim($table1,'s');
    $table_ .="_id";
    $getJoin = "SELECT $col
    FROM $table1
    INNER JOIN
    $table2
    
    ON $table1.id = $table2.$table_ ";

    $getJoin = mysqli_query($conn,$getJoin);
    $getJoinData = mysqli_fetch_all($getJoin,MYSQLI_ASSOC); 
    return $getJoinData;
}

function add($table , $cols , $values , $goTo="index.php"){
    global $conn ;
    $add= "INSERT INTO $table ($cols) VALUES ($values)" ; 
    
    if(mysqli_query($conn,$add)){
        $_SESSION['create']="$table added successfuly";
        header("location: ../$goTo");
    }else{
        echo mysqli_error($conn) ;
    }
}

/*if (isset($_POST['addProduct'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $expire_date=$_POST['expire_date'];
    $added_date=$_POST['added_date'];
    add("products","name ,price ,description,category,expire_date, added_date" ," '$name','$price','$description','$category','$expire_date','$added_date' ","addproduct.php");
}*/

if (isset($_POST['addCategory'])){
    $name=$_POST['name'];
    add("categorys","name" ," '$name' ","shop.php");
}


if (isset($_POST['addProduct'])){  
    $img=$_FILES['img'];
    $imgName=$img['name'];
    $imgTmpName=$img['tmp_name'];
    $t=time();
    $nowDate=date('y,m,d',$t);
    $randomString="$nowDate".hexdec(uniqid());
    $ext=pathinfo($imgName,PATHINFO_EXTENSION);
    $imgNewName ="$randomString.$ext";
    $imgNewNameDB="assets/img/products/";
    $imgNewNameDB .="$randomString.$ext";
    $name=$_POST['name'];
    $category_id =$_POST['category_id']; 
    $price=$_POST['price'];
    $description=$_POST['description'];
    $Expire_Date=$_POST['expire_date'];
    $owner_id = $_POST['owner_id'];
    $quantity = $_POST['quantity'];
    add("products","name, price, quantity, img, description, expire_date, owner_id ,category_id" ,
    " '$name','$price','$quantity ','$imgNewNameDB','$description','$Expire_Date','$owner_id' ,'$category_id' "
    ,"addproduct.php");
    move_uploaded_file($imgTmpName,"../assets/img/products/$imgNewName");
}

if (isset($_POST['addTeam'])){  
    $img=$_FILES['img'];
    $imgName=$img['name'];
    $imgTmpName=$img['tmp_name'];
    $t=time();
    $nowDate=date('y,m,d',$t);
    $randomString="$nowDate".hexdec(uniqid());
    $ext=pathinfo($imgName,PATHINFO_EXTENSION);
    $imgNewName ="$randomString.$ext";
    $imgNewNameDB="assets/img/products/";
    $imgNewNameDB .="$randomString.$ext";
    $name=$_POST['name'];
    $job =$_POST['job']; 
    add("team","img ,name, job" ,
    " '$imgNewNameDB','$name','$job' "
    ,"addTeam.php");
    move_uploaded_file($imgTmpName,"../assets/img/team/$imgNewName");
}

if (isset($_POST['addNews'])){  
    $title=$_POST['title'];
    $description=$_POST['description'];
    $created_at=$_POST['created_at'];
    $status=$_POST['status'];
    $img=$_FILES['img'];
    $imgName=$img['name'];
    $imgTmpName=$img['tmp_name'];
    $t=time();
    $nowDate=date('y,m,d',$t);
    $randomString="$nowDate".hexdec(uniqid());
    $ext=pathinfo($imgName,PATHINFO_EXTENSION);
    $imgNewName ="$randomString.$ext";
    $imgNewNameDB="assets/img/latest-news/";
    $imgNewNameDB .="$randomString.$ext";
    add("news","title, description, created_at, status, img" ,
    " '$title','$description','$created_at ','$status','$imgNewNameDB'"
    ,"addNews.php");
    move_uploaded_file($imgTmpName,"../assets/img/latest-news/$imgNewName");
}

function register($table , $cols , $values){
    global $conn ;
    $add= "INSERT INTO $table ($cols) VALUES ($values)" ; 
    
    if(mysqli_query($conn,$add)){
        $user = getWhere($table , "id = ".mysqli_insert_id($conn));
        
        $_SESSION['user'] = $user;
        
        header("location: ../index.php");
    }else{
        echo mysqli_error($conn) ;
    }
}


?>