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
                            <h4>Add Plans</h4><hr class="horizontal"/>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div>       
                            <form action="<?= site_url('c_plans/add_plan');?>" method="post">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">ADD PLAN</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="plan" placeholder="ENTER YOUR NEW PLAN" required/><br>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">ADD DURATION</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="duration" placeholder="ENTER DURATION OF PLAN" required/><br>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">ADD AMOUNT</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="amount" placeholder="ENTER AMOUNT OF PLAN" required/><br>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-success" name="submit" value="Submit" style="margin-left: 16px;">Submit &nbsp;<i class="fa fa-paper-plane"></i></button><br><br>
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
