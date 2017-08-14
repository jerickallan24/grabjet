<?php
/**
 * Template Name: Homepage
 *
 **/

get_header(); ?>
<?php
	global $clouds_img;
?>

<style type="text/css">
	.clouds {
		background-image: url(<?php echo $clouds_img ?>);
	}
</style>

<div class="clouds ptop30">
	<div class="container grabjet-form">
		<div class="row">
			<div class="col-md-12">
				<div class="border-bottom-gray">
					<div class="border-one border-blue">
						<div class="form-group border-blue">
						  	<label for="pick-up">PICK-UP</label>
							<select class="form-control" id="pick-up">
								<option>Changi Airport Private Terminal</option>
								<option>Kuala Lumpur</option>
								<option>Yangon</option>
								<option>Manila</option>
							</select>
						</div>
					</div>
				</div>
				<div class="border-bottom-gray">
					<div class="border-one border-red">
						<div class="form-group border-red">
						  	<label for="drop-off">DROP-OFF</label>
							<select class="form-control" id="drop-off">
								<option>Phuket Island Airport</option>
								<option>Kuala Lumpur</option>
								<option>Changi Airport Private Terminal</option>
								<option>Manila</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<select class="form-control" id="add-ons">
						<option value="0">Select Add-on:</option>
						<option value="300">Flight Attendant (+ $300)</option>
						<option value="100">Full kitchen (+ $100)</option>
						<option value="50">Massage (+ $50)</option>
						<option value="180">Jacuzzi (+ $180)</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">				
					<input class="form-control" type="text" id="datepicker" value="<?php echo date('d F Y') ?>" />
				</div>
			</div>
		</div>		
	</div>
	<div class="container request-a-jet ptop60">
		<div class="row">
			<div class="col-md-12 no-side-padding">
				<a href="#!" class="btn btn-default btn-block btn-request-a-jet">
					<span class="btn-text">Request a Jet</span>
					<span class="btn-price">$199</span>
					<div style="clear:both;"></div>
				</a>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>