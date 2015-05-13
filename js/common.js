/**
 * 2015-04-16 功能完成
 * 2015-04-17 将x_offset参数改为变量，使程序更为通用
 * 2015-04-18 将图片参数放入json数据中缓存起来，避免对DOM的频繁操作
 */
$(document).ready(function() {
	var ww = $(window).width();
    var wh = $(window).height();
	// 鼠标相对文档的偏移量
	var x;
	var y;
	var container_attr = [];

	// 获得图片的中点，偏移量等参数
	function get_middle_line(container,callback) {
		var div = container.find('.first-photo');
		offset = div.offset();
		middle_top = offset.top + (div.height()/2);
		middle_left = offset.left + (div.width()/2);
		// 为了防止计算tan值时x_offset接近0或等于0导致浏览器崩溃，事先算好某个范围，在这个范围内人头的方向是垂直的，3.73为tan(75度)的值
		x_range = ((div.height()/3.73)).toFixed(2);
		//length是一张头像默认高度
		length = div.height();
		container_attr[container.attr('_index')] = {'middle_top':middle_top,'middle_left':middle_left,'top':offset.top,'bottom':offset.top + div.height(),'left':offset.left,'right':offset.left + div.width(),'x_range':x_range,'length':length};
		if (callback) {
			callback && callback();
		}
	}

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
		if ((x > attr.left && x < attr.right) && (y > attr.top && y < attr.bottom)) {
			size =  12;
		// 防止计算tan值时分母接近零导致浏览器崩溃，单独划分一块区域
		} else if (Math.abs(x_offset) < x_range) {
			if (y_offset < 0) {
				size = 9;
			} else {
				size = 3;
			}
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
		top_offset = -(length*size);
		container.find('.anim-photo img').attr('style','top:'+top_offset+'');
	}

	// 将图片属性放在标签中以免重复计算
	$('.col').each(function() {
		var _this = $(this);
		get_middle_line(_this,function() {
			_this.find('.anim-photo img').load(function() {
				$(this).attr('style','top:-'+(ww*0.62-30)*8+'');
				_this.find('.first-photo').hide();
			});
		});
	});

	$('body').on('touchstart',function(e) {
		e.preventDefault();
		x = e.originalEvent.targetTouches[0].clientX.toFixed(2);
        y = e.originalEvent.targetTouches[0].clientY.toFixed(2);
		$('#football').css({'left':x-40,'top':start_y-40});
		for (index in container_attr) {
			get_offset(index,container_attr[index]);
		} 
	});
	$('body').on('touchmove',function(e) {
		e.preventDefault();
		x = e.originalEvent.targetTouches[0].clientX.toFixed(2);
        y = e.originalEvent.targetTouches[0].clientY.toFixed(2);
		$('#football').css({'left':x-40,'top':y-40});
		for (index in container_attr) {
			get_offset(index,container_attr[index]);
		} 
	});
	$('body').mousemove(function() {
		x = event.clientX;
		y = event.clientY;
		$('#football').css({'left':x-40,'top':y-40});
		for (index in container_attr) {
			get_offset(index,container_attr[index]);
		} 
	});
});