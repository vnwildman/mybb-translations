<?php
/**
 * MyBB 1.6 Vietnamese Language Pack
 * This file is distributed under the same license as the MyBB package.
 * Keep Id line in order to compare version.
* $Id: messages.lang.php 5740 2011-12-30 20:01:16Z ralgith $
 */

$l['click_no_wait'] = "Bấm vào đây nếu bạn không muốn chờ đợi lâu hơn.";
$l['redirect_return_forum'] = "<br /><br />Hoặc, <a href=\"{1}\">trở về diễn đàn</a>.
$l['redirect_emailsent'] = "Thư của bạn đã được gửi thành công.";
$l['redirect_loggedin'] = "Bạn đã đăng nhập thành công<br />Bây giờ bạn sẽ được đưa về vị trí trước khi đăng nhập.<br/><br/> <img src=\"images/loading.gif\" />";

$l['error_invalidpworusername'] = "Bạn đã nhập vào cặp tài-khoản/mật-khẩu sai. <br /><br />Nếu bạn quên mật khẩu thì hãy <a href=\"member.php?action=lostpw\">lấy về một cái mới</a>.";
$l['error_invalidpworusername1'] = "Bạn đã nhập vào cặp thư-điện-tử/mật-khẩu sai. <br /><br />Nếu bạn quên mật khẩu thì hãy <a href=\"member.php?action=lostpw\">lấy về một cái mới</a>.";
$l['error_invalidpworusername2'] = "Bạn đã nhập vào cặp tài-khoản/mật-khẩu hoặc thư-điện-tử/mật-khẩu sai. <br /><br />Nếu bạn quên mật khẩu thì hãy <a href=\"member.php?action=lostpw\">lấy về một cái mới</a>.";
$l['error_incompletefields'] = "Bạn chưa nhập đầy đủ thông tin cần thiết. Xin hãy quay lại và điền đầy đủ thông tin rồi tiếp tục.";
$l['error_alreadyuploaded'] = "Bài đăng này chứa một tập tin đính kèm có cùng tên. Xin hãy đổi tên và tải lên lại.";
$l['error_alreadyuploaded_perm'] = "Bài viết đã sẵn chứa một tài liệu đính kèm có cùng tên. Xin hãy chọn hoặc là gỡ bỏ tập tin cũ đi hoặc là đổi tên và tải lại.";
$l['error_nomessage'] = "Xin lỗi, chúng tôi không thể tiến hành bởi vì bạn đã nhập một thư điện tử không hợp lệ. Xin vui lòng quay trở lại nhập vào thư điện tử hợp lệ.";
$l['error_invalidemail'] = "Bạn đã nhập một thư điện tử không hợp lệ.";
$l['error_nomember'] = "Thành viên mà bạn chỉ định không hợp lệ hay không tồn tại.";
$l['error_maxposts'] = "Xin lỗi, nhưng số bài viết mỗi ngày của bạn đã vượt quá giới hạn. Xin vui lòng chờ cho đến ngày mai để tiếp tục đăng bài hoặc liên hệ với quản trị viên của bạn.<br /><br />Số bài viết tối đa của bạn trong 1 ngày là {1} bài.";
$l['error_nohostname'] = "Không có tên máy chủ lưu trữ nào được tìm thấy cho IP mà bạn nhập vào.";
$l['error_invalidthread'] = "Chủ đề chỉ định không có thật.";
$l['error_invalidpost'] = "Bài viết chỉ định không hợp lệ";
$l['error_invalidannouncement'] = "Thông báo đã chỉ ra không tồn tại.";
$l['error_invalidattachment'] = "Đính kèm chỉ định không hợp lệ";
$l['error_invalidforum'] = "Diễn đàn không hợp lệ";
$l['error_closedinvalidforum'] = "Bạn không thể đăng bài trong diễn đàn này hoặc nó đã bị đóng, hoặc đây là một phân loại diễn đàn.";
$l['error_attachtype'] = "Kiểu tập tin mà bạn gửi kèm theo không được chấp nhận. Xin vui lòng xóa tập tin đính kèm hoặc chọn kiểu tập tin khác.";
$l['error_attachsize'] = "Tập tin đính kèm của bạn quá lớn. Dung lượng tối đa cho các loại hình tập tin đó là {1} kilobytes.";
$l['error_uploadsize'] = "Kích thước của tệp tin quá lớn.";
$l['error_uploadfailed'] = "Các tập tin tải lên không thành công. Vui lòng chọn một tập tin hợp lệ và thử lại.";
$l['error_uploadfailed_detail'] = "Chi tiết lỗi: ";
$l['error_uploadfailed_php1'] = "PHP đã trả về: Tập tin được tải lên vượt quá sự chỉ thị upload_max_filesize trong php.ini. Xin vui lòng liên hệ với quản trị viên diễn đàn của bạn về lỗi này.";
$l['error_uploadfailed_php2'] = "Tệp tin được tải lên vượt quá kích thước tập tin chỉ định";
$l['error_uploadfailed_php3'] = "Tệp tin chỉ được tải lên 1 phần.";
$l['error_uploadfailed_php4'] = "Không có tập tin nào được tải lên.";
$l['error_uploadfailed_php6'] = "PHP đã trả về: Thiếu một thư mục tạm thời. Xin vui lòng liên hệ với quản trị viên diễn đàn của bạn về lỗi này.";
$l['error_uploadfailed_php7'] = "PHP đã trả về: Không thể ghi tập tin vào đĩa. Xin vui lòng liên hệ với quản trị viên diễn đàn của bạn về lỗi này.";
$l['error_uploadfailed_phpx'] = "PHP đã trả về lỗi mã: {1}.  Xin vui lòng liên hệ với quản trị viên diễn đàn của bạn về lỗi này.";
$l['error_uploadfailed_nothingtomove'] = "Một tập tin không hợp lệ đã được xác định, do đó, tệp tin được tải lên không thể được chuyển đến các nơi cần đến.";
$l['error_uploadfailed_movefailed'] = "Có một vấn đề khi di chuyển tệp tin được tải lên đến các nơi cần đến.";
$l['error_uploadfailed_lost'] = "Các tập tin đính kèm không thể được tìm thấy trên máy chủ.";
$l['error_emailmismatch'] = "Địa chỉ thư điện tử bạn nhập vào không phù hợp. Xin vui lòng quay lại và thử lại";
$l['error_nopassword'] = "Bạn đã không nhập mật khẩu hợp lệ.";
$l['error_usernametaken'] = "Tên tài khoản| bạn đã chọn đã được đăng ký.";
$l['error_nousername'] = "Bạn chưa nhập tên tài khoản.";
$l['error_invalidusername'] = "Tên tài khoản bạn đã nhập không hợp lệ.";
$l['error_invalidpassword'] = "Mật khẩu bạn nhập vào không chính xác. Nếu bạn quên mật khẩu của bạn, hãy bấm vào <a href=\"member.php?action=lostpw\">đây</a>. Nếu không, quay lại và thử lại";
$l['error_postflooding'] = "Xin lỗi, nhưng hệ thống không thể xử lý bài viết của bạn. Các quản trị viên đã xác định bạn chỉ được phép đăng bài sau {1} giây.";
$l['error_nopermission_guest_1'] = "Bạn chưa đăng nhập hoặc bạn không được phép xem trang này. Điều này có thể là bởi vì một trong những lý do sau:";
$l['error_nopermission_guest_2'] = "Bạn chưa đăng nhập hoặc đăng ký. Xin vui lòng sử dụng biểu mẫu ở dưới cùng của trang này để đăng nhập.";
$l['error_nopermission_guest_3'] = "Bạn không được phép truy cập vào trang này. Có phải bạn đang cố gắng truy cập vào các trang quản trị của Admin hoặc mã nguồn bạn không nên vào? Kiểm tra trong diễn đàn quy định rằng bạn được phép thực hiện hành động này.";
$l['error_nopermission_guest_4'] = "Tài khoản của bạn có thể đã bị vô hiệu hóa bởi một quản trị viên, hoặc nó có thể đang chờ được kích hoạt.";
$l['error_nopermission_guest_5'] = "Bạn vừa truy cập trang này một cách trực tiếp thay vì sử dụng form hay link thích hợp.";
$l['login'] = "Đăng nhập";
$l['need_reg'] = "Cần phải đăng ký?";
$l['forgot_password'] = "Quên mật khẩu?";
$l['error_nopermission_user_1'] = "Bạn không được phép truy cập vào trang này. Điều này có thể là do một trong những lý do sau:";
$l['error_nopermission_user_ajax'] = "Bạn không được phép truy cập vào trang này.";
$l['error_nopermission_user_2'] = "Tài khoản của bạn đã bị treo hoặc bạn đã bị cấm truy cập tài nguyên này.";
$l['error_nopermission_user_3'] = "Bạn không được phép truy cập vào trang này. Có phải bạn đang cố gắng truy cập vào các trang quản trị của Admin hoặc mã nguồn bạn không nên vào? Kiểm tra trong diễn đàn quy định rằng bạn được phép thực hiện hành động này.";
$l['error_nopermission_user_4'] = "Tài khoản của bạn có thể  vẫn còn đang chờ được kích hoạt hoặc kiểm duyệt.";
$l['error_nopermission_user_5'] = "Bạn hiện đang đăng nhập với tài khoản: '{1}'";
$l['error_nopermission_user_resendactivation'] = "Gửi lại mã kích hoạt";
$l['error_nopermission_user_username'] = "Bạn hiện tại đã đăng nhập bằng tài khoản: '{1}'";
$l['logged_in_user'] = "Logged In User";
$l['error_too_many_images'] = "Quá nhiều hình";
$l['error_too_many_images2'] = "Chúng tôi xin lỗi, nhưng chúng tôi không thể xử lý bài viết của bạn bởi vì nó chứa quá nhiều hình ảnh. Xin vui lòng loại bỏ một số hình ảnh từ các bài viết của bạn để tiếp tục.";
$l['error_too_many_images3'] = "<b>Lưu ý:</b> Số hình ành tối đa trong mỗi bài viết là";
$l['error_attach_file'] = "Lỗi file đính kièm";
$l['please_correct_errors'] = "Xin vui lòng sửa các lỗi sau trước khi tiếp tục:";
$l['error_reachedattachquota'] = "Xin lỗi, nhưng bạn không thể đính kèm tập tin này bởi vì bạn đã sử dụng hết dung lượng đính kèm của bạn là {1}";
$l['error_invaliduser'] = "Tài khoản chỉ định không hợp lệ hoặc không tồn tại.";
$l['error_invalidaction'] = "Hành động không hợp lệ";
$l['error_messagelength'] = "Xin lỗi, tin nhắn của bạn quá dài và có thể không được đăng. Xin vui lòng thử rút ngắn tin nhắn của bạn và thử lại.";
$l['error_message_too_short'] = "Xin lỗi, tin nhắn của bạn quá ngắn và có thể không được đăng.";
$l['failed_login_wait'] = "Đăng nhập không thành công. Bạn cần phải chờ {1}giờ {2}phút {3}giây trước khi bạn có thể đăng nhập trở lại.";
$l['failed_login_again'] = "<br />Bạn có <strong>{1}</strong> lần đăng nhập nữa.";
$l['error_max_emails_day'] = "Bạn không thể sử dụng chức năng \"Gửi chủ đề cho bạn bè\" hoặc \"Gửi tin nhắn cho thành viên\" bởi vì bạn đã gửi {1} tin nhắn trong vòng 24 giờ qua.";

