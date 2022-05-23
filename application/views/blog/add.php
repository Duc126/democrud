<head> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
<link rel="stylesheet" href="<?php  echo base_url();?>temple/css2.css">
  <script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script></head>

  <body>
  <section class="get-in-touch">
      <div class="container">
<h3 class="text-center text-white  ">Đăng Ký</h3>
<!-- <a href="<?php echo base_url('blog/getdathang');?>" class="btn btn-primary text-center ">Back</a> -->
<form action="<?php echo base_url('blog/submit')?>" method="post" class="contact-form row" >
<div class="form-field col-lg-6" style="padding-right: 0px;">
                    <label for="title" class="col-md-6 text-white">First Name </label>
                    <div class="col-md-10" style="padding-right: 0px;">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-field col-lg-6" style="padding-left: 0px;">
                    <label for="title" class="col-md-6 text-white">Last Name </label>
                    <div class="col-md-10" style="padding-left: 0px;">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="lastname" class="form-control " required>
                        </div>
                    </div>
                </div>
                <div class="form-field col-lg-6" style="padding-right: 0px;">
                    <label for="title" class="col-md-6 text-white">Phone </label>
                    <div class="col-md-10" style="padding-right: 0px;">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            <input type="text" name="phone" class="form-control" required>


                        </div>
                    </div>
                </div>


                <div class="form-field col-lg-6" style="padding-left: 0px;">
                    <label for="title" class="col-md-6 text-white">Email </label>
                    <div class="col-md-10" style="padding-left: 0px;">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-field col-lg-12">
                    <label for="title" class="col-md-6 text-white">Địa Chỉ </label>
                    <div class="col-md-11">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                            <input type="text" name="diachi" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-field col-lg-12">
                    <label for="title" class="col-md-6 text-white">Nội Dung </label>
                    <div class="col-md-11">

                        <textarea name="noidung" class="form-control" placeholder="Nhập nội dung *" style="width: 100%; height: 150px;" required></textarea>

                    </div>
                </div>
                <div class=" text-center m-4  mx-5 ">
                    <a href="<?php echo base_url('blog/getdathang'); ?>" class="btn btn-primary  ">Back
                    </a>
                    <input type="submit" name="submit" class="btn btn-success" value="Đặt Hàng">
                </div>

            </form>
        </div>
    </section>
</body>        