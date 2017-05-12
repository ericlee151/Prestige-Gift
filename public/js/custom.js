$(document).ready(function(){
		$(".owl-carousel").owlCarousel({
			items:4,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:5000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:2,
		        },
		        1000:{
		            items:4,
		            loop:true
		        }
		    }
		});
	});
	$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
	});

	jQuery(document).ready(function($) {

	        $('#myCarousel').carousel({
	                interval: 5000
	        });
	 
	        //Handles the carousel thumbnails
	        $('[id^=carousel-selector-]').click(function () {
	        var id_selector = $(this).attr("id");
	        try {
	            var id = /-(\d+)$/.exec(id_selector)[1];
	            console.log(id_selector, id);
	            jQuery('#myCarousel').carousel(parseInt(id));
	        } catch (e) {
	            console.log('Regex failed!', e);
	        }
	    });
	        // When the carousel slides, auto update the text
	        $('#myCarousel').on('slid.bs.carousel', function (e) {
	                 var id = $('.item.active').data('slide-number');
	                $('#carousel-text').html($('#slide-content-'+id).html());
	        });
	});	