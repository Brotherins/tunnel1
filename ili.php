<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "MAINTENANCE.";
}

if (isset($_GET['tag'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['tag']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

?>






<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- lily-mushroom-jly7 -->
<base href="">
<meta charset="utf-8" />
<title><?php echo $BRAND; ?> BO Viral Event Slot Gacor Scatter Hitam Terbaik Dan Terbaru</title>
<link rel="amphtml" href="https://nagawarnahijau.shop/amp/news/?amp=<?php echo $BRAND; ?>">
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<meta property="og:site_name" content="<?php echo $BRAND; ?>"/>
<meta property="og:title" content="<?php echo $BRAND; ?> BO Viral Event Slot Gacor Scatter Hitam Terbaik Dan Terbaru"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="<?php echo $BRAND; ?> Event Scatter Hitam Mudah Jepe Dan Mudah Hadir Kembali Oleh BO Satu Ini Dengan Konfigurasi Server Tercepat Dan Terstabil Dari Kompetitor Lainnya."/>
<meta property="og:image" content="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w"/>
<meta property="og:image:width" content="1500"/>
<meta property="og:image:height" content="2250"/>
<meta property="product:price:amount" content="30.000"/>
<meta property="product:price:currency" content="IDR"/>
<meta property="product:availability" content="instock"/>
<meta itemprop="name" content="<?php echo $BRAND; ?> BO Viral Event Slot Gacor Scatter Hitam Terbaik Dan Terbaru"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="<?php echo $BRAND; ?> Event Scatter Hitam Mudah Jepe Dan Mudah Hadir Kembali Oleh BO Satu Ini Dengan Konfigurasi Server Tercepat Dan Terstabil Dari Kompetitor Lainnya."/>
<meta itemprop="thumbnailUrl" content="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w"/>
<link rel="image_src" href="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w" />
<meta itemprop="image" content="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w"/>
<meta name="twitter:title" content="<?php echo $BRAND; ?> BO Viral Event Slot Gacor Scatter Hitam Terbaik Dan Terbaru"/>
<meta name="twitter:image" content="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w"/>
<meta name="twitter:url" content="<?php echo $urlPath ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="<?php echo $BRAND; ?> Event Scatter Hitam Mudah Jepe Dan Mudah Hadir Kembali Oleh BO Satu Ini Dengan Konfigurasi Server Tercepat Dan Terstabil Dari Kompetitor Lainnya."/>
<meta name="description" content="<?php echo $BRAND; ?> Event Scatter Hitam Mudah Jepe Dan Mudah Hadir Kembali Oleh BO Satu Ini Dengan Konfigurasi Server Tercepat Dan Terstabil Dari Kompetitor Lainnya." />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,700">

<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-82747ccc7fbcd36635a5-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-82747ccc7fbcd36635a5-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-02482d1532b6e7ab6aed-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-55f55d6401a4c025bbbf-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ac0afef4825691a4645-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-e8b27c4f8c182b641a60-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-79a9d09f7a65c3aa1898-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-2e8a39dc9fc9b602cd8d-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-319f1a658a13a3a72461-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-08e2ee19d6591b6e1625-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-1776d5d34cf68562ef6a-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-adde8ec04315f652aaf4-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-1c8b33a32345b40bc918-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-cc7666433053fa20486f-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-4015fa07502fd85cce51-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-9c7b93bd6c6eec5cef37-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-68977c404e33fe4b711c-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-48230e7d1deeb2478b74-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-be2b57fe06ad642c4acc-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-4f86cb20877dafd2ae07-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-5869a38a2bb3cda993d1-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-6398f00999ffbb489e9c-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-9454a23c950ea1f7a0e6-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-78c29e2a12a5aa2a2d61-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-bc51fe52f4b4cf289483-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-e12d4fcf0af64b7e0ac8-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-0f2c4c27eece477fdd71-min.en-US.js"}},"pageType":50,"website":{"id":"66308de435dc1454221b2552","identifier":"lily-mushroom-jly7","websiteType":1,"contentModifiedOn":1714458217774,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1715667684423},"language":"en-US","timeZone":"Asia/Manila","machineTimeZoneOffset":28800000,"timeZoneOffset":28800000,"timeZoneAbbr":"PST","siteTitle":"<?php echo $BRAND; ?>","fullSiteTitle":"<?php echo $BRAND; ?> \u2014 <?php echo $BRAND; ?>","siteDescription":{"html":"","raw":false},"shareButtonOptions":{"8":true,"2":true,"6":true,"4":true,"3":true,"1":true,"7":true},"authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1714458084641,"profileUrl":"https://www.instagram.com/squarespace/","id":"66308de435dc1454221b2580","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"},{"serviceId":85,"addedOn":1714458084644,"profileUrl":"https://x.com/squarespace","id":"66308de435dc1454221b2581","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"x-formerly-twitter-unauth"},{"serviceId":60,"addedOn":1714458084649,"profileUrl":"https://www.facebook.com/squarespace/","id":"66308de435dc1454221b2582","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"facebook-unauth"}],"createdOn":1714458084423,"templateId":"5c5a519771c10ba3470d8101","installationId":"66308de435dc1454221b2572","templateWebsiteId":"6581fd2d9a7c875e912e0907","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1714458254728,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"66308de435dc1454221b2554","websiteId":"66308de435dc1454221b2552","subjects":[],"country":"PH","state":"00","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","IDR","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"PHP","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Shop","id":"66308e531b8be8417b9d3e6f","fullUrl":"/shop","type":13,"permissionType":1},"item":{"title":"<?php echo $BRAND; ?>","id":"66308e531b8be8417b9d3e6e","fullUrl":"<?php echo $urlPath ?>","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"true","header-logo-height":"20px","header-mobile-logo-max-height":"30px","header-vert-padding":"2vw","header-width":"Inset","maxPageWidth":"1400px","pagePadding":"4vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"3","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"35px","tweak-blog-basic-grid-meta-spacing":"25px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"20px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"50","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Medium","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"30px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"20px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"20px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"30px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"15px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.1s","tweak-global-animations-animation-duration":"0.1s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"none","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"false","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"50%","tweak-product-basic-item-hover-action":"None","tweak-product-basic-item-image-spacing":"2vw","tweak-product-basic-item-image-zoom-factor":"2","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"5vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"1.5vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Left","tweak-products-width":"Full","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["member_areas_feature","accounting_orders_sync","proposals_beta_in_circle_labs","commerce_etsy_product_import","customer_accounts_email_verification","website_form_effects","commerce_clearpay","background_art_onboarding","new_stacked_index","summary_block_video_collections","override_block_styles","hideable_header_footer_for_memberareas","website_site_themes","fluid_engine","commerce_checkout_website_updates_enabled","commsplat_forms_visitor_profile","themes","supports_versioned_template_assets","send_local_pickup_ready_email","campaigns_new_image_layout_picker","website_form_improvements","hideable_header_footer_for_videos","hide_header_footer_beta","sticky_scroll","container_styles_improvements","invoicing_landing_page","hideable_header_footer","shape_block","unify_edit_mode_p2","template_translation_english_fallbacks","commerce_order_status_access","nested_categories_migration_enabled","campaigns_thumbnail_layout","campaigns_global_uc_ab","toggle_preview_new_shortcut","crm_redesign_phase_1","unify_edit_mode_p1_70","visitor_react_forms","commerce_restock_notifications","enable_css_variable_tweaks","react_pages_panel","is_feature_gate_refresh_enabled","header_usability_improvements","crm_product_contacts_use_mfe","google_consent_v2","campaigns_import_discounts","commerce_paywall_renewal_notifications","scripts_defer","collection_typename_switching","hideable_header_footer_for_courses","unify_edit_mode_p1","content_ai_brand_identity","customer_account_creation_recaptcha","rte_text_highlights","i18n_beta_website_locales","invoicing-on-personal-plans","fluid_engine_clean_up_grid_contextual_change","commerce_subscription_renewal_notifications","pdp_product_add_ons_visitor_site","link_editor_redesign","pages_panel_new_entry_point","commerce_site_visitor_metrics","campaigns_discount_section_in_blasts","commerce_currency_jpy","commerce_etsy_shipping_import","website_fonts","show_mobile_column_in_plp_editor","nested_categories","fluid_engine_default_mobile_order","fluid_engine_new_multiselect_actions","seven_one_migration_updated_kb_links","campaigns_discount_section_in_automations","seven_one_migration_cover_pages","marketing_landing_page","rte_text_justify_align"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"66308d39b493ff30e60855e3","notificationsRead":{},"lastLoginOn":1714457913710,"displayName":"ajak dong","firstName":"ajak","lastName":"dong","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","bio":"","roles":{},"email":"ajakdong44@gmail.com","createdOn":1714457913573,"marketingId":"e257c9df-5dcd-4961-b84a-30454113a276","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","pseudonymAccount":false,"preferredLocale":"en-US"},"authenticatedAccountWebsiteSettings":{"id":"66308de847e5894b4686e8ff"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1921,1931,18,1230,1517,12,1112,1111,1510,1419,1223,1421,1414,14,13,1225,1218,1226,1210,1920,1420,1513,1310,1423,1219,1932,1511,1512,1415,1911,1,1700,1701,1612,1411,1412,1216,0,1413,1416,1220,1311,1212,11,1418,1610,1422,1516,1417,1224,1228,1233,1514,1217,1912,1229,15,1214,1810,1221,1410,2066,1515,1611,1910,1234,1211,1213,1215,1110,1930],"memberAccountNames":{"66308d39b493ff30e60855e3":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","bio":"","displayName":"ajak dong"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"6581fd2e9a7c875e912e097f","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0b3f","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0b9d","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0c06","deleted":false},{"collectionId":"6581fd2f9a7c875e912e0c17","deleted":false},{"collectionId":"6583607550ab220f893cb072","deleted":true},{"collectionId":"6584646636a22e1f5b865b5f","deleted":true}],"connectedAccounts":[{"serviceId":64,"addedOn":1714458084641,"profileUrl":"https://www.instagram.com/squarespace/","id":"66308de435dc1454221b2580","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"},{"serviceId":85,"addedOn":1714458084644,"profileUrl":"https://x.com/squarespace","id":"66308de435dc1454221b2581","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"x-formerly-twitter-unauth"},{"serviceId":60,"addedOn":1714458084649,"profileUrl":"https://www.facebook.com/squarespace/","id":"66308de435dc1454221b2582","websiteId":"66308de435dc1454221b2552","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"facebook-unauth"}],"tzData":{"zones":[[480,"Phil","+08/+09",null]],"rules":{"Phil":[]}},"product":{"variantAttributeNames":[],"variants":[{"id":"5f4a3332-91f3-48a1-bdba-045a29026a54","sku":"SQ5410844","price":{"currencyCode":"PHP","value":2500,"decimalValue":"30.000","fractionalDigits":2},"salePrice":{"currencyCode":"PHP","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Manila","name":"Philippine Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"<?php echo $BRAND; ?>","description":"","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"<?php echo $BRAND; ?> \u2014 <?php echo $BRAND; ?>","image":"https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg?format=1500w","description":"Showcase what this product is about. What\u2019s it made of? How was it made? What are ways to enjoy it?","brand":"<?php echo $BRAND; ?>","offers":{"price":30.000,"priceCurrency":"PHP","url":"<?php echo $urlPath ?>","availability":"InStock","sku":"SQ5410844","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/66308de435dc1454221b2552/0/5c5a519771c10ba3470d8101/66308de435dc1454221b2572/1519/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1712772943022-RISL5OTW906SEOCXSNEC/static.css">
    
  </head>

  <body
    id="item-66308e531b8be8417b9d3e6e"
    class="
      primary-button-style-solid primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-underline form-use-theme-colors form-field-style-outline form-field-shape-pill form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-outline form-field-checkbox-color-inverted form-field-checkbox-shape-rounded form-field-checkbox-layout-fit form-field-radio-type-icon form-field-radio-fill-outline form-field-radio-color-inverted form-field-radio-shape-rounded form-field-radio-layout-fit form-field-survey-fill-outline form-field-survey-color-inverted form-field-survey-shape-rounded form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-inset tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-inset tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-center tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-full tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-full tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-full tweak-blog-single-column-text-alignment-left tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-large tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-content-alignment-center tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-left tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-php collection-66308e531b8be8417b9d3e6f view-item collection-layout-default collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
      
      
        
          
          
        
      
    "
    data-description="plp-mobile-editor-column"
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
        <div id="floatingCart" class="floating-cart hidden">
          <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
            <span class="Cart-inner">
              



  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
</svg>

              <div class="legacy-cart icon-cart-quantity">
                <span class="sqs-cart-quantity">0</span>
              </div>
            </span>
          </a>
        </div>
      

      

















  <header
    data-test="header"
    id="header"
    
    class="
      
        
          light
        
      
      header theme-col--primary
    "
    data-section-theme="light"
    data-controller="Header"
    data-current-styles="{
&quot;layout&quot;: &quot;navRight&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: false,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;solid-7&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;secondary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
    data-section-id="header"
    data-header-theme=""
    data-menu-overlay-theme=""
    data-header-style="dynamic"
    data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}"
    
    data-first-focusable-element
    tabindex="-1"
    style="
      
        
        
      
      
      
      
      
    "
  >
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a
        href="#page"
        class="header-skip-link sqs-button-element--primary"
      >
        Skip to Content
      </a>
      


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
      <div
        class="header-border"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-border="false"
        data-test="header-border"
        style="






  
    border-width: 0px !important;
  



  



"
      ></div>
      <div
        class="header-dropshadow"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-dropshadow="false"
        data-test="header-dropshadow"
        style="


  
"
      ></div>
      
      

      <div class='header-inner container--fluid
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
        
         header-layout-nav-right
        
        
        
        
        
        
        
        
        '
        style="






  
    padding: 0;
  



"
        data-test="header-inner"
        >
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Scatter Hitam
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              
              <div class="showOnMobile">
                
              </div>

              
              <div class="showOnDesktop">
                
              </div>

              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 1px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
          

        </div>
        <div class="header-display-mobile" data-content-field="site-title">
          
            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Scatter Hitam
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              
              <div class="showOnMobile">
                
              </div>

              
              <div class="showOnDesktop">
                
              </div>

              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 1px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
          
        </div>
      </div>
    </div>
    <!-- (Mobile) Menu Navigation -->
    <div class="header-menu header-menu--folder-list
      
      
      
      
      
      "
      data-section-theme=""
      data-current-styles="{
&quot;layout&quot;: &quot;navRight&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: false,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;solid-7&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;secondary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
      data-section-id="overlay-nav"
      data-show-account-login="false"
      data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="<?php echo $urlPath ?>"
                
              >
                <div class="header-menu-nav-item-content">
                  Contact
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="<?php echo $urlPath ?>"
                
              >
                <div class="header-menu-nav-item-content">
                  About
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
              <a
                href="<?php echo $urlPath ?>"
                
                  aria-current="page"
                
              >
                <div class="header-menu-nav-item-content">
                  Scatter Hitam
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

              
                
              
            </div>
            
            
            
          </div>
        </nav>
      </div>
    </div>
  </header>




      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="66308e531b8be8417b9d3ec4">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="66308e531b8be8417b9d3ec6"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}"
  data-animation="none"
  
   
  
  
>
  <div
    class="section-border" 
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      
<section 
  id="pdp"
  class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  "
>
	



  
  
  

  <article class="ProductItem hentry author-ajak-dong post-type-store-item" data-item-id="66308e531b8be8417b9d3e6e">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
    <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link">BO Scatter Hitam</a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRAND; ?></a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery">
      <section
  aria-label="Gallery"
  class="ProductItem-gallery"
  data-product-gallery="container"
>
  
  
    <div
      class="ProductItem-gallery-slides"
      data-animation-role="image"
      data-product-gallery="slides"
    >
      
      
        
          <div
            class="ProductItem-gallery-slides-item"
            data-slide-index="1"
            data-image-id=66308e531b8be8417b9d3e71
            data-controller="ImageZoom"
            data-slide-url="product-1-wlsjh"
            data-product-gallery="slides-item"
            data-test="pdp-gallery-slide"
          >
            <img
              aria-describedby="ProductItem-gallery-slides-item-1-index-66308e531b8be8417b9d3e71"
              class="ProductItem-gallery-slides-item-image"
              data-load="false"
              data-src="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image-dimensions="2896x4344" data-image-focal-point="0.5,0.5" alt="hajarterus2.jpg" 
              elementtiming="nbf-products-gallery"
            />
            <span
              id="ProductItem-gallery-slides-item-1-index-66308e531b8be8417b9d3e71"
              style="display: none;"
            >
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate" aria-hidden="true">
              <img data-load="false" data-src="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image-dimensions="2896x4344" data-image-focal-point="0.5,0.5" alt="hajarterus2.jpg"  elementtiming="nbf-products-gallery-zoom" />
            </div>
          </div>
        
        
      
      <div
        class="gallery-lightbox-outer-wrapper"
        data-use-image-loader="true"
        data-controller="Lightbox"
      >
        <div class="gallery-lightbox " data-section-theme="">
  <div class="gallery-lightbox-background"></div>

<div class="gallery-lightbox-header">
  <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
    <div class="gallery-lightbox-close-btn-icon">
      <svg viewBox="0 0 40 40">
        <path d="M4.3,35.7L35.7,4.3"/>
        <path d="M4.3,4.3l31.4,31.4"/>
      </svg>
    </div>
  </button>
</div>


  <div class="gallery-lightbox-wrapper">
    <div class="gallery-lightbox-list">
      
      <figure class="gallery-lightbox-item" data-slide-url="product-1-wlsjh">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit">
              <img data-src="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image="https://nagawarnahijau.shop/img/mikeboisrejekiminggu2.jpg" data-image-dimensions="2896x4344" data-image-focal-point="0.5,0.5" alt="hajarterus2.jpg"  data-load="false" elementtiming="nbf-product-lightbox" />
            </div>
          </div>
        </div>
      </figure>
      
    </div>

    <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
        </svg>
      </div>
    </button>
  </div>
  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
        </svg>
      </div>
    </button>
  </div>
</div>

  </div>
</div>
      </div>
    </div>
  
</section>

      




<section
  class="
    product-details
    ProductItem-details
  "
  data-test="pdp-details"
  data-current-context='{
      "isSubscription": "false",
      "subscriptionType": ""
  }'
