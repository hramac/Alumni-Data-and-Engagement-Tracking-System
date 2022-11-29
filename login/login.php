<!DOCTYPE html>
<html lang="en-US">
<head>
<script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
    
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	
	<title>Alumni Webform - UMD College of Information Studies</title>
	


<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />

		
							<script
				src="//www.googletagmanager.com/gtag/js?id=UA-28808830-1"  data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
			<script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
				var mi_version = '8.10.1';
				var mi_track_user = true;
				var mi_no_track_reason = '';
				
								var disableStrs = [
															'ga-disable-UA-28808830-1',
									];

				/* Function to detect opted out users */
				function __gtagTrackerIsOptedOut() {
					for (var index = 0; index < disableStrs.length; index++) {
						if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
							return true;
						}
					}

					return false;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if (__gtagTrackerIsOptedOut()) {
					for (var index = 0; index < disableStrs.length; index++) {
						window[disableStrs[index]] = true;
					}
				}

				/* Opt-out function */
				function __gtagTrackerOptout() {
					for (var index = 0; index < disableStrs.length; index++) {
						document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
						window[disableStrs[index]] = true;
					}
				}

				if ('undefined' === typeof gaOptout) {
					function gaOptout() {
						__gtagTrackerOptout();
					}
				}
								window.dataLayer = window.dataLayer || [];

				window.MonsterInsightsDualTracker = {
					helpers: {},
					trackers: {},
				};
				if (mi_track_user) {
					function __gtagDataLayer() {
						dataLayer.push(arguments);
					}

					function __gtagTracker(type, name, parameters) {
						if (!parameters) {
							parameters = {};
						}

						if (parameters.send_to) {
							__gtagDataLayer.apply(null, arguments);
							return;
						}

						if (type === 'event') {
							
														parameters.send_to = monsterinsights_frontend.ua;
							__gtagDataLayer(type, name, parameters);
													} else {
							__gtagDataLayer.apply(null, arguments);
						}
					}

					__gtagTracker('js', new Date());
					__gtagTracker('set', {
						'developer_id.dZGIzZG': true,
											});
															__gtagTracker('config', 'UA-28808830-1', {"forceSSL":"true","link_attribution":"true"} );
										window.gtag = __gtagTracker;										(function () {
						/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
						/* ga and __gaTracker compatibility shim. */
						var noopfn = function () {
							return null;
						};
						var newtracker = function () {
							return new Tracker();
						};
						var Tracker = function () {
							return null;
						};
						var p = Tracker.prototype;
						p.get = noopfn;
						p.set = noopfn;
						p.send = function () {
							var args = Array.prototype.slice.call(arguments);
							args.unshift('send');
							__gaTracker.apply(null, args);
						};
						var __gaTracker = function () {
							var len = arguments.length;
							if (len === 0) {
								return;
							}
							var f = arguments[len - 1];
							if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
								if ('send' === arguments[0]) {
									var hitConverted, hitObject = false, action;
									if ('event' === arguments[1]) {
										if ('undefined' !== typeof arguments[3]) {
											hitObject = {
												'eventAction': arguments[3],
												'eventCategory': arguments[2],
												'eventLabel': arguments[4],
												'value': arguments[5] ? arguments[5] : 1,
											}
										}
									}
									if ('pageview' === arguments[1]) {
										if ('undefined' !== typeof arguments[2]) {
											hitObject = {
												'eventAction': 'page_view',
												'page_path': arguments[2],
											}
										}
									}
									if (typeof arguments[2] === 'object') {
										hitObject = arguments[2];
									}
									if (typeof arguments[5] === 'object') {
										Object.assign(hitObject, arguments[5]);
									}
									if ('undefined' !== typeof arguments[1].hitType) {
										hitObject = arguments[1];
										if ('pageview' === hitObject.hitType) {
											hitObject.eventAction = 'page_view';
										}
									}
									if (hitObject) {
										action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
										hitConverted = mapArgs(hitObject);
										__gtagTracker('event', action, hitConverted);
									}
								}
								return;
							}

							function mapArgs(args) {
								var arg, hit = {};
								var gaMap = {
									'eventCategory': 'event_category',
									'eventAction': 'event_action',
									'eventLabel': 'event_label',
									'eventValue': 'event_value',
									'nonInteraction': 'non_interaction',
									'timingCategory': 'event_category',
									'timingVar': 'name',
									'timingValue': 'value',
									'timingLabel': 'event_label',
									'page': 'page_path',
									'location': 'page_location',
									'title': 'page_title',
								};
								for (arg in args) {
																		if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
										hit[gaMap[arg]] = args[arg];
									} else {
										hit[arg] = args[arg];
									}
								}
								return hit;
							}

							try {
								f.hitCallback();
							} catch (ex) {
							}
						};
						__gaTracker.create = newtracker;
						__gaTracker.getByName = newtracker;
						__gaTracker.getAll = function () {
							return [];
						};
						__gaTracker.remove = noopfn;
						__gaTracker.loaded = true;
						window['__gaTracker'] = __gaTracker;
					})();
									} else {
										console.log("");
					(function () {
						function __gtagTracker() {
							return null;
						}

						window['__gtagTracker'] = __gtagTracker;
						window['gtag'] = __gtagTracker;
					})();
									}
			</script>
		
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
	
	#menu-quick-links li a {
		color: #FFFFFF
	}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='style.min.css' type='text/css' media='all'/>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='add_google_fonts-css' href='https://fonts.googleapis.com/css?family=Crimson+Text%7CRoboto+Condensed%7CSource+Sans+Pro&#038;ver=6.1' type='text/css' media='all' />
