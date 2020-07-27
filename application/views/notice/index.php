
<div class="row clearfix">
	<div class="col-md-12">
		<a href="<?= base_url();?>NoticeController/create" class = "btn btn-info"><i class="material-icons">add</i>Add New Notice</a>
	</div>
</div>
<div class="clear"></div><br>


<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                NOTICE LIST
                            </h2>
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Notice Category</th>
                                            <th>Title</th>
                                            <th>Hints</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>

                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Notice Category</th>
                                            <th>Title</th>
                                            <th>Hints</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 0;foreach($allNotices as $val){ $i++;?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $val['noticeCategoryTitle'];?></td>
                                            <td><?= $val['title'];?></td>
                                            <td><?= $val['hints'];?></td>
                                            <td><?= $val['notice_date'];?></td>
                                            <td>
                                                <span><a href="<?= base_url()."NoticeController/edit/".$val['id'];?>" class="btn btn-primary btn-xs"><i class="material-icons">create</i></a></span>
                                                <span><a href="" class="btn btn-danger btn-xs"><i class="material-icons">delete</i></a></span>
                                            </td>
                                        </tr>
                                    <?php }?>
                                        
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>