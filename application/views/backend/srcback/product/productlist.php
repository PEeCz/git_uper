        <div id="content" class="content">
            <!-- begin page-header -->
            <h1 class="page-header">ตารางสินค้า</h1>
            <!-- end page-header -->

            <!-- Table Fixed Header -->
                <div class="col-lg-12">
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
                            <h4 class="panel-title">สินค้าที่มีทั้งหมด</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin alert -->
                        <div class="alert alert-info fade show">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            ข้อมูลสินค้าที่เพิ่มเข้าไปทั้งหมด ท่านสามารถแก้ไขสินค้า และปรับเปลี่ยนหรือลบสินค้าได้<BR/>
                            <span class="text-danger">คำเตือน : ห้ามทำการลบก่อนได้รับอนุญาติจาก Uper</span>
                        </div>
                        <!-- end alert -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-fixed-header" class="table table-bordered">
                                <thead>
                                    <tr class="bg-silver-lighter">
                                        <th class="text-nowrap">ID</th>
                                        <th class="text-nowrap">ชื่อสินค้า (Title)</th>
                                        <th class="text-nowrap">P/N</th>
                                        <th class="text-nowrap">Stock</th>
                                        <th class="text-nowrap">รายละเอียด</th>
                                        <th class="text-nowrap">หมวดหมู่</th>
                                        <th class="text-nowrap">หมวดหมู่ย่อย</th>
                                        <th class="text-nowrap">แก้ไข</th>
                                        <th class="text-nowrap">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($showproduct as $row): ?>
                                    <tr class="odd gradeX">
                                        <td><?=$row->product_id; ?></td>
                                        <td><?=$row->product_title; ?></td>
                                        <td><?=$row->product_pn; ?></td>
                                        <td><?php if($row->product_stock==1){ echo "IN Stock"; }elseif($row->product_stock==2) { echo "OUT Stock"; } ?></td>
                                        <td><?=substr($row->product_detail,0,70); ?></td>
                                        <td><?=$row->product_category; ?></td>
                                        <td><?=$row->product_subcategory; ?></td>
                                        <td>
                                            <a href="<?= base_url('Backend/editProduct/'.$row->product_id); ?>" class="btn btn-warning btn-sm btn-block">
                                                แก้ไขสินค้า
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Backend/delproduct/'.$row->product_id); ?>" class="btn btn-danger btn-sm btn-block">
                                                ลบสินค้า
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