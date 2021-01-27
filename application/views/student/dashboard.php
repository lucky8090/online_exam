<div class="content-wrapper">
	<section class="content-header">
		<h1>Student Dashboard</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('student/index')?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
            <section class="content">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select Options</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <form action="<?= site_url('student/start_exam')?>" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option hidden="hidden">Select Subjects</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Selct Test Paper</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option hidden="hidden">First Select Topic</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <button type="submit" class="btn btn-success">START &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>
                                    </div> -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Topics</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option hidden="hidden">First Select Subject</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="margin-top: 39px;">
                                        <button type="submit" class="btn btn-success">START &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>   
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
		</div>
    </section>
</div>