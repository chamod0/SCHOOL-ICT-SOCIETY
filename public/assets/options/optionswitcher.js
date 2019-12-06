'use strict';if($(window).width()>750){$('#body').each(function(){'use strict';var themeOption=$(`<div class="tho-option">
			<div class="tho-option-switcher">
				<div class="tho-option-switcher-btn tho-icon-option">
					<i class="tho-setting-icon"></i>
				</div>
					<div class="tho-option-swticher-header">
						<div class="tho-option-switcher-heading">Theme Option</div>
					</div>
					<div class="tho-option-swticher-body">
						<span class="tho-subtitle">Color Options</span>
						<ul class="tho-list-unstyled tho-color-options">
							<li class="theme-default theme-active" data-color="kidz" data-logo="default-logo"></li>
							<li class="theme-color1" data-color="kidz-color1" data-logo="logo1"></li>
							<li class="theme-color2" data-color="kidz-color2" data-logo="logo2"></li>
							<li class="theme-color3" data-color="kidz-color3" data-logo="logo3"></li>
							<li class="theme-color4" data-color="kidz-color4" data-logo="logo4"></li>
						</ul>
						<span class="tho-subtitle">Direction</span>
						<div class="no-col-space">
							<a href="javascript:void(0)" class="tho-btn tho-active-switcher-btn tho-ltr-btn">LTR</a>
							<a href="javascript:void(0)" class="tho-btn tho-rtl-btn">RTL</a>
						</div>
						<span class="tho-subtitle">Layout style</span>
						<div class="no-col-space">
							<a href="javascript:void(0)" class="tho-btn tho-active-switcher-btn tho-wide-layout-btn">Wide</a>
							<a href="javascript:void(0)" class="tho-btn tho-boxed-layout-btn">Boxed</a>
						</div>
						<div class="tho-bg-patern">
							<span class="tho-subtitle">Background pattern</span>
							<ul class="tho-list-unstyled">
								<li class="pattern-default pattern-active"></li>
								<li class="pattern1"></li>
								<li class="pattern2"></li>
								<li class="pattern3"></li>
								<li class="pattern4"></li>
							</ul>
						</div>
						<span class="tho-subtitle">Header style</span>
						<div class="no-col-space">
							<a href="javascript:void(0)" class="tho-btn scrollUp-header">Scroll</a>
							<a href="javascript:void(0)" class="tho-btn static-header">Static</a>
							<a href="javascript:void(0)" class="tho-btn fixed-header">Fixed</a>
						</div>
					</div>
			</div>
		</div>`);$('#body').prepend(themeOption);});}
