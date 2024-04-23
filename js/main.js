jQuery(document).ready(function($){
	var tabs = $('.cd-tabs');
	
	tabs.each(function(){
		var tab = $(this),
			tabItems = tab.find('ul.cd-tabs-navigation'),
			tabContentWrapper = tab.children('ul.cd-tabs-content'),
			tabNavigation = tab.find('nav');

		tabItems.on('click', 'a', function(event){
			event.preventDefault();
			var selectedItem = $(this);
			if( !selectedItem.hasClass('selected') ) {
				var selectedTab = selectedItem.data('content'),
					selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
					slectedContentHeight = selectedContent.innerHeight();
				
				tabItems.find('a.selected').removeClass('selected');
				selectedItem.addClass('selected');
				selectedContent.addClass('selected').siblings('li').removeClass('selected');
				//animate tabContentWrapper height when content changes 
				tabContentWrapper.animate({
					'height': slectedContentHeight
				}, 200);
			}
		});

		//hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
		checkScrolling(tabNavigation);
		tabNavigation.on('scroll', function(){ 
			checkScrolling($(this));
		});
	});
	
	$(window).on('resize', function(){
		tabs.each(function(){
			var tab = $(this);
			checkScrolling(tab.find('nav'));
			tab.find('.cd-tabs-content').css('height', 'auto');
		});
	});

	function checkScrolling(tabs){
		var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation').width()),
		 	tabsViewport = parseInt(tabs.width());
		if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
			tabs.parent('.cd-tabs').addClass('is-ended');
		} else {
			tabs.parent('.cd-tabs').removeClass('is-ended');
		}
	}
});

function format_input_txt(e,x){
	
		if (x.val().length === 1){c_t_l = 1;}else{c_t_l = 0;}
		if ( e.keyCode !== 189 && e.keyCode !== 109 && e.keyCode !== 13 && e.keyCode !== 37 && e.keyCode !== 38 && e.keyCode !== 39 && e.keyCode !== 40   && e.keyCode !== 17 && e.keyCode !== 65){
			caret = x.caret();
			var num = x.val().replace(/\,/g,'');
			x.val(number_format(x,num));
			var c_pos = x.val().split(",").length - 1;
			
			if(c_pos >= 1 && x.val().split(",")[0].replace("-","").length === 1 ){
				
				if(caret !== 7){
					x.caret(caret+1);
				}else{
					x.caret(caret);
				}
				
			}else{
				x.caret(caret);
			}

			if( e.keyCode === 8 && c_pos === 0 && x.val().split(",")[0].split(".")[0].replace("-","").length === 3 ){
				x.caret(caret-1);
			}else if(e.keyCode === 8 && c_pos === 1){
				if(x.val().split(",")[0].length === 3){
					x.caret(caret-1);
				}else{
					x.caret(caret);
				}
			}else if(e.keyCode === 8 && c_pos > 1 ){
				if(x.val().split(",")[0].replace("-","").length === 3){
					x.caret(caret-1);
				}else{
					x.caret(caret);
				}
			}

		}else if (e.keyCode === 13){
			$("input[type=text]:eq(0)").focus();
		}

		if(e.keyCode === 110){
	
			x.caret(x.val().split(".")[0].replace("-","").length+1);
		}

		if(e.keyCode === 190){
	
			x.caret(x.val().split(".")[0].replace("-","").length+1);
		}

	}

	function RoundNum(num, length) { 
	    var number = Math.round(num * Math.pow(10, length)) / Math.pow(10, length);
	    return number;
	}


		function number_format(x,total){
			if(x.attr("attrdec") !== 'no'){
				if(total !== ''){
				var neg = false;
				var k =  parseFloat(total, 10);

				k = RoundNum(k,2);

			    if(total < 0) {
			        neg = true;
			        total = Math.abs(total);
			    }
			    return (neg ? '' : '') + k.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

				}
			}else{
				while (/(\d+)(\d{3})/.test(total.toString())){
				total = total.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
			}
			return total;
			}

		}

