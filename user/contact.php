<h1 style = "color:green">ĐIỀN THÔNG TIN LIÊN HỆ</h1>

<form action="<?= PATH ?> page=contact" method = "post">


  <div class="mb-3 mt-3">
    <label for="makh" class="form-label">Mã khách hàng</label>
    <input type="text" class="form-control" id="makh" placeholder="Mã kh" name="userid">
  </div>
  <div class="mb-3">
    <label for="hoten" class="form-label">Họ tên</label>
    <input type="text" class="form-control" id="hoten" placeholder="Hoten" name="fullname"> 
  </div>
  <div class="mb-3">
    <label for="diachi" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" id="diachi" placeholder="Dia chi" name="address"> 
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
  </div>
  <div class = " mb-3">
  <label for = comment>nội dung liên hệ: </label><br>
  <textarea class="form-control" row="7" id="comment" name ="content"></textarea>

  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Lấy thông tin</button>
  
  <?php
  $userid = $name ="";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userid = $_POST['userid'];
    $fullname = $_POST['fullname']; 
    $address = $_POST['address']; 
    $email = $_POST['email'];   
    $content = $_POST['content']; 
  }
   ?>
   <table class = "table table-bordered">
    <tr><th> Mã khách hàng</th><td><?=$userid; ?></td></tr>
    <tr><th> Họ tên</th><td><?=$fullname; ?></td></tr>
    <tr><th> Địa chỉ</th><td><?=$address; ?></td></tr>
    <tr><th> Email</th><td><?=$email; ?></td></tr>
    <tr><th> Nội dung liên hệ</th><td><?=$content; ?></td></tr>
</table>
</form> 