$l['emailsubject_lostpw'] = "Thiết lập lại mật khẩu tại {1}";
$l['emailsubject_passwordreset'] = "Mật khẩu mới tại {1}";
$l['emailsubject_subscription'] = "Trả lời đến {1}";
$l['emailsubject_randompassword'] = "Mật khẩu của bạn cho {1}";
$l['emailsubject_activateaccount'] = "Kích hoạt tài khoản tại {1}";
$l['emailsubject_forumsubscription'] = "Chủ đề mới trong {1}";
$l['emailsubject_reportpost'] = "Báo cáo bài viết tại {1}";
$l['emailsubject_reachedpmquota'] = "Dung lượng tin nhắn riêng đạt đến {1}";
$l['emailsubject_changeemail'] = "Thay đổi thư điện tử tại {1}";
$l['emailsubject_newpm'] = "Tin nhắn mới tại {1}";
$l['emailsubject_sendtofriend'] = "Thú vị tại trang web {1}";
$l['emailbit_viewthread'] = "... (truy cập bài viết để đọc thêm..)";

$l['email_lostpw'] = "{1},

Để hoàn thành việc của giai đoạn cài đặt lại mật khẩu tài khoản của bạn tại {2}, bạn sẽ cần phải truy cập đến địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Nếu như địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=resetpassword

