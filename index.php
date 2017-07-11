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
	$app = JFactory::getApplication();
	$activeMenu = $app->getMenu()->getActive();
	if (!is_null($activeMenu)) { $templateStyleId = $activeMenu->template_style_id; }
	if (empty($templateStyleId) || ($templateStyleId == '0')) {
		return $app->getTemplate(true)->id;
	}
	return $templateStyleId;
}

function displayMenu($menuItems, $animation) {
	if ($DEBUG) {
		echo '<pre>';
		print_r($menuItems);
		echo '</pre>';
	}
?>
<nav class="navigation" role="navigation">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav menu">
<?php
foreach($menuItems as $i => $item) {
	$linktype = '';
	if ($item->params->get('menu_show', 1) == '1') {
		$item->menu_image = $item->params->get('menu_image', '') ? htmlspecialchars($item->params->get('menu_image', ''), ENT_COMPAT, 'UTF-8', false) : '';
		if ($item->params->get('menu_text', 1) == '1') {
			$linktype = $item->title;
		}
		if ($item->menu_image) {
			$linktype = JHtml::_('image', $item->menu_image, '', array('class'=>'menu-icon'));
			if ($item->params->get('menu_text', 1)) {
				$linktype .= ' <span class="image-title">' . $item->title . '</span>';
			}
		}
	}
	if (!empty($linktype)) {
?>
				<li class="item-<?php echo $item->id; ?>"><?php echo calcMenuLink($item->alias, $linktype, $animation); ?></li>
<?php
	}
} ?>
			</ul>
		</div>
	</div>
</nav>
<?php
}

function getTextBetween($text, $start, $end) {
	return explode($end,explode($start,$text)[1])[0];
}

function displayEntry($text, $menuItem, $homeMenuTitle, $displayMenuIcon, $debug) {
	$content = getTextBetween($text, '<body class="contentpane modal">', '</body>');
	$content = preg_replace('/<div id="system-message-container">[^<]*<\/div>/', '', $content);
	$content = preg_replace('/<h1>[\s]*'.$homeMenuTitle.'[\s]*<\/h1>/', '', $content);
	if ($debug) {
		echo '<a href="'.$url.'" target="_new">Link</a>';
		print_r($menuItem);
	}
	if ($displayMenuIcon) {
		$menuItem->menu_image = $menuItem->params->get('menu_image', '') ? htmlspecialchars($menuItem->params->get('menu_image', ''), ENT_COMPAT, 'UTF-8', false) : '';
		$content = preg_replace('/<h1>[\s]*'.$menuItem->title.'[\s]*<\/h1>/', '<h1>'.JHtml::_('image', $menuItem->menu_image, '', array('class'=>'title-icon')).' '.$menuItem->title.'</h1>', $content);
	}
	echo '<div class="onepage-anchor"><a name="'.$menuItem->alias.'"></a></div><div class="onepage-section">'.$content.'</div>';
}

function calcMenuLink($anchor, $text, $animation) {
	switch ($animation) {
		case 'scroll':
//			return '<a href="#'.$anchor.'" onclick="scrollToAnchor(\''.$anchor.'\'); return false;">'.$text.'</a>';
//			return '<a onclick="scrollToAnchor(\''.$anchor.'\');">'.$text.'</a>';
			return '<a href="javascript:scrollToAnchor(\''.$anchor.'\');">'.$text.'</a>';
		case 'jump':
		default:
			return '<a href="#'.$anchor.'">'.$text.'</a>';
	}
}

function loadContent($menuItems) {
	$result = array();
	foreach($menuItems as $i => $item) {
		$uri = new JURI(JURI::Root().'/index.php');
		$uri->setVar('Itemid',$item->id);
		$uri->setVar('view',$item->query['view']);
		$uri->setVar('option',$item->query['option']);
		$uri->setVar('id',$item->query['id']);
		$uri->setVar('tmpl','component');
		$result[$i] = file_get_contents($uri->toString());
	}
	return $result;
}

function setScript($menuItems, $content, $doc) {
	$dom = new DOMDocument();
	foreach($menuItems as $i => $item) {
		if ($dom->loadHTML($content[$i])) {
			$scriptElementList = $dom->getElementsByTagName('script');
			if ($scriptElementList->length > 0) {
				for($i=0 ; $i<$scriptElementList->length ; $i++) {
					$scriptElement = $scriptElementList->item($i);
					$src = explode('?',$scriptElement->getAttribute('src'))[0];
					if (!empty($src)) {
						if (in_array($src, array_keys($doc->_scripts)) === false) {
							$doc->addScript($src);
						}
					} else {
						if (stripos($doc->_script['text/javascript'], $scriptElement->textContent) === false) {
							$doc->addScriptDeclaration($scriptElement->textContent);
						}
					}
				}
			}
		}
	}
}

