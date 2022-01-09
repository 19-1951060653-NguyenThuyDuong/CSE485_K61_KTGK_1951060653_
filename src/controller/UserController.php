<?php
    require_once 'model/UserModel.php';
    class UserController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/index.php';
        }

        function detail(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $usermaNV = $_GET['maNV'];
            $userModel = new UserModel();
            $users = $userModel->getUser($usermaNV);
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/detail.php';
        }
        function add(){
            
        }

        function edit(){
            
        }
        function delete(){
                $usermaNV = $_GET['maNV'];
                if (!is_numeric($usermaNV)) {
                    header("Location: index.php?controller=user&action=index");
                    exit();
                }
        
                $userModel = new UserModel();
                $isDelete = $userModel->delete($usermaNV);
        
                if ($isDelete) {
                    //chuyển hướng về trang liệt kê danh sách
                    //tạo session thông báo mesage
                    $_SESSION['success'] = "Xóa bản ghi #$usermaNV thành công";
                }
                else {
                    //báo lỗi
                    $_SESSION['error'] = "Xóa bản ghi #$usermaNV thất bại";
                }

                header("Location: index.php?controller=user&action=index");
                exit();
        }
    }
?>