<link rel='stylesheet' id='load-fa-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css?ver=6.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapstarter-style-css' href='Menu.css' type='text/css' media='all' />


<meta name="generator" content="WordPress 6.1" />
<style type="text/css">.broken_link, a.broken_link {
	text-decoration: line-through;
    
}</style></head>

<body class="page-template-default page page-id-198 page-child parent-pageid-82">


<!-- ------------------------------------HEADER CODE START---------------------------------------- -------------------------->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>  <script src="https://umd-header.umd.edu/build/bundle.js?search=0&search_domain=&events=0&news=0&schools=0&admissions=0&support=0&support_url=&wrapper=&sticky=0"></script>

   <div class="row blog-header">
     <div class="clearfix">
        <div class="menu-quick-links-hidden-container"><ul id="menu-quick-links-hidden" class="menu"><li id="menu-item-9839" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9839"><a href="https://ischool.umd.edu/news">News</a></li>
<li id="menu-item-9840" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9840"><a href="https://ischool.umd.edu/events">Events</a></li>
<li id="menu-item-1510" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1510"><a href="/apply-ischool/">Apply</a></li>
<li id="menu-item-1511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1511"><a href="https://ischool.umd.edu/give/">Give</a></li>
<li id="menu-item-1512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1512"><a href="https://ischool.umd.edu/contact/">Contact</a></li>
<button class = 'show' aria-label='Search' ><i class='fas fa-search' aria-hidden='true'></i></button></ul></div>
        <nav class="navbar navbar-expand-xl navbar-dark" aria-label="Horizontal" role="navigation"> 
        <a href="https://ischool.umd.edu/" title="UMD College of Information Studies" ><img src="https://ischool.umd.edu/wp-content/themes/ischool/images/iSchool_logo_tagline.png" alt="UMD College of Information Studies"></a>
    
          <div id="linksandhamburger"><div class="showmenu"> 
</div>
  
          <a href="https://ischool.umd.edu/" title="UMD College of Information Studies" ><img id="minilogo" src="https://ischool.umd.edu/wp-content/themes/ischool/images/iSchool_logo_tagline.png" alt="UMD College of Information Studies" ></a>

            <div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-9837" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9837"><a href="/news" style="color: #FFFFFF">News</a></li>
