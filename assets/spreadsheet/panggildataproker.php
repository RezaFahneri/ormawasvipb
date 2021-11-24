<?php
    class DbConn {
        private $host = 'localhost';
        private $bulan = 'root';
        private $password = '';
        private $db_name = 'ormawa';
        private $conn;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->bulan, $this->password, $this->db_name) or die('Connection failed.');
        }

        public function getConn() {
            return $this->conn;
        }
    }

    class Users {
        private $table = 'users';

        public function __construct($bulan = null, $password = null) {
            $this->bulan = $bulan;
            $this->password = $password;

            $conn = new DbConn();

            $this->conn = $conn->getConn();
        }

        public function insert() {
            $sql = 'INSERT INTO '.$this->table.' (bulan, password) 
                    VALUES ("'.$this->bulan.'", "'.$this->password.'")';
            
            return mysqli_query($this->conn, $sql);
        }

        public function read() {}

        public function update($id) {
            $sql = 'UPDATE '.$this->table.' SET bulan = "'.$this->bulan.'", 
                    password = "'.$this->password.'" WHERE id_users = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function delete($id) {
            $sql = 'DELETE FROM '.$this->table.' WHERE id_users = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function last_id() {
            return mysqli_insert_id($this->conn);
        }
    }

    class proker {
        private $table = 'tbl_proker';

        public function __construct($nama_ormawa = null, $bulan = null, $banyak_proker = null) {
            $conn = new DbConn();
            
            $this->conn = $conn->getConn();

            // $this->id = $id;
            $this->nama_ormawa = $nama_ormawa;
            $this->bulan = $bulan;
            $this->banyak_proker = $banyak_proker;
        }

        public function insert() {  
            $user = new Users($this->user, $this->password);

            $user->insert();
            
            $sql = 'INSERT INTO '.$this->table.' (nama_ormawa, bulan, banyak_proker) 
            VALUES ("'.$this->nama_ormawa.'", "'.$this->bulan.'", "'.$this->banyak_proker.'", "'.$user->last_id().'")';

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