<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
   
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<script>
    $(document).ready(function() {
        $('#fullid').DataTable();
    });
</script>

<body>
    
    <div class=" navbar navbar-wrapper bg-danger  ">
        <div class=" container">
            <a href="<?php echo base_url('blog'); ?>" class="navbar-brand text-white d"> Đơn Đã Đặt </a>
        </div>
        <div class=" page-header-breadcrumb ">
        </div>
    </div>

    <div class="container ">
    <?php
            if ($this->session->flashdata('success')) {
            ?>
                <div class="alert alert-success ">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php
            }
            ?>

            <?php
            if ($this->session->flashdata('error')) {
            ?>
                <div class="alert alert-warning ">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php
            }
            ?>
        <a href="<?php echo base_url('blog') ?>" class="btn btn-primary">Thêm Đơn</a>
     
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <table id="fullid" class=" table table-striped table-bordered nowrap dataTable no-footer " role="grid">
                        <thead>
                            <tr role="row  " style="background:bisque ;">
                                <th class=" sorting_asc " tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    First Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    Last Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    Phone
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    Địa Chỉ
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    Nội Dung
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Id: activate to sort column descending" aria-sort="ascending">
                                    ACTIVE
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($id)) {
                                foreach ($id as $blog) {


                            ?>
                                    <tr>

                                        <td><?php echo $blog->id; ?></td>
                                        <td><?php echo $blog->firstname; ?></td>
                                        <td><?php echo $blog->lastname; ?></td>
                                        <td><?php echo $blog->phone; ?></td>
                                        <td><?php echo $blog->email; ?></td>
                                        <td><?php echo $blog->diachi; ?></td>
                                        <td><?php echo $blog->noidung; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('blog/edit/' . $blog->id); ?>" class="btn btn-info">Sửa</a>

                                            <a href="<?php echo base_url('blog/delete/' . $blog->id); ?>" class="btn btn-danger ">Xóa</a>
                                        </td>
                                    </tr>
                                <?php }
                            }  ?>
                                
                            <?php 
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>

         
            
        </div>
</body>

</html>