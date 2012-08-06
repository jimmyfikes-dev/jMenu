<?php
	require_once(dirname(__FILE__)."/../../../scripts/init.inc.php");
	$oMysql = MySQL::getInstance();
	$aNews = $oMysql->getNews(NB_NEWS);
	
	
	if(Tools::getValue('btSubmit'))
	{
		$openClick = $_POST['openClick'];
		$ulWidth = $_POST['ulWidth'];
		$TimeBeforeOpening = $_POST['TimeBeforeOpening'];
		$TimeBeforeClosing = $_POST['TimeBeforeClosing'];
		$animatedText = $_POST['animatedText'];
		$paddingLeft = $_POST['paddingLeft'];
		$effectSpeedOpen = $_POST['effectSpeedOpen'];
		$effectSpeedClose = $_POST['effectSpeedClose'];
		$effectClose = $_POST['effectClose'];
		$effectOpen = $_POST['effectOpen'];
		$effectTypeClose = $_POST['effectTypeClose'];
		$effectTypeOpen = $_POST['effectTypeOpen'];
	} else {
		$openClick = 'false';
		$ulWidth = 'auto';
		$TimeBeforeOpening = 100;
		$TimeBeforeClosing = 400;
		$animatedText = 'false';
		$paddingLeft = 1;
		$effectSpeedOpen = 300;
		$effectSpeedClose = 300;
		$effectClose = 'linear';
		$effectOpen = 'linear';
		$effectTypeClose = 'slide';
		$effectTypeOpen = 'slide';
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>jMenu jQuery plugin : Demonstration - Horizontal navigation with unlimited sub-menus with jQuery : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Language" content="en" />
	<link rel="shortcut icon" href="<?php echo URL_SITE; ?>favicon.ico" />
	<base href="<?php echo URL_SITE; ?>" />
	<meta name="description" content="jMenu is a jQuery plugin that enables us to create horizontal navigations with unlimited sub-menus. The markup of the menu is pretty clean as it makes use of nested lists. With MyjQueryPlugins, it's very easy to animate your website with jQuery and jQuery UI !" />
	<meta name="robots" content="index, follow, all" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?><?php echo URL_DEMO_JMENU; ?>jquery/jMenu.jquery.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/content.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/648.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/336.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css' />
</head>

<body id="demopage">

	<?php require_once(dirname(__FILE__)."/../../../includes/header.inc.php");?>

<div id="main">

	<div class="breadcrumb">
		<a href="index" class="backTo">Home</a>
		<a href="jMenu" class="backTo">jMenu Homepage</a>
		<div class="clr"></div>
	</div>
	
	<div id="left_col">

<h1>jMenu demonstration</h1>

<ul id="jMenu">
	<li class="col_1"><a class="fNiv">Category 1</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 1.2</a>
				<ul>
					<li><a>Category 1.3</a></li>
					<li><a>Category 1.3</a></li>
					<li><a>Category 1.3</a></li>
					<li><a>Category 1.3</a></li>
					<li><a>Category 1.3</a>
						<ul>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a>
								<ul>
									<li><a>Category 1.5</a></li>
									<li><a>Category 1.5</a></li>
									<li><a>Category 1.5</a>
										<ul>
											<li><a>Category 1.6</a></li>
											<li><a>Category 1.6</a></li>
											<li><a>Category 1.6</a></li>
											<li><a>Category 1.6</a></li>
											<li><a>Category 1.6</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
						</ul>
					</li>
					<li><a>Category 1.3</a></li>
				</ul>
			</li>
			<li><a>Category 1.2</a></li>
			<li><a>Category 1.2</a>
				<ul>
					<li><a>Category 1.3</a></li>
					<li><a>Category 1.3</a>
						<ul>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
							<li><a>Category 1.4</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a>Category 1.2</a></li>
		</ul>
	</li>
	
	
	<li class="col_2"><a class="fNiv">Category 2</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 2.2</a>
				<ul>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
				</ul>
			</li>
			<li><a>Category 2.2</a>
				<ul>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
				</ul>
			</li>
			<li><a>Category 2.2</a>
				<ul>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
					<li><a>Category 2.3</a></li>
				</ul>
			</li>
			<li><a>Category 2.2</a></li>
		</ul>
	</li>
	
	
	<li class="col_3"><a class="fNiv">Category 3</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 3.2</a>
				<ul>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
				</ul>
			</li>
			<li><a>Category 3.2</a>
				<ul>
					<li><a>Category 3.3</a></li>
					<li><a>Category 3.3</a></li>
				</ul>
			</li>
			<li><a>Category 3.2</a></li>
			<li><a>Category 3.2</a></li>
		</ul>
	</li>
	
	
	<li class="col_4"><a class="fNiv">Category 4</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 4.2</a></li>
			<li><a>Category 4.2</a></li>
			<li><a>Category 4.2</a>
				<ul>
					<li><a>Category 4.3</a></li>
					<li><a>Category 4.3</a></li>
					<li><a>Category 4.3</a></li>
					<li><a>Category 4.3</a></li>
				</ul>
			</li>
			<li><a>Category 4.2</a></li>
		</ul>
	</li>
	
	
	<li class="col_5"><a class="fNiv">Category 5</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 5.2</a>
				<ul>
					<li><a>Category 5.3</a></li>
					<li><a>Category 5.3</a></li>
					<li><a>Category 5.3</a></li>
					<li><a>Category 5.3</a></li>
				</ul>
			</li>
			<li><a>Category 5.2</a></li>
			<li><a>Category 5.2</a></li>
			<li><a>Category 5.2</a></li>
		</ul>
	</li>
	
	<li class="col_6"><a class="fNiv">Category 6</a></li>
	
	<li class="col_7"><a class="fNiv">Category 7</a>
		<ul>
			<li class="arrow"></li>
			<li><a>Category 7.2</a></li>
			<li><a>Category 7.2</a></li>
			<li><a>Category 7.2</a></li>
			<li><a>Category 7.2</a></li>
		</ul>
	</li>
</ul>

<div class="clr"></div>

<h2>Change options</h2>
<form method="post" action="">
	<fieldset>
		
		<label>ulWidth</label>
		<select name="ulWidth">
			<option value="auto" <?php if($ulWidth == 'auto') echo 'selected="selected"'; ?>>Auto</option>
			<option value="100" <?php if($ulWidth == '100') echo 'selected="selected"'; ?>>100px</option>
			<option value="150" <?php if($ulWidth == '150') echo 'selected="selected"'; ?>>150px</option>
			<option value="200" <?php if($ulWidth == '200') echo 'selected="selected"'; ?>>200px</option>
			<option value="250" <?php if($ulWidth == '250') echo 'selected="selected"'; ?>>250px</option>
		</select>
		<em>(width of the columns)</em>
		
		<br /><br />
		
		<label>Time before opening</label>
		<select name="TimeBeforeOpening">
			<option value="100" <?php if($TimeBeforeOpening == '100') echo 'selected="selected"'; ?>>100 ms</option>
			<option value="150" <?php if($TimeBeforeOpening == '150') echo 'selected="selected"'; ?>>150 ms</option>
			<option value="200" <?php if($TimeBeforeOpening == '200') echo 'selected="selected"'; ?>>200 ms</option>
			<option value="400" <?php if($TimeBeforeOpening == '400') echo 'selected="selected"'; ?>>400 ms</option>
		</select>
		<em>(Time before opening menu when the mouse hover it)</em>
		
		<br /><br />
		
		<label>Time before closing</label>
		<select name="TimeBeforeClosing">
			<option value="100" <?php if($TimeBeforeClosing == '100') echo 'selected="selected"'; ?>>100 ms</option>
			<option value="400" <?php if($TimeBeforeClosing == '400') echo 'selected="selected"'; ?>>400 ms</option>
			<option value="700" <?php if($TimeBeforeClosing == '700') echo 'selected="selected"'; ?>>700 ms</option>
			<option value="1000" <?php if($TimeBeforeClosing == '1000') echo 'selected="selected"'; ?>>1 sec.</option>
			<option value="1500" <?php if($TimeBeforeClosing == '1500') echo 'selected="selected"'; ?>>1.5 sec.</option>
		</select>
		<em>(Time before closing menu when the mouse leaves it)</em>
		
		<br /><br />
		
		<label>Padding-left on hover ?</label>
		<select name="animatedText">
			<option value="true" <?php if($animatedText == 'true') echo 'selected="selected"'; ?>>Y</option>
			<option value="false" <?php if($animatedText == 'false') echo 'selected="selected"'; ?>>N</option>
		</select>&nbsp;-&nbsp;-&nbsp;
		<label>How many pixels ?</label>
		<select name="paddingLeft">
			<option value="1" <?php if($paddingLeft == 1) echo 'selected="selected"'; ?>>1 px</option>
			<option value="2" <?php if($paddingLeft == 2) echo 'selected="selected"'; ?>>2 px</option>
			<option value="3" <?php if($paddingLeft == 3) echo 'selected="selected"'; ?>>3 px</option>
			<option value="4" <?php if($paddingLeft == 4) echo 'selected="selected"'; ?>>4 px</option>
			<option value="5" <?php if($paddingLeft == 5) echo 'selected="selected"'; ?>>5 px</option>
			<option value="6" <?php if($paddingLeft == 6) echo 'selected="selected"'; ?>>6 px</option>
			<option value="7" <?php if($paddingLeft == 7) echo 'selected="selected"'; ?>>7 px</option>
			<option value="8" <?php if($paddingLeft == 8) echo 'selected="selected"'; ?>>8 px</option>
			<option value="9" <?php if($paddingLeft == 9) echo 'selected="selected"'; ?>>9 px</option>
			<option value="10" <?php if($paddingLeft == 10) echo 'selected="selected"'; ?>>10 px</option>
		</select>
		<em>(Animated links on the hover)</em>
		
		<br /><br />
		
		<div>Opening Options</div>
		<label>Time </label>
		<select name="effectSpeedOpen">
			<option value="200" <?php if($effectSpeedOpen == 200) echo 'selected="selected"'; ?>>200 ms</option>
			<option value="300" <?php if($effectSpeedOpen == 300) echo 'selected="selected"'; ?>>300 ms</option>
			<option value="400" <?php if($effectSpeedOpen == 400) echo 'selected="selected"'; ?>>400 ms</option>
			<option value="600" <?php if($effectSpeedOpen == 600) echo 'selected="selected"'; ?>>600 ms</option>
			<option value="800" <?php if($effectSpeedOpen == 800) echo 'selected="selected"'; ?>>800 ms</option>
			<option value="1000" <?php if($effectSpeedOpen == 1000) echo 'selected="selected"'; ?>>1000 ms</option>
			<option value="1200" <?php if($effectSpeedOpen == 1200) echo 'selected="selected"'; ?>>1200 ms</option>
		</select>&nbsp;-&nbsp;-&nbsp;
		<label>Open effect</label>
		<select name="effectTypeOpen">
			<option value="slide" <?php if($effectTypeOpen == 'slide') echo 'selected="selected"'; ?>>slideDown()</option>
			<option value="fade" <?php if($effectTypeOpen == 'fade') echo 'selected="selected"'; ?>>fadeIn()</option>
			<option value="show" <?php if($effectTypeOpen == 'show') echo 'selected="selected"'; ?>>show()</option>
		</select>&nbsp;-&nbsp;-&nbsp;
		<label>UI effect</label>
		<select name="effectOpen">
			<option value="linear" <?php if($effectOpen == 'linear') echo 'selected="selected"'; ?>>linear</option>
			<option value="easeOutQuad" <?php if($effectOpen == 'easeOutQuad') echo 'selected="selected"'; ?>>easeOutQuad</option>
			<option value="easeInCubic" <?php if($effectOpen == 'easeInCubic') echo 'selected="selected"'; ?>>easeInCubic</option>
			<option value="easeOutQuart" <?php if($effectOpen == 'easeOutQuart') echo 'selected="selected"'; ?>>easeOutQuart</option>
			<option value="easeInOutQuart" <?php if($effectOpen == 'easeInOutQuart') echo 'selected="selected"'; ?>>easeInOutQuart</option>
			<option value="easeInElastic" <?php if($effectOpen == 'easeInElastic') echo 'selected="selected"'; ?>>easeInElastic</option>
			<option value="easeOutElastic" <?php if($effectOpen == 'easeOutElastic') echo 'selected="selected"'; ?>>easeOutElastic</option>
			<option value="easeInOutElastic" <?php if($effectOpen == 'easeInOutElastic') echo 'selected="selected"'; ?>>easeInOutElastic</option>
			<option value="easeOutBounce" <?php if($effectOpen == 'easeOutBounce') echo 'selected="selected"'; ?>>easeOutBounce</option>
			<option value="easeInBounce" <?php if($effectOpen == 'easeInBounce') echo 'selected="selected"'; ?>>easeInBounce</option>
			<option value="easeInOutBounce" <?php if($effectOpen == 'easeInOutBounce') echo 'selected="selected"'; ?>>easeInOutBounce</option>
			<option value="easeInOutBack" <?php if($effectOpen == 'easeInOutBack') echo 'selected="selected"'; ?>>easeInOutBack</option>
		</select>
		<em>(<a href="http://jqueryui.com/docs/effect/#easing">all UI effects availables</a>)</em>
		
		<br /><br />
		
		<div>Close Options</div>
		<label>Time</label>
		<select name="effectSpeedClose">
			<option value="200" <?php if($effectSpeedClose == 200) echo 'selected="selected"'; ?>>200 ms</option>
			<option value="300" <?php if($effectSpeedClose == 300) echo 'selected="selected"'; ?>>300 ms</option>
			<option value="400" <?php if($effectSpeedClose == 400) echo 'selected="selected"'; ?>>400 ms</option>
			<option value="600" <?php if($effectSpeedClose == 600) echo 'selected="selected"'; ?>>600 ms</option>
			<option value="800" <?php if($effectSpeedClose == 800) echo 'selected="selected"'; ?>>800 ms</option>
			<option value="1000" <?php if($effectSpeedClose == 1000) echo 'selected="selected"'; ?>>1000 ms</option>
			<option value="1200" <?php if($effectSpeedClose == 1200) echo 'selected="selected"'; ?>>1200 ms</option>
		</select>&nbsp;-&nbsp;-&nbsp;
		<label>Close effect</label>
		<select name="effectTypeClose">
			<option value="slide" <?php if($effectTypeClose == 'slide') echo 'selected="selected"'; ?>>slideUp()</option>
			<option value="fade" <?php if($effectTypeClose == 'fade') echo 'selected="selected"'; ?>>fadeOut()</option>
			<option value="hide" <?php if($effectTypeClose == 'show') echo 'selected="selected"'; ?>>hide()</option>
		</select>&nbsp;-&nbsp;-&nbsp;
		<label>UI effect</label>
		<select name="effectClose">
			<option value="linear" <?php if($effectClose == 'linear') echo 'selected="selected"'; ?>>linear</option>
			<option value="easeOutQuad" <?php if($effectClose == 'easeOutQuad') echo 'selected="selected"'; ?>>easeOutQuad</option>
			<option value="easeInCubic" <?php if($effectClose == 'easeInCubic') echo 'selected="selected"'; ?>>easeInCubic</option>
			<option value="easeOutQuart" <?php if($effectClose == 'easeOutQuart') echo 'selected="selected"'; ?>>easeOutQuart</option>
			<option value="easeInOutQuart" <?php if($effectClose == 'easeInOutQuart') echo 'selected="selected"'; ?>>easeInOutQuart</option>
			<option value="easeInElastic" <?php if($effectClose == 'easeInElastic') echo 'selected="selected"'; ?>>easeInElastic</option>
			<option value="easeOutElastic" <?php if($effectClose == 'easeOutElastic') echo 'selected="selected"'; ?>>easeOutElastic</option>
			<option value="easeInOutElastic" <?php if($effectClose == 'easeInOutElastic') echo 'selected="selected"'; ?>>easeInOutElastic</option>
			<option value="easeOutBounce" <?php if($effectClose == 'easeOutBounce') echo 'selected="selected"'; ?>>easeOutBounce</option>
			<option value="easeInBounce" <?php if($effectClose == 'easeInBounce') echo 'selected="selected"'; ?>>easeInBounce</option>
			<option value="easeInOutBounce" <?php if($effectClose == 'easeInOutBounce') echo 'selected="selected"'; ?>>easeInOutBounce</option>
			<option value="easeInOutBack" <?php if($effectClose == 'easeInOutBack') echo 'selected="selected"'; ?>>easeInOutBack</option>
		</select>
		<em>(<a href="http://jqueryui.com/docs/effect/#easing">all UI effects availables</a>)</em>
		
		
		<br /><br />
		
		<label>Open Menu by Click ?</label>
		<select name="openClick">
			<option value="true" <?php if($openClick == true) echo 'selected="selected"'; ?>>Y</option>
			<option value="false" <?php if($openClick == 'false') echo 'selected="selected"'; ?>>N</option>
			
		</select>
		<em>(jMenu open when clicking or hovering ?)</em><span>Added in v1.8</span>
		
		<br /><br />
		<input type="submit" name="btSubmit" value="Change options">
	</fieldset>
</form>

<h2>JS code</h2>
<div class="sourceCode">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#jMenu").jMenu({
      openClick : '.$openClick.',
      ulWidth : \''.$ulWidth.'\',
      effects : {
        effectSpeedOpen : '.$effectSpeedOpen.',
        effectSpeedClose : '.$effectSpeedClose.',
        effectTypeOpen : \''.$effectTypeOpen.'\',
        effectTypeClose : \''.$effectTypeClose.'\',
        effectOpen : \''.$effectOpen.'\',
        effectClose : \''.$effectClose.'\'
      },
      TimeBeforeOpening : '.$TimeBeforeOpening.',
      TimeBeforeClosing : '.$TimeBeforeClosing.',
      animatedText : '.$animatedText.',
      paddingLeft: '.$paddingLeft.'
    });
  })