Bạn cần phải điền các thông tin sau đây:
Tên tài khoản: {1}
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";
$l['email_lostpw1'] = "{1},

Để hoàn thành việc của giai đoạn cài đặt lại mật khẩu tài khoản của bạn tại {2}, bạn sẽ cần phải truy cập đến địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Nếu như địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=resetpassword

Bạn cần phải điền các thông tin sau đây:
Tên tài khoản: {1}
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";
$l['email_lostpw2'] = "{1},

Để hoàn thành việc của giai đoạn cài đặt lại mật khẩu tài khoản của bạn tại {2}, bạn sẽ cần phải truy cập đến địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Nếu như địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=resetpassword

Bạn cần phải điền các thông tin sau đây:
Tên tài khoản: {1}
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";


$l['email_reportpost'] = "{1} từ {2} đã báo cáo bài viết này:

{3}
{4}/{5}

Lý do thành viên này đã cung cấp cho việc báo cáo bài viết này:
{7}

Thông báo này đã được gửi đến tất cả các điều phối viên của diễn đàn này, hay tất cả các quản trị viên và người kiểm duyệt cấp cao nếu không có người kiểm duyệt.

Xin vui lòng kiểm tra bài đăng này ra càng sớm càng tốt.";

$l['email_passwordreset'] = "{1},

