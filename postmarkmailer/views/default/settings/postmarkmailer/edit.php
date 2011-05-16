<h2><?php  echo elgg_echo('postmarkmailer:settings:title');?></h2>

<p>
    <?php echo elgg_echo('postmarkmailer:settings:from_email'); ?>
 	
 	<input type="text" name="params[from_email]" value="<?php echo get_plugin_setting('from_email','postmarkmailer');?>" size="40"/>
</p>
<p> 	
 	<?php echo elgg_echo('postmarkmailer:settings:from_name'); ?>
 	<input type="text" name="params[from_name]" value="<?php echo get_plugin_setting('from_name','postmarkmailer');?>" size="40"/>
</p>
<p> 	
 	<?php echo elgg_echo('postmarkmailer:settings:api_key'); ?>
 	<input type="text" name="params[api_key]" value="<?php echo get_plugin_setting('api_key','postmarkmailer');?>" size="40"/>
 </p>
 
 <p> 
 	<?php $send_limit =  get_plugin_setting('send_limit','postmarkmailer');
 	echo elgg_echo('postmarkmailer:settings:send_limit'); ?>
 	
 	<select name="params[send_limit]">
	    <option value="25" <?php if (!$send_limit || ($send_limit == 25)) echo " selected=\"yes\" "; ?>>25</option>
	    <option value="50" <?php if ($send_limit == 50) echo " selected=\"yes\" "; ?>>50</option>
	    <option value="100" <?php if ($send_limit == 100) echo " selected=\"yes\" "; ?>>100</option>
	    <option value="500" <?php if ($send_limit == 500) echo " selected=\"yes\" "; ?>>500</option>
	    <option value="1000" <?php if ($send_limit == 1000) echo " selected=\"yes\" "; ?>>1000</option>
    </select>
 
 	<?php $frequence =  get_plugin_setting('mailer_cron','postmarkmailer');
 	echo elgg_echo('postmarkmailer:settings:send_limit'); ?>
 	
 	<select name="params[mailer_cron]">
	    <option value="disabled" <?php if (!$frequence || ($frequence == 'disabled')) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:disabled'); ?></option>
	    <option value="minute" <?php if (!$frequence || ($frequence == 'minute')) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:minute'); ?></option>
	    <option value="fiveminute" <?php if (!$frequence || ($frequence == 'fiveminute')) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:fiveminute'); ?></option>
	    <option value="fifteenmin" <?php if ($frequence == 'fifteenmin') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:fifteenminute'); ?></option>
	    <option value="halfhour" <?php if ($frequence == 'halfhour') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:halfhour'); ?></option>
	    <option value="hourly" <?php if ($frequence == 'hourly') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:hourly'); ?></option>
	    <option value="daily" <?php if ($frequence == 'daily') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('postmarkmailer:settings:daily'); ?></option>
    </select>
 </p>
 
 <br/>

<p>
	<?php echo elgg_echo('postmarkmailer:settings:reply_optional');?>
</p>
<p> 	
 	<?php echo elgg_echo('postmarkmailer:settings:reply_email'); ?>
 	<input type="text" name="params[reply_email]" value="<?php echo get_plugin_setting('reply_email','postmarkmailer');?>" size="40"/>
</p>
<p>  	
 	<?php echo elgg_echo('postmarkmailer:settings:reply_name'); ?>
 	<input type="text" name="params[reply_name]" value="<?php echo get_plugin_setting('reply_name','postmarkmailer');?>" size="40"/>
</p>
 	
   
