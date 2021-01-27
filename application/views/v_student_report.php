<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Student Report | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Student Report</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="padding-bottom: 43px;">
                        <div class="col-md-12">
                            <h4><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</h4><hr class="horizontal"/>
                        </div>
                        <form id="form-filter"  style="margin-left:30px;">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <input name="student_name" type="text" class="form-control" id="student_name" placeholder="STUDENT NAME">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <button type="button" id="btn-filter" class="btn btn-warning" style="margin-top: 25px;">Search</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" id="btn-reset" class="btn btn-info" style="margin-top: 25px;">Reset</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>    
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="overflow:auto">
                        <table id="students_report" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Student Name</th>
                                    <th>Time Duration&nbsp;&nbsp;(In Minute)</th>
                                    <th>Exam Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
		</section>
    </section>
    <div class="modal fade" id="exam_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Report Details
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
                </div>
                <div class="modal-body">
                    <div id="exam_result" style="padding:20px;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var table;
        $(document).ready(function(e){
            table = $('#students_report').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= site_url('c_student_report/get_student_report/'); ?>",
                    "type": "POST",
                    "data": function ( data ) {
                        data.student_name = $('#student_name').val();
                    }
                },
                "columnDefs": [{ 
                    "targets": [0],
                    "orderable": false
                }]
            });
            $('#btn-filter').click(function(){
                table.ajax.reload();  
            });
            $('#btn-reset').click(function(){ 
                $('#form-filter')[0].reset();
                table.ajax.reload();  
            });
            $(document).on('click', '.view_student_exam_report', function(e){
                e.preventDefault();
                var exam_id = $(this).data('examid');
                $.ajax({
                    url: "<?= site_url() ?>/c_student_report/students_report",
                    method: "POST",
                    data: {examId:exam_id},
                    success: function(data){
                        $('#exam_result').html(data);
                        $('#exam_report').modal('show');
                    }
                });
            });
        });
    </script>
    <?php include('footer.php'); ?>
</body>
</html>