Mật khẩu của bạn tại {2} đã được thiết đặt lại.

Mật khẩu mới của bạn là: {3}

Bạn sẽ cần mật khẩu này để đăng nhập vào diễn đàn, bạn nên thay đổi sau nó khi đăng nhập bằng cách vào bảng điều khiển của thành viên.

Cảm ơn,
{2} Ban quản trị";

$l['email_randompassword'] = "{1},

Cảm ơn bạn đã đăng kí tại {2}. Dưới đây là tên tài khoản và mật khẩu ngẫu nhiên của bạn. Để đăng nhập vào {2}, bạn cân dùng các thông tin này.

Tên tài khoản: {3}
Mật khẩu: {4}

Chúng tôi đề nghị bạn thay đổi mật khẩu của bạn ngay lập tức sau khi bạn đăng nhập. Bạn có thể làm điều này bằng cách vào CP của thành viên, sau đó bấm vào Thay đổi mật khẩu bên trái trình đơn.

Cảm ơn,
{2} Ban quản trị";

$l['email_randompassword1'] = "{1},

Cảm ơn bạn đã đăng kí tại {2}. Dưới đây là tên tài khoản và mật khẩu ngẫu nhiên của bạn. Để đăng nhập vào {2}, bạn cân dùng các thông tin này.

Tên tài khoản: {3}
Mật khẩu: {4}

Chúng tôi đề nghị bạn thay đổi mật khẩu của bạn ngay lập tức sau khi bạn đăng nhập. Bạn có thể làm điều này bằng cách vào CP của thành viên, sau đó bấm vào Thay đổi mật khẩu bên trái trình đơn.

Cảm ơn,
{2} Ban quản trị";

$l['email_randompassword2'] = "{1},

Cảm ơn bạn đã đăng kí tại {2}. Dưới đây là tên tài khoản và mật khẩu ngẫu nhiên của bạn. Để đăng nhập vào {2}, bạn cân dùng các thông tin này.

Tên tài khoản: {3}
Mật khẩu: {4}

Chúng tôi đề nghị bạn thay đổi mật khẩu của bạn ngay lập tức sau khi bạn đăng nhập. Bạn có thể làm điều này bằng cách vào CP của thành viên, sau đó bấm vào Thay đổi mật khẩu bên trái trình đơn.

Cảm ơn,
{2} Ban quản trị";

$l['email_sendtofriend'] = "Chào bạn,

{1} từ {2} nghĩ bạn có thể chú ý đến trang web này:

{3}

{1} kèm theo tin nhắn:
------------------------------------------
{4}
------------------------------------------

Cảm ơn,
{2} Ban quản trị
";

$l['email_forumsubscription'] = "{1},

{2} viết mộ bài mới trong {3}. Đây là diễn đàn mà bạn đã đăng kí theo dõi tại {4}.

Chủ đề có tựa đề {5}

Đây là một trích dẫn của bài viết:
--
{6}
--

Để xem bài viết, bạn có thể truy cập địa chỉ sau:
{7}/{8}

Hiện có thể sẽ có các chủ đề và bài trả lời mới nhưng bạn sẽ không nhận được thông báo nữa, cho đến khi bạn truy cập lại vào diễn đàn.

Cảm ơn,
{4} Ban quản trị

------------------------------------------
Thông tin để bỏ đặt xem dài hạn:

Nếu bạn không muốn nhận những thông báo như thế này thêm nữa, hãy truy cập vào địa chỉ sau đây:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}

------------------------------------------";

$l['email_activateaccount'] = "{1},

Để hoàn tất thủ tục đăng ký trên {2}, bạn sẽ cần phải truy cập địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=activate&uid={4}&code={5}

