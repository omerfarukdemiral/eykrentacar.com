<?php include "header.php" ?>
			<!--Content Section Start-->
			<div id="content">
				<section class="banner2 banner-margin-zero">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 ">
								<h1>BİZİMLE İLETİŞİME GEÇİN</h1>
							</div>
							<div class="col-xs-12 col-sm-6">
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Anasayfa </a>
									</li>
									<li class="active">
										İletişim
									</li>
								</ol>
							</div>
						</div>
					</div>
				</section>

				<section class="about-few-words">
					
				</section>

				<section class="contact-us-map">
					
					<div class="contact-us-wrapper contact-page-form">
						<div class="container">
							<div class="map-form-inner">
								<div class="contact-us">
									<form name="contactForm" method="post"  novalidate id="contact" class="contact-form" data-ng-controller='themeonCtrl'>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-text-wrap">
													<input type="text" placeholder="Name" id="name" class="contact-name" name="name" required data-ng-model="contactformData.name"  data-ng-class="{'error' : contactForm.name.$error.pattern || submit && contactForm.name.$invalid}" />
													<i class="fa fa-user" aria-hidden="true"></i>
												</div>
												<div class="input-text-wrap">
													<input type="email" placeholder="Email"  id="email" class="contact-mail" name="email"  required data-ng-model="contactformData.email" data-ng-class="{'error' : contactForm.email.$error.pattern || submit && contactForm.email.$invalid}"/>
													<i class="fa fa-envelope" aria-hidden="true"></i>
												</div>
												<div class="input-text-wrap">
													<input type="text" placeholder="Subject" id="sub" class="contact-subject" name="subject" required data-ng-model="contactformData.subject" data-ng-class="{'error' : contactForm.subject.$error.required && contactForm.subject.$blured || submit && contactForm.subject.$invalid}" />
													<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
												</div>

											</div>
											<div class="col-sm-8">
												<div class="textarea-wrap">
													<textarea placeholder="Your Message or Review" id="message" name="message" data-ng-model="contactformData.message" required data-ng-class="{'error' : contactForm.message.$error.required && contactForm.message.$blured || submit && contactForm.message.$invalid}"></textarea>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</div>

											</div>
										</div>

										<div class="row">
											<div class="col-sm-4">
												<p>
													Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula eget dolor. Aenean massa.
												</p>
											</div>
											<div class="col-sm-8">
												<button type="submit"  class="orange-btn"  data-ng-click="submitcontactForm(contactForm.$invalid)" data-ng-disabled="submitButtonDisabled">
													<i class="fa fa-plus-circle" aria-hidden="true"></i>Send a message
												</button>
											</div>
										</div>
									</form>
									<div id="contactSuccess" style="display: none;">
										<span>Hey! Thanks for reaching out. I will get back to you soon</span>
									</div>
								</div>
							</div>

						</div>
					</div>

				</section>

			</div>
			<!--Content Section End-->
			<?php include "footer.php" ?>
