<?php 

if (basename(__FILE__) == basename($_SERVER['PHP_SELF']))
{
    exit(0);
}

echo '<?xml version="1.0" encoding="utf-8"?>';

include"config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitetitle; ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<?php echo $metadescription; ?>" />
<meta name="keywords" content="<?php echo $metakeywords; ?>" />
<script type="text/javascript">
<!--
	function showhide(targetID) {
		//change target element mode
		var elementmode = document.getElementById(targetID).style;
		elementmode.display = (!elementmode.display) ? 'none' : '';
	}

	function changetext(changee,oldText,newText) {
		//changes text in source element
		var elementToChange = document.getElementById(changee);
		elementToChange.innerHTML = (elementToChange.innerHTML == oldText) ? newText : oldText;
	}

	function workforchange(targetID,sourceID,oldContent,newContent) {
		showhide(targetID);
		changetext(sourceID,oldContent,newContent);
	}

	// Cruft note: The content of "oldContent," the third argument of the
	// workforchange() function, must match the existing content of the changer text.

// -->
</script>
<style type="text/css">
<!--
.style1 {color: #00FF00}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div align="center">
  <p>
<div id="content">
<div id="left">
<table id="LeftContent" width="221" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/left1.gif" width="221" height="15" alt="" /></td>
	</tr>
	<tr>
		<td width="20" nowrap="nowrap" background="images/left2.gif">&nbsp;</td>
		<td width="190" nowrap="nowrap" bordercolor="#1b2021" bgcolor="#1b2021">
		<div align="center"><span class="style2">Status :</span> <span class="style1">Online!!</span></div>
		</td>
		<td width="11" nowrap="nowrap" background="images/left3.gif">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/left4.gif" width="221" height="17" alt="" /></td>
	</tr>
</table>
</div>
<div id="middle"><img src="images/spacer.gif" alt="" /></div>
<div id="right">
<table id="Right Content" width="531" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="8">
			<img src="images/right1.gif" width="531" height="15" alt="" /></td>
	</tr>
	<tr>
		<td width="23" rowspan="3" nowrap="nowrap" background="images/right2.gif" />
		</td>
		<td colspan="6" bordercolor="#1b2021" bgcolor="#1b2021"><span class="style2">OK Online</span><br />
		  <br /></td>
		<td width="23" rowspan="3" nowrap="nowrap" background="images/right4.gif" /></td>
	</tr>
	
	<tr>
		<td width="374" height="37" colspan="2" nowrap="nowrap" background="images/address.gif" />
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">		
		<input id="address_box" name="<?php echo $GLOBALS['_config']['url_var_name'] ?>" type="text" class="bar" onfocus="this.select()" value="<?php echo isset($GLOBALS['_url']) ? $GLOBALS['_url'] : '' ?>" /></td>
		
		<td width="6" nowrap="nowrap" bordercolor="#1b2021" bgcolor="#1b2021">&nbsp;</td>
		<td><input id="browse" type="submit" value="" /></td>
		<td height="37" colspan="2" nowrap="nowrap" bordercolor="#1b2021" bgcolor="#1b2021">
			<img src="images/right_09.gif" width="2" height="37" alt="" /></td>
		
	
	<tr>
		<td height="30" colspan="6" bordercolor="#1b2021" bgcolor="#1b2021"><div align="left">
	<a href="javascript:workforchange('adv','showadv','Click Here For More Options','Hide Options');" id='showadv'>&#3588;&#3621;&#3636;&#3585;&#3607;&#3637;&#3656;&#3609;&#3637;&#3656;&#3648;&#3614;&#3639;&#3656;&#3629;&#3648;&#3626;&#3619;&#3636;&#3617; Option</a></div>
	<div id='adv' style='display:none'>
      <?php
	  echo '<ul>';
      foreach ($GLOBALS['_flags'] as $flag_name => $flag_value)
      {
          if (!$GLOBALS['_frozen_flags'][$flag_name])
          {
              echo '<li class="option"><input type="checkbox" name="' . $GLOBALS['_config']['flags_var_name'] . '[' . $flag_name . ']"' . ($flag_value ? ' checked="checked"' : '') . ' />' . $GLOBALS['_labels'][$flag_name][1] . '</li>' . "\n";
          }
      }
	  echo '</ul><br />';
      ?>
	  </div></form>
</td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/right3.gif" width="531" height="17" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="116" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="258" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="92" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt="" /></td>
	</tr>
</table>

<?php

switch ($data['category'])
{
    case 'auth':
?>
<?php
        break;
    case 'error':
        echo '<div id="error"><p>';
        
        switch ($data['group'])
        {
            case 'url':
                echo '<b>URL Error (' . $data['error'] . ')</b>: ';
                switch ($data['type'])
                {
                    case 'internal':
                        $message = 'Failed to connect to the specified host. '
                                 . 'Possible problems are that the server was not found, the connection timed out, or the connection refused by the host. '
                                 . 'Try connecting again and check if the address is correct.';
                        break;
                    case 'external':
                        switch ($data['error'])
                        {
                            case 1:
                                $message = 'The URL you\'re attempting to access is blacklisted by this server. Please select another URL.';
                                break;
                            case 2:
                                $message = 'The URL you entered is malformed. Please check whether you entered the correct URL or not.';
                                break;
                        }
                        break;
                }
                break;
            case 'resource':
                echo '<b>Resource Error:</b> ';
                switch ($data['type'])
                {
                    case 'file_size':
                        $message = 'The file your are attempting to download is too large.<br />'
                                 . 'Maxiumum permissible file size is <b>' . number_format($GLOBALS['_config']['max_file_size']/1048576, 2) . ' MB</b><br />'
                                 . 'Requested file size is <b>' . number_format($GLOBALS['_content_length']/1048576, 2) . ' MB</b>';
                        break;
                    case 'hotlinking':
                        $message = 'It appears that you are trying to access a resource through this proxy from a remote Website.<br />'
                                 . 'For security reasons, please use the form below to do so.';
                        break;
                }
                break;
        }
        
        echo 'An error has occured while trying to browse through the proxy. <br />' . $message . '</p></div>';
        break;
}
?><br />

</div>
</div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<center></img>
  <p><img src="images/waiting_animation_2_sm.gif" /></p>
  <p>Ready to Work!</p>
</center>

</body>
</html>
