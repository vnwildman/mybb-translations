<?php
/**
 * MyBB 1.2 English Language Pack
 * Copyright © 2006 MyBB Group, All Rights Reserved
 * 
 * $Id: messages.lang.php 1917 2006-07-10 12:39:04Z chris $
 */

$l['click_no_wait'] = "Bấm vào đây nếu bạn đang phải đợi lâu.";
$l['redirect_return_forum'] = "<br /><br />Alternatively, <a href=\"forumdisplay.php?fid={1}\">return to the forum</a>.";
$l['redirect_emailsent'] = "Your e-mail message has been sent successfully.";
$l['redirect_loggedin'] = "Bạn đã đăng nhập thành công.<br />Vui lòng đợi...";

$l['error_alreadyuploaded'] = "It appears you have already uploaded the same file (judged by filename and size) into this post. Please choose a different file to attach.";
$l['error_nomessage'] = "Sorry, we cannot proceed because you did not enter a valid message. Please go back and do so.";
$l['error_invalidemail'] = "Bạn đã nhập sai địa chỉ email.";
$l['error_nomember'] = "The member you specified is either invalid or doesn't exist.";
$l['error_maxposts'] = "I'm sorry, but your daily post limit has been exceeded.  Please wait till tommorow to post further or contact your administrator.";
$l['error_nohostname'] = "No hostname could be found for the IP you entered.";
$l['error_invalidthread'] = "Chủ đề không tồn tại.";
$l['error_invalidpost'] = "Bài trả lời không tồn tại.";
$l['error_invalidattachment'] = "The specified attachment does not exist.";
$l['error_invalidforum'] = "Diễn đàn không xác định";
$l['error_closedinvalidforum'] = "Bạn không thể viết bài trong diễn đàn này bởi vì nó đã bị đóng.";
$l['error_attachtype'] = "Dạng file đính kèm của bạn không được cho phép. Hãy bỏ file đính kèm hiện thời và chọn định dạng khác.";
$l['error_attachsize'] = "File đính kèm của bạn quá lớn. Kích cỡ cho phép lớn nhất của dạng file này là {1} kilobytes.";
$l['error_uploadsize'] = "The size of the uploaded file is too large.";
$l['error_uploadfailed'] = "The file upload failed. Please choose a valid file and try again. ";
$l['error_uploadfailed_detail'] = "Error details: ";
$l['error_uploadfailed_php1'] = "PHP returned: Uploaded file exceeded upload_max_filesize directive in php.ini.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php2'] = "The uploaded file exceeded the maximum filesize specified.";
$l['error_uploadfailed_php3'] = "The uploaded file was only partially uploaded.";
$l['error_uploadfailed_php4'] = "No file was uploaded.";
$l['error_uploadfailed_php6'] = "PHP returned: Missing a temporary folder.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php7'] = "PHP returned: Failed to write the file to disk.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_phpx'] = "PHP returned error code: {1}.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_nothingtomove'] = "An invalid file was specified, so the uploaded file could not be moved to its destination.";
$l['error_uploadfailed_movefailed'] = "There was a problem moving the uploaded file to its destination.";
$l['error_uploadfailed_lost'] = "The attachment could not be found on the server.";
$l['error_emailmismatch'] = "The email addresses you entered do not match. Please go back and try again";
$l['error_nopassword'] = "Bạn đã nhập sai password.";
$l['error_usernametaken'] = "Tên sử dụng bạn chọn đã được sử dụng từ trước, hãy chọn tên khác.";
$l['error_nousername'] = "Bạn chưa nhập tên sử dụng.";
$l['error_invalidusername'] = "The username you have entered appears to be invalid.";
$l['error_invalidpassword'] = "Mã số bạn nhập không đúng. Nếu bạn quên password, click vào <a href=\"member.php?action=lostpw\">đây</a>. Tuy nhiên, bạn cũng có thể quay lại và thử lại.";
$l['error_postflooding'] = "Chúng tôi xin lỗi nhưng bạn không thể đăng bài trả lời. Admin đã quy định bạn chỉ được phép viết bài mới sau {1} giây.";
$l['error_nopermission_guest_1'] = "<b>Xin lỗi vì sự bất tiện này. Hiện nay bạn không thể vào diễn đàn ngay. Hãy chú ý đọc kỹ những điều dưới đây:</b>";
$l['error_nopermission_guest_2'] = "Bạn hãy đăng nhập hoặc đăng ký để có thể vào diễn đàn. Nhập tên tài khoản và password để đăng nhập vào diễn đàn.";
$l['error_nopermission_guest_3'] = "Có thể bạn không được phép truy cập vào trang này. Nếu bạn đang cố gắng đăng nhập vào trang Người quản trị mà không được phép, hãy đọc kỹ quy định của diễn đàn.";
$l['error_nopermission_guest_4'] = "Tài khoản của bạn đã bị tắt bở Admin, hoặc nó đang chờ được kích hoạt. Nếu vậy hãy vào hòm thư và tìm thư kích hoạt mà diễn đàn gửi.";
$l['login'] = "Đăng nhập";
$l['need_reg'] = "Bạn muốn đăng ký?";
$l['forgot_password'] = "Bạn làm mất password?";
$l['error_nopermission_user_1'] = "You do not have permission to access this page. This could be because of one of the following reasons:";
$l['error_nopermission_user_2'] = "Your account has either been suspended or you have been banned from accessing this resource.";
$l['error_nopermission_user_3'] = "You do not have permission to access this page. Are you trying to access administrative pages or a resource that you shouldn't be? Check in the forum rules that you are allowed to perform this action.";
$l['error_nopermission_user_4'] = "Your account may still be awaiting activation or moderation.";
$l['error_nopermission_user_resendactivation'] = "Gửi lại mã số kích hoạt";
$l['error_nopermission_user_5'] = "You are currently logged in with the username: '{1}'";
$l['logged_in_user'] = "Logged In User";
$l['error_too_many_images'] = "Too Many Images.";
$l['error_too_many_images2'] = "We are sorry, but we cannot process your post because it contains too many images. Please remove some images from your post to continue.";
$l['error_too_many_images3'] = "<b>Note:</b> The maximum amount of images per post is";
$l['error_attach_file'] = "Error Attaching File";
$l['please_correct_errors'] = "Please correct the following errors before continuing:";
$l['error_reachedattachquota'] = "Sorry but you cannot attach this file because you have reached your attachment quota of {1}";
$l['error_invaliduser'] = "The specified user is invalid or does not exist.";
$l['error_invalidaction'] = "Invalid action";
$l['error_messagelength'] = "Sorry, your message is too long and cannot be posted. Please try shortening your message and try again.";
$l['error_message_too_short'] = "Sorry, your message is too short and cannot be posted.";
$l['failed_login_wait'] = "You have failed to login within the required number of attempts. You must now wait {1}h {2}m {3}s before you can login again.";
$l['failed_login_again'] = "<br/>You have <strong>{1}</strong> more login attempts.";