</script>
');
?>
</pre>
</div>

		<!-- Advertise Bottom -->
		<?php require_once(dirname(__FILE__)."/../../../includes/pub.inc.php");?>
	</div>
	
	<!-- RIGHT COLUMN -->
	<?php require_once(dirname(__FILE__)."/../../../includes/col_right.inc.php");?>
		
	<div class="clr"></div>

</div>
	
	
<!-- FOOTER -->
<?php require_once(dirname(__FILE__)."/../../../includes/footer.inc.php");?>

<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_JMENU; ?>jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_JMENU; ?>jquery/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_JMENU; ?>jquery/jMenu.jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#jMenu").jMenu({
			openClick : <?php echo $openClick;?>,
			ulWidth : '<?php echo $ulWidth;?>',
			effects : {
				effectSpeedOpen : <?php echo $effectSpeedOpen; ?>,
				effectSpeedClose : <?php echo $effectSpeedClose; ?>,
				effectTypeOpen : '<?php echo $effectTypeOpen; ?>',
				effectTypeClose : '<?php echo $effectTypeClose; ?>',
				effectOpen : '<?php echo $effectOpen; ?>',
				effectClose : '<?php echo $effectClose; ?>'
			},
			TimeBeforeOpening : <?php echo $TimeBeforeOpening; ?>,
			TimeBeforeClosing : <?php echo $TimeBeforeClosing; ?>,
			animatedText : <?php echo $animatedText; ?>,
			paddingLeft: <?php echo $paddingLeft;?>
		});
	})
</script>

<?php require_once dirname(__FILE__)."/../../../includes/analytics.inc.php"; ?>
</body>
</html>
