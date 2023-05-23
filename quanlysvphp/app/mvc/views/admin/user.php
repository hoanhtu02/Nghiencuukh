<?php include '../quanlysvphp/app/mvc/views/layout/header-siba.php' ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Người Dùng
                        <!-- <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span> -->
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <button id="editable-sample_new" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Save as PDF</a></li>
                                        <li><a href="#">Export to Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div id="editable-sample_length" class="dataTables_length"><label><select size="1" name="editable-sample_length" aria-controls="editable-sample" class="form-control xsmall">
                                                    <option value="5" selected="selected">5</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="-1">All</option>
                                                </select> records per page</label></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dataTables_filter" id="editable-sample_filter"><label>Search: <input type="text" id="search-input" aria-controls="editable-sample" class="form-control medium"></label></div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="First Name" style="width: 120px;">ID</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 223px;">Tên Người Dùng</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 145px;">Mật Khẩu</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 145px;">Quyền</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 145px;">Status</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 145px;">MASSV</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 145px;">MAGV</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 103px;">Edit</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 149px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="search-results" role="alert" aria-live="polite" aria-relevant="all">
                                        <tr id="new-row" style="display:none;">
                                            <td class="sorting_1" contenteditable="true" id="newId"></td>
                                            <td contenteditable="true" id="newName"></td>
                                            <td contenteditable="true" id="newPassword"></td>
                                            <td contenteditable="true" id="newUserType">
                                                <select class="select-usertype">
                                                    <option value="admin">admin</option>
                                                    <option value="nguoidung">nguoidung</option>
                                                </select>
                                            </td>
                                            <td contenteditable="true" id="newStatus">
                                                <select class="select-status">
                                                    <option value="enable">enable</option>
                                                    <option value="disable">disable</option>
                                                </select>
                                            </td>
                                            <td contenteditable="true" id="newMSSV">
                                                <select class="mssv-select">
                                                    <option value="">Không</option>
                                                    <?php foreach ($result_sinhvien as $rowsinhvien) { ?>
                                                        <option value="<?php echo $rowsinhvien['MSSV'] ?>"><?php echo $rowsinhvien['TENSV'] ?></option>
                                                    <?php } ?>

                                                </select>
                                            </td>
                                            <td contenteditable="true" id="newMAGV">
                                                <select class="magv-select">
                                                    <option value="">Không</option>
                                                    <?php foreach ($result_giaovien as $rowgiaovien) { ?>
                                                        <option value="<?php echo $rowgiaovien['MAGV'] ?>"><?php echo $rowgiaovien['TENGV'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td><button id="saveButton" class="save">save</button></td>
                                            <td><a class="delete" name="delete" href="<?= URL ?>/UserController/index?delete=">Delete</a></td>
                                        </tr>
                                        <?php foreach ($result as $row) {
                                        ?>
                                            <tr class="odd" id="<?= $row['ID'] ?>">
                                                <td class="sorting_1"><?php echo $row['ID'] ?></td>
                                                <td class="name"> <?= $row['name'] ?></td>
                                                <td class="password"><?= $row['password'] ?></td>
                                                <td class="usertype"><?= $row['user_type'] ?></td>
                                                <td class="status"><?= $row['status'] ?></td>
                                                <td class="mssv"><?= $row['MSSV'] ?></td>
                                                <td class="magv"><?= $row['MAGV'] ?></td>
                                                <td class="edit"><a class="edit-btn" name="edit" href="#">Edit</a></td>
                                                <td class=" "><a class="delete" name="delete" href="<?= URL ?>/UserController/index?delete=<?= $row['ID'] ?>">Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dataTables_info" id="editable-sample_info">Showing 1 to 5 of 28 entries</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dataTables_paginate paging_bootstrap pagination">
                                            <ul>
                                                <li class="prev disabled"><a href="#">← Prev</a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li class="next"><a href="#">Next → </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        //nút edit
        $(document).on('click', '.edit-btn', function() {
            var row = $(this).closest('tr'); //lấy đoạn tr vừa bấm
            var id = row.attr('id'); // lấy id của đoạn tr
            //lấy gán từng giá tri của từng biến tương ứng
            var name = row.find('.name').text().trim();
            var password = row.find('.password').text().trim();
            var usertype = row.find('.usertype').text().trim();
            var status = row.find('.status').text().trim();
            var mssv = row.find('.mssv').text().trim();
            var magv = row.find('.magv').text().trim();
            //hiển thị giá trị đoạn trên và chuyển kiểu thành input để sửa
            row.find('.name').html('<input type="text" value="' + name + '">');
            row.find('.password').html('<input type="text" value="' + password + '">')
            row.find('.usertype').html('<input type="text" value="' + usertype + '">');
            row.find('.status').html('<input type="text" value="' + status + '">');
            row.find('.mssv').html('<input type="text" value="' + mssv + '">');
            row.find('.magv').html('<input type="text" value="' + magv + '">');
            //thay nút edit thành update
            row.find('.edit-btn').text('Update');
            row.find('.edit-btn').removeClass('edit-btn').addClass('update-btn');
            row.find('.update-btn').on('click', function() {
                var editedName = row.find('input').eq(0).val();
                var editedPassword = row.find('input').eq(1).val();
                var editedUserType = row.find('input').eq(2).val();
                var editedStatus = row.find('input').eq(3).val();
                var editedMssv = row.find('input').eq(4).val();
                var editedMagv = row.find('input').eq(5).val();
                var data={
                        id:id,
                        editedName: editedName,
                        editedPassword: editedPassword,
                        editedUserType: editedUserType,
                        editedStatus: editedStatus,
                        editedMssv: editedMssv,
                        editedMagv: editedMagv
                };
                $.ajax({
                url: '<?= URL ?>/UserController/update',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function(response) {               
                        row.find('.name').html(editedName);
                        row.find('.password').html(editedPassword);
                        row.find('.usertype').html(editedUserType);
                        row.find('.status').html(editedStatus);
                        row.find('.mssv').html(editedMssv);
                        row.find('.magv').html(editedMagv);

                        row.find('.update-btn').text('Edit');
                        row.find('.update-btn').removeClass('save').addClass('edit-btn');
                    },error: function(xhr, status, error) {
                       console.log('Lỗi khi gửi yêu cầu AJAX:', error);
                    }
                })
            });


        });
        // Gắn sự kiện click cho nút "Add New"
        $(document).on('click', '#editable-sample_new', function() {
            // Lấy dòng mẫu để thêm dữ liệu mới
            var newRow = $('#new-row');
            // Sao chép dòng mẫu và thêm vào bảng
            var tableBody = $('#editable-sample tbody');
            var cloneRow = newRow.clone();
            cloneRow.removeAttr('style'); // Hiển thị dòng mới
            tableBody.append(cloneRow);
        });
        //tìm kiếm 
        $('#search-input').on('input', function() {
            $('.odd').remove(); //xóa các tr odd đang hiện 
            var searchValue = $(this).val().toLowerCase(); //đưa hết về chữ thường 
            <?php if (isset($result)) {
                foreach ($result as $row) { ?>
                    var name = '<?php echo $row['name']; ?>'.toLowerCase(); //đặt biến name là tên của giá trị name trong bảng người dùng
                    if (name.includes(searchValue)) //so sách giá trị tìm bằng giá trị name
                    {
                        var listItem = '<tr class="odd"><td class="sorting_1"><?php echo $row['ID'] ?></td><td class=" "> <?= $row['name'] ?></td> <td class=" "><?= $row['password'] ?></td><td class="center "><?= $row['user_type'] ?></td><td class="center "><?= $row['status'] ?></td><td class="center "><?= $row['MSSV'] ?></td><td class="center "><?= $row['MAGV'] ?></td><td class=" "><a class="edit" name="edit" href="<?= URL ?>/UserController/index?edit=<?= $row['ID'] ?>">Edit</a></td><td class=" "><a class="delete" name="delete" href="<?= URL ?>/UserController/index?delete=<?= $row['ID'] ?>">Delete</a></td></tr>';
                        $('#search-results').append(listItem);
                    }

            <?php }
            } ?>

        });
        // Xử lý sự kiện click của nút "Save"
        $(document).on('click', '.save', function(e) {
            e.preventDefault();
            var newRow = $(this).closest('tr'); // Dòng mới được thêm    
            // Lấy giá trị từ các ô input
            var id = newRow.find('#newId').text();
            var name = newRow.find('#newName').text();
            var password = newRow.find('#newPassword').text();
            var userType = newRow.find('.select-usertype').val();
            var status = newRow.find('.select-status').val();
            var mssv = newRow.find('.mssv-select').val();
            var magv = newRow.find('.magv-select').val();
            // Tạo đối tượng dữ liệu để gửi đi
            var data = {
                id: id,
                name: name,
                password: password,
                userType: userType,
                status: status,
                mssv: mssv,
                magv: magv
            };
            // Gửi yêu cầu AJAX để lưu dữ liệu
            $.ajax({
                url: '<?= URL ?>/UserController/save',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function(response) {

                    //thêm đối tượng trả về vào dòng mới tạm thời.
                    var newRow = `
                <tr>
                    <td class="sorting_1">${id}</td>
                    <td>${response.name}</td>
                    <td>${response.password}</td>
                    <td>${response.userType}</td>
                    <td>${response.status}</td>
                    <td>${response.mssv}</td>
                    <td>${response.magv}</td>
                    <td class=" "><a class="delete" href="">edit</a></td>
                    <td><a class="edit" name="delete" href="<?= URL ?>/UserController/index?delete=${response.id}">Delete</a></td>
                </tr>
                  `;
                    $("#editable-sample tbody").append(newRow);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi khi gửi yêu cầu AJAX
                    console.error(xhr.responseText);
                }
            });
            newRow.css('display', 'none');
            setTimeout(() => {
                location.reload();
            }, 500);
        });
        //set time tại 500ml giây
    });
</script>
<!-- main-end -->
<?php include '../quanlysvphp/app/mvc/views/layout/footer.php' ?>