$l['emailsubject_lostpw'] = "Password Reset at {1}";
$l['emailsubject_passwordreset'] = "New password at {1}";
$l['emailsubject_subscription'] = "New Reply to {1}";
$l['emailsubject_randompassword'] = "Your Password for {1}";
$l['emailsubject_activateaccount'] = "Account Activation at {1}";
$l['emailsubject_forumsubscription'] = "New Thread in {1}";
$l['emailsubject_reportpost'] = "Reported post at {1}";
$l['emailsubject_reachedpmquota'] = "Private Messaging Quota Reached at {1}";
$l['emailsubject_changeemail'] = "Change of Email at {1}";
$l['emailsubject_newpm'] = "New Private Message at {1}";
$l['emailbit_viewthread'] = "... (visit the thread to read more..)";

$l['email_lostpw'] = "{1},

To complete the phase of resetting your account password at {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=resetpassword&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=resetpassword

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";


$l['email_reportpost'] = "{1},

{2} from {3} has reported this post:

{4}
{5}/showthread.php?tid={6}&pid={7}#pid{7}

This is part of this thread:
{8}
{5}/showthread.php?tid={6}

The reason this user gave for reporting this post:
{9}

This message has been sent to all moderators of this forum, or all administrators and super moderators if there are no moderators.

Please check this post out as soon as possible.";

$l['email_passwordreset'] = "{1},

Your password at {2} has been reset.

Your new password is: {3}

You will need this password to login to the forums, once you login you should change it by going to your User Control Panel.

Thank you,
{2} Staff";

$l['email_randompassword'] = "{1},

Thank you for registering on {2}. Below is your username and the randomly generated password. To login to {2}, you will need these details.

Username: {3}
Password: {4}

It is recommended you change your password immediately after you login. You can do this by going to your User CP then clicking Change Password on the left menu.

Thank you,
{2} Staff";

$l['email_sendtofriend'] = "Hello, I thought you might be interested in reading this thread from {1},

{2}/showthread.php?tid={3}
";
$l['email_forumsubscription'] = "{1},

{2} has just started a new thread in {3}
This is a forum you have subscribed to at {4}.

The thread is titled {5}

Here is an excerpt of the message:
--
{6}
--

To view the thread, you can go to the following URL:
{7}/showthread.php?tid={8}

There may also be other new threads and replies but you will not receive anymore notifications until you visit the board again.

Thank you,
{4} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of new threads in this forum, visit the following URL in your browser:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}

------------------------------------------";

$l['email_activateaccount'] = "{1},

To complete the registration process on {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=activate&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=activate

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";

$l['email_subscription'] = "{1},

{2} has just replied to a thread which you have subscribed to at {3}. This thread is titled {4}.

Here is an excerpt of the message:
--
{5}
--

To view the thread, you can go to the following URL:
{6}/showthread.php?action=newpost&tid={7}

There may also be other replies to this thread but you will not receive anymore notifications until you visit the board again.

Thank you,
{3} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of replies to this thread, visit the following URL in your browser:
{6}/usercp2.php?action=removesubscription&tid={7}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

This is an automated email from {2} to let you know that your Private Messaging inbox has reached its capacity.

One or more users may have tried to send you private messages and were unsuccessful in doing so because of this.

Please delete some of your private messages you currently have stored, remembering to also delete them from the 'Trash Can'.

Thank you,
{2} Staff
{3}";
$l['email_changeemail'] = "{1},

We have received a request on {2} to change your email address (see details below).

Old Email Address: {3}
New Email Address: {4}

If these changes are correct, please complete the validation process on {2} by going to the following URL in your web browser.

{5}/member.php?action=activate&uid={8}&code={6}

If the above link does not work correctly, go to

{5}/member.php?action=activate

You will need to enter the following:
Username: {7}
Activation Code: {6}

If you choose not to validate your new email address your profile will not be updated and will still contain your existing email address.

Thank you,
{2} Staff
{5}";

$l['email_newpm'] = "{1},
		
You have received a new private message on {3} from {2}. To view this message, you can follow this link:

{4}/private.php

Please note that you will not receive any further notifications of new messages until you visit {3}.

You can disable new message notifications on your account options page:

{4}/usercp.php?action=options

Thank you,
{3} Staff
{4}";
?>