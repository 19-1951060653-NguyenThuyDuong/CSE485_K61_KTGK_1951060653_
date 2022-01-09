<?php
    require_once 'config/database.php';

    class UserModel{
        private $usermaNV;
        private $userhovaten;
        private $userchucvu;
        private $userphongban;
        private $userluong;
        private $reg_date;

        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM nhanvien";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_users = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_users;
        }
    
        public function getUser($usermaNV) {
            
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM nhanvien WHERE maNV=$usermaNV";
            $result = mysqli_query($connection, $querySelect);
            $arr_user = [];
            if(mysqli_num_rows($result) > 0) {
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                $arr_user = $arr_users[0];
            }
           
            $this->closeDb($connection);
            return $arr_user;
        }
    
        /**
         * Truy vấn lấy ra tất cả sách trong CSDL
         */
        public function delete($usermaNV) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM nhanvien WHERE maNV = $usermaNV";
            $isDelete = mysqli_query($connection, $queryDelete);
           
            $this->closeDb($connection);
    
            return $isDelete;
        }
        public function addUsers(){
        }
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>