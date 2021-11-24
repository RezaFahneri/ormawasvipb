<?php
    class DbConn {
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $db_name = 'ormawa';
        private $conn;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name) or die('Connection failed.');
        }

        public function getConn() {
            return $this->conn;
        }
    }

    class Users {
        private $table = 'users';

        public function __construct($username = null, $password = null) {
            $this->username = $username;
            $this->password = $password;

            $conn = new DbConn();

            $this->conn = $conn->getConn();
        }

        public function insert() {
            $sql = 'INSERT INTO '.$this->table.' (username, password) 
                    VALUES ("'.$this->username.'", "'.$this->password.'")';
            
            return mysqli_query($this->conn, $sql);
        }

        public function read() {}

        public function update($id) {
            $sql = 'UPDATE '.$this->table.' SET username = "'.$this->username.'", 
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

    class xlsxprofil {
        private $table = 'tbl_profil';

        public function __construct($nama_ormawa = null, $sejarah = null, $visi_misi = null,  $sekretariat = null, $kontak = null) {
            $conn = new DbConn();
            
            $this->conn = $conn->getConn();

            // $this->id = $id;
            $this->nama_ormawa = $nama_ormawa;
            $this->sejarah = $sejarah;
            $this->visi_misi = $visi_misi;
            $this->sekretariat = $sekretariat;
            $this->kontak = $kontak;
        }

        public function insert() {  
            $user = new Users($this->username, $this->password);

            $user->insert();
            
            $sql = 'INSERT INTO '.$this->table.' (nama_ormawa, sejarah, visi_misi, sekretariat, kontak) 
            VALUES ("'.$this->nama_ormawa.'", "'.$this->sejarah.'", "'.$this->visi_misi.'", "'.$this->sekretariat.'", "'.$this->kontak.'", "'.$user->last_id().'")';

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