var panel=jQuery('.tho-option-switcher');$('.tho-option-switcher-btn').on('click',function(){'use strict';$(this).toggleClass('tho-cross');jQuery('.tho-option-switcher').toggleClass('tho-option-visible');});jQuery('.tho-color-options li').click(function(){'use strict';var color=jQuery(this).attr('data-color');var data_logo=jQuery(this).attr('data-logo');setColor(color,data_logo);jQuery('.tho-color-options li').removeClass('theme-active');jQuery(this).addClass('theme-active');});var setColor=function(color){'use strict';jQuery('#option_style').attr('href','assets/css/'+color+'.css');}
var boxed=jQuery('.tho-boxed-layout-btn');var wide=jQuery('.tho-wide-layout-btn');if(jQuery('body').hasClass('boxed')){boxed.addClass('tho-active-switcher-btn');jQuery('.tho-bg-patern').css({'display':'block'});wide.removeClass('tho-active-switcher-btn');}else{boxed.removeClass('tho-active-switcher-btn');jQuery('.tho-bg-patern').css({'display':'none'});wide.addClass('tho-active-switcher-btn');}
jQuery('.tho-boxed-layout-btn').click(function(){'use strict';jQuery(this).addClass('tho-active-switcher-btn');jQuery('.tho-wide-layout-btn').removeClass('tho-active-switcher-btn');jQuery('body').addClass('boxed default');if(!jQuery('.main-wrapper').hasClass('home_transparent-wrapper')){jQuery('.main-slider').addClass('container');}
jQuery('.tho-bg-patern').css({'display':'block'});});jQuery('.tho-wide-layout-btn').click(function(){'use strict';jQuery(this).addClass('tho-active-switcher-btn');jQuery('.tho-boxed-layout-btn').removeClass('tho-active-switcher-btn');jQuery('body').removeClass('boxed default pattern-01 pattern-02 pattern-03 pattern-04 pattern-05');jQuery('.main-slider').removeClass('container');jQuery('.tho-bg-patern').css({'display':'none'});});jQuery('.tho-bg-patern li.pattern-default').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern-default').addClass('pattern-active');jQuery('body').addClass('default').removeClass('pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern1').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern1').addClass('pattern-active');jQuery('body').addClass('pattern-01').removeClass('default pattern-02 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern2').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern2').addClass('pattern-active');jQuery('body').addClass('pattern-02').removeClass('default pattern-01 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern3').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern3').addClass('pattern-active');jQuery('body').addClass('pattern-03').removeClass('default pattern-01 pattern-02 pattern-04 pattern-05 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern4').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern4').addClass('pattern-active');jQuery('body').addClass('pattern-04').removeClass('default pattern-01 pattern-02 pattern-03 pattern-05 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern5').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern5').addClass('pattern-active');jQuery('body').addClass('pattern-05').removeClass('default pattern-01 pattern-02 pattern-03 pattern-04 pattern-06 pattern-07');});jQuery('.tho-bg-patern li.pattern6').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern6').addClass('pattern-active');jQuery('body').addClass('pattern-06').removeClass('default pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-07');});jQuery('.tho-bg-patern li.pattern7').click(function(){'use strict';jQuery('.tho-bg-patern li').removeClass('pattern-active');jQuery('.tho-bg-patern li.pattern7').addClass('pattern-active');jQuery('body').addClass('pattern-07').removeClass('default pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-06');});var fixed=jQuery('.fixed-header');var stat=jQuery('.static-header');var scroll_up=jQuery('.scrollUp-header');if(jQuery('body').hasClass('static')){fixed.removeClass('tho-active-switcher-btn');scroll_up.removeClass('tho-active-switcher-btn ');stat.addClass('tho-active-switcher-btn');}else if(jQuery('body').hasClass('up-scroll')){stat.removeClass('tho-active-switcher-btn');fixed.removeClass('tho-active-switcher-btn');scroll_up.addClass('tho-active-switcher-btn ');}else{stat.removeClass('tho-active-switcher-btn');scroll_up.removeClass('tho-active-switcher-btn');fixed.addClass('tho-active-switcher-btn ');}
jQuery('.fixed-header').click(function(){'use strict';jQuery(this).addClass('tho-active-switcher-btn');jQuery('.static-header, .scrollUp-header').removeClass('tho-active-switcher-btn');jQuery('body').removeClass('static up-scroll');jQuery('.navbar').removeClass('navbar-scrollUp').addClass('animated');});jQuery('.scrollUp-header').click(function(){'use strict';jQuery(this).addClass('tho-active-switcher-btn');jQuery('.fixed-header, .static-header').removeClass('tho-active-switcher-btn');jQuery('body').removeClass('static').addClass('up-scroll');jQuery('.navbar').addClass('navbar-scrollUp').removeClass('animated');});jQuery('.static-header').click(function(){'use strict';jQuery(this).addClass('tho-active-switcher-btn');jQuery('.fixed-header, .scrollUp-header').removeClass('tho-active-switcher-btn');jQuery('body').removeClass('up-scroll').addClass('static');jQuery('.navbar').removeClass('navbar-scrollUp navbar-sticky');});var ltr=$(".tho-ltr-btn");var rtl=$(".tho-rtl-btn");ltr.click(function(){"use strict";jQuery(this).addClass("tho-active-switcher-btn");rtl.removeClass("tho-active-switcher-btn");jQuery("html").attr("dir","ltr");jQuery("#option_style").attr("href","assets/css/kidz.css");});rtl.click(function(){"use strict";jQuery(this).addClass("tho-active-switcher-btn");ltr.removeClass("tho-active-switcher-btn");jQuery("html").attr("dir","rtl");jQuery("#option_style").attr("href","assets/css/kidz.rtl.css");});