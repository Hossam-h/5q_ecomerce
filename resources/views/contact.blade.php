@extends('includes.main')
@section('content')

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Contact us</span></li>
				</ul>
			</div>
			<div class="row">
				<div class=" main-content-area">
					<div class="wrap-contacts ">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-form">
								<h2 class="box-title">Leave a Message</h2>
								<form action="#" method="get" name="frm-contact">

									<label for="name">Name<span>*</span></label>
									<input type="text" value="" id="name" name="name" >

									<label for="email">Email<span>*</span></label>
									<input type="text" value="" id="email" name="email" >

									<label for="phone">Number Phone</label>
									<input type="text" value="" id="phone" name="phone" >

									<label for="comment">Comment</label>
									<textarea name="comment" id="comment"></textarea>

									<input type="submit" name="ok" value="Submit" >
									
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-info">
							<iframe 
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13811.821779251177!2d31.3362435!3d30.0668116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f8e0cb0a8c650e7!2s5%20quarters%20dentistry!5e0!3m2!1sen!2seg!4v1660260955781!5m2!1sen!2seg" width="500" height="350" style="border:0;"
								 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<h2 class="box-title">Contact Detail</h2>
								<div class="wrap-icon-box">

									<div class="icon-box-item">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<div class="right-info">
											<b>Email</b>
											<p>Support1@Mercado.com</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="right-info">
											<b>Phone</b>
											<p>0123-465-789-111</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="right-info">
											<b>Mail Office</b>
											<p>Sed ut perspiciatis unde omnis<br />Street Name, Los Angeles</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->


@endsection