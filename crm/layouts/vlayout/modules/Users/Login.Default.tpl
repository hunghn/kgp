{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
<!DOCTYPE html>
<html>
	<head>
		<title>CRM KGP Tech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- for Login page we are added -->
		<link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/jqueryBxslider.css" rel="stylesheet" />
		<script src="libraries/jquery/jquery.min.js"></script>
		<script src="libraries/jquery/boxslider/jqueryBxslider.js"></script>
		<script src="libraries/jquery/boxslider/respond.min.js"></script>
		<script>
			jQuery(document).ready(function(){
				scrollx = jQuery(window).outerWidth();
				window.scrollTo(scrollx,0);
				slider = jQuery('.bxslider').bxSlider({
				auto: true,
				pause: 4000,
				randomStart : true,
				autoHover: true
			});
			jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });
			}); 
		</script>
	</head>
	<body>
		<div class="container-fluid login-container">
			<div class="row-fluid">
				<div class="span3">
					<div class="logo"><img src="http://kimgiaphuc.com/images/logoweb.png">
					<br />
					<a target="_blank" href="http://{$COMPANY_DETAILSCOMPANY_DETAILS.website}">{$COMPANY_DETAILS.name}</a>
					</div>
				</div>
				<div class="span9">
					<div class="helpLinks">
						<a href="http://www.kimgiaphuc.com">Trang chủ Kim Gia Phúc</a> | 
						<a href="http://www.crm.kimgiaphuc.com">CRM Kim Gia Phúc</a> | 
						<a href="https://www.facebook.com/visinhxulymoitruong/">Facebook Kim Gia Phúc</a> | 
						<a href="https://wiki.vtiger.com/vtiger6/index.php/Main_Page">Sử dụng CRM</a> 
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="content-wrapper">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span6">
									<div class="carousal-container">
										<div><h2> CRM là gì? Tại sao cần sử dụng? </h2></div>
										<div>
												<div id="slide01" class="slide">
													<p>
														Tại sao doanh nghiệp nên sử dụng CRM luôn là câu hỏi làm các CEO đau đầu khi họ chưa biết đâu là những lợi ích mà một phần mềm CRM mang lại cho doanh nghiệp.
														</p>
													<p>
														Khái niệm về thuật ngữ CRM ( CRM là gì? ) đã được các nhà nghiên cứu của Mỹ đưa ra từ những năm 1990, cùng với đó qua nhiều năm phát triển CRM đã dần trở thành một nền tảng, hệ thống quản lý, chăm sóc khách hàng vô cùng hữu ích cho các doanh nghiệp. Ở nước ngoài, CRM đã trở thành lối sống, văn hóa của doanh nghiệp, và việc sử dụng các phần mềm CRM không còn gì xa lạ  đối với họ. Nhưng tại Việt Nam với nhiều lý do khác nhau các doanh nghiệp chưa biết đến CRM và vẫn chưa nhiều doanh nghiệp sử dụng phần mềm CRM như một công cụ chính để chăm sóc khách hàng.
													</p>
													<p>CRM theo dõi, tổng hợp tất cả những thông tin liên quan đến khách hàng trong một tổ chức, kết hợp với các mối liên hệ, trao đổi, sản phẩm, để tạo nên thông tin dầy đủ nhất về khách hàng. Từ đó, nhà quản lý hoàn toàn có thể tạo những danh sách phù hợp với các đối tượng khách hàng khác nhau. Phần mềm sẽ tự động cập nhật các thông tin khách hàng qua email để tạo một báo cáo chuẩn nhất. Các nhà quản lý sẽ dựa vào số liệu thống kê này để có thể hoạch định chiến lược chăm sóc khách hàng hợp lý.</p>
												</div>
										</div>
										<!--
										<ul class="bxslider">
											<li>
												<div id="slide01" class="slide">
													<img class="pull-left" src="{vimage_path('android_text.png')}">
													<img class="pull-right" src="{vimage_path('android.png')}"/>
												</div>
											</li>
											<li>
												<div id="slide02" class="slide">
													<img class="pull-left" src="{vimage_path('iphone_text.png')}"/>
													<img class="pull-right" src="{vimage_path('iphone.png')}"/>
												</div>
											</li>
											<li>
												<div id="slide03" class="slide">
													<img class="pull-left" src="{vimage_path('ipad_text.png')}"/>
													<img class="pull-right" src="{vimage_path('ipad.png')}"/>
												</div>
											</li>
											<li>
												<div id="slide04" class="slide">
													<img class="pull-left" src="{vimage_path('exchange_conn_text.png')}"/>
													<img class="pull-right" src="{vimage_path('exchange_conn.png')}"/>
												</div>
											</li>
											<li>
												<div id="slide05" class="slide">
													<img class="pull-left" src="{vimage_path('outlook_text.png')}"/>
													<img class="pull-right" src="{vimage_path('outlook.png')}"/>
												</div>
											</li>
										</ul>
									-->
									</div>
								</div>
								<div class="span6">
									<div class="login-area">
										<div class="login-box" id="loginDiv">
											<div class="">
												<h3 class="login-header">Đăng Nhập CRM Kim Gia Phúc</h3>
		</div>
											<form class="form-horizontal login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST">
			{if isset($smarty.request.error)}
			<div class="alert alert-error">
				<p>Invalid username or password.</p>
			</div>
			{/if}
												{if isset($smarty.request.fpError)}
													<div class="alert alert-error">
														<p>Invalid Username or Email address.</p>
													</div>
												{/if}
												{if isset($smarty.request.status)}
													<div class="alert alert-success">
														<p>Mail has been sent to your inbox, please check your e-mail.</p>
													</div>
												{/if}
												{if isset($smarty.request.statusError)}
													<div class="alert alert-error">
														<p>Outgoing mail server was not configured.</p>
													</div>
												{/if}
												<div class="control-group">
													<label class="control-label" for="username"><b>User name</b></label>
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="Username">
													</div>
												</div>

			<div class="control-group">
													<label class="control-label" for="password"><b>Password</b></label>
				<div class="controls">
														<input type="password" id="password" name="password" placeholder="Password">
													</div>
												</div>
												<div class="control-group signin-button">
													<div class="controls" id="forgotPassword">
														<button type="submit" class="btn btn-primary sbutton">Sign in</button>
														&nbsp;&nbsp;&nbsp;<a>Forgot Password ?</a>
													</div>
												</div>
												{* Retain this tracker to help us get usage details *}
												<img src='//stats.vtiger.com/stats.php?uid={$APPUNIQUEKEY}&v={$CURRENT_VERSION}&type=U' alt='' title='' border=0 width='1px' height='1px'>
											</form>
											<div class="login-subscript">
												<small> Powered by vtiger CRM {$CURRENT_VERSION}</small>
											</div>
				</div>
										
										<div class="login-box hide" id="forgotPasswordDiv">
											<form class="form-horizontal login-form" style="margin:0;" action="forgotPassword.php" method="POST">
												<div class="">
													<h3 class="login-header">Forgot Password</h3>
			</div>
			<div class="control-group">
													<label class="control-label" for="user_name"><b>User name</b></label>
				<div class="controls">
														<input type="text" id="user_name" name="user_name" placeholder="Username">
				</div>
			</div>
												<div class="control-group">
													<label class="control-label" for="email"><b>Email</b></label>
													<div class="controls">
														<input type="text" id="emailId" name="emailId"  placeholder="Email">
													</div>
		</div>
												<div class="control-group signin-button">
													<div class="controls" id="backButton">
														<input type="submit" class="btn btn-primary sbutton" value="Submit" name="retrievePassword">
														&nbsp;&nbsp;&nbsp;<a>Back</a>
		</div>
	</div>
