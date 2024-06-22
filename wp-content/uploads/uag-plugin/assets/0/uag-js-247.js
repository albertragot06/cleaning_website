document.addEventListener("DOMContentLoaded", function(){ window.addEventListener( 'load', function() {
	UAGBButtonChild.init( '.uagb-block-2f4f59be' );
});
window.addEventListener( 'load', function() {
	UAGBButtonChild.init( '.uagb-block-3eeb0b36' );
});
var ssLinksParent = document.querySelector( '.uagb-block-5579a5f1' );
ssLinksParent?.addEventListener( 'keyup', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link && e.keyCode === 13 ) {
	handleSocialLinkClick( link );
}
});

ssLinksParent?.addEventListener( 'click', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link ) {
	handleSocialLinkClick( link );
}
});

function handleSocialLinkClick( link ) {
var social_url = link.dataset.href;
var target = "";
if ( social_url == "mailto:?body=" ) {
	target = "_self";
}
var request_url = "";
if ( social_url.indexOf("/pin/create/link/?url=") !== -1 ) {
	request_url = social_url + encodeURIComponent( window.location.href ) + "&media=" + '';
} else {
	request_url = social_url + encodeURIComponent( window.location.href );
}
window.open( request_url, target );
}
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-11b763d6', {"layout":"number","heading":"ACTIVE USERS","numberPrefix":"","numberSuffix":"K+","startNumber":0,"endNumber":325,"totalNumber":325,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-5f696b6e', {"layout":"number","heading":"TOTAL DOWNLOADS","numberPrefix":"","numberSuffix":"K+","startNumber":0,"endNumber":640,"totalNumber":640,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-d349e0fc', {"layout":"number","heading":"FITNESS VIDEOS","numberPrefix":"","numberSuffix":"+","startNumber":0,"endNumber":200,"totalNumber":325,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-cc541349', {"layout":"number","heading":"DIET MENUS","numberPrefix":"","numberSuffix":"K+","startNumber":0,"endNumber":100,"totalNumber":325,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener("DOMContentLoaded", function(){
	UAGBForms.init( {"block_id":"d276cdda","reCaptchaEnable":false,"reCaptchaType":"v2","reCaptchaSiteKeyV2":"","reCaptchaSecretKeyV2":"","reCaptchaSiteKeyV3":"","reCaptchaSecretKeyV3":"","afterSubmitToEmail":"abc@gmail.com","afterSubmitCcEmail":"","afterSubmitBccEmail":"","afterSubmitEmailSubject":"Form Submission","sendAfterSubmitEmail":true,"confirmationType":"message","hidereCaptchaBatch":false,"captchaMessage":"Please fill up the above captcha.","confirmationUrl":""}, '.uagb-block-d276cdda', 247 );
});
 });