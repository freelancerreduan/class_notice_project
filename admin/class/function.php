









<?php

class personal
{
    private $conn;
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'npi';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$this->conn) {
            die("Connection Faild!");
        }
    }


    // it's function for admin login In website
    public function admin_login($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);
        $query = "SELECT * FROM  admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);
            if ($admin_info) {
                header("location:dashboard.php");
                $admin_login = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['adminId'] = $admin_login['admin_id'];
                $_SESSION['adminEmail'] = $admin_login['admin_email'];
            } else {
                return 'login faild';
            }
        }
    }

    // =====admin logout system======
    public function admin_logout(){
        unset($_SESSION['adminId']);
        unset($_SESSION['adminEmail']);
        header("location:index.php");
    }

    // ==========================================================================
    // ===========================Admin Dashboard Area Hear======================
    // ==========================================================================
    

    //==============notice add ==============
    public function notce_area($data){
        $notice_title = $data['notice_title'];
        $notice_link = $data['notice_link'];
        $query = "INSERT INTO notice_area(notice_title,notice_link) VALUE ('$notice_title','$notice_link')";
        if(mysqli_query($this->conn, $query)) {
            return "Service counter add Successfullt";
        }
    }

    // ============== notice display  =============
    // public function notice_display(){ 
    //     $query = "SELECT * FROM notice_area ORDER BY notice_id DE LIMIT 5";
    //     if(mysqli_query($this->conn, $query)) {
    //         $view = mysqli_query($this->conn, $query);
    //         return $view;
    //     }

    // }

    // display in font-end
    public function notice_display_limited(){ 
        $query = "SELECT * FROM notice_area ORDER BY notice_id DESC LIMIT 5";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            return $view;
        }

    }

    // ================= notice_info_delete ==============
    public function notice_deleted($id){
        $query ="DELETE FROM notice_area WHERE notice_id=$id";
        if(mysqli_query($this->conn, $query)) { 
            return "Delete Successfully";
        }
    }



    // latest notice area
    public function latest_notce_area($data){
        $latest_notice_title = $data['latest_notice_title'];
        $latest_notice_link = $data['latest_notice_link'];
        $query = "INSERT INTO latest_notice(lt_title,lt_link) VALUE ('$latest_notice_title','$latest_notice_link')";
        if(mysqli_query($this->conn, $query)) {
            return " Letest add Successfullt";
        }
    }


   // ============== Notice_display  =============
   public function latest_notice_display(){ 
    $query = "SELECT * FROM latest_notice";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            return $view;
        }
    }
   public function latest_notice_display_limited(){ 
    $query = "SELECT * FROM latest_notice";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            return $view;
        }
    }
    // display in font-end
    
//    public function latest_notice_display_limited(){ 
//     $query = "SELECT * FROM latest_notice";
//         if(mysqli_query($this->conn, $query)) {
//             $view = mysqli_query($this->conn, $query);
//             while($notice =mysqli_fetch_assoc($view)) {
//                 return $notice;
//             }
//         }
//     }

    // subscribe now 
    public function subscribe_now_email($data){
        $sub_email = $data['sub_email'];
        $query = "INSERT INTO subscribe(sub_email) VALUE ('$sub_email')";
        if(mysqli_query($this->conn, $query)) {
            return " Subscription Successfully";
        }
    }



    // ================= latest notice_info_delete ==============
    public function letest_notice_delete($id){
        $query ="DELETE FROM latest_notice WHERE latest_notice_id =$id";
        if(mysqli_query($this->conn, $query)) { 
            return "Delete Successfully";
        }
    }






        // Anounsment notice area
        public function an_notice_add($data){
            $an_text = $data['notice_anounsement'];
            $query = "INSERT INTO anounsment(an_text) VALUE ('$an_text')";
            if(mysqli_query($this->conn, $query)) {
                return " Letest add Successfully";
            }
        }


        // slider area
        public function slider_add($data){
            $slider_link = $data['slider_link'];
            $slider_img = $_FILES['slider_img']['name'];
            $slider_img_tmp = $_FILES['slider_img']['tmp_name'];
            $query = "INSERT INTO slider(slider_img,slider_link) VALUE ('$slider_img','$slider_link')";
            if(mysqli_query($this->conn, $query)) {
                move_uploaded_file($slider_img_tmp,"upload/".$slider_img);
                return " Slider add Successfully";
            }
        }
        // diplay slider
        public function slider_display(){ 
            $query = "SELECT * FROM slider";
                if(mysqli_query($this->conn, $query)) {
                    $view = mysqli_query($this->conn, $query);
                    return $view;
                }
            }
}



?>