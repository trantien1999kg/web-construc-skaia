"use strict";

_FRAMEWORK={

	init:function(){

		_FRAMEWORK.preLoader();
		
		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.submitContact();

		_FRAMEWORK.menuMobile();

		_FRAMEWORK.validateForm();

		_FRAMEWORK.tocList();

		_FRAMEWORK.owlSlider();

		_FRAMEWORK.tabtoggle();

		_FRAMEWORK.scrollTo();

		_FRAMEWORK.simple();

		_FRAMEWORK.mmenu();

		_FRAMEWORK.sortChange();

		_FRAMEWORK.magicZoomplus();

		_FRAMEWORK.mobiTool();

		_FRAMEWORK.map();

		_FRAMEWORK.active();

		_FRAMEWORK.introTop();

		_FRAMEWORK.ajaxHandle();

		_FRAMEWORK.ratioImage();

		_FRAMEWORK.typeWritter();

		_FRAMEWORK.fileterShow();

		_FRAMEWORK.LoadingImages();

		new WOW().init();

	},
	mmenu:function(){

		if(exists("nav#mmenu")){
	
			$('nav#mmenu').mmenu({
	
				extensions  : [ 'effect-slide-menu', 'pageshadow' ],
	
				searchfield : false,
	
				counters  : false,
	
				offCanvas: {
	
					position  : "left"
	
				},
	
			});
	
		}
	},

	simple:()=>{
		$('.js-tab').click(function(){
			let target = $(this).data('target');
			$('.box-tab').removeClass('show');
			$(target).addClass('show');
		})
		$('.js-tab').hover(function(){
			let target = $(this).data('target');
			$('.box-tab').removeClass('show');
			$(target).addClass('show');
		})
	},


	fileterShow:function(){

        $('#opensideBar-product').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

				$('.opensideBar-product__text').html('Thu gọn');

	            // $('body').append('<div class="bg-mask"></div>');

	            $('.sideBar-product').css({'transform': 'translateX(0%)','visibility':'visible'});

	        } else {

	            $(this).removeClass('active');

				$('.opensideBar-product__text').html('Bộ lọc');

	            // $('.bg-mask').remove();

	            $('.sideBar-product').css({'transform': 'translateX(-105%)','visibility':'hidden'});

	        }

	    });
        // $('body').on('click', '.bg-mask', function() {

	    //     $('.bg-mask').remove();

	    //     $('#opensideBar-product').removeClass('active');

        //     $('.sideBar-product').css({'transform': 'translateX(-105%)','visibility':'visible'});

	    // });

    },
	lzload:function(){
		$(window).scroll(function(){
			var top = $(this).scrollTop();
			$('.lzload').each(function(){
				if(top > $(this).offset().top - 400){
					$(this).addClass('loaded');
				};
			});
		});
	},
	LoadingImages:function(){

		const images = document.querySelectorAll(".ratio-img__content");

		const imgOptions = {};
		const imgObserver = new IntersectionObserver((entries, imgObserver) => {

		entries.forEach((entry) => {

			if (!entry.isIntersecting) return;

			const img = entry.target;

			const newUrl = img.getAttribute('data-src');

			img.src = newUrl;

			img.classList.remove('img-scale');

			imgObserver.unobserve(entry.target);
			
		});

		}, imgOptions);

		images.forEach((img) => {
			imgObserver.observe(img);
		});

	},
	ratioImage:function(){

		var ratioAll = document.querySelectorAll('.ratio-img');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("img-width");

			let height = ratioAll[index].getAttribute("img-height");
			
			ratioAll[index].style.setProperty('--data-ratio',`calc((${height} / ${width}) * 100%)`);

			
		}

	},
	pagingData:function(page, per_page, url, id_list,id_cat,type, tabs){
		$.post(
			"ajax_paging/"+url,
			{
				page: page,
				per_page: per_page, 
				id_list: id_list, 
				id_cat:id_cat,
				type: type
			},function(data,status){

				if(status == "success"){

					$(tabs).html(data);

					$(tabs + ' .pagination li.active').click(function() {

						var pager = $(this).attr('p');

						_FRAMEWORK.pagingData(pager, per_page, url, id_list,id_cat,type, tabs);

						goToByScroll(tabs);

					});

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();
					
				}
			}
		);
	},

	introTop:function(){
		
		var idx=0;

		setInterval(function(){

			var intro = '.intro-col'+idx;

			$('.col-intro__check').find('.wrapper-introduces__boxbottom').removeClass('activeIntro');

			$(intro).find('.wrapper-introduces__boxbottom').addClass('activeIntro');

			idx++;

			if(idx==5){

				idx=0;

			}

		},1000);
	
	},
	ClickSearch:function(){

		$("#SeachOnClick").click(()=>{

		});

	},

	submitFormCheckOut:function(){

        $('#checkout-modal__submit-form').click(function(){

            $("#form-checkout" ).submit();

        });

    },

	checkoutModal:function(){

			$(".js-checkout__tpl").click(function(){

				var name = $('.wrap-input__checkout-name').val();

				var email = $('.wrap-input__checkout-email').val();

				var phone = $('.wrap-input__checkout-phone').val();

				var city = $('.wrap-input__checkout-city').val();

				var dist = $('.wrap-input__checkout-dist').val();

				var address = $('.wrap-input__checkout-address').val();

				var content = $('.wrap-input__checkout-content').val();

				var payship = $('.wrap-input__checkout-payship').val();

				var payment = $('.wrap-input__checkout-payment').val();

				var total = $('.wrap-input__checkout-payment-total').val();

				if (isBlank(name)){

					_FRAMEWORK.showError('Tên không được bỏ trống!!!','error');

					$('.input wrap-input__checkout-name').focus();
	
					return false;
	
				} else if (isBlank(phone)) {

					_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				} else if (!validatePhone(phone)) {

					_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				}else if (isBlank(city)) {

					_FRAMEWORK.showError('Bạn chưa chọn tỉnh thành!!!','error');
	
					return false
	
				}else if (isBlank(dist)) {

					_FRAMEWORK.showError('Bạn chưa chọn quận huyện!!!','error');
	
					return false
	
				}else if (isBlank(address)) {

					_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');
	
					return false
	
				}else{

				
				$.post("ajax/modal-checkout.php",{
					name:name,
					phone:phone,
					email:email,
					address:address,
					content:content,
					payship:payship,
					payment:payment,
					total:total
				},
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						_FRAMEWORK.submitFormCheckOut();
						$(".close-modal").click(function(){
							$("#modal-contact").remove();
						})
					}
				});

				}
				
			});
		   
			$("body").click(".modal,.modal-container",function(event){   
				var modals = document.getElementById("modal-contact");   
				var container = document.getElementById("modal-container");
				if(event.target == modals || event.target == container){
					$("#modal-contact").remove();
				}
			})
	},
	active:()=>{

		$(".js-cat").click(function(){

			$('.wrap-products__list-links').removeClass('activeM');
			
			var $this = $(this);
			$this.addClass('activeM');
			var targetid = $this.attr("data-target");
			var idlist = $this.attr("data-list");
			var idcat = $this.attr("data-cat");
			var type = $this.attr("data-type");
			 $(".js-cat[data-target='" + targetid + "']").removeClass("activeM");
			$this.addClass("activeM");
			_FRAMEWORK.pagingData(1,PAGE_INDEX,"ajax_paging.php",idlist,idcat,type,targetid);
		});
	},
	// cartShoppingDetail:() => {
	// 	$('.js-color').click(function(){
    //         var target = $(this).data('target');
    //         var value = $(this).data('value');
    //         var size=$('.js-size.active').data('value');
    //         $('.js-color').removeClass('active');
    //         $(this).addClass('active');
    //         $(target).val(value);
    //     });
    //     $('.js-size').click(function(){
    //         var target = $(this).data('target');
    //         var value = $(this).data('value');
    //         var color=$('.js-color.active').data('value');
	// 		var type = $(this).attr('data-type');
    //         $('.js-size').removeClass('active');
    //         $(this).addClass('active');
    //         $(target).val(value);
    //         updatePriceDetail(_PID,value,type);
    //     });
	// },
	// catology:()=>{

	// 	$('a[data-catology-prev]').click(function(){
	// 		var scroll = $(this).next().scrollLeft();
	// 		$(this).next().scrollLeft(scroll-100);
	// 	})
	// 	$('a[data-catology-next]').click(function(){
	// 		var scroll = $(this).prev().scrollLeft();
	// 		$(this).prev().scrollLeft(scroll+100);
	// 	})
	// },
	// overflowscroll:function(){
	// 	$('a[data-catology-prev]').click(function(){
	// 		var scroll = $(this).next().scrollLeft();
	// 		$(this).next().scrollLeft(scroll-400);
	// 	});

	// 	$('a[data-catology-next]').click(function(){
	// 		var scroll = $(this).prev().scrollLeft();
	// 		$(this).prev().scrollLeft(scroll+400);
	// 	});

	// },
	// ajaxMore:function(){

	// 	if(exists('#tab-paging')){

	// 		$('body').on('click', 'a.tab-video__links[data-tabs-video]', function() {

	// 			$("a.tab-video__links[data-tabs-video]").removeClass("active");

	// 			$(this).toggleClass("active");

	// 			// if($(this).is("li")){
	// 			// 	$("li.nav__default-items[data-tabs-build]").removeClass("active");
	// 			// 	$(this).toggleClass("active");
	// 			// }else{
	// 			// 	$("li.nav__default-items[data-tabs-build]").removeClass("active");
	// 			// 	$(this).parent().toggleClass("active");
	// 			// }

	// 	        var id = $(this).attr('data-id');

	// 			var type = $(this).attr('data-type');

	// 	        getResult("ajax/ajaxtabvideo.php?cateid=" + id +"&type="+ type,"#viewvideo",0);

	// 	        return false;

	// 	    });

	// 	    $('a.tab-video__links[data-tabs-video]:first').trigger('click');

	// 	}
	// 	$('.select-lang').on('change',(e)=>{
	// 		var val = $(e.target).val();
	// 		window.location.href="lang?locale="+val;
	// 	});
	// 	$('.yeuthich').click((e)=>{
	// 		var idproduct = $(e.target).attr('data-id');
	// 		$.ajax({



	// 			url:'ajax/ajax_favor.php',



	// 			data:{

	// 				id:idproduct

	// 			},



	// 			type: 'POST',



	// 			dataType: 'json',



	// 			beforeSend: function(){



	// 				$(e.target).addClass('loading');



	// 			},

	// 			success: function(data){
	// 				$('.label-favor__qty').html(data.countfavor);
	// 				$('#view-favor').append(data.html);
	// 				_FRAMEWORK.showError(data.message,'success');
	// 			},

	// 			complete: function(){

	// 				$(e.target).removeClass('loading');

	// 			}



	// 		});
	// 	});

	// 	for (let i = 0; i <= 6; i++) {
	// 		var images = 'images'+i;
	// 		$(`[data-fancybox=${images}]`).fancybox({
	// 			thumbs : {
	// 			  autoStart : true
	// 			},
	// 			buttons : [
	// 			  'zoom',
	// 			  'close'
	// 			]
	// 		  });
			
	// 	}
		
	// 	$('.product__box-content-category').click(function() {
	// 		var $this = $(this);
	// 		if ($this.parent().hasClass('active')) {
	// 			$this.parent().removeClass('active');
	// 			$this.next().slideUp();
	// 			$this.find("i").removeClass('fa-chevron-right');
	// 			$this.find("i").addClass('fa-chevron-down');
	// 		} else {
	// 			$(".product__box-content-category").parent().removeClass('active');
	// 			$(".product__box-content-category").next().slideUp();
	// 			$(".product__box-content-category").find("i").removeClass('fa-chevron-right');
	// 			$(".product__box-content-category").find("i").addClass('fa-chevron-down');
	// 			$this.parent().addClass('active');
	// 			$this.next().slideDown();
	// 			$this.find("i").removeClass('fa-chevron-right');
	// 			$this.find("i").addClass('fa-chevron-down');			
	// 		}
	// 	});

		

	// 	$('li.favor').click((e)=>{
	// 		if($(e.target).is("li")){

	// 			$('li.question').removeClass("active");
	// 			$(e.target).toggleClass("active");
	// 		}else{
	// 			$('li.question').removeClass("active");
	// 			$(e.target).parent().toggleClass("active");
	// 		}
			
	// 	});
		
	// 	$('li.question').click((e)=>{
	// 		if($(e.target).is("li")){
	// 			$('li.favor').removeClass("active");
	// 			$(e.target).toggleClass("active");
	// 		}else{
	// 			$('li.favor').removeClass("active");
	// 			$(e.target).parent().toggleClass("active");
	// 		}
	// 	});

	// 	$('.nav-question__links').click(function() {
	// 		var $this = $(this);
	// 		if ($this.parent().hasClass('active')) {
	// 			$this.parent().removeClass('active');
	// 			$this.next().slideUp();
	// 			$this.find("i").removeClass('fa-minus');
	// 			$this.find("i").addClass('fa-plus');
	// 		} else {
	// 			$(".nav-question__links").parent().removeClass('active');
	// 			$(".nav-question__links").next().slideUp();
	// 			$(".nav-question__links").find("i").removeClass('fa-minus');
	// 			$(".nav-question__links").find("i").addClass('fa-plus');
	// 			$this.parent().addClass('active');
	// 			$this.next().slideDown();
	// 			$this.find("i").removeClass('fa-plus');
	// 			$this.find("i").addClass('fa-minus');			
	// 		}
	// 	});
		

	// 	if(exists('a.more-paging[data-view]')){

	// 		$('a.more-paging[data-view]').click(function(){

	//             var _o=$(this);

	//             var type=_o.attr('data-type');

	//             var p=_o.attr('data-p');

	//             var view=_o.attr('data-view');

	// 			var table = _o.attr('data-table');

	//             var item=_o.attr('data-item');

	// 			var databox = _o.attr('data-target');

	//             var _c=parseInt(p)+1;

	// 			var itemDouble = item * 2;



	//             $.ajax({



	//                 url:'ajax/loadPaging.php',



	//                 data:{

	//                     p:p,


	//                     item:item,



	//                     type:type,


	// 					table:table,

	//                 },



	//                 type: 'POST',



	//                 dataType: 'json',



	//                 beforeSend: function(){



	//                     _o.addClass('loading');



	//                 },

	//                 success: function(data){

	//                     _o.attr('data-p',_c);

	// 					_o.attr('data-item',itemDouble);

	//                     $(""+databox).append(data['html']);

	//                     if(data['count-list']==0){

	//                     	_o.addClass('d-none');

	//                     }

	//                 },

	//                 complete: function(){

	//                     _o.removeClass('loading');

	//                 }



	//             })



	//         });

	// 	}

		

    //     if(exists('#tab-paging')){

	// 		$('body').on('click', '.box-nav-js li[data-tabs]', function() {

	// 	        $('li[data-tabs]').removeClass('active');

	// 	        $(this).addClass('active');

	// 	        var id = $(this).attr('role');

	// 	        getResult("ajax/ajax_paging.php?cateid=" + id,"#view-load-product",0);

	// 	        return false;

	// 	    });

		    

	// 	}

	// 	$('#form-search__des').click((e)=>{
	// 		$(e.target).toggleClass('fa-times');
	// 		$('.search-top__form').toggleClass('active');
	// 	});

	// 	$('.wp-albums__box-left-content-link').click((e)=>{
	// 		$('.wp-albums__box-left-content-link').removeClass('active');
	// 		$(e.target).toggleClass('active');
	// 	});
	// 	if(exists('#tab-paging')){

	// 		$('body').on('click', 'li.wp-albums__box-left-content-item[data-tabs]', function() {

	// 	        var id = $(this).attr('data-id');

	// 	        getResultStore("ajax/tabstore.php?cateid=" + id,"#view-album-store","#view-img-store",0);

	// 	        return false;

	// 	    });

		    

	// 	}
	// 	$('.support-box__left-items').click((event)=>{
	// 			$('.support-box__left-items').removeClass('active');

	// 			if($(event.target).is('li')){
	// 				$('.support-box__left__links').removeClass('active');
	// 				$(event.target).toggleClass('active');
	// 			}else{
	// 				$(event.target).parent().toggleClass('active');
	// 				$('.support-box__left__links').removeClass('active');
	// 			}
	// 	});
	// 	if(exists('#tab-paging')){

	// 		$('body').on('click', 'li.support-box__left-items[data-tabs]', function(e) {
				
				

	// 	        var id = $(this).attr('data-id');

	// 	        getResultStore("ajax/tabhotro.php?cateid=" + id,"#hotro-view",0);

	// 	        return false;

	// 	    });

	// 	    $('li.support-box__left-items[data-tabs]:first').find('.support-box__left__links').trigger('click');

	// 	}

	// },


	owlSlider: () => {
		if (exists('#owl-duan')) {
			$('#owl-duan').owlCarousel({
				items: 2,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1200: {

						items: 2

					}

				}
			});
		}

		if (exists('#owl-why')) {
			$('#owl-why').owlCarousel({
				items: 2,
				slideSpeed: 1500,
				autoplayHoverPause: false,
				margin: 20,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 2
					},
					600: {
						items: 2
					},
					1200: {

						items: 2

					}

				}
			});
		}
		if (exists('#owl-tintuc')) {
			$('#owl-tintuc').owlCarousel({
				items: 3,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 2
					},
					1200: {
						items: 3
					},


				}
			});
		}
	},



	chaychu:function(){
		$('.chaychu > div').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});
	},
	map:function(){
		$(".js-active").click(function(){
			var $this = $(this);
			var targetid = $this.attr("data-target");
			$(".js-active").removeClass("active");
			
			$this.addClass("active");
			if(!$(targetid).hasClass("active")){	
				$(targetid).addClass("active");			
			}else{
				$(targetid).removeClass("active");	
			}
		});
		$('body').click(".js-map",function(e){
			var id = e.target.getAttribute('data-id');
			if(id != "" & id != null & id != undefined){
				var params = {id:id};
			}else{
				if(e.target.classList.contains('js-map')){
					params = {};
				}
			}
			if(e.target.classList.contains('js-map')){
				$.post("ajax/loadMap.php",params,
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						$(".close-modal").click(function(){
							$("#modal-map").remove();
						})
					}
				})
				$("body").click(".modalmap,.modalmap-container",function(event){   
					var modals = document.getElementById("modal-map");   
					var container = document.getElementById("modalmap-container");
					if(event.target == modals || event.target == container){
						$("#modal-map").remove();
					}
				})
			}
		});
	},
	preLoader:function(){

		var h_s=$('.h__box__subject').height()/3;

		if(h_s>0){

			$('.h__box__subject').css({'max-height':'10'+'px','overflow':'hidden'}).append('<div class="append__subject"><a class="expend"><span>Xem thêm</span>&nbsp;<i class="fa-light fa-angle-down"></i></a></div>');
			$('body').on('click','.append__subject a.expend',function(){
				if(!$(this).hasClass('is-expend')){
					$(this).addClass('is-expend');
					$('.h__box__subject').css('max-height','100%');
					$('.append__subject a.expend span').text('Thu gọn');
					$('.append__subject a.expend i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
				}else{
					$(this).removeClass('is-expend');
					$('.h__box__subject').css('max-height','10px');
					$('.append__subject a.expend span').text('Xem thêm');

					var elementScroll = '.h__box__subject';
					goToByScroll(elementScroll);

					$('.append__subject a.expend i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
				}
				
			});
			
		}
		
		

        // $('.nice-select').niceSelect();

        // $('.marquee').marquee({

        //     speed: 20000,

        //     gap: 50,

        //     delayBeforeStart: 0,

        //     direction: 'left',

        //     duplicated: true,

        //     pauseOnHover: true

        // });

		
		$('.popup__close-btn').click(()=>{
			$('.home--popup').remove();
		});

        

    },

    magicZoomplus:function(){

    	if(exists('.product-detail-slider')){

		    var owl = $(".product-detail-slider").owlCarousel({

			    autoplay: true,

			    autoplaySpeed: 300,

			    loop: true,

			    navSpeed: 300,

			    items: 4,

			    margin: 2,

			    nav: true,

		        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']

			  });

		}

    },

	ajaxHandle:function(){

		$('.call-back__detail').click(()=>{

			var phone = $('input[name="txt-phone-detail"]').val();

			if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			}else{

				$.ajax({

					url:'ajax/ajaxContactPhone.php',

					type:'post',

					dataType:'json',
					
					data:{phone:phone},

					beforeSend:function(){

						$('.call-back__detail').addClass('loading');

					},
					success:function(data){

						if(data.status==200){

							_FRAMEWORK.showError(data.message,'success');

							$('input[name="txt-phone-detail"]').val('');

						}else{

							_FRAMEWORK.showError(data.message,'error');

							$('input[name="txt-phone-detail"]').val('');

						}

					},
					complete:function(){

						$('.call-back__detail').removeClass('loading');

					}
				});
				
			}

		});

		$('.wrapper-regis-btn').click(()=>{

			var name = $('input[name="regis-index-fullname"]').val();

			var email = $('input[name="regis-index-email"]').val();

			var address = $('input[name="regis-index-address"]').val();

			var phone = $('input[name="regis-index-phone"]').val();

			var content = $('textarea[name="regis-index-content"]').val();

			if(isBlank(name)){

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('input[name="regis-index-fullname"]').focus();

				return false;

			}else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('input[name="regis-index-phone"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');

				$('input[name="regis-index-phone"]').focus();

				return false;

			

			}else if(isBlank(email)){

				_FRAMEWORK.showError('Email không được bỏ trống!!!','error');

				$('input[name="regis-index-email"]').focus();

				return false;

			}else if (!isEmail(email)) {

				_FRAMEWORK.showError('Email không đúng định dạng !!!','error');

	            $('input[name="regis-index-email"]').focus();

	            return false;

	        } else{

				$.ajax({

					url:'ajax/ajaxNewsletter.php',

					type:'post',

					dataType:'json',

					data:{name:name,phone:phone,address:address,email:email,content:content},

					beforeSend:()=>{

						$('.wrapper-regis-btn').addClass('loading');
						
					},
					success:(data)=>{

						setTimeout(function(){

							$('.wrapper-regis-btn').removeClass('loading');

							if(data.status == 200){

								_FRAMEWORK.showError(data.message,'success');

								$('input[name="regis-index-fullname"]').val('');

								$('input[name="regis-index-phone"]').val('');

								$('input[name="regis-index-address"]').val('');

								$('input[name="regis-index-email"]').val('');

								$('textarea[name="regis-index-content"]').val('');

							}else{

								_FRAMEWORK.showError(data.message,'error');

								$('input[name="regis-index-fullname"]').val('');

								$('input[name="regis-index-phone"]').val('');

								$('input[name="regis-index-address"]').val('');

								$('input[name="regis-index-email"]').val('');

								$('textarea[name="regis-index-content"]').val('');

							}

						},1500);
					}

				})
			}
		});

		$('#footer-formgroup-btn').click(()=>{

			var name = $('input[name="footer-formgroup-fullname"]').val();

			var phone = $('input[name="footer-formgroup-phone"]').val();

			var area = $('input[name="footer-formgroup-area"]').val();

			var finance = $('input[name="footer-formgroup-finance"]').val();

			var content = $('textarea[name="footer-formgroup-content"]').val();

			if(isBlank(name)){

				_FRAMEWORK.showError('Họ và tên không được bỏ trống!!!','error');

				$('input[name="footer-formgroup-fullname"]').focus();

				return false;

			}else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('input[name="footer-formgroup-phone"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');

				$('input[name="footer-formgroup-phone"]').focus();

				return false;

			}else if (isBlank(area)) {

				_FRAMEWORK.showError('Diện tích không được bỏ trống!!!','error');

				$('input[name="footer-formgroup-area"]').focus();

				return false;

			}else if (isBlank(finance)) {

				_FRAMEWORK.showError('Tài chính không được bỏ trống!!!','error');

				$('input[name="footer-formgroup-finance"]').focus();

				return false;

			} else{

				$.ajax({

					url:'ajax/ajaxFinance.php',

					type:'post',

					dataType:'json',

					data:{name:name,phone:phone,area:area,finance:finance,content:content},

					beforeSend:()=>{

						$('#footer-formgroup-btn').addClass('loading');
						
					},
					success:(data)=>{

						setTimeout(function(){

							$('#footer-formgroup-btn').removeClass('loading');

							if(data.status == 200){

								_FRAMEWORK.showError(data.message,'success');

								$('input[name="footer-formgroup-fullname"]').val('');

								$('input[name="footer-formgroup-phone"]').val('');
					
								$('input[name="footer-formgroup-area"]').val('');
					
								$('input[name="footer-formgroup-finance"]').val('');
					
								$('textarea[name="footer-formgroup-content"]').val('');

							}else{

								_FRAMEWORK.showError(data.message,'error');

								$('input[name="footer-formgroup-fullname"]').val('');

								$('input[name="footer-formgroup-phone"]').val('');
					
								$('input[name="footer-formgroup-area"]').val('');
					
								$('input[name="footer-formgroup-finance"]').val('');
					
								$('textarea[name="footer-formgroup-content"]').val('');

							}

						},1500);
					}

				})
			}
		});

		$('.btn-baogia').click(()=>{

			var name = $('input[name="fullname2"]').val();

			var email = $('input[name="email2"]').val();

			var phone = $('input[name="phone2"]').val();

			var content = $('textarea[name="content2"]').val();

			if(isBlank(name)){

				_FRAMEWORK.showError('Tên không được bỏ trống!!!','error');

				$('input[name="fullname2"]').focus();

				return false;

			}else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('input[name="phone2"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');

				$('input[name="phone2"]').focus();

				return false;

			}else if (isBlank(email)) {

	            $('input[name="email2"]').focus();

				_FRAMEWORK.showError('Email không được bỏ trống!!!','error');

	            return false

	        } else if (!isEmail(email)) {

				_FRAMEWORK.showError('Email không đúng định dạng !!!','error');

	            $('input[name="email2"]').focus();

	            return false;

	        }else{
				$.ajax({

					url:'ajax/ajaxBaogia.php',

					type:'post',

					dataType:'json',

					data:{name:name,phone:phone,content:content,email:email},

					beforeSend:()=>{

						$('.btn-baogia').addClass('loading');
						
					},
					success:(data)=>{

						if(data.status == 200){

							_FRAMEWORK.showError(data.message,'success');

							$('input[name="fullname2"]').val('');

							$('input[name="email2"]').val('');

							$('input[name="phone2"]').val('');

							$('textarea[name="content2"]').val('');

						}else{

							_FRAMEWORK.showError(data.message,'error');

							$('input[name="fullname2"]').val('');

							$('input[name="email2"]').val('');

							$('input[name="phone2"]').val('');

							$('textarea[name="content2"]').val('');

						}
					},
					complete:()=>{

						$('.btn-baogia').removeClass('loading');

					}

				})
			}
		});
	},

	scrollTo:function(){

		$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 100) {

	            $('#back-to-top .top').addClass('animate_top');

	        } else {

	            $('#back-to-top .top').removeClass('animate_top');

	        }

	    });

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 130) {

	            $('.scroll-fixed').addClass('fixed');

	        } else {

	            $('.scroll-fixed').removeClass('fixed');

	        }

	    });

	    $('#back-to-top .top').click(() => {

	        $('html, body').animate({ scrollTop: 0 }, 500);

	    });

		$('#slide-menu-right').click(function() {

            var container = $('#slide-menu');

            sideScroll(container, 'right', 25, 100, $(".slide-menu").width());

        });



        $('#slide-menu-left').click(function() {

            var container = $('#slide-menu');

            sideScroll(container, 'left', 25, 100, $(".slide-menu").width());

        });

	},

	validateForm:function(){

		if(exists($('#submit-form'))){

			$('#submit-form').validate({

		        rules: {

		            'fullname': { required: true },

		            'email': { required: true,validateEmail: true,email: true },

		            'phone':{ required:true,validatePhone: true},

		            'address':{ required: true},

		            'services':{ required: true}

		        },

		        messages: {

		            'fullname': { required: 'Bạn chưa nhập họ tên' },

		            'email': { required: 'Bạn chưa nhập email',validateEmail:'Email không đúng định dạng',email:'Email không đúng định dạng' },

		            'phone':{ required:'Bạn chưa nhập điện thoại',validatePhone:'Điện thoại không đúng định dạng'},

		            

		            'services':{ required: 'Bạn chưa chọn dịch vụ'}

		        },

		        submitHandler: function(form) {

		            var thisForm = $(form);

		            if (thisForm.valid()) {

		                $.ajax({

	                    	url: 'ajax/ajaxNewsletter.php',

		                    type: thisForm.attr('method'),

		                    data: thisForm.serialize(),

		                    dataType: 'JSON',

		                    beforeSend:function(){

				                $('#btn-submit').addClass('loading');

				            },

				            error:function(res){

				                $('#btn-submit').removeClass('loading');

				                _FRAMEWORK.showError('server error!', 'error');

				            },

				            success:function(res) {

				                setTimeout(function(){

				                    $('#btn-submit').removeClass('loading');

				                    if(res.status==200){

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }else{

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }

				                },1500);

				            }

		                });

		                return false;

		            }

		        }



		    });

		    $.validator.addMethod("validateEmail", function (value, element) {

	            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);

	        }, 'Email sai định dạng');

	        $.validator.addMethod("validatePhone", function (value, element) {

	            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);

	        }, 'Điện thoại sai định dạng');

	    }

	},

	blockSite:function(){

		if(nonecopy==1){

			function clickIE() {

				if (document.all) {return false;}
	
			}
	
			function clickNS(e) {
	
				if (document.layers||(document.getElementById&&!document.all)) {
	
				if (e.which==2||e.which==3) {return false;}}
	
			}
	
			if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
	
			function disableselect(e){
	
				return false
	
			}
	
			function reEnable(){
	
				return true
	
			}
	
			document.onselectstart=new Function ("return false")
	
			if (window.sidebar){
	
				document.onmousedown=disableselect
	
				document.onclick=reEnable
	
			}
	
			$(document).keydown(function(event){
	
				if(event.ctrlKey && event.shiftKey && event.keyCode==73)
	
				{        
	
					return false;
	
				}
	
				if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
	
					return false;
	
				}
	
				if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {
	
					return false;
	
				}
	
				// "U" key
	
				if (event.ctrlKey && event.keyCode == 85) {
	
					return false;
	
				}
	
				 if (event.keyCode == 123) {
	
					return false;
	
				}
	
			});
	
		}
   
	},

	menuMobile:function(){

		$('div[data-toggle-menu]').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

	            $('body').append('<div class="bg-mask"></div>');

	            $('.box-modal-menu').css({'transform': 'translateX(0)','left':'0'});

	        } else {

	            $(this).removeClass('active');

	            $('.bg-mask').remove();

	            $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	        }

	    });

	    $('body').on('click', '.bg-mask', function() {

	        $('.bg-mask').remove();

	        $('.navbar-menu').removeClass('active');

	        $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	    });

	    $('span.drop').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).removeClass('active');

	            $(this).addClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	            $(this).closest('li').find('>ul').stop().slideDown();

	        } else {

	            $(this).removeClass('active');

	            $(this).removeClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	        }

	    });

	    $('#fabCheckbox').click(function() {

            if (this.checked) {

                $('.mask-overlay').addClass('is-active');

            } else {

                $('.mask-overlay').removeClass('is-active');

            }

        });

	},

	tabtoggle: function(){

		$('.js-droptabdetail').click(function() {

			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-down');
				$this.find("i").addClass('fa-chevron-up');
			} else {
				$(".js-droptabdetail").parent().removeClass('active');
				$(".js-droptabdetail").next().slideUp();
				$(".js-droptabdetail").find("i").removeClass('fa-chevron-down');
				$(".js-droptabdetail").find("i").addClass('fa-chevron-up');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-up');
				$this.find("i").addClass('fa-chevron-down');			
			}
		});

	},

	carouselSlider:function(){

		var owl = $('.owl-carousel.in-home');

	  		owl.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlQuick = $('.owl-carousel.quick-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owldanhmuc = $('.owl-carousel.danhmuc-slider');

		owldanhmuc.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="button-slider__prev button-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="button-slider__next button-slider__btn"><i class="fa-light fa-angle-right"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlDichvu = $('.owl-carousel.dichvu-slider');

		owlDichvu.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="button-slider__prev button-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="button-slider__next button-slider__btn"><i class="fa-light fa-angle-right"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlFeedBack = $('.owl-carousel.feedbacks-slider');

		owlFeedBack.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="button-slider__prev button-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="button-slider__next button-slider__btn"><i class="fa-light fa-angle-right"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		$('.button-slider__prev--feedbacks').click(function() {

			owlFeedBack.trigger('prev.owl.carousel');
	
		});
		
		$('.button-slider__next--feedbacks').click(function() {
	
			owlFeedBack.trigger('next.owl.carousel');
	
		});

		$('.prev--project').click(function() {

			$('.owl-carousel-project').trigger('prev.owl.carousel');
	
		});
		
		$('.next--project').click(function() {
	
			$('.owl-carousel-project').trigger('next.owl.carousel');
	
		});

		$('.prev--qoute').click(function() {

			$('.owl-carousel-qoute').trigger('prev.owl.carousel');
	
		});
		
		$('.next--qoute').click(function() {
	
			$('.owl-carousel-qoute').trigger('next.owl.carousel');
	
		});

		$('.button-slider__prev--category').click(function() {

			owldanhmuc.trigger('prev.owl.carousel');
	
		});
		
		$('.button-slider__next--category').click(function() {
	
			owldanhmuc.trigger('next.owl.carousel');
	
		});

		$('.button-slider__prev--services').click(function() {

			owlDichvu.trigger('prev.owl.carousel');
	
		});
		
		$('.button-slider__next--services').click(function() {
	
			owlDichvu.trigger('next.owl.carousel');
	
		});


		var owlQuickProduct = $('.owl-carousel.quick-slide-product');

		owlQuickProduct.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var fbSlider = $('.owl-carousel.slider-introduces');

		fbSlider.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({
				
				center:true,

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlBanner = $('.owl-carousel.banner-home');

			owlBanner.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

                animateOut: 'fadeOut',

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlservice = $('.owl-carousel.service');

			owlservice.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:true,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

	  	var parnerCarousel = $('.carousel-parner');

        parnerCarousel.owlCarousel({



            items:2,



            loop:true,



            margin:20,



            responsiveClass:true,

    

            dots:0,

    

            nav:0,

    

            navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

    



            autoplay:0,

    

            autoplayTimeout: 4000,

    

            smartSpeed: 3000,

    

            autoplayHoverPause:true,

    

            autoHeight:false



        });

		if(exists("#sync1")){
			var sync1 = $("#sync1 .owl-theme");
		    var sync2 = $("#sync2 .owl-theme");
		    var slidesPerPage = 5;
		    var syncedSecondary = true;
		    sync1.owlCarousel({
			    items : 1,
			    slideSpeed : 2000,
			    nav: true,
			    navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
			    center: false,
			    autoplay: true,
			    autoplayHoverPause: true,
			    dots: false,
			    loop: true,
			    lazyLoad:true,
			    responsiveRefreshRate : 200
			    
		    }).on('changed.owl.carousel', syncPosition);
		  
		    sync2
		      .on('initialized.owl.carousel', function () {
		        sync2.find(".owl-item").eq(0).addClass("synced");
		      })
		      .owlCarousel({
				items : slidesPerPage,
				dots: false,
				margin:10,
				nav: false,
				loop: false,
				center: false,
				smartSpeed: 200,
				slideSpeed : 500,
				slideBy: slidesPerPage,
				responsiveRefreshRate : 100,
				responsive:{

					0:{
						items:3
					},
					600:{
						items:3
					},
					1000:{
						items:3
					},
					1200:{

						items:4

					}

				}
		    }).on('changed.owl.carousel', syncPosition2);
		  
		    function syncPosition(el) {
		      var count = el.item.count-1;
		      var current = Math.round(el.item.index - (el.item.count/2) - .5);
		      
		      if(current < 0 && 1 < 2) {
		        current = count;
		      }
		      if(current > count) {
		        current = 0;
		      }
		  
		      sync2
		        .find(".owl-item")
		        .removeClass("synced")
		        .eq(current)
		        .addClass("synced");
		      var onscreen = sync2.find('.owl-item.active').length - 1;
		      var start = sync2.find('.owl-item.active').first().index();
		      var end = sync2.find('.owl-item.active').last().index();
		      
		      if (current > end) {
		        sync2.data('owl.carousel').to(current, 100, true);
		      }
		      if (current < start && 1 < 2) {
		        sync2.data('owl.carousel').to(current - onscreen, 100, true);
		      }
		    }
		    
		    function syncPosition2(el) {
		      if(syncedSecondary) {
		        var number = el.item.index;
		        sync1.data('owl.carousel').to(number, 100, true);
		      }
		    }
		    
		    sync2.on("click", ".owl-item", function(e){
		      e.preventDefault();
		      var number = $(this).index();
		      sync1.data('owl.carousel').to(number, 300, true);
		    });
		}

	},

	navBar:function(){

		$('ul.box-nav-js li[data-tabs]').click(function(){

			$('ul.box-nav-js li[data-tabs]').removeClass('active');

			$(this).addClass('active');

			var role=$(this).attr('role');

			$('.tabs-content[data-tabs]').removeClass('active');

			$('.tabs-content[data-view-'+role+']').addClass('active');

		});

	},

	searchPage:function(){

		$('button[data-btn-search-pc]').click(function(){

        	var t=$('#keywordspc');

	        searchEnter(t);

	    });
		$('button[data-btn-search-m]').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });
	    $('button.button-search-m').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });

		$('button.btn--search').click(function(){

        	var t=$('#keywords');

	        searchEnter(t);

	    });
	    

	    $('#keywords').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywords-m').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywordspc').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });


	    $('input[role="search-input"]').placeholderTypewriter({text: _PLACEHOLDER});

		$('input[data-inputsearch-mobile]').placeholderTypewriter({text: _PLACEHOLDER});

		

	},

	typeWritter:()=>{

        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="boxslider_details__des-content typewrite_wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .typewrite_wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    },

	sortChange:function(){

	    $('select[name="js-sort-by"]').change(function(){

	        var o=$(this);

	        var s=o.val() || '';

	        var k=$('#keyword').val() || '';

	        var h = o.data('href') || '';

	        var p = o.data('page') || 1;

	        var l = o.data('show');

	        var url='';

	        if(k!=''){

	            url+='keywords='+k+'&';

	        }

	        if(s!=''){

	            url+='sortby='+s+'&';

	        }

	        if(l!=0){

	            url+='show='+l+'&';

	        }

	        if(p!=0){

	            url+='page='+p+'&';

	        }

	        var href = $('input[name=href]').val();



	        $('select[name="js-limit-by"]').attr('data-sort',s);



	        var path=url.substr(0,url.length - 1);



	        pushState({sortby: s},'',h + path);



	        doSearch({'href':href,'alias':h,'keywords':k,'sortby':s,'show':l,'page':p});

	        

	    });



	    $('select[name="js-limit-by"]').change(function(){

	        var o=$(this);

	        var s=o.val() || '';

	        var k=$('#keyword').val() || '';

	        var h = o.data('href') || '';

	        var p = o.data('page') || 1;

	        var l =o.data('sort');

	        var url='';

	        if(k!=''){

	            url+='keywords='+k+'&';

	        }

	        if(l!=0){

	            url+='sortby='+l+'&';

	        }

	        if(s!=''){

	            url+='show='+s+'&';

	        }

	        if(p!=0){

	            url+='page='+p+'&';

	        }

	        var href = $('input[name=href]').val();



	        $('select[name="js-sort-by"]').attr('data-show',s);



	        var path=url.substr(0,url.length - 1);



	        pushState({show: s},'',h + path);



	        doSearch({'href':href,'alias':h,'keywords':k,'sortby':l,'show':s,'page':p});

	        

	    });

	    

	},

	showError:function(message,status){



		 $.toast({



	        heading: 'Thông báo',



	        text: message,



	        position: 'top-right',



	        stack: false,



	        icon: status



	    });



	},

	submitContact:function(){

		$('#submit-contact').click(function() {

	        var _o=$(this);

	        var _fn = $('#customername').val();

	        var _el = $('#customerEmail').val();

	        var _pn = $('#customerPhone').val();

	        var _obj = $('#contactSubject').val();

			var _content = $('#contactMessage').val();

	        var _capcha = $('#contactCapcha').val();

	        if (isBlank(_fn)) {

	            $('#customername').focus();

	            return false;

	        } else if (isBlank(_el)) {

	            $('#customerEmail').focus();

	            return false

	        } else if (!isEmail(_el)) {

	            $('#customerEmail').focus();

	            return false;

	        } else if (isBlank(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        } else if (!validatePhone(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        }else if (isBlank(_capcha)) {

	            $('#contactCapcha').focus();

	            return false;

	        }

	        var params={

	            _fn:_fn,

	            _el:_el,

	            _pn:_pn,

	            _obj:_obj,

				_content:_content,

	            _capcha:_capcha

	        };

	        $.ajax({

	            url:'ajax/ajaxContact.php',

	            dataType:'json',

	            data:params,

	            type:'post',

	            beforeSend:function(){

	                _o.addClass('loading');

	            },

	            error:function(res){

	                _o.removeClass('loading');

	                _FRAMEWORK.showError('server error!', 'error');

	            },

	            success:function(res) {

	                setTimeout(function(){

	                    _o.removeClass('loading');

	                    if(res.status==200){

	                        _FRAMEWORK.showError(res.message, res.error);

	                        $('#customername').val('');

	                        $('#customerEmail').val('');

	                        $('#customerPhone').val('');

	                        $('#contactSubject').val('');

	                        $('#contactMessage').val('');

	                        $('#contactCapcha').val('');

	                    }else{

	                        _FRAMEWORK.showError(res.message, res.error);

	                    }

	                },1500);

	            }

	        })

	    });

	},

	mobiTool: function(){
		
		$(".js-moredetail").click(function(){
            var target = $(this).data('target');
            $(target).toggleClass('active');
            if($(target).hasClass('active')){
                $(this).html('THU GỌN');
            }else{     
                $(this).html('XEM THÊM');
            }
        })

		$('.js-bank-pop').click(function(){
            var target = $(this).data('target');
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(target).removeClass('active');
            }else{
                $('.bankpop').removeClass('active');
                $('.js-bank-pop').removeClass('active');
                $(this).addClass('active');
                $(target).addClass('active');
            }
        });
		
        $('.js-mobi-tool').click(function(){
            var $this = $(this);
            var target = $this.data('target');
            var id = $this.attr('id');
            $('.js-mobi-tool').each(function(){
                if($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')){
                    var t = $(this).data('target');
                    $(this).find('.mobi-tool-act').removeClass('active');
                    $(t).removeClass('active');
                }
            })
            $this.find('.mobi-tool-act').toggleClass('active');
            $(target).toggleClass('active');
        });
        $(".toggle-btn").click(function(e){
            e.preventDefault();
            var $next = $(this).parent().next();
            var $grandparent = $(this).parent().parent().parent();
            $grandparent.find("li").removeClass('active');
            $grandparent.find(".ic-arrow").removeClass('active');
            if($next.hasClass("show")){
                $next.removeClass("show");
                $next.slideUp(500);
                $(this).parent().parent().addClass('active');
            }else{
                $grandparent.find("li .inner").removeClass("show");
                $grandparent.find("li .inner").slideUp(500);
                $grandparent.find("i").attr("class","fal fa-chevron-down");
                $next.slideDown(500);
                $(this).parent().parent().addClass('active');
                $(this).addClass('active');
                $next.addClass("show");
            }
            
        });
        $('.js-droptab').click(function() {
            var $this = $(this);
            $('.js-droptab').removeClass('active');
            if ($this.parent().hasClass('active')) {
                $this.parent().removeClass('active');
                $this.removeClass('active');
                $this.next().slideUp(500);
            } else {
                $(".js-droptab").parent().removeClass('active');
                $(".js-droptab").next().slideUp(500);
                $this.parent().addClass('active');
                $this.addClass('active');
                $this.next().slideDown(500);		
            }
        });
    },

	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.content'),

	            status: true

	          });

	          $('a#toc').click(function(){

	            $('.toc-list').toggle(200);

	          });

	        $('.toc-list').find('a').click(function(e) {

	            e.preventDefault();

		        var x = $(this).attr('data-rel');

		        goToByScroll(x);

		    });

	    }

	},
	addCart:()=>{

		$('body').on('click','.js-addcart',function(e){

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					
					pid:id,

					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
	 
				success:function(res){
	 
				$('.viewcart').html(res['total-product']);

				$('.viewcartm').html(res['total-product']);

				$('.view-cart').html(res['total-product']);

				$('.view-cartm').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				// _FRAMEWORK.showError(res['total-price'],'success');
					
	 
				},
	 
				complete:function(){
					$('#loader').removeClass('active');
					_FRAMEWORK.showError('Thêm vào giỏ hàng thành công !','success');
	 
				}
	 
			});
			
	
		});

		$('body').on('click','.js-addcart-buynow',function(e){

			

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');

			
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					pid:id,
					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
				error:function(res){

	                // _o.removeClass('loading');

	                // _FRAMEWORK.showError('server error!', 'error');

					// alert("OK");

	            },
				success:function(res){

	 
				$('.viewcart').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				console.log(res.url);

				window.location.href = res.url;

				// _FRAMEWORK.showError(res['total-price'],'success');		 
					
	 
				},
	 
				complete:function(){
					
					$('#loader').removeClass('active');
	 
				}
	 
			});
			
	
		});
	}

}

_FRAMEWORK.init();