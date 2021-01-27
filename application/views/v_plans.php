<!DOCTYPE html>
<html lang="en">

<head>
	<title>Plans | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
	<section id="main-content">
		<section class="wrapper">
			<h3><i class="fa fa-angle-right"></i> Plans</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
			<div class="row mt">
				<div class="col-md-12">
					<div class="content-panel">
						<table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
							<div style="float:left;margin: 10px;">
                                <a href="<?= site_url('c_plans/add_plan');?>"> <i class="btn btn-success">Add Plan &nbsp;&nbsp;<i class="fa fa-plus"></i></i> 
                            </div>
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="">
                                <?php  $i =1; if(isset($record_plans)) {  foreach($record_plans->result() as $row) {?>
                                    <tr id="<?php echo $row->p_id;?>">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row->p_name;?></td>
                                        <td><?php echo $row->p_duration;?></td>
                                        <td><?php echo $row->p_price;?></td>
                                        <td><?php echo $row->p_date;?></td>
                                        <td>
                                            <a href="#" onClick="Delete(<?php echo $row->p_id;?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></a>
                                            <a href="<?= site_url('c_plans/edit_plan/'.$row->p_id);?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil "></i></a>
                                        </td>
                                    </tr>
                                <?php $i++; }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script type="text/javascript">
        function Delete(p_id){
            if(confirm("This Record will be Permanently Removed !! Are You Sure ??")) {
                var value = {p_id: p_id}; 
                $.ajax({
                    type: "post", 
                    url: "<?php echo site_url('c_plans/delete'); ?>", 
                    data: value,
                    cache: false,
                    success: function(result) {
                        $('#'+p_id).remove();
                    }
                });
            }
        };
                
    </script>
    <?php include('footer.php'); ?>
</body>
</html>