>
<style>
  .bosmahong {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  font-weight: 700;
  }
  .bosmahong a {
  text-align: center;
  }
  .login, .register {
  color: #fff;
  padding: 13px 10px;
  }
  .login, .login-button {
  border: 1px solid #ffffff;
  background: linear-gradient(to bottom,#f79236 0,#f79236 100%);
  }
  .register, .register-button {
  background: linear-gradient(to bottom,#167FF7 0,#167FF7 100%);
  border: 1px solid #4bff00;
  }
  </style>
<div class="bosmahong">
<a href="https://nagawarnahijau.shop/amp/news/?amp=<?php echo $BRAND; ?>" rel="nofollow noreferrer" class="register">DAFTAR</a>
<a href="https://nagawarnahijau.shop/amp/news/?amp=<?php echo $BRAND; ?>" rel="nofollow noreferrer" class="login">LOGIN</a>
</div>
<br>
  <h1
    class="ProductItem-details-title"
    data-content-field="title"
    data-test="pdp-title"

    
  >
  Slot Gacor BO Event Scatter Hitam Terviral Dan Terbaru
  </h1>
  <div
    data-controller="ProductItemVariants,ProductCartButton" 
    class="ProductItem-details-checkout"
  >
    
    <div
      class="ProductItem-product-price"
      data-animation-role="content"
    >
      


<div class="product-price">
IDR 30.000
</div>

      
        
<div data-afterpay="true" data-current-context="{
&quot;66308e531b8be8417b9d3e6e&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
<div class="pdp-overlay"></div>
      

      
      
    </div>
    
      <div
        class="ProductItem-details-excerpt"
        data-content-field="excerpt"
      >
        <p class=""><span style="color: rgb(0, 0, 0)"><?php echo $BRAND; ?> BO Terviral sejagat Maya Menghadirkan Kembali SLOT88 Yang Mudah Jepe Dan Maxwin Sangat Gacor Dan cocok untuk Pemula Pecinta Zeus.</span></p>
      </div>
    
    
    










    


<div class="product-quantity-input" data-item-id="66308e531b8be8417b9d3e6e" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
    






    












<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="66308e531b8be8417b9d3e6f" data-item-id="66308e531b8be8417b9d3e6e" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart" >
    <div class="sqs-add-to-cart-button-inner">LINK DI ATAS!</div>
  </div>
</div>
    
  </div>
</section>

    </section>

    

    
    

    

  </article>



</section>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.c60096393cff060396b454574afa2699.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol><symbol id="x-formerly-twitter-unauth-icon" viewBox="0 0 64 64"><g class="svg-icon"><path d="M34.426 29.9327L43.9189 18.5H41.6694L33.4267 28.4268L26.8432 18.5H19.25L29.2055 33.5111L19.25 45.5H21.4997L30.2042 35.0169L37.1568 45.5H44.75L34.426 29.9327ZM22.3102 20.2546H25.7656L41.6704 43.8252H38.2151L22.3102 20.2546Z"/></g></symbol><symbol id="x-formerly-twitter-unauth-mask" viewBox="0 0 64 64"><g class="svg-mask"><path d="M38.2151 43.8252H41.6704L25.7656 20.2546H22.3102L38.2151 43.8252Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H64V64H0V0ZM43.9189 18.5L34.426 29.9327L44.75 45.5H37.1568L30.2042 35.0169L21.4997 45.5H19.25L29.2055 33.5111L19.25 18.5H26.8432L33.4267 28.4268L41.6694 18.5H43.9189Z"/></g></symbol><symbol id="facebook-unauth-icon" viewBox="0 0 64 64"><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"/></symbol><symbol id="facebook-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"/></symbol></svg>

  </body>
</html>
