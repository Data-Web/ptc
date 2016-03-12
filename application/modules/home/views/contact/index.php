<div class="col-md-12 center">
	<div class="page-content">
		<div class="page-breadcrumbs">
			<ul>
				<li>
					<a title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>" href="/"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
				</li>
				<li>
					<?php 
						if ($lang_page == '1') {
					?>
					<a title="Liên hệ" href="<?php echo base_url('lien-he') ?>">Liên hệ</a>
					<?php } else { ?>
					<a title="Contact" href="<?php echo base_url('contact') ?>">Contact</a>
					<?php } ?>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $lang_page == '1' ? 'Liên hệ' : 'Contact' ?></h1>
			</div>
			<div class="page-body">
				<div class="page-detail">
					<div class="row">
						<?php if (isset($_SESSION['added'])) { ?>
						<div class="col-md-12 alert-added">
							<div class="alert alert-success">
								<?php echo $lang_page == '1' ? 'Cám ơn bạn đã liên hệ với website!' : 'Thank you for contacting website' ?>
							</div>
						</div>
						<?php unset($_SESSION['added']); } ?>
						<div class="col-md-6">
							<form class="form-horizontal no-padding" action="" method="post" name="contact">
								<fieldset>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtName">
											<?php echo $lang_page == '1' ? 'Họ và tên: ' : 'Fullname: ' ?><span style="color:red"> * </span>
										</label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<input name="con_name" value="<?php echo set_value('con_name'); ?>" type="text" placeholder="<?php echo $lang_page == '1' ? 'Nhập họ tên...' : 'Enter fullname...' ?>" class="form-control input-md">
											<?php echo form_error('con_name') ?>    
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtEmail">
											Email<span style="color:red"> * </span>
										</label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<input name="con_email" value="<?php echo set_value('con_email'); ?>" type="email" placeholder="<?php echo $lang_page == '1' ? 'Nhập email...' : 'Enter email...' ?>" class="form-control input-md">
											<?php echo form_error('con_email') ?>    
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtPhone">
											<?php echo $lang_page == '1' ? 'Điện thoại: ' : 'Phone: ' ?>
										</label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<input name="con_phone" type="text" placeholder="<?php echo $lang_page == '1' ? 'Nhập số điện thoại...' : 'Enter phone number...' ?>" class="form-control input-md">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtContent">
											<?php echo $lang_page == '1' ? 'Nội dung: ' : 'Content: ' ?><span style="color:red"> * </span>
										</label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<textarea class="form-control" name="con_full"><?php echo set_value('con_full'); ?></textarea>
											<?php echo form_error('con_full') ?>    
										</div>
									</div>
									<?php 
										if (!empty($listOffice)) {
									?>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtContent">
											<?php echo $lang_page == '1' ? 'Chọn chi nhánh: ' : 'Select office: ' ?><span style="color:red"> * </span>
										</label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<select class="form-control" name="office_id">
												<?php 
													foreach ($listOffice as $v) {
												?>
												<option value="<?php echo $v['office_id'] ?>"><?php echo $v['office_name'] ?></option>
												<?php } ?>
											</select>
											<?php echo form_error('office_id') ?>    
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="btnSent"></label>
										<div class="col-md-8 col-sm-8 col-xs-8 full-xs">
											<button type="submit" name="addcontact" class="btn andy-btn hover-btn"><?php echo $lang_page == '1' ? 'GỬI TIN' : 'SEND' ?></button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-6">
							<?php 
								if (!empty($footerInfo)) {
									foreach ($footerInfo as $v) {
							?>
							<div class="office-area">
								<strong><?php echo $v['office_name'] ?></strong><br>
								<?php echo $v['office_address'] ?>
							</div>
							<?php } } ?>
						</div>
					</div>
					<!-- <div class="row" style="margin-top: 20px;">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.2151254459263!2d105.83601761433717!3d20.94387429604798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ada4804a75af%3A0xfb47ac90d70bf04a!2zUGhhbiBUcuG7jW5nIFR14buHLCBWxINuIMSQaeG7g24sIFRoYW5oIFRyw6wsIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1451232922056" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>-->				
					</div>
			</div>
		</div>
	</div>
</div>