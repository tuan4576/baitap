
            <?php
            $masv = '2122110123';
            $hoten = 'Phan Thanh Tuấn';
            $lop = 'CCQ2211D';
            $email = 'sinhvien@gmail.com';
            echo "<h1>THÔNG TIN SINH VIÊN</h1>";
            echo "<p>Mã sinh viên: $masv</p>";
            echo "<p>Họ tên : $hoten</p>";
            echo "<p>Lớp: $lop</p>";
            echo "<p>Email : $email</p>";
            echo "<p>Họ tên </p>";
            ?>
            <ul class="list-group col-2">
            <li class="list-group-item active">Sở thích</li>
             <?php
             for($i = 1;$i <= 4;$i++)
             if ($i%2==0){
               echo "<li class='list-group-item text-primary'>sở thích $i <span class='badge bg-primary rounded-pill float-end'>$i</span></li>";     
             }
             else{
                echo "<li class='list-group-item  text-warning'>sở thích $i <span class='badge bg-primary rounded-pill float-end'>$i</span></li>";
             }
             ?>
            </ul>
