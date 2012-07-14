<?php
/**
 * Copyright © 2006 CraKteR.
 */
define("IN_MYBB", 1);

require_once "./global.php";

checkadminpermissions("canaddimportantmessage");
logadmin();

$lang->load("importantmsgs");

addacpnav($lang->important, "importantmsgs.php?".SID);
$mid = intval($mybb->input['mid']);
switch($mybb->input['action']) {
	case "add":
		addacpnav($lang->add_important);
		$plugins->run_hooks("admin_importantmsgs_add");
		cpheader();
		startform("importantmsgs.php", "", "do_add");
		starttable();
		tableheader($lang->add_important);
		makeinputcode($lang->title, "title", "", "40");
		maketextareacode($lang->message, "message", "", "20", "80");
		$bgcolor = getaltbg();
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->showusersgroups</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">";
		echo "<input type=\"checkbox\" name=\"usersgroups[]\" value=\"-2\" /> ".$lang->show_none."<br />";
		echo make_usergroup_checkbox_code('usersgroups');
		echo "\n</td>\n</tr>\n";
		makeinputcode($lang->bgcolor, "bgcolor");
		makeinputcode($lang->txtcolor, "color");
		makeinputcode($lang->css_class, "class", "", "25", $lang->classdesc);
		makeinputcode($lang->css_id, "css_id", "", "25", $lang->iddesc);
		makeinputcode($lang->image, "image", "", "25", $lang->imgdesc);
		makeinputcode($lang->order, "order", "", "25", $lang->orderdesc);
		$bgcolor = getaltbg();
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->style</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">
		<select name=\"style\">
			<option value=\"0\" selected=\"selected\">$lang->default</option>
			<option value=\"1\">$lang->alt</option>
		</select>\n</td>\n</tr>\n";
		$bgcolor = getaltbg();
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->globally</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">";
		echo "<input type=\"checkbox\" name=\"global\" value=\"1\" />";
		echo "\n</td>\n</tr>\n";
		endtable();
		endform($lang->submit, $lang->reset_button);
		cpfooter();
		break;
	case "edit":
		addacpnav($lang->edit_important);
		$query = $db->simple_select(TABLE_PREFIX."importantmsgs", "*", "mid='$mid'");
		$msg = $db->fetch_array($query);
		$plugins->run_hooks("admin_importantmsgs_edit");
		cpheader();
		startform("importantmsgs.php", "", "do_edit");
		makehiddencode("mid", $mid);
		starttable();
		tableheader($lang->edit_important);
		makeinputcode($lang->title, "title", $msg['title'], "40");
		maketextareacode($lang->message, "message", $msg['message'], "20", "80");
		$bgcolor = getaltbg();
		$groups = explode(',', $msg['usergroups']);
		if(in_array('-2', $groups)) {
			$checked = " checked=\"checked\"";
		}
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->showusersgroups</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">";
		echo "<input type=\"checkbox\" name=\"usersgroups[]\" value=\"-2\"$checked /> ".$lang->show_none."<br />";
		echo make_usergroup_checkbox_code('usersgroups', $groups);
		echo "\n</td>\n</tr>\n";
		makeinputcode($lang->bgcolor, "bgcolor", $msg['bgcolor']);
		makeinputcode($lang->txtcolor, "color", $msg['color']);
		makeinputcode($lang->css_class, "class", $msg['class'], "25", $lang->classdesc);
		makeinputcode($lang->css_id, "css_id", $msg['id'], "25", $lang->iddesc);
		makeinputcode($lang->image, "image", $msg['image'], "25", $lang->imgdesc);
		makeinputcode($lang->order, "order", $msg['order'], "25", $lang->orderdesc);
		$as = $df = "";
		if($msg['style'] == 1) {
			$as = " selected=\"selected\"";
		} else {
			$df = " selected=\"selected\"";
		}
		$bgcolor = getaltbg();
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->style</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">
		<select name=\"style\">
			<option value=\"0\"$df>$lang->default</option>
			<option value=\"1\"$as>$lang->alt</option>
		</select>\n</td>\n</tr>\n";
		$bgcolor = getaltbg();
		if($msg['global'] == 1) {
			$check = " checked=\"checked\"";
		}
		echo "<tr>\n<td class=\"$bgcolor\" valign=\"top\" width=\"40%\">$lang->globally</td><td class=\"$bgcolor\" valign=\"top\" width=\"60%\">";
		echo "<input type=\"checkbox\" name=\"global\" value=\"1\"$check />";
		echo "\n</td>\n</tr>\n";
		endtable();
		endform($lang->submit_update, $lang->reset_button);
		cpfooter();
		break;
	case "do_add":
		if(is_array($mybb->input['usersgroups'])) {
			$usergroups = implode(',', $mybb->input['usersgroups']);
		} else {
			$usergroups = "-1";
		}
		$sqlarray = array(
			"title" => $db->escape_string($mybb->input['title']),
			"message" => $db->escape_string($mybb->input['message']),
			"usergroups" => $db->escape_string($usergroups),
			"bgcolor" => $db->escape_string($mybb->input['bgcolor']),
			"color" => $db->escape_string($mybb->input['color']),
			"class" => $db->escape_string($mybb->input['class']),
			"id" => $db->escape_string($mybb->input['css_id']),
			"image" => $db->escape_string($mybb->input['image']),
			"ord" => $db->escape_string($mybb->input['order']),
			"style" => intval($db->escape_string($mybb->input['style'])),
			"global" => intval($db->escape_string($mybb->input['global']))
		);
		$plugins->run_hooks("admin_importantmsgs_do_add");
		$db->insert_query(TABLE_PREFIX."importantmsgs", $sqlarray);
		cpredirect("importantmsgs.php?".SID, $lang->important_added);
		break;
	case "do_edit":
		if(is_array($mybb->input['usersgroups'])) {
			$usergroups = implode(',', $mybb->input['usersgroups']);
		} else {
			$usergroups = -1;
		}
		$sqlarray = array(
			"mid" => $mid,
			"title" => $db->escape_string($mybb->input['title']),
			"message" => $db->escape_string($mybb->input['message']),
			"usergroups" => $db->escape_string($usergroups),
			"bgcolor" => $db->escape_string($mybb->input['bgcolor']),
			"color" => $db->escape_string($mybb->input['color']),
			"class" => $db->escape_string($mybb->input['class']),
			"id" => $db->escape_string($mybb->input['css_id']),
			"image" => $db->escape_string($mybb->input['image']),
			"ord" => $db->escape_string($mybb->input['order']),
			"style" => intval($db->escape_string($mybb->input['style'])),
			"global" => intval($db->escape_string($mybb->input['global']))
		);
		$plugins->run_hooks("admin_importantmsgs_do_edit");
		$db->update_query(TABLE_PREFIX."importantmsgs", $sqlarray, "mid='".$sqlarray['mid']."'");
		cpredirect("importantmsgs.php?".SID, $lang->important_edited);
		break;
	case "delete":
		if($mid) {
			$plugins->run_hooks("admin_importantmsgs_delete");
			$db->delete_query(TABLE_PREFIX."importantmsgs", "mid='".$mid."'");
			cpredirect("importantmsgs.php?".SID, $lang->important_deleted);
			exit;
		}
		break;
	default:
		$plugins->run_hooks("admin_importantmsgs_modify");
		cpheader();
		$hopto[] = "<input type=\"button\" value=\"$lang->add_important\" onclick=\"hopto('importantmsgs.php?".SID."&amp;action=add');\" class=\"hoptobutton\" />";
		makehoptolinks($hopto);
		starttable();
		tableheader($lang->add_important, "", 4);
		echo "<tr>\n";
		echo "\t<td class=\"subheader\">{$lang->top_title}</td>\n";
		echo "\t<td class=\"subheader\">{$lang->usergroups}</td>\n";
		echo "\t<td class=\"subheader\" colspan=\"2\" align=\"center\">$lang->options</td>\n";
		echo "</tr>\n";
		$options = array(
			"order_by" => "ord",
			"order_dir" => "ASC"
		);
		$query = $db->simple_select(TABLE_PREFIX."importantmsgs", "*", "", $options);
		$options = array(
			'order_by' => 'title',
			'order_dir' => 'ASC'
		);
		while($msg = $db->fetch_array($query))
		{
			$bgcolor = getaltbg();
			if($msg['usergroups'] == -1)
			{
				$usergroups = $lang->show_all;
			}
			else if($msg['usergroups'] == 0)
			{
				$usergroups = $lang->show_none;
			}
			else
			{
				$query2 = $db->simple_select(TABLE_PREFIX."usergroups", "title", "gid IN({$msg['usergroups']})", $options);
				$usergroups = array();
				while($usergroup = $db->fetch_array($query2))
				{
					$usergroups[] = $usergroup['title'];
				}
				$usergroups = implode('<br />', $usergroups);
			}
			echo "<tr>\n";
			echo "<td class=\"$bgcolor\" width=\"42%\">".$msg['title']."</td>\n";
			echo "<td class=\"$bgcolor\">";
			echo $usergroups;
			echo "</td>\n";
			echo "<td class=\"$bgcolor\" align=\"center\">";
			startform("importantmsgs.php", "", "edit");
			makehiddencode("mid", $msg['mid']);
			echo "<input type=\"submit\" name=\"edit\" value=\"$lang->edit\" class=\"submitbutton\" />";
			endform();
			echo "</td>\n";
			echo "<td class=\"$bgcolor\" align=\"center\">";
			startform("importantmsgs.php", "", "delete");
			makehiddencode("mid", $msg['mid']);
			echo "<input type=\"submit\" name=\"delete\" value=\"$lang->delete\" class=\"submitbutton\" />";
			endform();
			echo "</td>\n";
			echo "</tr>\n";
			$done = 1;
		}
		if(!$done) {
			makelabelcode("<div align=\"center\">$lang->no_important</div>", "", 4);
		}
		endtable();
		cpfooter();
		break;
}
?>
