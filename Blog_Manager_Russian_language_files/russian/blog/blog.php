<?php
// Text
$_['text_home']            = 'Главная';
$_['text_blog']            = 'Статьи';
$_['text_error_art']       = 'Пустая статья!';
$_['text_error_cat']       = 'Раздел не найден!';


// Article & Category Info
$_['text_subcategory']     = 'Подкатегория';
$_['text_art_infoName']    = 'Опубликовано <span itemprop="author">%s</span>';
$_['text_art_infoCategory']= ' в <span itemprop="articleSection">%s</span>';
$_['text_art_InfoDate']    = ' <span itemprop="dateCreated">%s</span>';
$_['text_update']          = 'Обновлено: ';
$_['text_tags']            = 'Теги: ';
$_['text_related']         = 'Связанные записи: ';
$_['text_related_product'] = 'Связанные товары: ';
$_['text_related_article'] = 'Связанная статья: ';

// Comment
$_['text_comments']        = 'Комментарии: %s';
$_['text_replies']         = '(Ответы: %s)';
$_['text_comment']         = 'Комментарии';
$_['text_no_comment']      = 'Нет комментариев';
$_['text_postComment']     = 'Комментировать';
$_['text_postReply']       = 'Ответить';
$_['text_no_comments']     = 'Пока нет комментариев, оставьте комментарий первым!';
$_['text_note_publish']    = '(Не опубликовано)';
$_['text_note_website']    = '(Адрес сайта с http://)';
$_['text_wait']            = 'Пожалуйста, подождите!';
$_['button_submit']        = 'Отправить';
$_['text_success']         = 'Спасибо за Ваш комментарий.';
$_['text_approval']        = 'Ваш комментарий успешно отправлен на модерацию.';
$_['text_reply']           = 'Ответить';
$_['text_cancel_reply']    = 'Отменить ответ';

// Comment Entry
$_['entry_name']           = 'Имя: ';
$_['entry_email']          = 'E-mail: ';
$_['entry_site']           = 'Адрес сайта: ';
$_['entry_comment']        = 'Комментарий: ';
$_['entry_captcha']        = 'Проверочный код: ';
$_['text_login_comment']   = 'Внимание: Вам необходимо <a href="%s">войти</a>, чтобы комментировать!';

//Mail Notification
$_['text_mail_subject']    = '[%s] Новый комментарий на статью: "%s"';
$_['text_mail_greeting']   = 'Новый комментарий на <a href="%s" target="_blank" title="%s">%s</a> статью.<br /><br />';
$_['text_mail_article']    = '<b>Статья:</b>';
$_['text_mail_article1']   = '<a href="%s" target="_blank" title="%s">%s</a>';
$_['text_mail_name']       = '<b>Автор:</b>';
$_['text_mail_mail']       = '<b>E-mail:</b>';
$_['text_mail_mail1']      = '<a href="mailto:%s">%s</a>';
$_['text_mail_url']        = '<b>Адрес:</b>';
$_['text_mail_url1']       = '<a href="%s" target="_blank" title="%s">%s</a><br />';
$_['text_mail_message']    = '<b>Комментарий:</b>';
$_['text_mail_footer']     = '<br /><br />Вы можете просмотреть все комментарии на эту запись здесь:';
$_['text_mail_footer1']    = '<a href="%s" target="_blank" title="%s">%s</a><br /><br />';

// Search
$_['text_search_blog']     = 'Результаты поиска по статьям';
$_['text_search_result']   = 'Не найдено ни одной статьи соответствующей запросу.';
$_['text_search_more']     = 'подробнее..';


// Error
$_['error_common']         = 'Внимание: Пожалуйста, проверьте форму ниже!';
$_['error_name']           = 'Имя должно содержать от 2 до 25 символов!';
$_['error_email']          = 'Неверный E-mail адрес!';
$_['error_content']        = 'Комментарий должен содержать от %s до %s символов!';
$_['error_captcha']        = 'Проверочный код не совпадает с символами на изображении!';

$_['read_more']            = 'Подробнее..';
$_['day_short']            = array(1 => "Пн", 2 => "Вт", 3 => "Ср", 4 => "Чт", 5 => "Пт", 6 => "Сб",7 => "Вс");
$_['day_long']             = array(1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье");
$_['month_short']          = array(1 => "Янв", 2 => "Фев", 3 => "Мрт", 4 => "Апр", 5 => "Май", 6 => "Июн", 7 => "Июл", 8 => "Авг", 9 => "Сен", 10 => "Окт", 11 => "Нбр", 12 => "Дек");
$_['month_long']           = array(1 => "Январь", 2 => "Февраль", 3 => "Март", 4 => "Апрель", 5 => "Май", 6 => "Июнь", 7 => "Июль", 8 => "Август", 9 => "Сентябрь", 10 => "Октябрь", 11 => "Ноябрь", 12 => "Декабрь");

// Date Format
// %1 = long month, %2 = short month, %3 = long day, %4 = short day
// other format except the month and dayname above still use http://php.net/manual/en/function.date.php

$_['date_format']          = 'd.m.Y';
$_['date_format_short']    = 'd %2 Y'; // M d, Y = Jun 10, 2013
$_['date_format_long']     = 'd %1 Y'; // F d, Y = Juni 10, 2013
$_['date_time_format']     = 'd.m.Y H:i'; // M d, Y H:i = Jun 10, 2013 17:25
?>