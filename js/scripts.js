jQuery(document).ready(function($){                                                             
        var $wpAdminBar = $('#wpadminbar');
        if ($wpAdminBar.length) {
        //jQuery("#masthead").sticky({topSpacing:$wpAdminBar.height()});
        jQuery("#masthead").css('margin-top',$wpAdminBar.height()+'px');
        } else {
        jQuery("#masthead").css('margin-top','0');
    }       
}); 

 function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("#masthead");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
                jQuery('.social-links').slideUp();
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                    jQuery('.social-links').slideDown(600);
                }
            }
        });
    }
    window.onload = init();