function setCss($menuItems, $content, $doc) {
	$dom = new DOMDocument();
	foreach($menuItems as $i => $item) {
		if ($dom->loadHTML($content[$i])) {
			$scriptElementList = $dom->getElementsByTagName('link');
			if ($scriptElementList->length > 0) {
				for($i=0 ; $i<$scriptElementList->length ; $i++) {
					$scriptElement = $scriptElementList->item($i);
					$src = explode('?',$scriptElement->getAttribute('href'))[0];
					if (!empty($src)) {
						if (in_array($src, array_keys($doc->_styleSheets)) === false) {
							$doc->addStyleSheet($src);
						}
					} else {
						if (stripos($doc->_style['text/css'], $scriptElement->textContent) === false) {
							$doc->addStyleDeclaration($scriptElement->textContent);
						}
					}
				}
			}
		}
	}
}

// Getting global params from template
$debug = $this->params->get('debug') == '1' ? true : false;
$displayMenuIcon = $this->params->get('sectionDisplayMenuIcon') == '1' ? true : false;
$styleId = getAlternateTemplateStyleId();
$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// Menu
$menu = &JSite::getMenu();
$homeMenu = $menu->getItems('home','1')[0];
$homeMenuTitle = $homeMenu->title;
$menuItems = $menu->getItems('menutype',$this->params->get('menuName'));
$menuPosition = $this->params->get('menuPosition');
if (empty($menuPosition)) { $menuPosition = "1"; }
$menuPositionFirstLast = strtolower($this->params->get('menuPositionFirstLast'));
if (empty($menuPositionFirstLast)) { $menuPositionFirstLast = "first"; }
$content = loadContent($menuItems);

if($task == "edit" || $layout == "form" ) {
	$fullWidth = 1;
} else {
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
JHtml::_('jquery.ui');
$doc->addScript('templates/' .$this->template. '/js/template.js');
setScript($menuItems, $content, $doc);

// Add Stylesheets
$cssurl = 'templates/'.$this->template.'/css/template.php';
if (!empty($styleId)) {$cssurl .= '?styleId='.$styleId; }
$doc->addStyleSheet($cssurl);
if (detectNoHoverDevice()) {
	$doc->addStyleSheet('templates/'.$this->template.'/css/template_nohover.php');
}
//setCss($menuItems, $content, $doc);

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
	. ($params->get('containerType') ? ' fluid' : '');
?>">

<?php if ($this->params->get('menuAnimation') == 'scroll') : ?>
	<script src="templates/<?php echo $this->template; ?>/js/scrollto.js" type="text/javascript"></script>
<?php endif; ?>

	<!-- Body -->
	<div class="body" name="top">
		<div class="container<?php echo ($params->get('containerType') ? '-fluid' : '');?>">
			<div class="onepage-anchor"><a name="_top"></a></div>
			<div class="menuicon"><?php echo calcMenuLink('_top', '&#9776;', $this->params->get('menuAnimation')); ?></div>
			<?php if ($showTop) : ?>
			<!-- Header -->
			<header class="header" role="banner">
				<div class="header-inner clearfix">
					<?php if ($this->countModules('position-0')) : ?>
					<div class="header-search pull-right">
						<?php if (($menuPosition == '0') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
						<jdoc:include type="modules" name="onepage-0" style="none" />
						<?php if (($menuPosition == '0') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					</div>
					<?php endif; ?>
				</div>
				<div id="top">
					<div id="top-left">
						<?php if (($menuPosition == '1') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
						<jdoc:include type="modules" name="onepage-1" style="none" />
						<?php if (($menuPosition == '1') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					</div>
					<div id="top-middle">
						<?php if (($menuPosition == '2') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
						<jdoc:include type="modules" name="onepage-2" style="none" />
						<?php if (($menuPosition == '2') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					</div>
					<div id="top-right">
						<?php if (($menuPosition == '3') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
						<jdoc:include type="modules" name="onepage-3" style="none" />
						<?php if (($menuPosition == '3') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					</div>
				</div>
			</header>
			<?php endif; ?>
			<div class="row-fluid">
				<main id="content" role="main" class="<?php echo $span;?>">
					<!-- Begin Content -->
					<jdoc:include type="message" />
<?php
	foreach($menuItems as $i => $menuItem) {
		displayEntry($content[$i], $menuItem, $homeMenuTitle, $displayMenuIcon, $debug);
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
				<div id="bottom-left">
					<?php if (($menuPosition == '4') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					<jdoc:include type="modules" name="onepage-4" style="none" />
					<?php if (($menuPosition == '4') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
				</div>
				<div id="bottom-middle">
					<?php if (($menuPosition == '5') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					<jdoc:include type="modules" name="onepage-5" style="none" />
					<?php if (($menuPosition == '5') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
				</div>
				<div id="bottom-right">
					<?php if (($menuPosition == '6') && ($menuPositionFirstLast == 'first')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
					<jdoc:include type="modules" name="onepage-6" style="none" />
					<?php if (($menuPosition == '6') && ($menuPositionFirstLast == 'last')) { displayMenu($menuItems, $this->params->get('menuAnimation')); } ?>
				</div>
			</div>
			<?php endif; ?>

		</footer>
	</div>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
