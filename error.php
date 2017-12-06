<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.nok-generic
 *
 * @copyright   Copyright (C) 2014 Norbert Kuemin. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
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

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add current user information
$user = JFactory::getUser();

// Check modules
$showTop      = ($this->countModules('onepage-0') or $this->countModules('onepage-1') or $this->countModules('onepage-2') or $this->countModules('onepage-3'));
$showBottom   = ($this->countModules('onepage-4') or $this->countModules('onepage-5') or $this->countModules('onepage-6'));
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
			<div class="backtomenuicon"><?php echo calcMenuLink('_top', $menuIcon, $this->params->get('menuAnimation')); ?></div>
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
				<div id="content" class="span12">
					<!-- Begin Content -->
					<h1 class="page-header"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
					<div class="well">
						<div class="row-fluid">
							<div class="span6">
								<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
								<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
								<ul>
									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
								</ul>
							</div>
							<div class="span6">
								<?php if (JModuleHelper::getModule('search')) : ?>
									<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
									<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
									<?php echo $doc->getBuffer('module', 'search'); ?>
								<?php endif; ?>
								<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
								<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
							</div>
						</div>
						<hr />
						<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
						<blockquote>
							<span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo $this->error->getMessage();?>
						</blockquote>
					</div>
					<!-- End Content -->
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
