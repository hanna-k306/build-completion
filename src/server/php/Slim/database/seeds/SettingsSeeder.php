<?php

use Phinx\Seed\AbstractSeed;

class SettingsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $json_string = '{"0":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-08-08 15:34:28","setting_category_id":"1","name":"SITE_NAME","value":"On Demand Service Marketplace","label":"Site Name","description":"This name will be used in all pages, emails.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"1":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-05-13 11:08:13","setting_category_id":"1","name":"SITE_VERSION","value":"v1.0a.01","label":"Site Version","description":"This is current site version.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"2":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-08-10 18:17:33","setting_category_id":"1","name":"SITE_DAFAULT_LANGUAGE","value":"en","label":"Site Dafault Language","description":"This is default language to be used in all pages throughout site.","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"3":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-08-02 18:04:44","setting_category_id":"1","name":"SITE_CURRENCY_CODE","value":"USD","label":"Currency Code","description":"The selected currency will be used in site to display as default currency in all pages. (Replaced with user selected currency)","is_active":"1","display_order":"4","plugin":"","is_front_end_access":"1"},"4":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-07-29 14:52:01","setting_category_id":"1","name":"SITE_CONTACT_EMAIL","value":"productdemo.admin@gmail.com","label":"Contact Email Address","description":"This is the email address to which you will receive the mail from contact form.","is_active":"1","display_order":"10","plugin":"","is_front_end_access":"0"},"5":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-07-29 14:51:56","setting_category_id":"1","name":"SITE_REPLY_TO_EMAIL","value":"","label":"Reply Email Address","description":"\"Reply-To\" email header for all emails. Leave it empty to receive replies as usual (to \"From\" email address).","is_active":"1","display_order":"6","plugin":"","is_front_end_access":"0"},"6":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-07-29 14:51:46","setting_category_id":"1","name":"SITE_FROM_EMAIL","value":"productdemo.admin@gmail.com","label":"From Email Address","description":"This is the email address that will appear in the \"From\" field of all emails sent from the site.","is_active":"1","display_order":"7","plugin":"","is_front_end_access":"0"},"7":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-05-13 11:08:13","setting_category_id":"2","name":"META_KEYWORDS","value":"Agriya, AgriyaBase, Ahsan","label":"Meta keywords","description":"These are the keywords used for improving search engine results of our site. (Comma separated for multiple keywords.)","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"8":{"created_at":"2016-05-13 11:08:13","updated_at":"2016-05-13 11:08:13","setting_category_id":"2","name":"META_DESCRIPTION","value":"AgriyaBase","label":"Mets description","description":"This is the short description of your site, used by search engines on search result pages to display preview snippets for a given page.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"9":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-02 18:05:45","setting_category_id":"2","name":"SITE_ROBOTS","value":"robot txts are missing.","label":"Robots","description":"Content for robots.txt; (search engine) robots specific instructions. Refer,http:\/\/www.robotstxt.org\/ for syntax and usage.","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"0"},"10":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-07-03 19:54:44","setting_category_id":"3","name":"FOLLOW_FACEBOOK_URL","value":"","label":"Facebook URL","description":"Facebook url of site.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"11":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-05-13 11:08:14","setting_category_id":"3","name":"FOLLOW_GOOGLE_PLUS_URL","value":"https:\/\/plus.google.com\/+AgriyaNews","label":"Google Plus URL","description":"Google plus url of site.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"12":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-05-13 11:08:14","setting_category_id":"3","name":"FOLLOW_LINKEDIN_URL","value":"https:\/\/www.linkedin.com\/company\/agriya","label":"LinkedIn URL","description":"LinkedIn url of site.","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"13":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:08:45","setting_category_id":"3","name":"FOLLOW_FOURSQUARE_URL","value":"http:\/\/www.foursquare.com","label":"Foursquare URL","description":"Foursquare url of site.","is_active":"1","display_order":"4","plugin":"","is_front_end_access":"1"},"14":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:09:01","setting_category_id":"3","name":"FOLLOW_PINTEREST_URL","value":"http:\/\/www.Pinterest.com","label":"Pinterest URL","description":"Pinterest url of site.","is_active":"1","display_order":"5","plugin":"","is_front_end_access":"1"},"15":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:09:25","setting_category_id":"3","name":"FOLLOW_FLICKR_URL","value":"http:\/\/www.Flickr.com","label":"Flickr URL","description":"Flickr url of site.","is_active":"1","display_order":"6","plugin":"","is_front_end_access":"1"},"16":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:09:41","setting_category_id":"3","name":"FOLLOW_INSTAGRAM_URL","value":"http:\/\/www.Instagram.com","label":"Instagram URL","description":"Instagram url of site.","is_active":"1","display_order":"7","plugin":"","is_front_end_access":"1"},"17":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:10:19","setting_category_id":"3","name":"FOLLOW_TUMBLR_URL","value":"http:\/\/www.tumblr.com","label":"Tumblr URL","description":"Tumblr url of site.","is_active":"1","display_order":"8","plugin":"","is_front_end_access":"1"},"18":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:10:46","setting_category_id":"3","name":"FOLLOW_YOUTUBE_URL","value":"http:\/\/www.youtube.com","label":"YouTube URL","description":"YouTube url of site.","is_active":"1","display_order":"9","plugin":"","is_front_end_access":"1"},"19":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 16:14:17","setting_category_id":"3","name":"FOLLOW_VIMEO_URL","value":"http:\/\/www.vimeo.com","label":"Vimeo URL","description":"Vimeo url of site.","is_active":"1","display_order":"10","plugin":"","is_front_end_access":"1"},"20":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 15:46:45","setting_category_id":"3","name":"FOLLOW_TWITTER_URL","value":"https:\/\/twitter.com\/agriya","label":"Twitter URL","description":"Twitter url of site.","is_active":"1","display_order":"11","plugin":"","is_front_end_access":"1"},"21":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 10:52:52","setting_category_id":"4","name":"USER_IS_ADMIN_ACTIVATE_AFTER_REGISTER","value":"0","label":"Enable Administrator Approval After Registration","description":"On enabling this feature, admin need to approve each user after registration (User cannot login until admin approves)","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"22":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-06-25 22:15:43","setting_category_id":"4","name":"USER_IS_EMAIL_VERIFICATION_FOR_REGISTER","value":"0","label":"Enable Email Verification After Registration","description":"On enabling this feature, user need to verify their email address provided during registration. (User cannot login until email address is verified)","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"0"},"23":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-08-12 15:47:58","setting_category_id":"4","name":"USER_IS_AUTO_LOGIN_AFTER_REGISTER","value":"1","label":"Enable Auto Login After Registration","description":"On enabling this feature, users will be automatically logged-in after registration. (Only when Email Verification and Admin Approval is disabled)","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"0"},"24":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-05-13 11:08:14","setting_category_id":"4","name":"USER_IS_ADMIN_MAIL_AFTER_REGISTER","value":"1","label":"Enable Notify Administrator on Each Registration","description":"On enabling this feature, notification mail will be sent to administrator on each registration.","is_active":"1","display_order":"4","plugin":"","is_front_end_access":"0"},"25":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-07-03 19:57:49","setting_category_id":"4","name":"USER_IS_WELCOME_MAIL_AFTER_REGISTER","value":"1","label":"Enable Sending Welcome Mail After Registration","description":"On enabling this feature, users will receive a welcome mail after registration.","is_active":1,"display_order":"1","plugin":"5"},"26":{"created_at":"2016-05-13 11:08:14","updated_at":"2016-05-13 11:08:14","setting_category_id":"4","name":"USER_IS_ALLOW_USER_TO_SWITCH_LANGUAGE","value":"1","label":"Enable User to Switch Language","description":"On enabling this feature, users can change site language to their choice.","is_active":"1","display_order":"6","plugin":"","is_front_end_access":"1"},"27":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"5","name":"USER_MINIMUM_WITHDRAW_AMOUNT","value":"2","label":"Minimum Wallet Withdrawal Amount","description":"This is the minimum amount a user can withdraw from their wallet.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"28":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"5","name":"USER_MAXIMUM_WITHDRAW_AMOUNT","value":"1000","label":"Maximum Wallet Withdrawal Amount","description":"This is the maximum amount a user can withdraw from their wallet.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"29":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"6","name":"ANDROID_APP_STORE_ID","value":"","label":"Android App Store ID","description":"This is the App store ID used for Android App","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"30":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"6","name":"IOS_APP_STORE_ID","value":"","label":"iOS App Store ID","description":"This is the App store ID used for iOS App","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"31":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"6","name":"IPAD_APP_STORE_ID","value":"","label":"iPad App Store ID","description":"This is the App store ID used for iPad App","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"0"},"32":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"6","name":"WINDOWS_PHONE_APP_ID","value":"","label":"Windows Phone App ID","description":"This is the App ID used for Windows Phone App","is_active":"1","display_order":"4","plugin":"","is_front_end_access":"0"},"33":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-05-13 11:08:15","setting_category_id":"6","name":"SCHEME_NAME","value":"","label":"Scheme Name","description":"This is the Scheme Name used in deep link tags","is_active":"1","display_order":"5","plugin":"","is_front_end_access":"1"},"34":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-07-29 21:06:08","setting_category_id":"7","name":"CAPTCHA_SITE_KEY","value":"6LdNTiYTAAAAAH6iaF5nfY7Dw5ilKuZevSugcZeO","label":"Captcha Site Key","description":"Captcha Site Key.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"35":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-07-29 21:06:16","setting_category_id":"7","name":"CAPTCHA_SECRET_KEY","value":"6LdNTiYTAAAAAHD2XPwR__dqZ7tWHDP3RvgcDkXC","label":"Captcha Secret Key","description":"Captcha Secret Key.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"0"},"36":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-08-01 18:36:40","setting_category_id":"8","name":"BANNER_ALL_PAGE_TOP","value":"<a href=\"http:\/\/www.crossref.org\/crossmark\/?md728x90\"><img src=\"http:\/\/www.crossref.org\/crossmark\/banners\/md728x90.jpg\" alt=\"CrossMark Web Banner\" width=\"728\" height=\"90\" border=\"0\" \/><\/a>","label":"Banner All Page Top","description":"Banner for all page top in the site.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"37":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-08-01 18:37:07","setting_category_id":"8","name":"BANNER_ALL_PAGE_BOTTOM","value":"<a href=\"http:\/\/www.crossref.org\/crossmark\/?md728x90\"><img src=\"http:\/\/www.crossref.org\/crossmark\/banners\/md728x90.jpg\" alt=\"CrossMark Web Banner\" width=\"728\" height=\"90\" border=\"0\"\/><\/a>","label":"Banner All Page Bottom","description":"Banner for all page bottom in the site.","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"0"},"38":{"created_at":"2016-05-13 11:08:15","updated_at":"2016-08-12 19:08:09","name":"SITE_ENABLED_PLUGINS","value":"ListingFavorites\/ListingFavorites,Translations\/Translations,Withdrawal\/Withdrawal,PayPal\/PayPal,Review\/Review,CancellationPolicies\/CancellationPolicies,OnlineAssessment\/OnlineAssessment,Referral\/Referral,SMS\/SMS,PaymentBooking\/PaymentBooking,ProUser\/ProUser,TopUser\/TopUser","label":"Enabled Plugins","description":"Enabled Plugins list in comma separater","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"39":{"created_at":"2016-06-10 11:38:14","updated_at":"2016-08-01 18:51:10","setting_category_id":"10","name":"SITE_TIMEFORMAT","value":"12","label":"Time Format","description":"Change the Site Time Format 12 or 24","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"40":{"created_at":"2016-06-09 00:38:14","updated_at":"2016-06-28 07:13:58","setting_category_id":"9","name":"SMS_GATEWAY_TOKEN","value":"","label":"SMS Gateway Auth Token","description":"SMS Gateway Auth Token used to send the SMS","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"41":{"created_at":"2016-06-09 06:08:14","updated_at":"2016-06-28 12:43:58","setting_category_id":"12","name":"IPHONE_PEM_FILE_NAME","value":"agriyaTest.pem","label":"Pem File Name","description":"For Manage the Pemfile Certification.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"42":{"created_at":"2016-05-13 05:38:13","updated_at":"2016-08-12 15:43:24","setting_category_id":"1","name":"SITE_CONTACT_NUMBER","value":"(1234) 123-1234","label":"Contact Phone Number","description":"This is the contact number that will appear in the Homepage.","is_active":"1","display_order":"8","plugin":"","is_front_end_access":"1"},"43":{"created_at":"2017-10-13 15:58:09","updated_at":"2017-10-13 15:58:09","setting_category_id":"13","name":"BOOKING_EXPIRING_HOURS","value":"24","label":"Booking Expiring Hours","description":"Booking will we expired after mentioned hours if service provider not respond. leave it blank for no expiring (hrs)","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"44":{"created_at":"2017-10-13 15:58:09","updated_at":"2017-10-13 15:58:09","setting_category_id":"14","name":"AFFILIATE_EXPIRE_TIME","value":"48","label":"Referral Expire Time","description":"Anyone comes through affiliates link, we will keep the cookie of referrer this mentioned hours. Leave it blank for no limitation","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"45":{"created_at":"2017-10-13 15:58:09","updated_at":"2017-10-13 15:58:09","setting_category_id":"14","name":"AFFILIATE_REFERRAL_AMOUNT_FOR_AFFILIATE","value":"10","label":"Referral Amount","description":"Referral Amount","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"1"},"46":{"created_at":"2017-10-13 15:58:09","updated_at":"2017-10-13 15:58:09","setting_category_id":"14","name":"AFFILIATE_REFERRAL_AMOUNT_NEW_USER","value":"10","label":"Referral Amount for new user","description":"Referral Amount for new user","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"61":{"created_at":"2017-11-23 12:07:20","updated_at":"2017-11-23 12:07:20","setting_category_id":"5","name":"WITHDRAW_REQUEST_FEE","value":"0","label":"Withdraw Request Fee","description":"withdraw request fee","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"62":{"created_at":"2017-11-23 12:07:20","updated_at":"2017-11-23 12:07:20","setting_category_id":"5","name":"WITHDRAW_REQUEST_FEE_TYPE","value":"Percentage","label":"Fee Type","description":"Type of withdraw request","is_active":"1","display_order":"4","plugin":"","is_front_end_access":"1"},"63":{"created_at":"2016-06-09 06:08:14","updated_at":"2016-06-28 12:43:58","setting_category_id":"6","name":"IPHONE_PEM_PASSWORD","value":"agriya","label":"Pem Password","description":"For Manage the Pemfile Certification.","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"0"},"64":{"created_at":"2016-06-09 06:08:14","updated_at":"2016-06-28 12:43:58","setting_category_id":"6","name":"ANDROID_API_ACCESS_KEY","value":"agriya","label":"android api access key","description":"android api access key","is_active":"1","display_order":"2","plugin":"","is_front_end_access":"0"},"65":{"created_at":"2017-11-23 12:08:26","updated_at":"2017-11-23 12:08:26","setting_category_id":"1","name":"SITE_HELP_LINK","value":"http:\/\/help.on-demand-service-marketplace.nginxpg.develag.com\/","label":"Site Help Link","description":"Site Help Link","is_active":"1","display_order":"9","plugin":"","is_front_end_access":"1"},"68":{"created_at":"2017-11-13 13:05:27","updated_at":"2017-11-13 13:05:27","name":"ALLOWED_SERVICE_LOCATIONS","value":"","label":"Allowed Service Locations","description":"Allowed Service Locations","is_active":"1","display_order":"0","plugin":"","is_front_end_access":"1"},"69":{"created_at":"2017-11-23 12:09:03","updated_at":"2017-11-23 12:09:03","setting_category_id":"14","name":"AFFILIATE_AMOUNT_REFUND_WHEN_APPOINTMENT_EXPIRE","value":"1","label":"AFFILIATE AMOUNT REFUND WHEN APPOINTMENT_EXPIRE","description":"","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"70":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_NEW_ENQUIRY_TO_SERVICE_PROVIDER","value":"You have new service request from ##REQUESTOR_NAME##.","label":"SMS For New Enquiry To Service Provider","description":"We will send this sms to service provide when he enquired. And other contants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##","is_active":"1","display_order":"7","plugin":"","is_front_end_access":"0"},"71":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_NEW_MESSAGE_RECEIVED","value":"You have new message received in ##SITE_NAME##.","label":"SMS For New Message Received","description":"We will send this SMS when new message is received for users. And other constants variables are ##SITE_NAME##, ##RECEIVER_FIRST_NAME##, ##RECEIVER_LAST_NAME##, ##SENDER_FIRST_NAME##, ##SENDER_LAST_NAME##","is_active":"1","display_order":"8","plugin":"","is_front_end_access":"0"},"72":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_NEW_BOOKING","value":"You have new booking in ##SITE_NAME##.","label":"SMS For New Booking","description":"We will send this SMS when requester is booked for appointment. And other contants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"9","plugin":"","is_front_end_access":"0"},"73":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_BOOKING_ACCEPTED_BY_SERVICE_PROVIDER","value":"Your booking is accepted in ##SITE_NAME##.","label":"SMS For Booking Accepted By Service Provider","description":"We will send this SMS when Service Provider accepted booking. And other constants variables are  ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"10","plugin":"","is_front_end_access":"0"},"74":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_PAID_AND_BOOKING_CONFIRMED_BY_REQUESTER","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## accepted you response for a booking enquiry.","label":"SMS For Paid And Booking Confirmed By Requestor","description":"We will send this SMS when Requester Paid and Booking is confirmed. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"11","plugin":"","is_front_end_access":"0"},"75":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_TASK_MARKED_AS_INPROGRESS_BY_SERVICE_PROVIDER","value":"##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME## starts the task in ##SITE_NAME##.","label":"SMS For Task Marked As Inprogress by Service provider","description":"We will send this SMS when Service Provider marked his task as Inprogress. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"12","plugin":"","is_front_end_access":"0"},"76":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_TASK_MARKED_AS_COMPLETED_BY_SERVICE_PROVIDER","value":"##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME## marked as completed the task in ##SITE_NAME##. Please verify and close it.","label":"SMS For Task Marked as Completed by Service Provider","description":"We will send this SMS when Service Provider marked his task as Completed. And other Constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"13","plugin":"","is_front_end_access":"0"},"77":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_REVIEW_POSTED_BY_REQUESTOR","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## update review for your work on ##SITE_NAME##","label":"SMS For Review Posted By Requester","description":"We will send this SMS For Review Posted By Requester. And other constants are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"14","plugin":"","is_front_end_access":"0"},"78":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_AMOUNT_RECEIVED_TO_SERVICE_PROVIDER","value":"Your revenue amount credited in your ##SITE_NAME## wallet for the booking of ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##.","label":"SMS For Amount Received To Service Provider","description":"We will send this SMS when Amount received to service provider. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"15","plugin":"","is_front_end_access":"0"},"79":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"9","name":"SMS_FOR_TASK_MARKED_AS_CLOSED_BY_REQUESTOR","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## accepted your work completion and closed.","label":"SMS For Task Marked As Closed By Requester","description":"We will send this SMS when Task marked as closed by Requester. And other variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"16","plugin":"","is_front_end_access":"0"},"80":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"IS_SITE_ENABLED_PUSH_NOTIFICATION","value":"0","label":"Is Site Enabled Push Notification","description":"This Setting used enable push notification service","is_active":"1","display_order":"5","plugin":"","is_front_end_access":"1"},"81":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_NEW_ENQUIRY_TO_SERVICE_PROVIDER","value":"You have new service request from ##REQUESTOR_NAME##.","label":"Push Notification For New Enquiry to Service Provider","description":"We will send this Push Notification when Service provider received Enquiry. And other constant variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME## ","is_active":"1","display_order":"6","plugin":"","is_front_end_access":"0"},"82":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_NEW_BOOKING","value":"You have new booking in ##SITE_NAME##.","label":"Push Notification For New Booking","description":"We will send this push notification when Requestor booking new appointment. And other constant variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"7","plugin":"","is_front_end_access":"0"},"83":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_BOOKING_ACCEPTED_BY_SERVICE_PROVIDER","value":"Your booking is accepted in ##SITE_NAME##.","label":"Push Notification For Booking Accepted by Service Provider","description":"We will send this Push Notification when Booking accepted by service provider. And other constants variables are  ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"8","plugin":"","is_front_end_access":"0"},"84":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_PAID_AND_BOOKING_CONFIRMED_BY_REQUESTOR","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## accepted you response for a booking enquiry.","label":"Push Notification For Paid And Booking Confirmed By Requestor","description":"We will send this push notification when Requestor paid and Booking confirmed. And other constant variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"9","plugin":"","is_front_end_access":"0"},"85":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_TASK_MARKED_AS_INPROGRESS_BY_SERVICE_PROVIDER","value":"##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME## starts the task in ##SITE_NAME##.","label":"Push Notification For Task Marked as InProgress by Service Provider","description":"We will send this Push notification when Task Marked as InProgress by Service Provider. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"10","plugin":"","is_front_end_access":"0"},"86":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_TASK_MARKED_AS_COMPLETED_BY_SERVICE_PROVIDER","value":"##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME## marked as completed the task in ##SITE_NAME##. Please verify and close it.","label":"Push Notification For Task Marked as Completed by Service Provider","description":"We will send this Push notification when Task Marked as Completed by Service Provider. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"11","plugin":"","is_front_end_access":"0"},"87":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_TASK_MARKED_AS_CLOSED_BY_REQUESTOR","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## accepted your work completion and closed.","label":"Push Notification For Task Marked as closed by Requestor","description":"We will send this push notification when Task Marked as closed by Requestor. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"12","plugin":"","is_front_end_access":"0"},"88":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_REVIEW_POSTED_BY_REQUESTOR","value":"##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME## update review for your work on ##SITE_NAME##","label":"Push Notification For Review Posted By Requestor","description":"We will send this push notification when Review Posted By Requestor. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"13","plugin":"","is_front_end_access":"0"},"89":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_AMOUNT_RECEIVED_TO_SERVICE_PROVIDER","value":"Your revenue amount credited in your ##SITE_NAME## wallet for the booking of ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##.","label":"Push Notification For Amount Received to service provider","description":"We will send this push notification when Amount Received to service provider. And other constants variables are ##SITE_NAME##, ##REQUESTOR_FIRST_NAME##, ##REQUESTOR_LAST_NAME##, ##SERVICE_PROVIDER_FIRST_NAME##, ##SERVICE_PROVIDER_LAST_NAME##, ##SERVICE_NAME##, ##APPOINTMENT_DATE##","is_active":"1","display_order":"14","plugin":"","is_front_end_access":"0"},"90":{"created_at":"2017-11-23 12:09:12","updated_at":"2017-11-23 12:09:12","setting_category_id":"6","name":"PUSH_NOTIFICATION_FOR_NEW_MESSAGE_RECEIVED","value":"You have new message received in ##SITE_NAME##","label":"Push Notification For New Message Received","description":"We will send this push notification when  New Message Received. And other constants variables are ##SITE_NAME##, ##RECEIVER_FIRST_NAME##, ##RECEIVER_LAST_NAME##, ##SENDER_FIRST_NAME##, ##SENDER_LAST_NAME##","is_active":"1","display_order":"15","plugin":"","is_front_end_access":"0"},"91":{"created_at":"2017-11-23 12:09:14","updated_at":"2017-11-23 12:09:14","setting_category_id":"9","name":"SMS_ACCOUNT_SID","value":"1","label":"SMS Account SID","description":"","is_active":"1","display_order":"17","plugin":"","is_front_end_access":"0"},"92":{"created_at":"2017-11-23 12:09:15","updated_at":"2017-11-23 12:09:15","setting_category_id":"9","name":"SMS_FROM_NUMBER","value":"1234567890","label":"SMS From Number","description":"This SMS from number used when sending SMS ","is_active":"1","display_order":"18","plugin":"","is_front_end_access":"0"},"93":{"created_at":"2017-12-08 16:52:23","updated_at":"2017-12-08 16:52:23","setting_category_id":"13","name":"SITE_COMMISSION_FOR_BOOKING_FROM_SERVICE_PROVIDER","value":"18","label":"Commission Percentage from Service Provider","description":" This is the commission percentage which will be taken from freelancer when booking amount release to service provider account. e.g., The booking amount is $100 and this commission is 18%, then freelancer will get $82. Set 0 or leave it blank for no commission from service provider.","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"94":{"created_at":"2017-12-08 16:52:23","updated_at":"2017-12-08 16:52:23","setting_category_id":"13","name":"AUTO_CLOSE_DAYS","value":"2","label":"Auto Close Days","description":"Amount will credited to service provider wallet after marked as completed by Service provider and not responded by customer. Leave it blank for auto close off.","is_active":"1","display_order":"3","plugin":"","is_front_end_access":"1"},"95":{"created_at":"2017-12-08 16:52:23","updated_at":"2017-12-08 16:52:23","setting_category_id":"1","name":"CURRENCY_SYMBOL","value":"$","label":"Site Currency Symbol","description":"Site Currency symbol of PayPal Currency Code. eg. $ for USD","is_active":"1","display_order":"5","plugin":"","is_front_end_access":"1"},"96":{"created_at":"2017-12-08 16:52:25","updated_at":"2017-12-08 16:52:25","setting_category_id":"6","name":"IPHONE_IS_LIVE","value":"1","label":"iPhone live mode","description":"This is the live mode of the site","is_active":"1","display_order":"16","plugin":"","is_front_end_access":"0"},"97":{"created_at":"2017-12-22 14:43:04","updated_at":"2017-12-22 14:43:04","setting_category_id":"1","name":"SITE_LANGUAGES","value":"en,no","label":"Site Languages","description":"These are the site\'s available languages. The user can select any one of the language in the site and seeing the site content by their selected language","is_active":"1","display_order":"11","plugin":"","is_front_end_access":"1"},"98":{"created_at":"2017-12-27 18:23:24","updated_at":"2017-12-27 18:23:24","setting_category_id":"1","name":"IS_ALLOW_TO_REGISTER_SERVICE_PROVIDER","value":"1","label":"Allow to Register Service Provider?","description":"If 0 mean, no one can register as service provider from site.","is_active":"1","display_order":"12","plugin":"","is_front_end_access":"1"},"99":{"created_at":"2017-12-30 19:20:23","updated_at":"2017-12-30 19:20:23","setting_category_id":"1","name":"IS_ENABLED_CAPTCHA_FOR_LOGIN","value":"0","label":"Enable Captcha for login?","description":"Set 1 for enabling captcha in login form otherwise set 0","is_active":"1","display_order":"13","plugin":"","is_front_end_access":"1"},"100":{"created_at":"2018-01-03 15:06:00","updated_at":"2018-01-03 15:06:00","setting_category_id":"1","name":"SITE_TIMEZONE","value":"200","label":"Site Timezone","description":"This is the site timezone that will used for all the time displaying. text","is_active":"1","display_order":"11","plugin":"","is_front_end_access":"1"},"101":{"created_at":"2017-12-29 19:06:00","updated_at":"2017-12-29 19:06:00","name":"IS_ENABLED_SWITCH_ACCOUNT_TYPE","value":"0","label":"Allow to Switch Account Type","description":"When enabling this, users can switch their account as Service Provider, or Customer or Both Service Provider and Customer","is_active":"1","display_order":"1","plugin":"","is_front_end_access":"1"},"102":{"created_at":"2017-12-29 19:06:00","updated_at":"2017-12-29 19:06:00","name":"SITE_COMMISSION_FOR_BOOKING_FROM_CUSTOMER","value":"0","label":"Commission Percentage From Customer","description":"This is the commission percentage which will be taken from customer when booking amount","is_active":"1","display_order":"10","plugin":"","is_front_end_access":"1"},"103":{"created_at":"2018-01-09 13:18:09","updated_at":"2018-01-09 13:18:09","setting_category_id":"15","name":"PRO_ACCOUNT_FEE","value":"500","label":"PRO Account One Time Amount","description":"Enter amount of PRO Account fee, leave it blank if any PRO account concept (not sure.. this is info or desc?)","is_active":"1","display_order":"1","plugin":"ProUser\/ProUser","is_front_end_access":"1"},"106":{"created_at":"2018-01-09 13:18:09","updated_at":"2018-01-09 13:18:09","setting_category_id":"15","name":"PRO_ACCOUNT_DISPLAY_ORDER","value":"2","label":"Display order in user search page","description":"Depends on this number, Pro User will displayed in user search result (not sure.. this is info or desc?)","is_active":"1","display_order":"3","plugin":"ProUser\/ProUser","is_front_end_access":"1"},"107":{"created_at":"2018-01-09 13:18:09","updated_at":"2018-01-09 13:18:09","setting_category_id":"16","name":"TOP_LISTED_ACCOUNT_FEE","value":"400","label":"Top Listed Account Fee","description":"Enter amount of top listed account fee, leave it blank if any top listed account concept (not sure.. this is info or desc?)","is_active":"1","display_order":"1","plugin":"TopUser\/TopUser","is_front_end_access":"0"},"108":{"created_at":"2018-01-09 13:18:09","updated_at":"2018-01-09 13:18:09","setting_category_id":"16","name":"TOP_LISTING_EXPIRY_DAYS","value":"30","label":"Top Listing Expiry Days","description":"Top listing expires after this days from payment date. (not sure.. this is info or desc?)","is_active":"1","display_order":"2","plugin":"TopUser\/TopUser","is_front_end_access":"1"},"109":{"created_at":"2018-01-09 13:18:09","updated_at":"2018-01-09 13:18:09","setting_category_id":"16","name":"TOP_LISTING_ACCOUNT_DISPLAY_ORDER","value":"1","label":"Display order in user search page","description":"Depends on this number, Top listing users will displayed in user search result (not sure.. this is info or desc?)","is_active":"1","display_order":"3","plugin":"TopUser\/TopUser","is_front_end_access":"0"}}';

        $data = json_decode($json_string, true);
      //  print_r($data); die;
        for($i=0; $i < count($data); $i++){
            if(!empty($data[$i]['created_at'])){
                $data[$i]['created_at'] = date('Y-m-d H:i:s');
                $data[$i]['updated_at'] = date('Y-m-d H:i:s');
            }
        }
        $posts = $this->table('settings');
        $posts->insert($data)
              ->save();
    }
}
