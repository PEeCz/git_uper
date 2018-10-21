

        <!-- Table Fixed Header -->
        <div class="col-lg-7">

            <!-- begin page-header -->
            <h1 class="page-header">ตารางหมวดหมู่สินค้า</h1>
            <!-- end page-header -->
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">เมนูที่มีทั้งหมด</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin alert -->
                        <div class="alert alert-info fade show">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            ข้อมูลเมนูที่เพิ่มเข้าไปทั้งหมด ท่านสามารถแก้ไขเมนู และปรับเปลี่ยนหรือลบเมนูได้<BR/>
                            <span class="text-danger">คำเตือน : ห้ามทำการลบก่อนได้รับอนุญาติจาก Uper</span>
                        </div>
                        <!-- end alert -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">ID</th>
                                        <th class="text-nowrap">ชื่อหมวดหมู่</th>
                                        <th class="text-nowrap">แก้ไข</th>
                                        <th class="text-nowrap">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($showcategory as $row): ?>
                                    <tr class="odd gradeX">
                                        <td><?=$row->cat_id; ?></td>
                                        <td><?=$row->cat_name; ?></td>
                                        <td>
                                            <a href="<?= base_url('Backend/editCategory/'.$row->cat_id); ?>" class="btn btn-warning btn-sm btn-block">
                                                แก้ไขหมวดหมู่สินค้า
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Backend/delCategory/'.$row->cat_id); ?>" class="btn btn-danger btn-sm btn-block" onClick="return checkDel();">
                                                ลบหมวดหมู่สินค้า
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
            <!-- End Table Fixed Header -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->