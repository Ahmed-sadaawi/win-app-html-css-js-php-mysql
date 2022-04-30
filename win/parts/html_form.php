
<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

      <form action="index.php?>" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ادخل الاسم الاول</label>
          <input type="text" name="f_name" class="form-control" id="exampleInputEmail1" placeholder="أحمد" aria-describedby="emailHelp">
          <div style="color:red;" class="form-text error"><?php echo $array['f_name_error'];?></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ادخل الاسم الآخير</label>
          <input type="text" name="l_name"  class="form-control" id="exampleInputEmail1" placeholder="سيد" aria-describedby="emailHelp">
          <div style="color:red;" class="form-text error"><?php echo $array['l_name_error'];?></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ادخل الإيميل</label>
          <input type="text" name="email"  class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
          <div style="color:red;" class="form-text error"><?php echo $array['email_error'];?></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
      </form>
      
    </div>
</div>

