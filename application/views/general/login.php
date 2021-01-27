<style>
    .gaye_box {
        height: auto;
        padding: 10px 10px 20px 10px;
        background-color: #eef1f4;
        width: 100%;
        margin-bottom: 25px;
        box-shadow: 3px 3px 3px 3px #eef1f4;
    }
    .ul_list {
    }
    .ul_list ul {
        margin: 0;
        padding: 0;
    }
    .ul_list ul li {
        display: inline-block;
        margin-left: 5px;
        margin-right: 5px;
    }
    .ul_list ul li a {
    }
    .check1 {
        margin-top: 5px;
    }
    .heading {
        height: auto;
        float: left;
        text-align: justify;
        background-color: White;
        padding: 10px 10px 5px 10px;
        font-weight: bold;
        font-size: 18px;
        width: 100%;
        margin-bottom: 30px;
        color: #333333;
    }
    label {
        font-size: 13px;
        color: #000;
        text-align: left;
        color: #333333;
    }
    .appointment {
        background: White !important;
    }
    .card-header {
        border-bottom-color: transparent;
        padding: 15px 30px;
    }
    .border-bottom {
        border-bottom: 1px solid #dee2e6!important;
    }
    .mt-4, .my-4 {
        margin-top: 1.5rem!important;
        color:black;
    }
    .card-body {
        padding: 1.875rem;
        position: relative;
    }
    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 3.25rem;
    }
    .card {
        flex-direction: column;
    }
</style>
<section class="appointment">
	<div class="container">
		<div class="row">
			<div class="form_box">
				<form>
					<div class=" col-sm-6 col-md-6 col-lg-6" style="margin-left:300px;">
						<div class="gaye_box ">
                            <div class="card-header border-bottom">
                                <h4 class="mt-4">Log In to Your Account!</h4>
                            </div>
                            <div class="card-body">
                                <div class=" col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="" placeholder="Email">
                                        </div>
                                        <div class=" clearfix"></div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="password" name="password" required class="form-control border-left-0 pl-0" placeholder="Password">
                                        </div>
                                        <div class=" clearfix"></div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" value="submit" class="btn btn-block btn-primary">
                                        </div>
                                        <div class=" clearfix"></div>
                                    </div>
                                    <p class="my-5 text-center">Not Yet a Member? <a href="<?= site_url('home/registration') ?>" class="text-primary">Register</a>
                                    </p>
                                </div>
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>