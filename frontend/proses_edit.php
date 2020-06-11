<?php
include 'koneksi.php';

            if(isset($_POST['ganti'])){

                $nim = $_GET['nim'];
                 

                $password   = $_POST['password'];
                $password1  = $_POST['password1'];
                $password2  = $_POST['password2'];
                
                $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nim='$nim' AND password='$password'");
                if(mysqli_num_rows($cek) == 0){
                    echo '<div class="alert alert-danger">Password sekarang tidak tepat.</div>';
                }
                else{
                    if($password1 == $password2){
                        if(strlen($password1) >= 5){
                            $pass = md5($password1);
                            $update = mysqli_query($koneksi, "UPDATE user SET password='$pass' WHERE nim='$nim'");
                            if($update){
                               // echo '<div class="alert alert-success">Password berhasil dirubah.</div>';
                                header("Location: profile.php?nim=".$_GET['nim']."&pesan=sukses");
                            }
                            else{
                                echo '<div class="alert alert-danger">Password gagal dirubah.</div>';
                            }
                        }
                        else{
                            echo '<div class="alert alert-danger">Panjang karakter Password minimal 5 karakter.</div>';
                        }
                    }
                    else{
                        echo '<div class="alert alert-danger">Konfirmasi Password tidak tepat.</div>';
                    }
                }
            }
              if(isset($_GET['pesan']) == 'sukses'){
                                        echo '<br><div class="alert alert-success">Password Berhasil di Ganti.</div>';
                                    }
            ?>