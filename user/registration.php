<div class="bordered-frame">  
     <form action="<?= PATH ?> page=registration" method = "post">
            
                <h1 class = "text-center text-success">ĐĂNG KÍ THÀNH VIÊN </h1>
                <div class="mb-3 mt-3"> 
                    <label for="makh" class="form-label">Họ tên</label><br>
                    <input type="text" class="form-control" id="makh" placeholder="Hồ Diên Lợi" name="fullname">
                </div>
              
                 <div class="mb-3 "> 
                    <p>Giới tính</p>
                    <input  name="gender" type="radio" id="nam" name="nam" value="Nam">
                    <label for="nam">Nam:</label>
                    <input  name="gender" type="radio" id="nu" name="nu" value="Nữ">
                    <label for="nu">Nữ:</label><br>
                </div>
         
                <div>
                    <label class="form-label">Ngày sinh</label><br>
                    <input type="date" class="form-control" value="2022-12-08" name="date">
                </div>
                <div>
                    <label class="form-label">Điện thoại</label><br>
                    <input type="tel" class="form-control" id="makh" placeholder="0779839548" name="tel">
                </div>
                <div>
                    <label class="form-label">Email</label><br>
                    <input type="email" class="form-control" id="makh" placeholder="admin@mail.com" name="email">
                </div>
                <div>
                    <label class="form-label">Địa chỉ</label><br>
                    <input type="text" class="form-control" id="makh" placeholder="Nguyễn Huệ district" name="diachi">
                </div>
                <div>
                    <label class="form-label">Mật khẩu</label><br>
                    <input type="password" class="form-control" id="makh" placeholder="" name="password">
                </div><br>
                <div>
                    <button type="submit" class="btn btn-success" name = "submit">Lấy thông tin</button>
                </div>
                <?php
                    $fullname = $name ="";
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $fullname = $_POST['fullname'];
                        if(isset($_POST['gender'])){
                        $gender = $_POST['gender'];
                           }
                        else{
                            $gender=false;
                            }
                        $date = $_POST['date']; 
                        $tel = $_POST['tel']; 
                        $email = $_POST['email']; 
                        $diachi = $_POST['diachi'];
                        $password = $_POST['password'];}

          ?>
          
        </form>
    </div>
    <table class = "table table-bordered">
                    <tr><th> Tên khách hàng</th><td><?=$fullname; ?></td></tr>
                    <tr><th> Giới tính</th><td><?=$gender;?></td></tr>
                    <tr><th> Ngày sinh</th><td><?=$date; ?></td></tr>
                    <tr><th> Số điện thoại</th><td><?=$tel; ?></td></tr>
                    <tr><th> Email</th><td><?=$email; ?></td></tr>
                    <tr><th> Địa chỉ</th><td><?=$diachi; ?></td></tr>
                    <tr><th> Mật khẩu</th><td><?=$password; ?></td></tr>
                </table>   
