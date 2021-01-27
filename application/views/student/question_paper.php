<style>
    .box-header {
        height: 80px;
        padding: 25px;
    }
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Exam Instructions</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('student/index')?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Exam Instructions</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
            <section class="content">
                <div class="row">
                    <section class="content">
                        <div class="box box-default">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box-header">
                                        <h3 class="box-title">Start Exam</h3><br>
                                        <b>Timer :</b> <span id="timer"></span> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box-header">
                                        <b>Name : </b>Sarita Gupta<br/>
                                        <b>Roll No :</b> 100105<br/>
                                        <b>Exam Code :</b> Exam Code<br/>
                                    </div>
                                </div>
                            </div><hr/>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-7">
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
                                    </div>
                                    <div class="col-md-5" style="background:">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
		</div>
    </section>
</div>
<script>
    var initialTime = 5400;
    var seconds = initialTime;
    function timer() {
        var days        = Math.floor(seconds/24/60/60);
        var hoursLeft   = Math.floor((seconds) - (days*86400));
        var hours       = Math.floor(hoursLeft/3600);
        var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
        var minutes     = Math.floor(minutesLeft/60);
        var remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds; 
        }
        document.getElementById('timer').innerHTML = hours + "h " + minutes + "m " + remainingSeconds+ "s";
        if (seconds == 0) {
            clearInterval(countdownTimer);
            document.getElementById('timer').innerHTML = "Completed";
        } else {
            seconds--;
        }
    }
    var countdownTimer = setInterval('timer()', 1000);
</script>