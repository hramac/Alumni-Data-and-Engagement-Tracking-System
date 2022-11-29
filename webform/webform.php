<!DOCTYPE html>
<html lang="en-US">

<head>

    <?php
if (isset($_GET['success'])) {
    header("Location: success.html");
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
    <script type="text/javascript" src="https://cdn.addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28808830-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-28808830-1');
    </script>
    <meta name="google-site-verification" content="S-oNKDa1o9M45iAl87l6hXNDacd7apAJ_Kq9iLZkWdA" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

   
    <title>Alumni Webform - UMD College of Information Studies</title>
    <meta name="description"
        content="Want to make a difference or mentor students? Learn more about how to provide an internship for students." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Student Internships - UMD College of Information Studies" />
    <meta property="og:description"
        content="Want to make a difference or mentor students? Learn more about how to provide an internship for students." />
    <meta property="og:url" content="https://ischool.umd.edu/partners/student-internships/" />
    <meta property="og:site_name" content="UMD College of Information Studies" />
    <meta property="article:publisher" content="https://www.facebook.com/iSchoolUMD/" />
    <meta property="article:modified_time" content="2022-09-09T15:33:26+00:00" />
    <meta property="og:image"
        content="https://ischool.umd.edu/wp-content/uploads/Research-Group-at-Computers-2-300x200.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@ischoolumd" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />


    
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
    <link rel='stylesheet' id='wp-block-library-css' href='style.min.css' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='add_google_fonts-css'
        href='https://fonts.googleapis.com/css?family=Crimson+Text%7CRoboto+Condensed%7CSource+Sans+Pro&#038;ver=6.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='load-fa-css'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css?ver=6.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrapstarter-style-css' href='Menu.css' type='text/css' media='all' />
    <!--n2css-->
    <script type='text/javascript'
        src='https://ischool.umd.edu/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.10.1'
        id='monsterinsights-frontend-script-js'></script>
    <script data-cfasync="false" data-wpfc-render="false" type="text/javascript"
        id='monsterinsights-frontend-script-js-extra'>/* <![CDATA[ */
            var monsterinsights_frontend = { "js_events_tracking": "true", "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx", "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]", "home_url": "https:\/\/ischool.umd.edu", "hash_tracking": "false", "ua": "UA-28808830-1", "v4_id": "" };/* ]]> */
        </script>

    <meta name="generator" content="WordPress 6.1" />
    <style type="text/css">
        .broken_link,
        a.broken_link {
            text-decoration: line-through;

        }
    </style>
</head>

<body class="page-template-default page page-id-198 page-child parent-pageid-82">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <script
        src="https://umd-header.umd.edu/build/bundle.js?search=0&search_domain=&events=0&news=0&schools=0&admissions=0&support=0&support_url=&wrapper=&sticky=0"></script>

    <div class="row blog-header">
        <div class="clearfix">
            <div class="menu-quick-links-hidden-container">
                <ul id="menu-quick-links-hidden" class="menu">
                    <li id="menu-item-9839"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9839"><a
                            href="https://ischool.umd.edu/news">News</a></li>
                    <li id="menu-item-9840"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9840"><a
                            href="https://ischool.umd.edu/events">Events</a></li>
                    <li id="menu-item-1510"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1510"><a
                            href="/apply-ischool/">Apply</a></li>
                    <li id="menu-item-1511"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1511"><a
                            href="https://ischool.umd.edu/give/">Give</a></li>
                    <li id="menu-item-1512"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1512"><a
                            href="https://ischool.umd.edu/contact/">Contact</a></li>
                    <button class='show' aria-label='Search'><i class='fas fa-search' aria-hidden='true'></i></button>
                </ul>
            </div>
            <nav class="navbar navbar-expand-xl navbar-dark" aria-label="Horizontal" role="navigation">
                <a href="https://ischool.umd.edu/" title="UMD College of Information Studies"><img
                        src="https://ischool.umd.edu/wp-content/themes/ischool/images/iSchool_logo_tagline.png"
                        alt="UMD College of Information Studies"></a>

                <div id="linksandhamburger">
                    <div class="showmenu">
                    </div>

                    <a href="https://ischool.umd.edu/" title="UMD College of Information Studies"><img id="minilogo"
                            src="https://ischool.umd.edu/wp-content/themes/ischool/images/iSchool_logo_tagline.png"
                            alt="UMD College of Information Studies"></a>

                    <div class="menu-quick-links-container">
                        <ul id="menu-quick-links" class="menu">
                            <li id="menu-item-9837"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9837"><a
                                    href="https://ischool.umd.edu/news" style="color: #FFFFFF">News</a></li>
                            <li id="menu-item-9838"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9838"><a
                                    href="https://ischool.umd.edu/events">Events</a></li>
                            <li id="menu-item-698"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-698"><a
                                    href="https://ischool.umd.edu/academics/">Apply</a></li>
                            <li id="menu-item-1375"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375"><a
                                    href="https://ischool.umd.edu/give/">Give</a></li>
                            <li id="menu-item-707"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-707"><a
                                    href="https://ischool.umd.edu/contact/">Contact</a></li>
                        </ul>
                    </div> <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="collapsibleNavbar" class="collapse navbar-collapse">
                        <ul id="menu-primary" class="main-menu navbar-nav ms-auto">
                            <li id="menu-item-700"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-700">
                                <a href="https://ischool.umd.edu/about/">About <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-701"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-701">
                                        <a href="https://ischool.umd.edu/about/message-from-the-dean/">Message From
                                            Dean</a>
                                    </li>
                                    <li id="menu-item-702"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-702">
                                        <a
                                            href="https://ischool.umd.edu/about/umd-ischool-vision-diversity-and-history/">Vision,
                                            Diversity, and History</a>
                                    </li>
                                    <li id="menu-item-12301"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12301">
                                        <a href="https://ischool.umd.edu/about/values/">Values</a>
                                    </li>
                                    <li id="menu-item-841"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841">
                                        <a href="https://ischool.umd.edu/about/what-is-an-ischool/">What is an
                                            iSchool?</a>
                                    </li>
                                    <li id="menu-item-842"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-842">
                                        <a href="https://ischool.umd.edu/about/rankings-fast-facts/">Rankings &amp; Fast
                                            Facts</a>
                                    </li>
                                    <li id="menu-item-843"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-843">
                                        <a href="https://ischool.umd.edu/about/ilead/">iLEAD Council</a>
                                    </li>
                                    <li id="menu-item-10125"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10125">
                                        <a href="https://ischool.umd.edu/about/senior-leadership/">Senior Leadership</a>
                                    </li>
                                    <li id="menu-item-1349"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1349">
                                        <a href="/category/directory">Directory</a>
                                    </li>
                                    <li id="menu-item-844"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-844">
                                        <a href="https://ischool.umd.edu/about/jobs/">Jobs at the iSchool</a>
                                    </li>
                                    <li id="menu-item-10492"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10492">
                                        <a href="https://ischool.umd.edu/about/info-challenge-initiative/">Info
                                            Challenge Initiative</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-703"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-703">
                                <a href="https://ischool.umd.edu/research/">Research <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-865"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-865">
                                        <a href="https://ischool.umd.edu/research/expertise-areas/">Expertise Areas</a>
                                    </li>
                                    <li id="menu-item-867"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-867">
                                        <a href="https://ischool.umd.edu/research/centers-and-labs/">Centers, Labs
                                            &#038; Interest Groups</a>
                                    </li>
                                    <li id="menu-item-1017"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1017">
                                        <a href="https://ischool.umd.edu/research-projects/">Research Projects</a>
                                    </li>
                                    <li id="menu-item-868"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-868"><a
                                            target="_blank"
                                            href="https://internal.ischool.umd.edu/research/research-improvement-grants/">Research
                                            Improvement Grants</a></li>
                                    <li id="menu-item-869"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-869"><a
                                            target="_blank" href="https://internal.ischool.umd.edu/research/">Research
                                            Resources</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-704"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-704">
                                <a href="https://ischool.umd.edu/academics/">Academics <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-1173"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1173">
                                        <a href="https://ischool.umd.edu/academics/bachelors-programs/">Bachelor’s
                                            Programs</a>
                                    </li>
                                    <li id="menu-item-1170"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1170">
                                        <a href="https://ischool.umd.edu/academics/masters-programs/">Master’s
                                            Programs</a>
                                    </li>
                                    <li id="menu-item-4267"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4267">
                                        <a href="https://ischool.umd.edu/academics/phd-information-studies/">Doctoral
                                            Program</a>
                                    </li>
                                    <li id="menu-item-1172"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172">
                                        <a href="https://ischool.umd.edu/academics/certificates-non-degree-study/">Certificates
                                            &amp; Non-Degree Study</a>
                                    </li>
                                    <li id="menu-item-12075"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12075">
                                        <a href="https://ischool.umd.edu/academics/student-services/">Student
                                            Services</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-1137"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1137">
                                <a href="https://ischool.umd.edu/alumni/">Alumni <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-1139"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1139">
                                        <a href="https://ischool.umd.edu/alumni/alumni-network/">Alumni Network</a>
                                    </li>
                                    <li id="menu-item-1132"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1132">
                                        <a href="https://ischool.umd.edu/alumni/alumni-spotlights/">Alumni
                                            Spotlights</a>
                                    </li>
                                    <li id="menu-item-1157"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1157">
                                        <a href="https://ischool.umd.edu/alumni/events/">Upcoming Events</a>
                                    </li>
                                    <li id="menu-item-1158"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158">
                                        <a href="https://ischool.umd.edu/alumni/stay-connected/">Ways to Connect</a>
                                    </li>
                                    <li id="menu-item-1158"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158">
                                        <a href="webform.php">Ways to Volunteer</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-706"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-706">
                                <a href="https://ischool.umd.edu/partners/">Partners <b class="caret"></b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row page-content">
            <form class="form-horizontal" role="form" action="insert-db.php" method="POST">
                <h1 style="text-align: center;">Alumni Webform</h1>
                <h4><b>Personal Information</b></h4><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" required name="first" id="firstName" placeholder="First Name"
                            class="form-control" autofocus style="height: 50px;"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" required name="last" id="lastName" placeholder="Last Name"
                            class="form-control" autofocus style="height: 50px;"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="program" class="col-sm-3 control-label">Program</label>
                    <div class="col-sm-9">
                        <input style="height: 50px;" required name="program" type="text" id="program"
                            placeholder="Program" class="form-control" name="program"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="graduation_year" class="col-sm-3 control-label">Graduation Year</label>
                    <div class="col-sm-9">
                        <input type="number" min="1990" max="2022" required name="graduation_year" class="form-control"
                            placeholder="YYYY" id="graduation_year" style="height: 50px;" /><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact_number" class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9">
                        <input type="tel" required name="contact_number" id="contact_number"
                            placeholder="+(Country Code)-XXX-XXX-XXXX" class="form-control" style="height: 50px;"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_id" class="col-sm-3 control-label">Email ID</label>
                    <div class="col-sm-9">
                        <input style="height: 50px;" required name="email" type="email" id="email_id"
                            class="form-control" placeholder="johndoe@gmail.com"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focus_area" class="col-sm-3 control-label">Focus Area</label>
                    <div class="col-sm-9">
                        <select name="focus_area" required style="height: 50px;">
                            <option disabled selected value> -- select an option -- </option>
                            <option>Data Analytics</option>
                            <option>Cybersecurity</option>
                            <option>Information Risk Management</option>
                            <option>Strategic Management</option>
                            <option>None of the above</option>
                        </select><br><br><br>
                    </div>
                </div>

                <h4><b>Employer Information</b></h4><br>
                <div class="form-group">
                    <label for="organization_name" class="col-sm-3 control-label">Organization Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="organization_name" required name="org" placeholder="Organization Name"
                            class="form-control" style="height: 50px;"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                    <div class="col-sm-9">
                        <input style="height: 50px;" required name="title" type="text" id="job_title"
                            placeholder="Please write Job Title" class="form-control"><br><br>
                    </div>
                </div>
                <br>
                <h4><b>Volunteering Information</b></h4><br>
                <div class="form-group">
                    <label for="areas" class="col-sm-3 control-label">Areas of Interest</label>
                    <div class="col-sm-9">
                        <select name="areas" required style="height: 50px;">
                            <option disabled selected value> -- select an option -- </option>
                            <option>Mentoring</option>
                            <option>Resume Review</option>
                            <option>Alumni Panel</option>
                            <option>Mock Interviews</option>
                        </select><br><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="day" class="col-sm-3 control-label">Day of the week</label>
                    <div class="col-sm-9">

                        <table style="width: 45%">
                            <tr class="tablerows">
                                <td>Monday:</td>
                                <td>
                                    <input type="checkbox" id="monday_morning" name="monday_morning" value="Monday Morning">
                                    <label for="monday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="monday_afternoon" name="monday_afternoon" value="Monday Afternoon"> 
                                    <label for="monday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="monday_Evening" name="monday_Evening" value="Monday Evening"> 
                                    <label for="monday_Evening">Evening</label>
                                </td>
                            </tr>


                            <tr class="tablerows">
                                <td>Tuesday:</td>
                                <td>
                                    <input type="checkbox" id="Tuesday_morning" name="Tuesday_morning" value="Tuesday Morning">
                                    <label for="Tuesday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Tuesday_afternoon" name="Tuesday_afternoon" value="Tuesday Afternoon"> 
                                    <label for="Tuesday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Tuesday_Evening" name="Tuesday_Evening" value="Tuesday Evening"> 
                                    <label for="Tuesday_Evening">Evening</label>
                                </td>
                            </tr>



                            <tr class="tablerows">
                                <td>Wednesday:</td>
                                <td>
                                    <input type="checkbox" id="Wednesday_morning" name="Wednesday_morning" value="Wednesday Morning">
                                    <label for="Wednesday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Wednesday_afternoon" name="Wednesday_afternoon" value="Wednesday Afternoon"> 
                                    <label for="Wednesday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Wednesday_Evening" name="Wednesday_Evening" value="Wednesday Evening"> 
                                    <label for="Wednesday_Evening">Evening</label>
                                </td>
                            </tr>


                            <tr class="tablerows">
                                <td>Thursday:</td>
                                <td>
                                    <input type="checkbox" id="Thursday_morning" name="Thursday_morning" value="Thursday Morning">
                                    <label for="Thursday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Thursday_afternoon" name="Thursday_afternoon" value="Thursday Afternoon"> 
                                    <label for="Thursday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Thursday_Evening" name="Thursday_Evening" value="Thursday Evening"> 
                                    <label for="Thursday_Evening">Evening</label>
                                </td>
                            </tr>


                            <tr class="tablerows">
                                <td>Friday:</td>
                                <td>
                                    <input type="checkbox" id="Friday_morning" name="Friday_morning" value="Friday Morning">
                                    <label for="Friday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Friday_afternoon" name="Friday_afternoon" value="Friday Afternoon"> 
                                    <label for="Friday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Friday_Evening" name="Friday_Evening" value="Friday Evening"> 
                                    <label for="Friday_Evening">Evening</label>
                                </td>
                            </tr>


                            <tr class="tablerows">
                                <td>Saturday:</td>
                                <td>
                                    <input type="checkbox" id="Saturday_morning" name="Saturday_morning" value="Saturday Morning">
                                    <label for="Saturday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Saturday_afternoon" name="Saturday_afternoon" value="Saturday Afternoon"> 
                                    <label for="Saturday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Saturday_Evening" name="Saturday_Evening" value="Saturday Evening"> 
                                    <label for="Saturday_Evening">Evening</label>
                                </td>
                            </tr>


                            <tr class="tablerows">
                                <td>Sunday:</td>
                                <td>
                                    <input type="checkbox" id="Sunday_morning" name="Sunday_morning" value="Sunday Morning">
                                    <label for="Sunday_morning">Morning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Sunday_afternoon" name="Sunday_afternoon" value="Sunday Afternoon"> 
                                    <label for="Sunday_afternoon">Afternoon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="Sunday_Evening" name="Sunday_Evening" value="Sunday Evening"> 
                                    <label for="Sunday_Evening">Evening</label>
                                </td>
                            </tr>


                            <style type="text/css">
                                .tablerows {
                                    background-color: white;
                                }
                            </style>










                        </table>




                        <!-- Monday: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" id="monday_morning" name="monday_morning" value="Monday Morning"> <label for="monday_morning"> Morning &nbsp;&nbsp;&nbsp;</label> 
                        <input type="checkbox" id="monday_afternoon" name="monday_afternoon" value="Monday Afternoon"> 
                        <label for="monday_afternoon"> Afternoon&nbsp;&nbsp;&nbsp; </label> 
                        <input type="checkbox" id="monday_evening" name="monday_afternoon" value="Monday Evening">
                        <label for="monday_evening"> Evening </label> 
                        <br>
                        Tuesday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="checkbox" id="Tuesday_morning" name="Tuesday_morning" value="Tuesday Morning"> <label for="Tuesday_morning">Morning&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> 
                        <input type="checkbox" id="Tuesday_afternoon" name="Tuesday_afternoon" value="Tuesday Afternoon"> 
                        <label for="Tuesday_afternoon"> Afternoon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> 
                        <input type="checkbox" id="Tuesday_evening" name="Tuesday_afternoon" value="Tuesday Evening">
                        <label for="Tuesday_evening"> Evening &nbsp;&nbsp;&nbsp;</label> 
                        <br>
                        Wednesday: <input type="checkbox" id="Wednesday_morning" name="Wednesday_morning" value="Wednesday Morning"> <label for="Wednesday_morning"> Morning </label> 
                        <input type="checkbox" id="Wednesday_afternoon" name="Wednesday_afternoon" value="Wednesday Afternoon"> 
                        <label for="Wednesday_afternoon"> Afternoon </label> 
                        <input type="checkbox" id="Wednesday_evening" name="Wednesday_afternoon" value="Wednesday Evening">
                        <label for="Wednesday_evening"> Evening </label> 
                        <br>
                        Thursday: <input type="checkbox" id="Thursday_morning" name="Thursday_morning" value="Thursday Morning"> <label for="Thursday_morning"> Morning </label> 
                        <input type="checkbox" id="Thursday_afternoon" name="Thursday_afternoon" value="Thursday Afternoon"> 
                        <label for="Thursday_afternoon"> Afternoon </label> 
                        <input type="checkbox" id="Thursday_evening" name="Thursday_afternoon" value="Thursday Evening">
                        <label for="Thursday_evening"> Evening </label> 
                        <br>
                        Friday: <input type="checkbox" id="Friday_morning" name="Friday_morning" value="Friday Morning"> <label for="Friday_morning"> Morning </label> 
                        <input type="checkbox" id="Friday_afternoon" name="Friday_afternoon" value="Friday Afternoon"> 
                        <label for="Friday_afternoon"> Afternoon </label> 
                        <input type="checkbox" id="Friday_evening" name="Friday_afternoon" value="Friday Evening">
                        <label for="Friday_evening"> Evening </label> 
                        <br>
                        Saturday: <input type="checkbox" id="Saturday_morning" name="Saturday_morning" value="Saturday Morning"> <label for="Saturday_morning"> Morning </label> 
                        <input type="checkbox" id="Saturday_afternoon" name="Saturday_afternoon" value="Saturday Afternoon"> 
                        <label for="Saturday_afternoon"> Afternoon </label> 
                        <input type="checkbox" id="Saturday_evening" name="Saturday_afternoon" value="Saturday Evening">
                        <label for="Saturday_evening"> Evening </label> 
                        <br>
                        Sunday: <input type="checkbox" id="Sunday_morning" name="Sunday_morning" value="Sunday Morning"> <label for="Sunday_morning"> Morning </label> 
                        <input type="checkbox" id="Sunday_afternoon" name="Sunday_afternoon" value="Sunday Afternoon"> 
                        <label for="Sunday_afternoon"> Afternoon </label> 
                        <input type="checkbox" id="Sunday_evening" name="Sunday_afternoon" value="Sunday Evening">
                        <label for="Sunday_evening"> Evening </label> 
                        <br>
 -->

                        <br><br>
                    </div>
                </div><br>

<!--                 <div class="form-group">
                    <label for="time" class="col-sm-3 control-label">Time of the day</label>
                    <div class="col-sm-9">
                        <select name="time" required style="height: 50px;">
                            <option disabled selected value> -- select a time --</option>
                            <option>Morning</option>
                            <option>Afternoon</option>
                            <option>Evening</option>

                        </select><br><br>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <br>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>

        </div>
    </div>
    </div>

    <div class="row" id="footer">
        <div class="container">
            <div class="footer-reverse">
                <div class="col-sm-8 footer-contact">
                    <ul>
                        <li><a href="https://ischool.umd.edu/contact" title="Contact UMD iSchool">Contact</a></li>
                        <li><a href="https://ischool.umd.edu/news" title="News at UMD iSchool">News</a></li>
                        <li><a href="https://ischool.umd.edu/events" title="Events at UMD iSchool">Events</a></li>
                        <li><a href="https://ischool.umd.edu/about/jobs" title="Jobs at UMD iSchool">Jobs</a></li>
                        <li><a href="https://internal.ischool.umd.edu/" target="blank"
                                title="UMD iSchool Faculty and Staff Resources">Faculty &amp; Staff Resources</a></li>
                        <li><a href="https://umd.edu/privacy-notice" target="blank" title="UMD Privacy Policy">Privacy
                                Policy</a></li>
                        <li><a href="https://umd.edu/web-accessibility" target="blank" title="UMD Web Acessibility">Web
                                Accessibility</a></li>
                    </ul>
                    <p>Patuxent Building, Room 1117, 4161 Fieldhouse Drive, College Park, MD 20742-4911 (301) 405-2033
                    </p> <a href="https://ischool.umd.edu/" title="UMD College of Information Studies">UMD College of
                        Information Studies</a>.
                </div>
                <div class="col-sm-4 footer-social">
                    <div id="socialButtons"><a aria-hidden="true" class="fab fa-twitter-square"
                            href="https://twitter.com/iSchoolUMD" target="_blank" title="Twitter"><span
                                class="sr-only">Twitter</span></a><span class="sr-only">Twitter</span> <a
                            aria-hidden="true" class="fab fa-facebook" href="http://www.facebook.com/iSchoolUMD"
                            target="_blank" title="Facebook"><span class="sr-only">Facebook</span></a><span
                            class="sr-only">Facebook</span> <a aria-hidden="true" class="fab fa-youtube-square"
                            href="http://www.youtube.com/user/ischoolumd" target="_blank" title="Youtube"><span
                                class="sr-only">Youtube</span></a><span class="sr-only">Youtube</span><a
                            aria-hidden="true" class="fab fa-instagram" href="https://www.instagram.com/ischoolumd/"
                            target="_blank" title="Instagram"> <span class="sr-only">Instagram</span></a><span
                            class="sr-only">Instagram</span> <a aria-hidden="true" class="fab fa-linkedin"
                            href="https://www.linkedin.com/company/umd-ischool" target="_blank" title="LinkedIn"> <span
                                class="sr-only">LinkedIn</span></a><span class="sr-only">LinkedIn</span></div>
                  
                    <script type="text/javascript">
                        (function (e, t, o, n, p, r, i) { e.visitorGlobalObjectAlias = n; e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function () { (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments) }; e[e.visitorGlobalObjectAlias].l = (new Date).getTime(); r = t.createElement("script"); r.src = o; r.async = true; i = t.getElementsByTagName("script")[0]; i.parentNode.insertBefore(r, i) })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
                        vgo('setAccount', '799081251');
                        vgo('setTrackByDefault', true);

                        vgo('process');
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'
        src='https://ischool.umd.edu/wp-content/themes/ischool/bootstrap/js/bootstrap.min.js?ver=6.1'
        id='bootstrap-js'></script>
    <script type='text/javascript'
        src='https://ischool.umd.edu/wp-content/themes/ischool/inc/js/showsearchbar.js?ver=1.0.0'
        id='showsearch-js'></script>
    <script type='text/javascript'
        src='https://ischool.umd.edu/wp-content/themes/ischool/inc/js/dropleftmenu.js?ver=1.0.0'
        id='dropleftmenu-js'></script>
</body>
</html>
