<?php 
    require "connection.php";

    class User {
        private $Email;
        private $Username;
        private $Password;

        public function login($Email, $Password) {
            require "connection.php";
        }
    }

    class Admin extends User {

        public function login($Email, $Password) {
            require "connection.php";
    
            $rs = $mysqli->query("SELECT * FROM users WHERE email = '$Email' and password = '$Password'");

            if(mysqli_num_rows($rs)==1) {
                $row = mysqli_fetch_assoc($rs);

                session_start();
                    $_SESSION['username'] = $row['username']; 
                    $_SESSION['email'] = $row['email']; 
                    header("location:admin.php");
            } else {
                header("location:login.php?error=Password atau Email salah!");
            }
        }

        public function logout() {
            session_start();

            session_destroy();
        }
    }

    class Berita {
        private $Id;
        private $Title;
        private $Description;
        private $Category;
        private $Image;
        private $Username;

        public function addBerita($Id, $Title, $Description, $Category, $Image) {
            session_start();
            require "connection.php";

            $rs = $mysqli->query("INSERT INTO news VALUES ('$Id', '$Title', '$Description', '$Category', '$Image', '$_SESSION[username]')");
        }

        public function updateBerita($Id, $Title, $Description, $Category, $Image) {
            require "connection.php";

            $rs = $mysqli->query("UPDATE news SET title = '$Title', description = '$Description', category = '$Category', image = '$Image' WHERE id = '$Id'");
        }

        public function getBerita($Id) {
            require "connection.php";

            $rs = $mysqli->query("SELECT * FROM news WHERE id = '$Id'");
            $x = $rs->fetch_array();

            return $x;
        }

        public function deleteBerita($Id) {
            require "connection.php";

            $rs = $mysqli->query("DELETE FROM news WHERE id = '$Id'");
        }
    }
?>