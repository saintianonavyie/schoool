
<?php 
        $msg = '';
        $msgClass = '';

    class Model {


        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "Educational";
        private $conn;

        public function __construct() {
            try {
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
            } catch (exceptioon $e) {
                echo "connection failed" . $e->getMessage();
            }
        }
        public function insert() {
            if(isset($_POST['submit'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])) {

                   
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        $address = $_POST['address'];


                        $query = "INSERT INTO records (name, email,mobile, address) VALUES ('$name', '$email', '$mobile', '$address')";

                        if ($sql = $this->conn->query($query)) {
                            
                            $msg = 'Record Updated Successfully';
                            $msgClass = 'alert-success';
                            //  echo "<script>alert('Records added succesfully');</script>";
                             echo "<script>window.location.href = 'db-index.php';</script>";
                        } else {
                        $msg = 'Record Updated failed';
                        $msgClass = 'alert-danger';
                        // echo "<script>alert('Failed');</script>";
                        echo "<script>window.location.href = 'db-index.php';</script>";
                            
                        }
                    }else {
                        
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'db-index.php';</script>";
                    }
                }
            } 
        }

        public function fetch() {
            $data = null;

            $query = "SELECT * FROM records";
            if ($sql = $this->conn->query($query)) {
               while ($row = mysqli_fetch_assoc($sql)) {
                   $data[] = $row;
               }
            } return $data;
        }

        public function delete($id) {
            
        $msg = '';
        $msgClass = '';

            $query = "DELETE FROM records where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                $msg = 'Record Updated Successfully';
                $msgClass = 'alert-success';
               return true;
            } else {
                $msg = 'Record Updated Failed';
                $msgClass = 'alert-danger';
                return false;
            }
        }

        public function fetch_single($id) {

            $data = null;
            $query = "SELECT * FROM records WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }

        public function edit($id) {
            $data = null;

            $query = "SELECT * FROM records WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            } 
            return $data;
        }
        
        public function update($data){

            $query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";
           
            if ($sql = $this->conn->query($query)) {
                $msg = 'Record Updated Successfully';
                $msgClass = 'alert-success';
               return true;
            } else {
                $msg = 'Record Updated Failed';
                $msgClass = 'alert-danger';
                return false;
            }
        }
    }

?>