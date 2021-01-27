<footer class="site-footer">
          <div class="text-center">
            Powered By: <a href="https://www.augurs.in/" target="_blank">Augurs Technologies Pvt. Ltd.</a>
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/paging.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url();?>js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="<?php echo base_url();?>js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/DataTables/datatables.min.js'); ?>"></script>
	
<script type="text/javascript" src="<?php echo base_url();?>js/html-table-search.js"></script>
		
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('#tableData').tableSearch({
            searchText:'Search Table',
            searchPlaceHolder:'Input Value'
        });
        $(document).on('change', '#course',function(){
            var course = $("#course").val();
            if(course != ""){
                $.ajax({
                    url:"<?= site_url('c_testpapers/get_subjects'); ?>",
                    method:"GET",
                    data:{course_id:course},
                    success:function(data){
                        var dataObj = jQuery.parseJSON(data);
                        if(dataObj != 0){
                            $("#subject").empty();
                            $('#subject').append($("<option></option>").attr("value","").attr("hidden","hidden").text("Select Subject"));
                            $.each(dataObj, function() {   
                                $('#subject').append($("<option></option>").attr("value",this.sub_id).text(this.sub_name)); 
                            });
                        } else{
                            $('#subject').html('<option value="0">Subjects not available</option>');
                            $('#question').html('<option value="0">Questions not available</option>');
                        }
                    }
                });
            } else {
                $('#subject').html('<option value="">Select Course first</option>');
            }
        });
        $(document).on('change', '#subject',function(){
            var subject = $("#subject").val();
            if(subject != ""){
                $.ajax({
                    url:"<?= site_url('c_qanswers/get_questions'); ?>",
                    method:"GET",
                    data:{subject_id:subject},
                    success:function(data){
                        var dataObj = jQuery.parseJSON(data);
                        if(dataObj != 0){
                            $("#question").empty();
                            $('#question').append($("<option></option>").attr("value","").attr("hidden","hidden").text("Select Questions"));
                            $.each(dataObj, function() {   
                                $('#question').append($("<option></option>").attr("value",this.qp_id).text(this.q_describe)); 
                            });
                        } else{
                            $('#question').html('<option value="0">Questions not available</option>');
                        }
                    }
                });
            } else {
                $('#question').html('<option value="">Select Subject first</option>');
            }
        });
        
    });
</script>
<script>
    setTimeout(function() {
        $('#flash_msg').fadeOut("slow");
    }, 4000 );
</script>
<script src="<?php echo base_url();?>js/form-component.js"></script>    
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableData').paging({limit:10});
    });
</script>
<script>
    $(function(){
        $('select.styled').customSelect();
    });
</script>
