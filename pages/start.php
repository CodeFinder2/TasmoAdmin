<?php	$devices = $Sonoff->getDevices();?><div class='row justify-content-center startpage'>			<?php		if ( isset( $devices ) && !empty( $devices ) ):			foreach ( $devices as $device_group ): ?>				<?php foreach ( $device_group->names as $key => $devicename ): ?>					<?php					$img = _RESOURCESURL_."img/device_icons/".$device_group->img."_off.png";					?>					<div class='card-holder col-6 col-sm-3 col-md-2 col-xl-1 mb-4'>						<div class='card box_device position-relative' style=''						     data-device_id='<?php echo $device_group->id; ?>'						     data-device_group='<?php echo count( $device_group->names ) > 1 ? "multi" : "single"; ?>'						     data-device_ip='<?php echo $device_group->ip; ?>'						     data-device_relais='<?php echo $key + 1; ?>'						>							<div class="animated rubberBand">								<img class='card-img-top'								     data-icon='<?php echo $device_group->img; ?>'								     src='<?php echo $img; ?>'								     alt=''>							</div>							<div class='info info-1 hidden'><span>-</span></div>							<div class='info info-2 hidden'><span>-</span></div>							<div class='info info-3 hidden'><span>-</span></div>							<div class='info info-4 hidden'><span>-</span></div>														<div class='card-text box_device_name'>								<?php echo $devicename; ?>							</div>						</div>					</div>				<?php				endforeach;			endforeach;		else: ?>			<br/>			<br/>			<p>				<?php echo __( "NO_DEVICES_FOUND", "STARTPAGE" ); ?>			</p>		<?php endif; ?></div></div><script type='text/javascript' src='<?php echo _RESOURCESURL_; ?>js/start.js?<?php echo time(); ?>'></script>