<?php
    class DbConn {
        private $host = 'localhost';
        private $nama = 'root';
        private $password = '';
        private $db_name = 'ormawa';
        private $conn;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->nama, $this->password, $this->db_name) or die('Connection failed.');
        }

        public function getConn() {
            return $this->conn;
        }
    }

    class Users {
        private $table = 'users';

        public function __construct($nama = null, $password = null) {
            $this->nama = $nama;
            $this->password = $password;

            $conn = new DbConn();

            $this->conn = $conn->getConn();
        }

        public function insert() {
            $sql = 'INSERT INTO '.$this->table.' (nama, password) 
                    VALUES ("'.$this->nama.'", "'.$this->password.'")';
            
            return mysqli_query($this->conn, $sql);
        }

        public function read() {}

        public function update($id) {
            $sql = 'UPDATE '.$this->table.' SET nama = "'.$this->nama.'", 
                    password = "'.$this->password.'" WHERE id_login = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function delete($id) {
            $sql = 'DELETE FROM '.$this->table.' WHERE id_login = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function last_id() {
            return mysqli_insert_id($this->conn);
        }
    }

    class pdfakun {
        private $table = 'tbl_login';

        public function __construct($nama = null, $foto = null, $status = null, $username = null) {
            $conn = new DbConn();
            
            $this->conn = $conn->getConn();

            // $this->id = $id;
            $this->nama = $nama;
            $this->foto = $foto;
            $this->status = $status;
            $this->username = $username;
        }

        public function insert() {  
            $user = new Users($this->user, $this->password);

            $user->insert();
            
            $sql = 'INSERT INTO '.$this->table.' (nama, foto, status,username,email,status) 
            VALUES ("'.$this->nama.'", "'.$this->foto.'", "'.$this->status.'","'.$this->username.'","'.$user->last_id().'")';

            return mysqli_query($this->conn, $sql);
        }

        public function read() {
            $sql = 'SELECT * FROM '.$this->table;

            $result = mysqli_query($this->conn, $sql);

            $data = [];

            while($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }

            return $data;
        }
		
		public function read_spec_data($id){
			$sql = 'SELECT * FROM '.$this->table;
            $result = mysqli_query($this->conn, $sql);
            $data = mysqli_fetch_object($result);
			return $data;
		}
		
        
    }
?>