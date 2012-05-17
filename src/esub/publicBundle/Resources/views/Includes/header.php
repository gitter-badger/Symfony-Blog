<div id="header">
	<div id="top_logo">
		<a href="<?php echo base_url()?>" target="_self"><span class="c_image c_logo"></span></a>
	</div>
	<div id="searchbox">
		<div class="search_input">
			<?php echo form_open()?>
			<?php echo form_input('search', 'Search')?>
			<?php echo form_close()?>
		</div>
		<div class="search_icon">
			<span class="c_image search_icon"></span>
		</div>
	</div>
	<!--		Unloged menu-->
	<?php if(true){?>
	<div id="unloged_menu">
		<a href="javascript:void(0);" id="login_btn" box="login_box">Login</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="javascript:void(0);" id="signup_btn" box="signup_box">Signup</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="javascript:void(0);" id="clean_btn" box="clean_box">Clean</a>
	</div>
	<?php }else{?>
	<div id="loged_menu">
		<span class="c_image user_icon"></span>
		<span class="username">CagunA</span>
		<span class="c_image down_arrow"></span>
	</div>
	<?php }?>
	<div class="clear"></div>
	
	<div id="login_box" class="header_box">
		<?php $this->load->view('includes/login_box')?>
	</div>
	<div id="signup_box" class="header_box">
		<?php $this->load->view('includes/signup_box')?>
	</div>
	<div id="clean_box" class="header_box">
		<?php $this->load->view('includes/clean_box')?>
	</div>
</div>