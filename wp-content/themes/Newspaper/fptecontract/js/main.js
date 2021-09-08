$(document).ready(function () {
    $('.navbar .p-current-link').mouseenter(function(){ 
        if(!$(this).parent().hasClass('open'))
        {
            $(this).parent().find('.dropdown-toggle').dropdown('toggle'); 
        }
    });

    $( ".floating-icon .float1" ).hover(
	  function() {
	    $(".floating-icon .img1").show();
	  }, function() {
	    $(".floating-icon .img1").hide();
	  }
	);

	$( ".floating-icon .float2" ).hover(
	  function() {
	    $(".floating-icon .img2").show();
	  }, function() {
	    $(".floating-icon .img2").hide();
	  }
	);

	$( ".floating-icon .float3" ).hover(
	  function() {
	    $(".floating-icon .img3").show();
	  }, function() {
	    $(".floating-icon .img3").hide();
	  }
	);

	$('.play-video').on('click', function () {
		$('.play-video').hide();
	    var showVideo1 = $('#showVideo1');
	    if (showVideo1) {
	        //thêm các event
			$("#closeVideo1").bind('click', formVideo1.closeForm);
	        $(document).bind('click', formVideo1.clickOutForm);
	        $(window).bind('keydown', formVideo1.keyASC);
			
			showVideo1.show();
	        $('#showContentVideo1').css({ 'width': (window.innerWidth * 3 / 4)});
	        $('#showContentVideo1').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContentVideo1').height() + 40) / 2) });
	        $('#showContentVideo1').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContentVideo1').width() + 40) / 2) });
			
	        return false;
	    }
	});

	$('.show-contact').on('click', function () {
	    var showContact = $('#showContact');
	    if (showContact) {
	        //thêm các event
			$("#closeContact").bind('click', contact.closeForm);
	        $(document).bind('click', contact.clickOutForm);
	        $(window).bind('keydown', contact.keyASC);
			
			showContact.show();
	        $('#showContactWrap').css({ 'width': (window.innerWidth * 3 / 4)});
	        $('#showContactWrap').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContactWrap').height() + 40) / 2) });
	        $('#showContactWrap').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContactWrap').width() + 40) / 2) });
			
	        return false;
	    }
	});

	$(window).on('resize', function () {
		var showVideo1 = $('#showVideo1');
	    if (showVideo1) {
	        $('#showContentVideo1').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContentVideo1').height() + 40) / 2) });
	        $('#showContentVideo1').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContentVideo1').width() + 40) / 2) });
	    }

	    var showContact = $('#showContact');
	    if (showContact) {
	        $('#showContactWrap').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContactWrap').height() + 40) / 2) });
	        $('#showContactWrap').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContactWrap').width() + 40) / 2) });
	    }
	});

	$('.show-success').on('click', function () {
		contact.closeForm();
	    //var showSuccess = $('#showSuccess');
	    //if (showSuccess) {
	        //thêm các event
			//$("#showSuccess").bind('click', success.closeForm);
	        //$(document).bind('click', success.clickOutForm);
	        //window).bind('keydown', success.keyASC);
			
			//showSuccess.show();
	        //$('#showSuccessWrap').css({ 'width': (window.innerWidth * 3 / 4)});
	        //$('#showSuccessWrap').css({ 'margin-top': (window.innerHeight / 2) - (($('#showSuccessWrap').height() + 40) / 2) });
	        //$('#showSuccessWrap').css({ 'margin-left': (window.innerWidth / 2) - (($('#showSuccessWrap').width() + 40) / 2) });
			
	        //return false;
	    //}
		window.location.href = "/thankyou"
	});
	
	$('.flag-pit').on('click', function () {
		if($(this).hasClass('uk-flag')) {
			window.location.href = "/home"
		}
		else {
			window.location.href = "/"
		}
	});

	$(window).on('resize', function () {
		var showVideo1 = $('#showVideo1');
	    if (showVideo1) {
	        $('#showContentVideo1').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContentVideo1').height() + 40) / 2) });
	        $('#showContentVideo1').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContentVideo1').width() + 40) / 2) });
	    }

	    var showContact = $('#showContact');
	    if (showContact) {
	        $('#showContactWrap').css({ 'margin-top': (window.innerHeight / 2) - (($('#showContactWrap').height() + 40) / 2) });
	        $('#showContactWrap').css({ 'margin-left': (window.innerWidth / 2) - (($('#showContactWrap').width() + 40) / 2) });
	    }

	    var showSuccess = $('#showSuccess');
	    if (showSuccess) {
	        $('#showSuccessWrap').css({ 'margin-top': (window.innerHeight / 2) - (($('#showSuccessWrap').height() + 40) / 2) });
	        $('#showSuccessWrap').css({ 'margin-left': (window.innerWidth / 2) - (($('#showSuccessWrap').width() + 40) / 2) });
	    }
	});

	var formVideo1 = {
		
		closeForm: function () {
			var showVideo1 = $('#showVideo1');

			try {
				var frameTestimonial = $("#showVideo1 iframe");
				if (frameTestimonial) {
					var src = frameTestimonial.attr('src');
					if (src) {
						var arrSrc = src.split("?");
						if (arrSrc && arrSrc.length > 0) {
							src = arrSrc[0] + "?autoplay=0";
							frameTestimonial.attr('src', src);
						}
					}
				}
			} catch (e) {
				console.log(e);
			}

			//hủy sự kiện keyDown keyASC
			$(window).unbind('keydown', formVideo1.keyASC);
			//hủy sự kiện bấm ra ngoài
			$(document).unbind('click', formVideo1.clickOutForm);
			//ẩn form
			showVideo1.fadeOut(300);
		},

		keyASC: function (key) {
			if (key.which == 27) {
				formVideo1.closeForm();
			}
		},

		clickOutForm: function (event) {
			if ($('#showContentVideo1').is(':visible')) {
				if (event.target.id != 'showContentVideo1' && !$('#showContentVideo1').find($(event.target)).length) {
					formVideo1.closeForm();
				}
			}
		}
	}

	var contact = {
		
		closeForm: function () {
			var showContact = $('#showContact');
			//hủy sự kiện keyDown keyASC
			$(window).unbind('keydown', contact.keyASC);
			//hủy sự kiện bấm ra ngoài
			$(document).unbind('click', contact.clickOutForm);
			//ẩn form
			showContact.fadeOut(300);
		},

		keyASC: function (key) {
			if (key.which == 27) {
				contact.closeForm();
			}
		},

		clickOutForm: function (event) {
			if ($('#showContactWrap').is(':visible')) {
				if (event.target.id != 'showContactWrap' && !$('#showContactWrap').find($(event.target)).length) {
					contact.closeForm();
				}
			}
		}
	}

	var success = {
		
		closeForm: function () {
			var showSuccess = $('#showSuccess');
			//hủy sự kiện keyDown keyASC
			$(window).unbind('keydown', success.keyASC);
			//hủy sự kiện bấm ra ngoài
			$(document).unbind('click', success.clickOutForm);
			//ẩn form
			showSuccess.fadeOut(300);
		},

		keyASC: function (key) {
			if (key.which == 27) {
				success.closeForm();
			}
		},

		clickOutForm: function (event) {
			if ($('#showSuccessWrap').is(':visible')) {
				if (event.target.id != 'showSuccessWrap' && !$('#showSuccessWrap').find($(event.target)).length) {
					success.closeForm();
				}
			}
		}
	}
});

AOS.init();