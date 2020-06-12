<?php 
   ob_start(); 
    class absen {

        public $conn;

        public function dbconnect($host,$username,$password,$dbname) {

            $this->conn = mysqli_connect($host,$username,$password,$dbname);
            return ($this->conn);
        }

        public function query($query) {

            $result = mysqli_query($this->conn,$query);
            $rows = [];
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
            return $rows;
    
        }

        public function edit_proker($data) {

            $nim = $data["nim"];
            $proker="";
            $list = $data["check_list"];
            $pweb = $data["pweb"];
            $e_link = $data["e_link"];
            $si_fest = $data["si_fest"];
            $foraksi = $data["foraksi"];
            $baksos = $data["baksos"];
            $bukber = $data["bukber"];
            $shocker = $data["shocker"];
            $si_games = $data["si_games"];
            $mubes = $data["mubes"];
            $himsi_mengabdi = $data["himsi_mengabdi"];
            $rakorwil = $data["rakorwil"];
            $himsi_goes_to_campus = $data["himsi_goes_to_campus"];

            $i=0;
            if(!empty($list)) 
            {
                while($i<count($list)) 
                {
                    if($i==(count($list)-1))
                    {
                        if($list[$i]=="Pweb") {
                            $proker .= $list[$i]."(".$pweb.")";
                        } else if ($list[$i]=="E-Link") {
                            $proker .= $list[$i]."(".$e_link.")";
                        } else if ($list[$i]=="Si Fest") {
                            $proker .= $list[$i]."(".$si_fest.")";
                        } else if ($list[$i]=="Foraksi") {
                            $proker .= $list[$i]."(".$foraksi.")";
                        } else if ($list[$i]=="Baksos") {
                            $proker .= $list[$i]."(".$baksos.")";
                        } else if ($list[$i]=="Bukber") {
                            $proker .= $list[$i]."(".$bukber.")";
                        } else if ($list[$i]=="Shocker") {
                            $proker .= $list[$i]."(".$shocker.")";
                        } else if ($list[$i]=="Si Games") {
                            $proker .= $list[$i]."(".$si_games.")";
                        } else if ($list[$i]=="Mubes") {
                            $proker .= $list[$i]."(".$mubes.")";
                        } else if ($list[$i]=="HIMSI Mengabdi") {
                            $proker .= $list[$i]."(".$himsi_mengabdi.")";
                        } else if ($list[$i]=="Rakorwil") {
                            $proker .= $list[$i]."(".$rakorwil.")";
                        } else if ($list[$i]=="HIMSI Goes To Campus") {
                            $proker .= $list[$i]."(".$himsi_goes_to_campus.")";
                        } else {
                            $proker .= "";
                        }
                    } 
                    else 
                    {
                        if($list[$i]=="Pweb") {
                            $proker .= $list[$i]."(".$pweb.")".",";
                        } else if ($list[$i]=="E-Link") {
                            $proker .= $list[$i]."(".$e_link.")".",";
                        } else if ($list[$i]=="Si Fest") {
                            $proker .= $list[$i]."(".$si_fest.")".",";
                        } else if ($list[$i]=="Foraksi") {
                            $proker .= $list[$i]."(".$foraksi.")".",";
                        } else if ($list[$i]=="Baksos") {
                            $proker .= $list[$i]."(".$baksos.")".",";
                        } else if ($list[$i]=="Bukber") {
                            $proker .= $list[$i]."(".$bukber.")".",";
                        } else if ($list[$i]=="Shocker") {
                            $proker .= $list[$i]."(".$shocker.")".",";
                        } else if ($list[$i]=="Si Games") {
                            $proker .= $list[$i]."(".$si_games.")".",";
                        } else if ($list[$i]=="Mubes") {
                            $proker .= $list[$i]."(".$mubes.")".",";
                        } else if ($list[$i]=="HIMSI Mengabdi") {
                            $proker .= $list[$i]."(".$himsi_mengabdi.")".",";
                        } else if ($list[$i]=="Rakorwil") {
                            $proker .= $list[$i]."(".$rakorwil.")".",";
                        } else if ($list[$i]=="HIMSI Goes To Campus") {
                            $proker .= $list[$i]."(".$himsi_goes_to_campus.")".",";
                        } else {
                            $proker .= "";
                        }
                    }
                    $i++;
                }
            }

            $jumlah = count($data["check_list"]);

            $query = "UPDATE absensi_psdm SET proker='$proker', jumlah='$jumlah' WHERE nim = $nim";
            $result = mysqli_query($this->conn,$query);
            return mysqli_affected_rows($this->conn);

        }
        


    }
	
	$koneksi = mysqli_connect("localhost","root","","himsi");

	function aman($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

function totalanggota($total){
		global $koneksi;

		    $table = "user";
        	$sql = "SELECT * FROM $table";
        	$query = mysqli_query($koneksi,$sql);
        	$data = array();
        	while(($row = mysqli_fetch_array($query)) != null){
            	$data[] = $row;
        	}
        	$count = count($data);   
        	echo $count;                                   
    	
	}
function totalsurat($total){
        global $koneksi;

            $table = "surat";
            $sql = "SELECT * FROM $table";
            $query = mysqli_query($koneksi,$sql);
            $data = array();
            while(($row = mysqli_fetch_array($query)) != null){
                $data[] = $row;
            }
            $count = count($data);   
            echo $count;                                   
        
    }

function totalaspirasi($total){
        global $koneksi;

            $table = "aspirasi";
            $sql = "SELECT * FROM $table";
            $query = mysqli_query($koneksi,$sql);
            $data = array();
            while(($row = mysqli_fetch_array($query)) != null){
                $data[] = $row;
            }
            $count = count($data);   
            echo $count;                                   
        
    }

function outputnama($nama) {

		global $koneksi;

        $nim = $_SESSION['nim'];
        $query  = "SELECT * FROM user WHERE nim = '$nim'";
        $result = mysqli_query($koneksi, $query);
        $GET    = mysqli_fetch_array($result);

     	  echo $GET['nama']; 
}

function data($data) {
	global $koneksi;

		$nim = $_SESSION['nim'];
        $query  = "SELECT * FROM user WHERE nim = '$nim'";
        $result = mysqli_query($koneksi, $query);
         

        return $result;

}

function edit($edit) {
	global $koneksi;

            $nim = $_GET['nim'];
            $dat = "SELECT * FROM user WHERE nim='$nim'";
            $sql = mysqli_query($koneksi,$dat);
            if(mysqli_num_rows($sql) == 0){
              header("Location: index.php");
                //include('index.php');
            }
            else{
                $row = mysqli_fetch_assoc($sql);
            }
            if(isset($_POST['save'])){
                $nim		= $_POST['nim'];
                $nama       = $_POST['nama'];
                $jk         = $_POST['jk'];
                $no         = $_POST['no'];
                $line       = $_POST['line'];
                $gambar     = $_POST['gambar'];

            $cek = mysqli_query($koneksi, "UPDATE user SET `nim`='$nim', `nama`='$nama', `jk`='$jk', `no`='$no', `line`='$line', `gambar`='$gambar'  
            			WHERE nim='$nim'") 
            		or die (mysqli_error());

                if($cek){
                   header("Location: profile.php?nim=".$_GET['nim']."&pesan=sukses");
                }
                else{
                    echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
                }
            }
            
            if(isset($_GET['pesan']) == 'sukses'){
                echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
            }
            
}

?>

 