<li id="menu-item-9838" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9838"><a href="/events">Events</a></li>
<li id="menu-item-698" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-698"><a href="/academics/">Apply</a></li>
<li id="menu-item-1375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375"><a href="https://ischool.umd.edu/give/">Give</a></li>
<li id="menu-item-707" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-707"><a href="https://ischool.umd.edu/contact/">Contact</a></li>
</ul></div>            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                     <div id="collapsibleNavbar" class="collapse navbar-collapse"><ul id="menu-primary" class="main-menu navbar-nav ms-auto"><li id="menu-item-700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-700"><a href="https://ischool.umd.edu/about/">About <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li id="menu-item-701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-701"><a href="https://ischool.umd.edu/about/message-from-the-dean/">Message From Dean</a></li>
	<li id="menu-item-702" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-702"><a href="https://ischool.umd.edu/about/umd-ischool-vision-diversity-and-history/">Vision, Diversity, and History</a></li>
	<li id="menu-item-12301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12301"><a href="https://ischool.umd.edu/about/values/">Values</a></li>
	<li id="menu-item-841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841"><a href="https://ischool.umd.edu/about/what-is-an-ischool/">What is an iSchool?</a></li>
	<li id="menu-item-842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-842"><a href="https://ischool.umd.edu/about/rankings-fast-facts/">Rankings &amp; Fast Facts</a></li>
	<li id="menu-item-843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-843"><a href="https://ischool.umd.edu/about/ilead/">iLEAD Council</a></li>
	<li id="menu-item-10125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10125"><a href="https://ischool.umd.edu/about/senior-leadership/">Senior Leadership</a></li>
	<li id="menu-item-1349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1349"><a href="/category/directory">Directory</a></li>
	<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-844"><a href="https://ischool.umd.edu/about/jobs/">Jobs at the iSchool</a></li>
	<li id="menu-item-10492" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10492"><a href="https://ischool.umd.edu/about/info-challenge-initiative/">Info Challenge Initiative</a></li>
</ul>
</li>
<li id="menu-item-703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-703"><a href="https://ischool.umd.edu/research/">Research <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li id="menu-item-865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-865"><a href="https://ischool.umd.edu/research/expertise-areas/">Expertise Areas</a></li>
	<li id="menu-item-867" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-867"><a href="https://ischool.umd.edu/research/centers-and-labs/">Centers, Labs &#038; Interest Groups</a></li>
	<li id="menu-item-1017" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1017"><a href="https://ischool.umd.edu/research-projects/">Research Projects</a></li>
	<li id="menu-item-868" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-868"><a target="_blank" href="https://internal.ischool.umd.edu/research/research-improvement-grants/">Research Improvement Grants</a></li>
	<li id="menu-item-869" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-869"><a target="_blank" href="https://internal.ischool.umd.edu/research/">Research Resources</a></li>
</ul>
</li>
<li id="menu-item-704" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-704"><a href="https://ischool.umd.edu/academics/">Academics <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li id="menu-item-1173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1173"><a href="https://ischool.umd.edu/academics/bachelors-programs/">Bachelor’s Programs</a></li>
	<li id="menu-item-1170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1170"><a href="https://ischool.umd.edu/academics/masters-programs/">Master’s Programs</a></li>
	<li id="menu-item-4267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4267"><a href="https://ischool.umd.edu/academics/phd-information-studies/">Doctoral Program</a></li>
	<li id="menu-item-1172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172"><a href="https://ischool.umd.edu/academics/certificates-non-degree-study/">Certificates &amp; Non-Degree Study</a></li>
	<li id="menu-item-12075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12075"><a href="https://ischool.umd.edu/academics/student-services/">Student Services</a></li>
</ul>
</li>
<li id="menu-item-1137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1137"><a href="https://ischool.umd.edu/alumni/">Alumni <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li id="menu-item-1139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1139"><a href="https://ischool.umd.edu/alumni/alumni-network/">Alumni Network</a></li>
	<li id="menu-item-1132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1132"><a href="https://ischool.umd.edu/alumni/alumni-spotlights/">Alumni Spotlights</a></li>
	<li id="menu-item-1157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1157"><a href="https://ischool.umd.edu/alumni/events/">Upcoming Events</a></li>
	<li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="https://ischool.umd.edu/alumni/stay-connected/">Ways to Connect</a></li>
	<li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="https://ischool.umd.edu/alumni/stay-connected/">Ways to Volunteer</a></li>
</ul>
</li>
<li id="menu-item-706" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-706"><a href="https://ischool.umd.edu/partners/">Partners<b class="caret"></b></a>

