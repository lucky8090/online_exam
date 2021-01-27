<section class="breadcrumbs-area parallex">
	<div class="container">
		<div class="row">
			<div class="page-title">
				<div class="col-sm-12 col-md-6 page-heading text-left">
					<h3>any question</h3>
					<h2>Contact  Us</h2>
				</div>
				<div class="col-sm-12 col-md-6 text-right">
					<ul class="breadcrumbs">
						<li><a href="<?= site_url('home/index')?>">home</a>
						</li>
						<li><a href="#">pages</a>
						</li>
						<li><a href="#">team</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact-us" class="section-padding-70">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12 col-sm-12  ">
				<div class="notice success" id="success">
					<p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
				</div>
				<form id="contactForm" method="post" action="#">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Name<span class="required">*</span>
								</label>
								<input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="email">Email<span class="required">*</span>
								</label>
								<input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Subject<span class="required">*</span>
								</label>
								<input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Topic To Discuss <span class="required">*</span>
								</label>
								<select id="topic" name="topic" class="form-control required">
									<option>Share Market Trading</option>
									<option>Market Hosting</option>
									<option>Presidency Share</option>
									<option>Other Topic</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Message<span class="required">*</span>
								</label>
								<textarea placeholder="Message..." id="message" name="message" class="form-control" rows="3" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" id="yes" class="btn btn-primary">Send Message</button>
							<img id="loader" alt="" src="<?= base_url()?>assets/images/loader.gif" class="loader">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12 margin-top-30">
				<div class="location-box">
					<a class="media-left pull-left" href="#"> <i class=" icon-map"></i>
					</a>
					<div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
						<p>Model Town, Bangalore</p>
					</div>
				</div>
				<div class="location-box">
					<a class="media-left pull-left" href="#"> <i class=" icon-envelope"></i>
					</a>
					<div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
						<p>info@tpsempire.com| info@tpsempire.com</p>
					</div>
				</div>
				<div class="location-box">
					<a class="media-left pull-left" href="#"> <i class="icon-phone"></i>
					</a>
					<div class="media-body"> <strong>Call us 24/7</strong>
						<p>+91-7054661155</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section id="google-map">
	<div class="container-fluid no-padding">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124453.24551838901!2d77.52474590805491!3d12.89717893574619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sModel+Town%2C+Bangalore!5e0!3m2!1sen!2sin!4v1511265308061" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>