</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span6 pull-left" >
							<div class="footer-content">
								<small>&#169 2004-{date('Y')}&nbsp;
									<a href="https://www.vtiger.com"> vtiger.com</a> | 
									<a href="https://www.vtiger.com/LICENSE.txt">Read License</a> | 
									<a href="https://www.vtiger.com/products/crm/privacy_policy.html">Privacy Policy</a> </small>
							</div>
						</div>
						<div class="span6 pull-right" >
							<div class="pull-right footer-icons">
								<small>{vtranslate('LBL_CONNECT_WITH_US', $MODULE)}&nbsp;</small>
								<a href="https://www.facebook.com/vtiger"><img src="layouts/vlayout/skins/images/facebook.png"></a>
								&nbsp;<a href="https://twitter.com/vtigercrm"><img src="layouts/vlayout/skins/images/twitter.png"></a>
								&nbsp;<a href="https://www.linkedin.com/company/vtiger-systems-india-pvt-ltd"><img src="layouts/vlayout/skins/images/linkedin.png"></a>
								&nbsp;<a href="http://www.youtube.com/user/vtigercrm"><img src="layouts/vlayout/skins/images/youtube.png"></a> 
							</div>
						</div>
					</div>   
				</div>    
			</div>   
		</div>
	</body>
	<script>
		jQuery(document).ready(function(){
			jQuery("#forgotPassword a").click(function() {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").show();
			});
			
			jQuery("#backButton a").click(function() {
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			
			jQuery("input[name='retrievePassword']").click(function (){
				var username = jQuery('#user_name').val();
				var email = jQuery('#emailId').val();
				
				var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
				var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
				
				if(username == ''){
					alert('Please enter valid username');
					return false;
				} else if(!emailFilter.test(email1) || email == ''){
					alert('Please enater valid email address');
					return false;
				} else if(email.match(illegalChars)){
					alert( "The email address contains illegal characters.");
					return false;
				} else {
					return true;
				}
				
			});
		});
	</script>
</html>	
{/strip}