Nếu địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=activate

Bạn cần phải nhập:
Tên tài khoản: {1}
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";

$l['email_activateaccount1'] = "{1},

Để hoàn tất thủ tục đăng ký trên {2}, bạn sẽ cần phải truy cập địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=activate&uid={4}&code={5}

Nếu địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=activate

Bạn cần phải nhập:
Thư điện tử của bạn
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";

$l['email_activateaccount2'] = "{1},

Để hoàn tất thủ tục đăng ký trên {2}, bạn sẽ cần phải truy cập địa chỉ dưới đây trong trình duyệt web của bạn.

{3}/member.php?action=activate&uid={4}&code={5}

Nếu địa chỉ trên không hoạt động, truy cập

{3}/member.php?action=activate

Bạn cần phải nhập:
Tên tài khoản: {1} (Hoặc địa chỉ thư điện tử)
Mã kích hoạt: {5}

Cảm ơn,
{2} Ban quản trị";

$l['email_subscription'] = "{1},

{2} đã trả lời cho bài viết bạn đặt theo dõi tại {3}.Chủ đề này tên là {4}.

Đây là một trích dẫn của bài viết:
------------------------------------------
{5}
------------------------------------------

Để xem bài viết, bạn có thể truy cập địa chỉ sau:
{6}/{7}

Hiện có thể sẽ có các chủ đề và bài trả lời mới nhưng bạn sẽ không nhận được thông báo nữa, cho đến khi bạn truy cập lại vào diễn đàn.

Cảm ơn,
{3} Ban quản trị

------------------------------------------
Thông tin bỏ đặt xem dài hạn:

Nếu bạn không muốn nhận bất cứ thông báo chi tiết của bài trả lời vào chủ đề này, hãy truy cập vào các địa chỉ URL trong trình duyệt của bạn:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

Đây là một thư điện tử tự động từ {2} được gửi đến để thông báo cho bạn biết rằng hộp thư cá nhân của bạn đã đầy

Một số thành viên đã cố gắng gửi tin nhắn cho bạn nhưng không được vì lí do này.

Xin hãy xóa bớt tin nhắn cá nhân của bạn nếu có thể, và nhớ là cả trong \"Thùng rác\"

Cảm ơn,
{2} Ban quản trị
{3}";
$l['email_changeemail'] = "{1},

Chúng tôi đã nhận được một yêu cầu trên {2} về việc thay đổi địa chỉ mai của bạn (xem thông tin phía dưới).

Địa chỉ thư điện tử cũ: {3}
Địa chỉ thư điện tử mới: {4}

Nếu những thay đổi này là chính xác, xin vui lòng hoàn tất các thủ tục xác nhận trên {2} bằng cách truy cập vào các địa chỉ dưới đây trong trình duyệt web của bạn.

{5}/member.php?action=activate&uid={8}&code={6}

Nếu địa chỉ trên không hoạt động, truy cập

{5}/member.php?action=activate

Bạn cần phải nhập:
Tên tài khoản: {7}
Mã kích hoạt: {6}

Nếu bạn xác nhận không hợp lệ, địa chỉ thư điện tử mới của bạn sẽ không được cập nhật và sẽ giữ nguyên địa chỉ thư điện tử cũ của bạn.

Cảm ơn,
{2} Ban quản trị
{5}";

$l['email_newpm'] = "{1},

Bạn đã nhận được một tin nhắn riêng trên {3} từ {2}. Để xem thông điệp này, bạn có thể truy cập liên kết sau:

{4}/private.php

Xin lưu ý rằng bạn sẽ không nhận được thêm bất cứ thông báo thư mới cho đến khi bạn ghé thăm {3}.

Bạn có thể vô hiệu hóa các thông báo tin nhắn mới trên tài khoản của bạn tại trang lựa chọn:

{4}/usercp.php?action=options

Cảm ơn,
{3} Ban quản trị
{4}";

$l['email_emailuser'] = "{1},

{2} từ {3} đã gửi cho bạn tin nhắn sau:
------------------------------------------
{5}
------------------------------------------

Cảm ơn,
{3} Ban quản trị
{4}

------------------------------------------
Bạn không muốn nhận tin nhắn từ các thành viên khác?

Nếu bạn không muốn các thành viên khác có thể gửi thư điện tử cho bạn vì hãy truy cập vào to Bảng Điều Khiển của người dùng và bật tùy chọn 'Ẩn địa chỉ thư điện tử':
{4}/usercp.php?action=options

------------------------------------------";
?>