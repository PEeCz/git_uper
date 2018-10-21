        <div id="content" class="content">
            <div class="row">
                <!-- Table Fixed Header -->
                <div class="col-md-6">
                    <!-- begin panel -->

                <h1 class="page-header">ตารางเมนูหลัก</h1>
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title text-center">เมนูที่มีทั้งหมด</h4>
                            <a class="btn btn-sm btn-success" href="<?php echo base_url('Backend/addMenu'); ?>">เพิ่มเมนูหลัก</a>
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
                                        <th>#</th>
                                        <th>เมนูหลัก</th>
                                        <th>ลำดับเมนูหลัก</th>
                                        <th>แก้ไขเมนูหลัก</th>
                                        <th>ลบเมนูหลัก</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($showmenu as $row): ?>
                                    <tr class="odd gradeX">
                                        <td><?=$row->id; ?></td>
                                        <td><?=$row->name; ?></td>
                                        <td><?=$row->rank; ?></td>
                                        <td>
                                            <a href="<?= base_url('Backend/editMenu/'.$row->id); ?>" class="btn btn-warning btn-sm btn-block">
                                                แก้ไขเมนูหลัก
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Backend/delMenu/'.$row->id); ?>" class="btn btn-danger btn-sm btn-block" onClick="return checkDel();">
                                                ลบเมนูหลัก
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

            <!-- Table Fixed Header -->
                <div class="col-md-6">

                <h1 class="page-header">ตารางเมนูย่อย</h1>
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
                            <h4 class="panel-title text-center">เมนูที่มีทั้งหมด</h4>
                            <a class="btn btn-sm btn-success" href="<?php echo base_url('Backend/addMenuSub'); ?>">เพิ่มเมนูย่อย</a>
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
                            <table id="data-table-fixed-header2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>เมนูย่อย</th>
                                        <th>ลำดับเมนูย่อย</th>
                                        <th>แก้ไขเมนูย่อย</th>
                                        <th>ลบเมนูย่อย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($showsubmenu as $row): ?>
                                    <tr class="odd gradeX">
                                        <td><?=$row->id; ?></td>
                                        <td><?=$row->name; ?></td>
                                        <td><?=$row->rank; ?></td>
                                        <td>
                                            <a href="<?= base_url('Backend/editMenuSub/'.$row->id); ?>" class="btn btn-warning btn-sm btn-block">
                                                แก้ไขเมนูย่อย
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Backend/delMenuSub/'.$row->id); ?>" class="btn btn-danger btn-sm btn-block" onClick="return checkDel();">
                                                ลบเมนูย่อย
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
        </div>