<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.nok-onepage
 *
 * @copyright   Copyright (C) 2017 Norbert Kuemin. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

function detectNoHoverDevice() {
	global $_SERVER;
	if (!isset($_SERVER['HTTP_USER_AGENT'])) { return true; }
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$useragents = array (
		"android",
		"iphone",
		"ipad",
		"ipod",
		"blackberry",
		"kindle",
		"opera mobi",
		"playbook",
		"webos",
		"windows phone"
	);
	foreach ( $useragents as $useragent ) {
		if (preg_match("/".$useragent."/i",$agent)){
			return true;
		}
	}
	return false;
}

function getAlternateTemplateStyleId() {
	$activeMenu = JFactory::getApplication()->getMenu()->getActive();
	if (is_null($activeMenu)) { return ''; }
	$templateStyleId = $activeMenu->template_style_id;
	if (empty($templateStyleId) || ($templateStyleId == '0')) { return ''; }
	return $templateStyleId;
}

function displayMenu() {
?>
<nav class="navigation" role="navigation">
	<div class="navbar">
		<div class="navbar-inner">
			<jdoc:include type="modules" name="position-1" style="none"/>
		</div>
	</div>
</nav>
<?php
}

// Getting global params from template
$styleId = getAlternateTemplateStyleId();
$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$menuPosition = $this->params->get('menuPosition');
if (empty($menuPosition)) { $menuPosition = "1"; }
$menuPositionFirstLast = strtolower($this->params->get('menuPositionFirstLast'));
if (empty($menuPositionFirstLast)) { $menuPositionFirstLast = "first"; }

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" ) {
	$fullWidth = 1;
} else {
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
JHtml::_('jquery.ui');
$doc->addScript('templates/' .$this->template. '/js/template.js');

// Add Stylesheets
$cssurl = 'templates/'.$this->template.'/css/template.php';
if (!empty($styleId)) {$cssurl .= '?styleId='.$styleId; }
$doc->addStyleSheet($cssurl);
if (detectNoHoverDevice()) {
	$doc->addStyleSheet('templates/'.$this->template.'/css/template_nohover.php');
}

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Add current user information
$user = JFactory::getUser();

// Check modules
$showTop      = ($this->countModules('position-0') or $this->countModules('position-1') or $this->countModules('position-2') or $this->countModules('position-3'));
$showBottom   = ($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-6'));

// Adjusting content width
$span = "span12";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
<?php if ($params->get('faviconFile')) : ?>
	<link rel="shortcut icon" href="<?php echo JURI::base()."/".$params->get('faviconFile'); ?>" />
<?php endif; ?>
	<?php
	// Use of Google Font
	if ($this->params->get('googleFont'))
	{
	?>
		<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName');?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title {
				font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
			}
		</style>
	<?php
	}
	?>
	<?php
	// Write additional css information
	if ($this->params->get('cssPage')) {
	?>
		<style type="text/css">
<?php echo $params['cssPage']; ?>
		</style>
	<?php
	}
	?>


	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">

	<!-- Body -->
	<div class="body" name="top">
		<div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : '');?>">
			<?php if ($showTop) : ?>
			<!-- Header -->
			<header class="header" role="banner">
				<div class="header-inner clearfix">
					<?php if ($this->countModules('position-0')) : ?>
					<div class="header-search pull-right">
						<?php //if (($menuPosition == '0') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
						<jdoc:include type="modules" name="position-0" style="none" />
						<?php //if (($menuPosition == '0') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
					</div>
					<?php endif; ?>
				</div>
				<div id="top">
					<?php //if (($menuPosition == '1') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
					<jdoc:include type="modules" name="position-1" style="none" />
					<?php //if (($menuPosition == '1') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
					<?php //if (($menuPosition == '2') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
					<jdoc:include type="modules" name="position-2" style="none" />
					<?php //if (($menuPosition == '2') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
					<?php //if (($menuPosition == '3') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
					<jdoc:include type="modules" name="position-3" style="none" />
					<?php //if (($menuPosition == '3') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
				</div>
			</header>
			<?php endif; ?>
			<div class="row-fluid">
				<main id="content" role="main" class="<?php echo $span;?>">
					<!-- Begin Content -->
					<jdoc:include type="message" />
					<!-- <jdoc:include type="component" /> -->
<?php
	global $_REQUEST;
	$menu = &JSite::getMenu();
	$app = JFactory::getApplication();
	$styleId = $app->getTemplate(true)->id;
	$currentMenuId = $menu->getActive()->id;
	$items = $menu->getItems('template_style_id',$styleId);
	foreach($items as $i => $item) {
		$uri = new JURI(JURI::Root().'/index.php');
		$uri->setVar('Itemid',$item->id);
		$uri->setVar('view',$item->query['view']);
		$uri->setVar('option',$item->query['option']);
		$uri->setVar('id',$item->query['id']);
		$uri->setVar('tmpl','component');
		echo $uri->toString().'<p>';
//		index.php?option=com_content&view=article&id=1&tmpl=component
	}
?>
					<!-- End Content -->
				</main>
			</div>
		</div>
		<!-- Footer -->
		<footer class="footer" role="contentinfo">
			<hr />
			<?php if ($showBottom) : ?>
			<div id="bottom">
				<?php //if (($menuPosition == '4') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
				<jdoc:include type="modules" name="position-4" style="none" />
				<?php //if (($menuPosition == '4') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
				<?php //if (($menuPosition == '5') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
				<jdoc:include type="modules" name="position-5" style="none" />
				<?php //if (($menuPosition == '5') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
				<?php //if (($menuPosition == '6') && ($menuPositionFirstLast == 'first')) { displayMenu(); } ?>
				<jdoc:include type="modules" name="position-6" style="none" />
				<?php //if (($menuPosition == '6') && ($menuPositionFirstLast == 'last')) { displayMenu(); } ?>
			</div>
			<?php endif; ?>
			<p class="pull-right">
				<a href="#top" id="back-top"><?php echo JText::_('TPL_NOK-ONEPAGE_BACKTOTOP'); ?></a>
			</p>
		</footer>
	</div>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
