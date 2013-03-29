<?php
	
/*
	Question2Answer 1.3.1 (c) 2011, Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: 1.3.1
	Date: 2011-02-01 12:56:28 GMT
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "پاسخ شمادر  ^site_title داراي نظر جديدي توسط  ^c_handle:\n\n^open^c_content^close\n\nپاسخ شما:\n\n^open^c_context^close\n\nشما ميتوانيد پاسخ خود را به اين نظر:\n\n^url\n\n ارسال فرماييد.با سپاس,\n\n^site_title",
		'a_commented_subject' => '^site_title پاسخ شما داراي يک نظر جديد مي باشد.',
		'a_followed_body' => "پاسخ شما در ^site_title داراي پرسشي مرتبط است که توسط ^q_handle:\n\n^open^q_title^close\n\nارائه شده.پاسخ شما:\n\n^open^a_content^close\n\nجهت پاسخ به اين پرسش:\n\n^url\n\کليک نماييد.با سپاس,\n\n^site_title",
		'a_followed_subject' => '^site_title پاسخ شما داراي پرسش جديدي است.',
		'a_selected_body' => "عرض تبريک: ^site_title توسط ^s_handle:\n\n^open^a_content^close\n\n بعنوان برترين پاسخ انتخاب شده است.پرسش::\n\n^open^q_title^close\n\nجهت مشاهده پاسخ خود:\n\n^url\n\کليک کنيد.با سپاس,\n\n^site_title",
		'a_selected_subject' => '^site_title پاسخ شما انتخاب شده است.',
		'c_commented_body' => "نظر جديدي توسط ^c_handle پس از نظر شما درج شده است. ^site_title:\n\n^open^c_content^close\n\nبحث عبارتست از:\n\n^open^c_context^close\n\nاگر تمايل داريد ذيل اين نظر،نظر ديگري ثبت کنيد:\n\n^url\n\nکليک کنيد.با سپاس,\n\n^site_title",
		'c_commented_subject' => '^site_title نظر جديدي ثبت شده است.',
		'confirm_body' => "لطفا جهت تاييد ايميل خود بر روي پيوند زير کليک نماييد: ^site_title.\n\n^url\n\nبا سپاس,\n^site_title",
		'confirm_subject' => '^site_title - تاييد ايميل شما',
		'feedback_body' => "نظرهاي:\n^message\n\nنام:\n^name\n\nايميل:\n^email\n\nصفحه قبل:\n^previous\n\nکاربر:\n^url\n\nآي پي:\n^ip\n\nمرورگر:\n^browser",
		'feedback_subject' => '^ feedback',
		'new_password_body' => "'گذرواژه جديد در  ^site_title عبارتست از:\n\nگذرواژه: ^password\n\nتوصيه مي شود پس از ورود به سايت ، آنرا تغيير دهيد..\n\nباسپاس,\n^site_title\n^url",
		'new_password_subject' => '^site_title - گذرواژه جديد شما',
		'q_answered_body' => "پرسش شما در ^site_title توسط ^a_handle پاسخ داده شده است.:\n\n^open^a_content^close\n\nپرسش شما:\n\n^open^q_title^close\n\nاگر اين پاسخ مشکل شما را برطرف کرده است مي توانيد آنرا بعنوان بهترين پاسخ انتخاب فرماييد:\n\n^url\n\nباسپاس,\n\n^site_title",
		'q_answered_subject' => '^site_title پرسش شما پاسخ داده شد.',
		'q_commented_body' => "پرسش شما در ^site_title داراي يک نظر جديد توسط ^c_handle:\n\n^open^c_content^close\n\nپرسش شما:\n\n^open^c_context^close\n\nشما مي توانيد به اين نظر پاسخ دهيد:\n\n^url\n\nبا سپاس,\n\n^site_title",
		'q_commented_subject' => '^site_title پرسش شما داراي نظر جديدي است.',
		'q_posted_body' => "پرسش جديدي توسط ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nجهت مشاهده آن اينجا کليک کنيد:\n\n^url\n\nبا سپاس,\n\n^site_title",
		'q_posted_subject' => '^site_title پرسش جديد',
		'reset_body' => "جهت نوسازي گذرواژه بر روي پيوند زير کليک نماييد: ^site_title.\n\n^url\n\nو يا کد زير را در سايت وارد نماييد:\n\nCode: ^code\n\nاگر شما تقاضاي گذرواژه جديد نداشته ايد براحتي اين پيام را حذف و از آن صرفنظر کنيد.\n\nباسپاس,\n^site_title",
		'reset_subject' => '^site_title - نوسازي گذرواژه فراموش شده',
		'welcome_body' => "از ثبت نام شما در سايت ^site_title سپاسگذاريم.\n\n^custom^confirmاطلاعات حساب کاربري شما عبارتست از:\n\nايميل: ^email\nگذرواژه: ^password\n\nاين اطلاعات را در جايي امن حفظ کنيد.\n\nبا سپاس,\n\n^site_title\n^url",
		'welcome_confirm' => "جهت تاييد ايميل خود بر روي پيوند زير کليک نماييد:\n\n^url\n\n",
		'welcome_subject' => 'به ^site_title خوش آمديد!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
