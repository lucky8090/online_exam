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
                            <div class="col-md-12">
                                <h4>Edit Plans</h4><hr class="horizontal"/>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div>       
                                <form action="<?= site_url('c_plans/update_plan');?>" method="post">
                                    <div class="form-group">
                                        <input type="hidden" value="<?= $record_plans[0]['p_id'] ?>" name="id"/>
                                        <label class="col-sm-2 col-sm-2 control-label">UPDATE PLAN</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $record_plans[0]['p_name'] ?>" name="plan" placeholder="ENTER YOUR NEW PLAN HERE" required /><br>
                                        </div>
                                    </div><br>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">UPDATE DURATION</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $record_plans[0]['p_duration'] ?>" name="duration" placeholder="ENTER DURATION OF PLAN HERE" required /><br>
                                        </div>
                                    </div><br>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">UPDATE AMOUNT</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $record_plans[0]['p_price'] ?>" name="amount" placeholder="ENTER AMOUNT OF PLAN HERE" required /><br>
                                        </div>
                                    </div><br>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="btn btn-success" name="submit" value="Submit" style="margin-left: 16px;">Submit &nbsp;<i class="fa fa-paper-plane"></i></button<br><br>
                                </form>
                            </div>            
                        </div>
                    </div>
                </div>	
            </section>
    </section>   
    <?php include('footer.php'); ?>
</body>
</html>
