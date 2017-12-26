<?php require_once "app/validator/person_validator.php"; ?>

<?php
    switch($action){
        case "create":
            $person = array("name"=>"", "email"=>"");
            $personErr = array("name"=>"", "email"=>"");
            $msg = "";
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $person['name'] = trim($_POST['name']);
                $person['email'] = trim($_POST['email']);
                if(validatePersonForCreate($person, $personErr)==true){
                    if(addPerson($person)==true){
                        echo "<script>
                                alert('Record Created');
                                document.location='index.php?controller=person&action=retrieve';
                             </script>";
                        die();
                    }
                    else{
                        $msg = "Internal Error<hr/>";
                    }
                }
            }
            break;
          
            
        case "retrieve":
            $searchKey = $searchBy = "";  
            $searchBySelected = array("Any"=>null, "Name"=>null, "Email"=>null);
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $searchKey = trim($_POST['search']);
                $searchBy = $_POST['search_by'];
                $searchBySelected[$searchBy] = "selected";
                if($searchBy=="Name")
                    $persons = getPersonsByName($searchKey);
                else if($searchBy=="Email")
                    $persons = getPersonsByEmail($searchKey);
                else{
                    $persons = getPersonsByNameOrEmail($searchKey);
                }
            }
            else {
                $persons = getAllPersons();
            }
            break;
            
        
        case "detail":
            if(isset($_GET['id'])){
                $personId = trim($_GET['id']);
                $person = getPersonById($personId);
                if(isset($person)==false){
                    require_once "app/view/shared/error.php";
                    die();
                }
            }
            else{
                require_once "app/view/shared/error.php";
                die();
            }
            break;
           
            
        case "update":
            $personErr = array("name"=>"", "email"=>"");
            $msg = "";
            
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $person['id'] = trim($_POST['id']);
                $person['name'] = trim($_POST['name']);
                $person['email'] = trim($_POST['email']);
                if(validatePersonForUpdate($person, $personErr)==true){
                    if(editPerson($person)==true){
                        $msg = "Record Updated<hr/>";
                    }
                    else{
                        $msg = "Internal Error<hr/>";
                    }
                }
            }
            else if(isset($_GET['id'])){
                $person = getPersonById($_GET['id']);
                if(isset($person)==false){
                    require_once "app/view/shared/error.php";
                    die();
                }
            }
            break;
        
            
        case "delete":
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $personId = trim($_GET['id']);
                if(removePerson($personId)){
                    echo "<script>
                            alert('Record Deleted');
                            document.location='index.php?controller=person&action=retrieve';
                         </script>";
                    die();
                }
            }
            else if(isset($_GET['id'])){
                $personId = trim($_GET['id']);
                $person = getPersonById($personId);
                if(isset($person)==false){
                    require_once "app/view/shared/error.php";
                    die();
                }
            }            
            else{
                require_once "app/view/shared/error.php";
                die();
            }
            break;
    }
    
    require_once "app/view/$controller/$action"."_view.php";
?>