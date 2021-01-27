<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Question Details | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i>Question Details</h3>
                <div id="flash_msg">
                    <?= $this->session->flashdata('msg') ?>
                </div>
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel" style="padding-bottom: 43px;">
                            <div class="col-md-12">
                                <h4>Add Total No of Question</h4><hr/>
                            </div>
                            <form action="<?= site_url('c_questionset/add_question_details');?>" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Add Total Number Of questions</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">1. Reasoning</label>
                                        <input type="number" class="form-control" name="reasoning" placeholder="Reasoning" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">2. Easy</label>
                                        <input type="number" class="form-control" name="easy" placeholder="Easy" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">3. Medium</label>
                                        <input type="number" class="form-control" name="medium" placeholder="Medium" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">4. High</label>
                                        <input type="number" class="form-control" name="high" placeholder="High" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Negative Marking</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="radio" name="negative_marking" id="negative_marking1" value="1">Yes
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="radio" name="negative_marking" id="negative_marking2" value="2">No
                                    </div>
                                </div>
                                <div class="col-md-12" id="marking" style="display:none">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Set Negative Marking</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="marking_type" value="0.5">1/2
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="marking_type" value="0.33">1/3
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="marking_type" value="0.25">1/4
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-sm" name="submit" value="Submit" style="margin-top: 25px;">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                                <div class="clearfix"></div><br/>    
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <script>
            $(document).ready(function(){ 
                $("input[name$='negative_marking']").click(function() {
                    var test = $(this).val();
                    if(test == 1) {
                        $("#marking").show();
                    } else {
                        $("#marking").hide();
                    }
                }); 
            });
        </script>
    <?php include('footer.php'); ?>
</body>
</html>