</li>
</ul></div>            </div>
          </nav>
    </div>
  </div>

<!-- ------------------------------------HEADER CODE END---------------------------------------- -->


<!-- ------------------------------------Below code is for the body---------------------------------------- -->


    <div class="container">
        
  <h1 style="text-align: center;">Sign In</h1>
    <?php
    if (isset($_GET['error'])) {
        echo " <font color=red><p> Invalid credentials </p> </font>";
    }

    //session_start();

    //session_destroy();
    ?>

<form action="login.db.php" method="POST">
<div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" required name="uid" id="username" placeholder="Username" class="form-control" autofocus style="height: 50px;"><br>
                    </div>
                </div>
<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" required name="pwd" id="password" placeholder="Password" class="form-control" autofocus style="height: 50px;"><br>
                    </div>
                </div>

<div class="form-group">
                    <div class="col text-center">
                       <button type="submit" class="btn btn-primary btn-block" name="login">Log In</button> <br>
                    </div>
                </div>
                

</form>


</form>

<br><br><br><br><br><br><br><br><br><br>
</div>


<!-- ------------------------------------FOOTER CODE START---------------------------------------- -------------------------->
<div class="row" id="footer">
  <div class="container">
    <div class="footer-reverse">
      <div class="col-sm-8 footer-contact">
      <ul>
<li><a href="https://ischool.umd.edu/contact" title="Contact UMD iSchool">Contact</a></li>
<li><a href="https://ischool.umd.edu/news" title="News at UMD iSchool">News</a></li>
<li><a href="https://ischool.umd.edu/events" title="Events at UMD iSchool">Events</a></li>
<li><a href="https://ischool.umd.edu/about/jobs" title="Jobs at UMD iSchool">Jobs</a></li>
<li><a href="https://internal.ischool.umd.edu/" target="blank" title="UMD iSchool Faculty and Staff Resources">Faculty &amp; Staff Resources</a></li>
<li><a href="https://umd.edu/privacy-notice" target="blank" title="UMD Privacy Policy">Privacy Policy</a></li>
<li><a href="https://umd.edu/web-accessibility" target="blank" title="UMD Web Acessibility">Web Accessibility</a></li>
</ul>
<p>Patuxent Building, Room 1117, 4161 Fieldhouse Drive, College Park, MD 20742-4911  (301) 405-2033</p><a href="https://ischool.umd.edu/" title="UMD College of Information Studies" >UMD College of Information Studies</a>
      </div>
      <div class="col-sm-4 footer-social">
          <div id="socialButtons"><a aria-hidden="true" class="fab fa-twitter-square" href="https://twitter.com/iSchoolUMD" target="_blank" title="Twitter"><span class="sr-only">Twitter</span></a><span class="sr-only">Twitter</span> <a aria-hidden="true" class="fab fa-facebook" href="http://www.facebook.com/iSchoolUMD" target="_blank" title="Facebook"><span class="sr-only">Facebook</span></a><span class="sr-only">Facebook</span> <a aria-hidden="true" class="fab fa-youtube-square" href="http://www.youtube.com/user/ischoolumd" target="_blank" title="Youtube"><span class="sr-only">Youtube</span></a><span class="sr-only">Youtube</span><a aria-hidden="true" class="fab fa-instagram" href="https://www.instagram.com/ischoolumd/" target="_blank" title="Instagram"> <span class="sr-only">Instagram</span></a><span class="sr-only">Instagram</span> <a aria-hidden="true" class="fab fa-linkedin" href="https://www.linkedin.com/company/umd-ischool" target="_blank" title="LinkedIn"> <span class="sr-only">LinkedIn</span></a><span class="sr-only">LinkedIn</span></div>

<script type="text/javascript">
(function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
vgo('setAccount', '799081251');
vgo('setTrackByDefault', true);

vgo('process');
</script>      </div>
  </div>
</div>
</div>
<script type='text/javascript' src='bootstrap.min.js' id='bootstrap-js'></script>
<!-- ------------------------------------FOOTER CODE END---------------------------------------- -------------------------->
</body>
</html>

