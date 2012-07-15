<?php
/**
 * MyBB 1.6 Vietnamese Language Pack
 * Copyright 2012 Vietnamese Language Pack, All Rights Reserved
 *
 * $Id: datahandler_event.lang.php 5297 2012-02-24 22:01:14Z Vietnamese Language Pack $
 */

$l['eventdata_missing_name'] = 'Tên cho sự kiện đã bị mất. Nhập tên cho sự kiện.';
$l['eventdata_missing_description'] = 'Mô tả về sự kiện đã bị mất. Nhập mô tả về sự kiện.';

$l['eventdata_invalid_start_date'] = 'Ngày bắt đầu sự kiện không tồn tại. Bạn cần phải chắc rằng ngày, tháng, năm mà bạn nhập vào là có thật.';
$l['eventdata_invalid_start_year'] = "Sự kiện chỉ có thể tạo trong vòng 5 năm tới. Chọn năm bắt đầu trong danh sách.";
$l['eventdata_invalid_start_month'] = 'Tháng bắt đầu sự kiện không tồn tại. Nhập lại tháng có thật.';

$l['eventdata_invalid_end_date'] = 'Ngày kết thúc sự kiện không tồn tại. Bạn cần phải chắc rằng ngày, tháng, năm mà bạn nhập vào là có thật.';
$l['eventdata_invalid_end_year'] = "Sự kiện chỉ có thể tạo trong vòng 5 năm tới. Chọn năm kết thúc trong danh sách.";
$l['eventdata_invalid_end_month'] = 'Tháng kết thúc sự kiện không tồn tại. Nhập lại tháng có thật.';
$l['eventdata_invalid_end_day'] = 'Ngày kết thúc sự kiện không tồn tại. Bạn cần phải chắc rằng ngày này có trong tháng.';

$l['eventdata_cant_specify_one_time'] = "Nếu bạn có nhập thời gian bắt đầu sự kiện thì bạn phải nhập thời gian kết thúc sự kiện.";
$l['eventdata_start_time_invalid'] = "Thời gian bắt đầu không tồn tại. Ví dụ về thời gian không tồn tại: 12am, 12:01am, 00:01.";
$l['eventdata_end_time_invalid'] = "Thời gian kết thúc không tồn tại. Ví dụ về thời gian không tồn tại: 12am, 12:01am, 00:01.";
$l['eventdata_invalid_timezone'] = "Giờ hệ thống bạn chọn cho sự kiện không tồn tại.";
$l['eventdata_end_in_past'] = "Ngày hoặc giờ kết thúc sự kiện của bạn đã sớm hơn ngày hoặc giờ bắt đầu sự kiện.";

$l['eventdata_only_ranged_events_repeat'] = "Sự kiện chỉ dao động (sự kiện với một ngày bắt đầu và kết thúc) có thể lặp lại.";
$l['eventdata_invalid_repeat_day_interval'] = "Ngày lặp lại sự kiện không tồn tại.";
$l['eventdata_invalid_repeat_week_interval'] = "Tháng lặp lại sự kiện không tồn tại.";
$l['eventdata_invalid_repeat_weekly_days'] = "Bạn không chọn bất kỳ tuần nào có sự kiện xảy ra.";
$l['eventdata_invalid_repeat_month_interval'] = "Tháng lặp lại sự kiện không tồn tại.";
$l['eventdata_invalid_repeat_year_interval'] = "Năm lặp lại sự kiện không tồn tại.";
$l['eventdata_event_wont_occur'] = "Sử dụng thời gian bắt đầu và kết thúc cùng với các thiết lập sự lặp lại sự kiện, sự kiện này sẽ không xảy ra.";

$l['eventdata_no_permission_private_event'] = "Bạn không thiết đặt chế độ cá nhân cho sự kiện.";
?>