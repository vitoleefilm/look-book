/**
 * 2015-04-16 功能完成
 * 2015-04-17 将x_offset参数改为变量，使程序更为通用
 * 2015-04-18 将图片参数放入json数据中缓存起来，避免对DOM的频繁操作
 */
$(document).ready(function() {
	var ww = $(window).width();
    var wh = $(window).height();

    //////////////////////////////////////动画模块////////////////////////////////////
	// 鼠标相对文档的偏移量
	var x;
	var y;
	var container_attr = [];

	// 获得图片的中点，偏移量等参数
	function get_middle_line(container,callback) {
		offset = container.offset();
		middle_top = offset.top + (container.height()*0.23);
		middle_left = offset.left + (container.width()*0.66);
		// $('div').css({'top':middle_top,left:middle_left,width:'1px',height:'1px',position:'fixed',color:'black'}).appendTo('body');
		// 为了防止计算tan值时x_offset接近0或等于0导致浏览器崩溃，事先算好某个范围，在这个范围内人头的方向是垂直的，3.73为tan(75度)的值
		x_range = ((container.height()/3.73)).toFixed(2);
		//length是一张头像默认高度
		length = ww*0.352;
		container_attr[container.attr('_index')] = {'middle_top':middle_top,'middle_left':middle_left,'top':offset.top,'bottom':offset.top + container.height(),'left':offset.left,'right':offset.left + container.width(),'x_range':x_range,'length':length,'width':container.width()};
		if (callback) {
			callback && callback();
		}
	}

	//判断手机横竖屏状态：  
    function get_orientation() {
    	if ($('body').hasClass('pic-loaded')) {
    		return;
    	}
        if(window.orientation == -90 || window.orientation == 90 || window.orientation == undefined){
        	ww = window.innerWidth;
        	wh = window.innerHeight;
        	$('.loading-page').css('display','block');
        	setContentSize();
        	// $('.loading-page').fadeIn(300,function() {
        	$('.loading-page').addClass('show');
        	// });
        	var k = 1;
        	setTimeout(function() {
        		if ($('.loading-page').hasClass('show') && !$('.loading-page').hasClass('fading')) {
        			$('.loading-page').find('.progress').html('100%');
        			$('body').addClass('pic-loaded');
        			$('.loading-page').removeClass('show');
					$('.loading-page').fadeOut(3000,function() {
						$('.loading-page').addClass('loaded');
					});
        		}
        	},3000);
        	// 将图片属性放在标签中以免重复计算
            $('.col').each(function() {
				var _this = $(this);
				get_middle_line(_this,function() {
					_this.find('.anim-photo img').attr('src',_this.find('.anim-photo img').attr('_src'));
					_this.find('.anim-photo img').attr('style','top:-'+((ww*0.352)*12+3)+'');
					_this.find('.anim-photo img').load(function() {
						var percent = (k*17);
						if (percent == 102) {
							percent = 100;
						}
						$('.loading-page').find('.progress').html(percent+'%');
						k = k + 1;
						// $(this).attr('style','top:-'+((ww*0.352)*12+3)+'');
						if (percent == 100) {
							$('body').addClass('pic-loaded');
							setTimeout(function() {
								if ($('.loading-page').hasClass('show')) {
									$('.loading-page').removeClass('show').addClass('fading');
									$('.loading-page').fadeOut(2000,function() {
										$('.loading-page').removeClass('fading');
									});
								}
							},2000);
						}
					});
				});
			});
        }
    }
    get_orientation();
    window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", get_orientation, false);
	
	/**
	 * 获得背景偏移量
	 */
	function get_offset(index,attr) {
		container = $('.col[_index='+index+']');
		// 鼠标相对于以图片中点为原点的坐标
		x_offset = x-attr.middle_left;
		y_offset = y-attr.middle_top;
		x_range = attr.x_range;
		// 相对于图片中点的四个区间
		A1 = x_offset > 0 && y_offset >= 0;
		A2 = x_offset <= 0 && y_offset > 0;
		A3 = x_offset < 0 && y_offset <= 0;
		A4 = x_offset >= 0 && y_offset < 0;
		// 鼠标在图片中头像一直朝前
		if ((x > (attr.left+attr.width*0.55) && x < attr.right-attr.width*0.24) && (y > attr.top+attr.length*0.15 && y < (attr.bottom - attr.length*0.72))) {
			size =  12;
		// 防止计算tan值时分母接近零导致浏览器崩溃，单独划分一块区域
		// } else if (Math.abs(x_offset) < x_range) {
		// 	if (y_offset < 0) {
		// 		size = 9;
		// 	} else {
		// 		size = 3;
		// 	}
		} else {
			tan = y_offset/x_offset;
			tan = tan.toFixed(2);
			tan = Math.abs(tan);
			if (tan <= 0.27) {
				if (A1 || A4) {
					size = 0;
				} else if (A2 || A3) {
					size = 6;
				}
			} else if (tan <= 1 && tan > 0.27) {
				if (A1) {
					size = 1;
				} else if (A2) {
					size = 5;
				} else if (A3) {
					size = 7;
				} else if (A4) {
					size = 11;
				}
			} else if (tan > 1 && tan <= 3.73) {
				if (A1) {
					size = 2;
				} else if (A2) {
					size = 4;
				} else if (A3) {
					size = 8;
				} else if (A4) {
					size = 10;
				}
			} else {
				if (A1) {
					size = 3;
				} else if (A2) {
					size = 3;
				} else if (A3) {
					size = 9;
				} else if (A4) {
					size = 9;
				}
			}
		}
		length = attr.length;
		top_offset = -(length*size+3);
		container.find('.anim-photo img').attr('style','top:'+top_offset+'');
	}

	// $('body').on('touchstart',function(e) {
	// 	e.preventDefault();
	// 	x = e.originalEvent.targetTouches[0].clientX.toFixed(2);
 //        y = e.originalEvent.targetTouches[0].clientY.toFixed(2);
	// 	$('#tennisball').css({'left':x-15,'top':y-15});
	// 	for (index in container_attr) {
	// 		get_offset(index,container_attr[index]);
	// 	} 
	// });

	// 各种点击事件和触摸事件
	// $("#equipe .block-content .content-partie .intro-partie .col").on('touchstart',function(e){
	// 	e.preventDefault();
 //        var _id=$(this).attr('id');
 //        var _detail = $('.detail-box.for_'+_id);
 //        $(".main").addClass("white");
 //        $(this).siblings(".col").addClass("blur");
 //        $(this).siblings(".col").removeClass("active");
 //        $(this).removeClass("blur");
 //        $(this).addClass("active");
 //        _detail.addClass("show");
 //    });
	// $('#flux-site,#tennisball,.click-fix-5,.click-fix-4,.click-fix-6').on('touchmove',function(e) {
	$('#tennisball').on('touchmove',function(e) {
		e.preventDefault();
		if ($('.main').hasClass('showing')) {
			return;
		}
		x = e.originalEvent.targetTouches[0].clientX.toFixed(2);
        y = e.originalEvent.targetTouches[0].clientY.toFixed(2);
		$('#tennisball').css({'left':x-20,'top':y-20});
		for (index in container_attr) {
			get_offset(index,container_attr[index]);
		} 
	});
	$('.main').on('touchmove',function(e) {
		e.preventDefault();
	});
	// $('#flux-site').mousemove(function(e) {
	// 	e.preventDefault();
	// 	x = event.clientX;
	// 	y = event.clientY;
	// 	$('#tennisball').css({'left':x-15,'top':y-15});
	// 	for (index in container_attr) {
	// 		get_offset(index,container_attr[index]);
	// 	} 
	// });

////////////////////////////////////////////点击事件//////////////////////////////////////////////////
 	$(".game-guide .close").on('touchstart',function(){
        $(".game-guide").removeClass("show");
    });

    /*Product Detail*/
    $("#equipe .block-content .content-partie .intro-partie .col").on('touchstart',function(){
    	// if ($('.main').hasClass('showing')) {
    	// 	return;
    	// }
    	$('.main').addClass('showing');

        var _id=$(this).attr('id');
        var _detail = $('.detail-box.for_'+_id);
        $(".detail-box").removeClass("show");

        $(this).siblings(".col").addClass("blur");
        $(this).siblings(".col").removeClass("active");
        $(this).removeClass("blur");
        $(this).addClass("active");
        _detail.addClass("show");
    });
    $(".detail-box .close").click(function(){
        $(".detail-box").removeClass("show");
        $(".main").removeClass("white showing");
        $("#equipe .block-content .content-partie .intro-partie .col").removeClass("active").removeClass("blur");
    });

    $(".click-fix-4").on('touchstart',function(){
    	// if ($('.main').hasClass('showing')) {
    	// 	return;
    	// }
    	$('.main').addClass('showing');

        $(".detail-box").removeClass("show");
        $(".col#man-4").siblings(".col").addClass("blur");
        $(".col#man-4").siblings(".col").removeClass("active");
        $(".col#man-4").removeClass("blur");
        $(".col#man-4").addClass("active");
        $(".detail-box.for_man-4").addClass("show");
    });
    $(".click-fix-5").on('touchstart',function(){
    	// if ($('.main').hasClass('showing')) {
    	// 	return;
    	// }
    	$('.main').addClass('showing');

        $(".detail-box").removeClass("show");
        $(".col#man-5").siblings(".col").addClass("blur");
        $(".col#man-5").siblings(".col").removeClass("active");
        $(".col#man-5").removeClass("blur");
        $(".col#man-5").addClass("active");
        $(".detail-box.for_man-5").addClass("show");
    });
    $(".click-fix-6").on('touchstart',function(){
    	// if ($('.main').hasClass('showing')) {
    	// 	return;
    	// }
    	$('.main').addClass('showing');

        $(".detail-box").removeClass("show");
        $(".col#man-6").siblings(".col").addClass("blur");
        $(".col#man-6").siblings(".col").removeClass("active");
        $(".col#man-6").removeClass("blur");
        $(".col#man-6").addClass("active");
        $(".detail-box.for_man-6").addClass("show");
    });

    $(".racket").on('touchstart',function(){
        // if ($('.main').hasClass('showing')) {
        //     return;
        // }
        $('.main').addClass('showing');

        $(".detail-box").removeClass("show");
        $(".col").addClass("blur");
        $(".col").removeClass("active");
        $(".detail-box.for_racket").addClass("show");
    });

    /*menu*/
    $(".menu-button").click(function(){
        if(!$(this).hasClass("in")){
            $(this).addClass("in");
            $(".menu").addClass("show");
            $(".main-mask").addClass("show");
        } else {
            $(this).removeClass("in");
            $(".menu").removeClass("show");
            $(".main-mask").removeClass("show");
        }
    });
    $(".main-mask").click(function(){
        $(this).removeClass("show");
        $(".menu-button").removeClass("in");
        $(".menu").removeClass("show");
    });

    /*loadding page*/
    // $(".loading-page").click(function(){
    //     $(this).toggleClass("show");
    // });

    /*tc*/
    $(".read-tc").click(function(){
        $(".tc").addClass("show");
    });
    $(".tc .close").click(function(){
        $(".tc").removeClass("show");
    });
});