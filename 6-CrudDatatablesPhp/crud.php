<?php
include 'libraries/validator.class.php';
session_start();

class Crud
{
    private $conn;

    public function __construct($host = "localhost", $dbname = "crud", $username = "root", $password = "")
    {
        //connect   database
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        //select action  
        if (isset($_GET['action'])) {


            //add action 
            if ($_GET['action'] === 'add') {
                $username = htmlentities($_POST['username']);
                $email =  htmlentities($_POST['email']);
                //validation 
                $validator = new validator(
                    [
                        "email" => ["require", "email"],
                        "username" => ["require"],

                    ],
                );


                if ($validator->test_validate() == true) {
                    //if not find errors  validation
                    $add = $this->Add($username, $email);
                    if ($add == true) {
                        //for show add message 
                        $add_message = '<div class="alert alert-success" role="alert">';
                        $add_message .= 'Record added successfully!';
                        $add_message .= '</div>';
                        $_SESSION['add_message'] = $add_message;
                        header("Location:index.php");
                    }
                } else {
                    $_SESSION['error_validation_messages'] = $validator->errors_validate();

                    header("Location:add.php ");
                }
            }


            //update action 
            if ($_GET['action'] === 'update' && isset($_GET['id'])) {
                $id = $_GET['id'];
                $username = htmlentities($_POST['username']);
                $email =  htmlentities($_POST['email']);
                //validation 
                $validator = new validator(
                    [
                        "email" => ["require", "email"],
                        "username" => ["require"],

                    ],
                );


                if ($validator->test_validate() == true) {
                    //if not find errors  validation
                    $add = $this->update($id, $username, $email);
                    if ($add == true) {
                        //for show add message 
                        $add_message = '<div class="alert alert-success" role="alert">';
                        $add_message .= 'Record updated successfully!';
                        $add_message .= '</div>';
                        $_SESSION['add_message'] = $add_message;
                        header("Location:index.php");
                    }
                } else {
                    $_SESSION['error_validation_messages'] = $validator->errors_validate();

                    header("Location:update.php?id=$id ");
                }
            }

            //delete action 

            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $delete = $this->delete($id);
                if ($delete == true) {
                    //for show add message 
                    $add_message = '<div class="alert alert-success" role="alert">';
                    $add_message .= 'Record deleted successfully!';
                    $add_message .= '</div>';
                    $_SESSION['delete_message'] = $add_message;
                    header("Location:index.php");
                }
            }
        }
    }

    public function Add($username, $email)
    {


        try {
            $stmt = $this->conn->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function update($id, $username, $email)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE users SET username = :username, email = :email WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);

            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function SelectById($id)
    {

        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


$crud = new Crud();
