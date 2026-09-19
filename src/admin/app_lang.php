<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'কম্পোনেন্টস';
$lang['admin_content'] = 'বিষয়বস্তু';
$lang['admin_database_backup'] = 'ডাটাবেস ব্যাকআপ';
$lang['admin_extensions'] = 'এক্সটেনশনস';
$lang['admin_firewall'] = 'ফায়ারওয়াল';
$lang['admin_help'] = 'সাহায্য';
$lang['admin_languages'] = 'ভাষাসমূহ';
$lang['admin_logs'] = 'সিস্টেম লগস';
$lang['admin_media'] = 'মিডিয়া লাইব্রেরি';
$lang['admin_modules'] = 'মডিউলস';
$lang['admin_plugins'] = 'প্লাগইনস';
$lang['admin_reports'] = 'কার্যকলাপ লগ';
$lang['admin_settings'] = 'সিস্টেম সেটিংস';
$lang['admin_sysinfo'] = 'সিস্টেম তথ্য';
$lang['admin_system'] = 'সিস্টেম';
$lang['admin_system_firewall'] = 'সিস্টেম ফায়ারওয়াল';
$lang['admin_themes'] = 'থিমস';
$lang['admin_updates'] = 'সিস্টেম আপডেটস';
$lang['admin_users'] = 'ব্যবহারকারীগণ';
$lang['admin_view_site'] = 'সাইট দেখুন';
$lang['per_page'] = 'প্রতি পৃষ্ঠা';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s" target="_blank">%s</a> দিয়ে তৈরি করার জন্য ধন্যবাদ।';
$lang['admin_items_active_count'] = '=0{কোনো সক্রিয় আইটেম নেই।} other{<b>#</b> টি আইটেম সক্রিয় আছে মোট <b>%s</b> এর মধ্যে।}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'ইনস্টল করুন';
$lang['admin_install_error'] = 'প্যাকেজ ইনস্টল করতে ব্যর্থ হয়েছে।';
$lang['admin_install_error_com'] = 'ইনস্টলেশন ব্যর্থ হয়েছে: %s';
$lang['admin_install_location_app'] = 'শুধুমাত্র এই অ্যাপ্লিকেশন';
$lang['admin_install_location_core'] = 'সমস্ত অ্যাপ্লিকেশন';
$lang['admin_install_location_select'] = '&#151; অবস্থান নির্বাচন করুন &#151;';
$lang['admin_install_success'] = 'প্যাকেজ সফলভাবে ইনস্টল হয়েছে।';
$lang['admin_install_upload'] = 'আপলোড';
$lang['admin_install_upload_error'] = 'প্যাকেজ আপলোড করতে ব্যর্থ হয়েছে।';
$lang['admin_install_upload_success'] = 'প্যাকেজ সফলভাবে আপলোড হয়েছে।';
$lang['admin_install_upload_tip'] = 'এখানে এর <b>.zip</b> ফাইল আপলোড করে একটি প্যাকেজ ইনস্টল করুন।';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'পুরানো ব্যাকআপ ফাইলগুলি পরিষ্কার করতে অক্ষম।';
$lang['admin_database_backup_clean_success'] = '%d ব্যাকআপ ফাইল মোছা হয়েছে। %d ডিস্ক স্পেস মুক্ত হয়েছে।';
$lang['admin_database_backup_create'] = 'ব্যাকআপ তৈরি করুন';
$lang['admin_database_backup_create_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এখন একটি ব্যাকআপ তৈরি করতে চান?';
$lang['admin_database_backup_create_error'] = 'ব্যাকআপ ফাইল তৈরি করতে অক্ষম। নিশ্চিত করুন যে <b>%s</b> ফোল্ডারটি লেখাযোগ্য।';
$lang['admin_database_backup_create_success'] = 'ডাটাবেস ব্যাকআপ ফাইল <b>%s</b> সফলভাবে তৈরি হয়েছে।';
$lang['admin_database_backup_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এই ব্যাকআপ ফাইলগুলি মুছতে চান?';
$lang['admin_database_backup_delete_error'] = 'নির্বাচিত ব্যাকআপ ফাইলগুলি মুছতে অক্ষম।';
$lang['admin_database_backup_delete_success'] = 'ব্যাকআপ ফাইলগুলি সফলভাবে মোছা হয়েছে।';
$lang['admin_database_backup_download_error'] = 'নির্বাচিত ব্যাকআপ ফাইল ডাউনলোড করতে অক্ষম।';
$lang['admin_database_backup_download_success'] = 'ব্যাকআপ ফাইল সফলভাবে ডাউনলোড করা হয়েছে।';
$lang['admin_database_backup_lock_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এই ব্যাকআপ ফাইলগুলি লক করতে চান?';
$lang['admin_database_backup_lock_error'] = 'নির্বাচিত ব্যাকআপ ফাইলগুলি লক করতে অক্ষম।';
$lang['admin_database_backup_lock_success'] = 'ব্যাকআপ ফাইলগুলি সফলভাবে লক করা হয়েছে।';
$lang['admin_database_backup_locked_error'] = 'লক করা ব্যাকআপ ফাইলগুলি মুছতে অক্ষম।';
$lang['admin_database_backup_missing_error'] = 'ব্যাকআপ ফাইলটি পাওয়া যায়নি।';
$lang['admin_database_backup_unlock_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এই ব্যাকআপ ফাইলগুলি আনলক করতে চান?';
$lang['admin_database_backup_unlock_error'] = 'নির্বাচিত ব্যাকআপ ফাইলগুলি আনলক করতে অক্ষম।';
$lang['admin_database_backup_unlock_success'] = 'ব্যাকআপ ফাইলগুলি সফলভাবে আনলক করা হয়েছে।';
$lang['admin_database_prune'] = 'ছাঁটাই করুন';
$lang['admin_database_prune_confirm'] = 'আপনি কি নিশ্চিত যে আপনি ডাটাবেস ছাঁটাই করতে চান? এক্সিকিউশনের জন্য একটি ব্যাকআপ তৈরি করা হবে।';
$lang['admin_database_prune_error'] = 'ডাটাবেস ছাঁটাই করতে অক্ষম।';
$lang['admin_database_prune_next'] = 'পরবর্তী ছাঁটাই: <b>%s</b>';
$lang['admin_database_prune_success'] = 'ডাটাবেস সফলভাবে ছাঁটাই করা হয়েছে।';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'লগস মুছুন';
$lang['admin_logs_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত লগ ফাইলগুলি মুছতে চান?';
$lang['admin_logs_delete_error'] = 'লগ ফাইলগুলি মুছতে অক্ষম।';
$lang['admin_logs_delete_success'] = 'লগ ফাইলগুলি সফলভাবে মোছা হয়েছে।';
$lang['admin_logs_error_disabled'] = 'বর্তমানে লগিং সক্রিয় নয়।';
$lang['admin_logs_error_empty'] = 'কোন লগ পাওয়া যায়নি।';
$lang['admin_logs_error_missing'] = 'হয় লগ ফাইলটি খুঁজে পাওয়া যায়নি, বা এটি খালি ছিল।';
$lang['admin_logs_tip'] = 'লগিং দ্রুত খুব বড় ফাইল তৈরি করতে পারে। লাইভ সাইটগুলির জন্য, পুরানোগুলি মোছার কথা ভাবুন।';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ইমেলগুলি মুছতে চান?';
$lang['admin_emails_delete_error'] = 'নির্বাচিত ইমেলগুলি মুছতে অক্ষম।';
$lang['admin_emails_delete_success'] = 'নির্বাচিত ইমেলগুলি সফলভাবে মোছা হয়েছে।';
$lang['admin_emails_email_from'] = 'থেকে পাঠানো হয়েছে';
$lang['admin_emails_mail_queue'] = 'মেইল সারি';
$lang['admin_emails_mailer'] = 'গণ মেইল';
$lang['admin_emails_search'] = 'বিষয় বা বিষয়বস্তু অনুসারে ইমেল খুঁজুন...';
$lang['admin_emails_send_error'] = 'ইমেলটি সারিতে রাখতে ব্যর্থ। দয়া করে আবার চেষ্টা করুন।';
$lang['admin_emails_send_none'] = 'আপনার নির্বাচিত মানদণ্ডের সাথে কোন ব্যবহারকারী মেলে না।';
$lang['admin_emails_send_success'] = 'ইমেলটি সারিতে রাখা হয়েছে এবং শীঘ্রই পাঠানো হবে।';
$lang['admin_emails_send_to_banned'] = 'নিষিদ্ধ ব্যবহারকারীদের কাছে পাঠান।';
$lang['admin_emails_send_to_deleted'] = 'মুছে ফেলা ব্যবহারকারীদের কাছে পাঠান।';
$lang['admin_emails_send_to_disabled'] = 'নিষ্ক্রিয় ব্যবহারকারীদের কাছে পাঠান।';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'ব্যবহারকারী যোগ করুন';
$lang['admin_users_all_users'] = 'সমস্ত ব্যবহারকারী';
$lang['admin_users_ban_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের নিষিদ্ধ করতে চান?';
$lang['admin_users_ban_error'] = 'নির্বাচিত ব্যবহারকারীদের নিষিদ্ধ করা সম্ভব হয়নি।';
$lang['admin_users_ban_success'] = 'নির্বাচিত ব্যবহারকারীদের সফলভাবে নিষিদ্ধ করা হয়েছে।';
$lang['admin_users_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের মুছে ফেলতে চান?';
$lang['admin_users_delete_error'] = 'নির্বাচিত ব্যবহারকারীদের মুছে ফেলা সম্ভব হয়নি।';
$lang['admin_users_delete_success'] = 'নির্বাচিত ব্যবহারকারীদের সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_users_disable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের নিষ্ক্রিয় করতে চান?';
$lang['admin_users_disable_error'] = 'নির্বাচিত ব্যবহারকারীদের নিষ্ক্রিয় করা সম্ভব হয়নি।';
$lang['admin_users_disable_success'] = 'নির্বাচিত ব্যবহারকারীদের সফলভাবে নিষ্ক্রিয় করা হয়েছে।';
$lang['admin_users_edit'] = 'ব্যবহারকারী সম্পাদনা করুন';
$lang['admin_users_edit_error'] = 'ব্যবহারকারী আপডেট করতে অক্ষম।';
$lang['admin_users_edit_success'] = 'ব্যবহারকারী সফলভাবে আপডেট হয়েছে।';
$lang['admin_users_enable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের সক্রিয় করতে চান?';
$lang['admin_users_enable_error'] = 'নির্বাচিত ব্যবহারকারীদের সক্রিয় করা সম্ভব হয়নি।';
$lang['admin_users_enable_success'] = 'নির্বাচিত ব্যবহারকারীদের সফলভাবে সক্রিয় করা হয়েছে।';
$lang['admin_users_groups'] = 'গ্রুপ';
$lang['admin_users_lock_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের লক করতে চান?';
$lang['admin_users_lock_error'] = 'নির্বাচিত ব্যবহারকারীদের লক করতে অক্ষম।';
$lang['admin_users_lock_success'] = 'নির্বাচিত ব্যবহারকারীরা সফলভাবে লক হয়েছে।';
$lang['admin_users_logged'] = 'লগড-ইন ব্যবহারকারী';
$lang['admin_users_manage'] = 'ব্যবহারকারী ব্যবস্থাপনা';
$lang['admin_users_remove_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের এবং তাদের সমস্ত ডেটা স্থায়ীভাবে মুছে ফেলতে চান?';
$lang['admin_users_remove_error'] = 'নির্বাচিত ব্যবহারকারীদের এবং তাদের সমস্ত ডেটা স্থায়ীভাবে মুছে ফেলা সম্ভব হয়নি।';
$lang['admin_users_remove_success'] = 'নির্বাচিত ব্যবহারকারীদের এবং তাদের সমস্ত ডেটা সফলভাবে মুছে ফেলা য়েছে।';
$lang['admin_users_restore_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের পুনরুদ্ধার করতে চান?';
$lang['admin_users_restore_error'] = 'নির্বাচিত ব্যবহারকারীদের পুনরুদ্ধার করা সম্ভব হয়নি।';
$lang['admin_users_restore_success'] = 'নির্বাচিত ব্যবহারকারীদের সফলভাবে পুনরুদ্ধার করা হয়েছে।';
$lang['admin_users_search'] = 'নাম, ব্যবহারকারীর নাম, বা ইমেল দিয়ে অনুসন্ধান করুন...';
$lang['admin_users_unban_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের নিষেধাজ্ঞা তুলে নিতে চান?';
$lang['admin_users_unban_error'] = 'নির্বাচিত ব্যবহারকারীদের নিষেধাজ্ঞা তুলে নেওয়া সম্ভব হয়নি।';
$lang['admin_users_unban_success'] = 'নির্বাচিত ব্যবহারকারীদের নিষেধাজ্ঞা সফলভাবে তুলে নেওয়া হয়েছে।';
$lang['admin_users_unlock_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যবহারকারীদের আনলক করতে চান?';
$lang['admin_users_unlock_error'] = 'নির্বাচিত ব্যবহারকারীদের আনলক করতে অক্ষম।';
$lang['admin_users_unlock_success'] = 'নির্বাচিত ব্যবহারকারীরা সফলভাবে আনলক হয়েছে।';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'লগ সাফ করুন';
$lang['admin_reports_clear_confirm'] = 'আপনি কি নিশ্চিত যে আপনি অ্যাকশন লগ সাফ করতে চান?';
$lang['admin_reports_clear_error'] = 'অ্যাকশন লগ সাফ করতে অক্ষম।';
$lang['admin_reports_clear_success'] = 'অ্যাকশন লগ সফলভাবে সাফ হয়েছে।';
$lang['admin_reports_latest_actions'] = 'সর্বশেষ অ্যাকশন';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ফাইলগুলি মুছে ফেলতে চান?';
$lang['admin_media_delete_error'] = 'ফাইলগুলি মুছে ফেলতে অক্ষম।';
$lang['admin_media_delete_success'] = 'ফাইলগুলি সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_media_file_delete_error'] = 'ফাইল মুছে ফেলতে অক্ষম।';
$lang['admin_media_file_delete_success'] = 'ফাইল সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_media_file_update_error'] = 'ফাইল আপডেট করতে অক্ষম।';
$lang['admin_media_file_update_success'] = 'ফাইল সফলভাবে আপডেট হয়েছে।';
$lang['admin_media_search'] = 'নাম, বিবরণ বা ফাইলের নাম দিয়ে খুঁজুন...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{কোনো সক্রিয় মডিউল নেই।} other{<b>#</b> টি মডিউল সক্রিয় আছে মোট <b>%s</b> এর মধ্যে।}';
$lang['admin_modules_add'] = 'মডিউল যোগ করুন';
$lang['admin_modules_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি মডিউলটি মুছে ফেলতে চান: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'মডিউল মুছে ফেলতে অক্ষম।';
$lang['admin_modules_delete_success'] = 'মডিউল সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_modules_disable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত মডিউল নিষ্ক্রিয় করতে চান?';
$lang['admin_modules_disable_all_error'] = 'সমস্ত মডিউল নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_modules_disable_all_success'] = 'সমস্ত মডিউল সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_modules_disable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি মডিউলটি নিষ্ক্রিয় করতে চান: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'মডিউলটি নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_modules_disable_success'] = 'মডিউল সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_modules_enable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত মডিউল সক্ষম করতে চান?';
$lang['admin_modules_enable_all_error'] = 'সমস্ত মডিউল সক্ষম করতে অক্ষম।';
$lang['admin_modules_enable_all_success'] = 'সমস্ত মডিউল সফলভাবে সক্ষম হয়েছে।';
$lang['admin_modules_enable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি মডিউলটি সক্ষম করতে চান: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'মডিউলটি সক্রিয় করতে অক্ষম।';
$lang['admin_modules_enable_success'] = 'মডিউল সফলভাবে সক্রিয় হয়েছে।';
$lang['admin_modules_install_tip'] = 'মডিউলগুলি আপনার সাইটে নতুন বৈশিষ্ট্য এবং কার্যকারিতা যোগ করে। <a href="%s" target="_blank" rel="noopener">মডিউল ডিরেক্টরিতে</a> উপলব্ধ মডিউলগুলি ব্রাউজ করুন বা একটি <b>.zip</b> প্যাকেজ হিসাবে আপলোড করুন।';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{কোনো সক্রিয় প্লাগইন নেই।} other{<b>#</b> টি প্লাগইন সক্রিয় আছে মোট <b>%s</b> এর মধ্যে।}';
$lang['admin_plugins_add'] = 'প্লাগইন যোগ করুন';
$lang['admin_plugins_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি প্লাগইনটি মুছে ফেলতে চান: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'প্লাগইন মুছে ফেলতে অক্ষম।';
$lang['admin_plugins_delete_success'] = 'প্লাগইন সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_plugins_disable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত প্লাগইন নিষ্ক্রিয় করতে চান?';
$lang['admin_plugins_disable_all_error'] = 'সমস্ত প্লাগইন নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_plugins_disable_all_success'] = 'সমস্ত প্লাগইন সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_plugins_disable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি প্লাগইনটি নিষ্ক্রিয় করতে চান: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'প্লাগইনটি নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_plugins_disable_success'] = 'প্লাগইন সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_plugins_enable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত প্লাগইন সক্ষম করতে চান?';
$lang['admin_plugins_enable_all_error'] = 'সমস্ত প্লাগইন সক্ষম করতে অক্ষম।';
$lang['admin_plugins_enable_all_success'] = 'সমস্ত প্লাগইন সফলভাবে সক্ষম হয়েছে।';
$lang['admin_plugins_enable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি প্লাগইনটি সক্ষম করতে চান: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'প্লাগইনটি সক্রিয় করতে অক্ষম।';
$lang['admin_plugins_enable_success'] = 'প্লাগইন সফলভাবে সক্রিয় হয়েছে।';
$lang['admin_plugins_install_tip'] = 'প্লাগইনগুলি অতিরিক্ত অপশন বা ইন্টিগ্রেশন সহ বিদ্যমান বৈশিষ্ট্যগুলি প্রসারিত করে। <a href="%s" target="_blank" rel="noopener">প্লাগইন ডিরেক্টরি থেকে</a> ইনস্টল করুন বা একটি <b>.zip</b> ফাইল আপলোড করুন।';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'থিম যোগ করুন';
$lang['admin_themes_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি থিমটি মুছে ফেলতে চান: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'থিম মুছে ফেলতে অক্ষম।';
$lang['admin_themes_delete_error_active'] = 'আপনি বর্তমানে সক্রিয় থিমটি মুছে ফেলতে পারবেন না।';
$lang['admin_themes_delete_success'] = 'থিম সফলভাবে মুছে ফেলা হয়েছে।';
$lang['admin_themes_disable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি থিমটি নিষ্ক্রিয় করতে চান: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'থিম নিষ্ক্রিয় করা যায়নি।';
$lang['admin_themes_disable_success'] = 'থিম সফলভাবে নিষ্ক্রিয় করা হয়েছে।';
$lang['admin_themes_enable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি থিমটি সক্ষম করতে চান: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'থিম সক্রিয় করতে অক্ষম।';
$lang['admin_themes_enable_success'] = 'থিম সফলভাবে সক্রিয় হয়েছে।';
$lang['admin_themes_install_tip'] = 'থিমগুলি আপনার সাইটের চেহারা এবং লেআউট পরিবর্তন করে। <a href="%s" target="_blank" rel="noopener">থিম লাইব্রেরি থেকে</a> চয়ন করুন বা আপনার নিজের ইনস্টল করার জন্য একটি <b>.zip</b> ফাইল আপলোড করুন।';
$lang['admin_themes_none_tip'] = 'এই অ্যাপ্লিকেশনটি কোনো থিম ছাড়াই চলছে। জনসম্মুখ ইন্টারফেস কাস্টমাইজ করতে একটি থিম ইনস্টল করুন।';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'মেনু';
$lang['admin_menus_assign_error'] = 'মেনু অবস্থান আপডেট করতে অক্ষম।';
$lang['admin_menus_assign_success'] = 'মেনু অবস্থান সফলভাবে আপডেট হয়েছে।';
$lang['admin_menus_header'] = 'মোট <b>%s</b> মেনু অবস্থান উপলব্ধ।';
$lang['admin_menus_location'] = 'অবস্থান';
$lang['admin_menus_locations'] = 'মেনু অবস্থান';
$lang['admin_menus_manage'] = 'মেনু ব্যবস্থাপনা';
$lang['admin_menus_menu'] = 'নির্ধারিত মেনু';
$lang['admin_menus_none'] = '&#151; কোনোটি নয় &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'ভাষা যোগ করুন';
$lang['admin_languages_default_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এই ভাষাটিকে সাইটের ডিফল্ট ভাষা হিসাবে তৈরি করতে চান?';
$lang['admin_languages_default_error'] = 'ডিফল্ট ভাষা পরিবর্তন করতে অক্ষম।';
$lang['admin_languages_default_error_nochange'] = 'এই ভাষাটি ইতিমধ্যে ডিফল্ট।';
$lang['admin_languages_default_success'] = 'ডিফল্ট ভাষা সফলভাবে পরিবর্তন হয়েছে।';
$lang['admin_languages_disable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত ভাষা নিষ্ক্রিয় করতে চান?';
$lang['admin_languages_disable_all_error'] = 'সমস্ত ভাষা নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_languages_disable_all_success'] = 'সমস্ত ভাষা সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_languages_disable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি ভাষাটি নিষ্ক্রিয় করতে চান: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'ভাষা নিষ্ক্রিয় করতে অক্ষম।';
$lang['admin_languages_disable_error_default'] = 'ডিফল্ট ভাষা নিষ্ক্রিয় করা যাবে না।';
$lang['admin_languages_disable_error_nochange'] = 'এই ভাষাটি ইতিমধ্যে নিষ্ক্রিয়।';
$lang['admin_languages_disable_success'] = 'ভাষা সফলভাবে নিষ্ক্রিয় হয়েছে।';
$lang['admin_languages_enable_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত ভাষা সক্ষম করতে চান?';
$lang['admin_languages_enable_all_error'] = 'সমস্ত ভাষা সক্ষম করতে অক্ষম।';
$lang['admin_languages_enable_all_success'] = 'সমস্ত ভাষা সফলভাবে সক্ষম হয়েছে।';
$lang['admin_languages_enable_confirm'] = 'আপনি কি নিশ্চিত যে আপনি ভাষাটি সক্ষম করতে চান: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'ভাষা সক্ষম করতে অক্ষম।';
$lang['admin_languages_enable_error_nochange'] = 'এই ভাষাটি ইতিমধ্যে সক্ষম।';
$lang['admin_languages_enable_success'] = 'ভাষা সফলভাবে সক্ষম হয়েছে।';
$lang['admin_languages_install_tip'] = 'ভাষাগুলি আপনার সাইটের ইন্টারফেস এবং কন্টেন্টের জন্য অনুবাদ যোগ করে। <a href="%s" target="_blank" rel="noopener">ভাষা ডিরেক্টরি</a>-তে উপলভ্য ভাষাগুলি দেখুন অথবা আপনার নিজের ভাষা ইনস্টল করতে একটি <b>.zip</b> প্যাকেজ আপলোড করুন।';
$lang['admin_languages_tip'] = 'সাইটের ডিফল্ট ভাষা সক্ষম, নিষ্ক্রিয় এবং সেট করুন। সক্ষম ভাষাগুলি সাইট ভিজিটরদের জন্য উপলব্ধ।';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'নতুন আপডেট উপলব্ধ!';
$lang['update_backup_error'] = 'বিদ্যমান প্যাকেজের ব্যাকআপ তৈরি করতে অক্ষম। আপডেট বাতিল করা হয়েছে।';
$lang['update_check_disabled'] = 'স্বয়ংক্রিয় আপডেট চেক নিষ্ক্রিয়। আপডেট দেখতে এগুলি সক্ষম করুন।';
$lang['update_check_error'] = 'এই মুহূর্তে আপডেট চেক চালাতে অক্ষম।';
$lang['update_check_success'] = 'আপডেট চেক সফলভাবে সম্পন্ন হয়েছে।';
$lang['update_install_error'] = 'প্যাকেজটি ইনস্টল করা যায়নি। পূর্ববর্তী সংস্করণ রাখা হয়েছে।';
$lang['update_install_success'] = 'প্যাকেজ সফলভাবে সর্বশেষ সংস্করণে আপডেট করা হয়েছে।';
$lang['update_interval_3days'] = 'প্রতি ৩ দিন';
$lang['update_interval_biweekly'] = 'প্রতি ২ সপ্তাহ';
$lang['update_interval_daily'] = 'প্রতিদিন';
$lang['update_interval_monthly'] = 'মাসে একবার';
$lang['update_interval_weekly'] = 'সপ্তাহে একবার';
$lang['update_not_available'] = 'আপনার ওয়েবসাইট আপডেট আছে।';
$lang['update_rollback_error'] = 'পূর্ববর্তী সংস্করণ পুনরুদ্ধার করতে অক্ষম। ম্যানুয়াল হস্তক্ষেপের প্রয়োজন হতে পারে।';
$lang['update_rollback_success'] = 'পূর্ববর্তী সংস্করণ সফলভাবে পুনরুদ্ধার করা হয়েছে।';
$lang['updates_available'] = 'উপলব্ধ আপডেট';
$lang['updates_check_now'] = 'এখনই চেক করুন';
$lang['updates_check_now_confirm'] = 'আপনি কি নিশ্চিত যে এখনই আপডেট চেক করতে চান?';
$lang['updates_current_version'] = 'বর্তমান সংস্করণ';
$lang['updates_enable'] = 'আপডেট সক্ষম করুন';
$lang['updates_last_check'] = 'শেষ চেক: %s';
$lang['updates_latest_version'] = 'সর্বশেষ সংস্করণ';
$lang['updates_next_check'] = 'পরবর্তী নির্ধারিত চেক: %s';
$lang['updates_previous_version'] = 'পূর্ববর্তী সংস্করণ';
$lang['updates_recent'] = 'সম্প্রতি আপডেট করা';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'নির্দিষ্ট IP ঠিকানা ব্লক করতে ব্যর্থ হয়েছে।';
$lang['admin_firewall_ban_success'] = 'IP ঠিকানা সফলভাবে ব্লক করা হয়েছে।';
$lang['admin_firewall_block_ip'] = 'IP ঠিকানা ব্লক করুন';
$lang['admin_firewall_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত IP ঠিকানাগুলি আনব্লক করতে চান?';
$lang['admin_firewall_delete_error'] = 'নির্বাচিত IP ঠিকানাগুলি আনব্লক করতে ব্যর্থ হয়েছে।';
$lang['admin_firewall_delete_success'] = 'নির্বাচিত IP ঠিকানাগুলি সফলভাবে আনব্লক করা হয়েছে।';
$lang['admin_firewall_duration'] = 'নিষেধাজ্ঞার সময়কাল';
$lang['admin_firewall_permanent'] = 'স্থায়ী';
$lang['admin_firewall_reason'] = 'নিষেধাজ্ঞার কারণ';
$lang['admin_firewall_tip'] = 'পুনরাবৃত্ত লঙ্ঘন বা সন্দেহজনক কার্যকলাপের কারণে ফায়ারওয়াল দ্বারা ব্লক করা IP ঠিকানাগুলি দেখুন এবং পরিচালনা করুন।';

// Settings
$lang['404_ban_duration'] = '৪০৪ নিষেধাজ্ঞার সময়কাল';
$lang['404_threshold'] = '৪০৪ স্ট্রাইক সীমা';
$lang['uri_ban_duration'] = 'ইউআরআই নিষেধাজ্ঞার সময়কাল';
$lang['uri_strike_threshold'] = 'ইউআরআই স্ট্রাইক লিমিট';
