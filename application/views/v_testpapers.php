<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TestPapers | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>

    <section id="main-content">
        <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> TestPapers</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="padding-bottom: 43px;">
                        <div class="col-md-12">
                            <h4><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</h4><hr class="horizontal"/>
                        </div>
                        <form action="<?= site_url('c_testpapers/filter');?>" method="post">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Select Course</label>
                                    <select id="course" name="course" class="form-control">
                                        <option value="" hidden="hidden">SELECT COURSE</option>
                                        <?php if(isset($courses)) {  foreach($courses as $row) {
                                            ?>
                                            <option value="<?= $row['c_id'];?>"><?= $row['c_name'];?></option>
                                        <?php  }}?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Select Subject</label>
                                    <select id="subject" name="subject" class="form-control">
                                        <option value="0">FIRST SELECT COURSE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>   
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-warning btn-sm" name="submit" value="Submit">Search&nbsp; &nbsp;<i class="fa fa-search"></i></button>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
                            <div style="float:left;margin-left: 13px;"><a href="<?= site_url('c_testpapers/add_q_p/'); ?>"><i class="btn btn-success">Add TestPaper&nbsp;&nbsp;<i class="fa fa-plus"></i></i></div>
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Number Of QUESTION</th>
                                    <th>Description Of QUESTION</th>
                                    <th>DATE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i =1; if(isset($record_qp)) { if(!empty($record_qp)) { foreach($record_qp as $row) {?>
                                    <tr id="<?= $row['qp_id'];?>">
                                        <td><?= $i;?></td>
                                        <td id="no_quests"><?= $row['no_quests'];?></td>
                                        <td id="q_describe"><?= $row['q_describe'];?></td>
                                        <td><?= $row['date'];?></td>
                                        <td>
                                            <a href="#" onClick="Delete(<?= $row['qp_id'];?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></a>
                                            <a href="<?= site_url('c_testpapers/edit_q_p/'.$row['qp_id']);?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++; }}  else {?>
                                    <tr>
                                        <td colspan="9"> No Records Found .</td>
                                    </tr>
                                <?php } }?>
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
                    url: "<?= site_url('c_testpapers/delete'); ?>", 
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
