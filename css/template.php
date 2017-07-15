<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.nok-onepage
 *
 * @copyright   Copyright (C) 2017 Norbert Kuemin. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

if (file_exists(__DIR__ . '/joomla_init.inc.php'))
{
	include_once __DIR__ . '/joomla_init.inc.php';
}
?>
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
	display: block;
}
audio,
canvas,
video {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
audio:not([controls]) {
	display: none;
}
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
a:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
a:hover,
a:active {
	outline: 0;
}
sub,
sup {
	position: relative;
	font-size: 75%;
	line-height: 0;
	vertical-align: baseline;
}
sup {
	top: -0.5em;
}
sub {
	bottom: -0.25em;
}
img {
	max-width: 100%;
	width: auto \9;
	height: auto;
	vertical-align: middle;
	border: 0;
	-ms-interpolation-mode: bicubic;
}
p {
<?php if (!isNullOrEmpty($params,'templateParagraphMarginTop')) : ?>
	margin-top: <?php echo $params['templateParagraphMarginTop']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateParagraphMarginBottom')) : ?>
	margin-bottom: <?php echo $params['templateParagraphMarginBottom']; ?>;
<?php endif; ?>
}
#map_canvas img,
.google-maps img,
.gm-style img {
	max-width: none;
}
button,
input,
select,
textarea {
	margin: 0;
	font-size: 100%;
	vertical-align: middle;
}
button,
input {
	*overflow: visible;
	line-height: normal;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
	padding: 0;
	border: 0;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}
label,
select,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
input[type="radio"],
input[type="checkbox"] {
	cursor: pointer;
}
input[type="search"] {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	-webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
	-webkit-appearance: none;
}
textarea {
	overflow: auto;
	vertical-align: top;
}
@media print {
	* {
		text-shadow: none !important;
		color: #000 !important;
		background: transparent !important;
		box-shadow: none !important;
	}
	a,
	a:visited {
		text-decoration: underline;
	}
	a[href]:after {
		content: " (" attr(href) ")";
	}
	abbr[title]:after {
		content: " (" attr(title) ")";
	}
	.ir a:after,
	a[href^="javascript:"]:after,
	a[href^="#"]:after {
		content: "";
	}
	pre,
	blockquote {
		border: 1px solid #999;
		page-break-inside: avoid;
	}
	thead {
		display: table-header-group;
	}
	tr,
	img {
		page-break-inside: avoid;
	}
	img {
		max-width: 100% !important;
	}
	@page {
		margin: 0.5cm;
	}
	p,
	h2,
	h3 {
		orphans: 3;
		widows: 3;
	}
	h2,
	h3 {
		page-break-after: avoid;
	}
}
.clearfix {
	*zoom: 1;
}
.clearfix:before,
.clearfix:after {
	display: table;
	content: "";
	line-height: 0;
}
.clearfix:after {
	clear: both;
}
#top-left, #top-middle, #top-right {
	display: inline-block;
	z-index: -1;
}
#bottom-left, #bottom-middle, #bottom-right {
	display: inline-block;
}
#top-right, #bottom-right {
	position:relative;
	float:right;
}
.hide-text {
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0;
}
.input-block-level {
	display: block;
	width: 100%;
	min-height: 28px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.menuicon {
	position: fixed;
<?php if (($params['menuIconPosition'] == 'top-left') || ($params['menuIconPosition'] == 'top-right')) : ?>
	top: 0px;
<?php else: ?>
	bottom: 0px;
<?php endif; ?>
<?php if (($params['menuIconPosition'] == 'top-left') || ($params['menuIconPosition'] == 'bottom-left')) : ?>
	left: 0px;
<?php else: ?>
	right: 0px;
<?php endif; ?>
	padding: 5px;
	font-size: <?php echo $params['menuFontSize']; ?>px;
<?php if (!isNullOrEmpty($params,'menuIconForegroundColor')) : ?>
	color: <?php echo $params['menuIconForegroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuIconBackgroundColor')) : ?>
	background-color: <?php echo $params['menuIconBackgroundColor']; ?>;
<?php endif; ?>
}
.menuicon a {
<?php if (!isNullOrEmpty($params,'menuIconForegroundColor')) : ?>
	color: <?php echo $params['menuIconForegroundColor']; ?>;
<?php endif; ?>
}
body {
	margin: 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
	line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateForegroundColor')) : ?>
	color: <?php echo $params['templateForegroundColor']; ?>;
<?php endif; ?>
	background-color: #fff;
}
a {
<?php if (!isNullOrEmpty($params,'templateLinkColor')) : ?>
	color: <?php echo $params['templateLinkColor']; ?>;
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	color: <?php echo $params['templateColor']; ?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateLinkDecoration')) : ?>
	text-decoration: <?php echo $params['templateLinkDecoration']; ?>;
<?php endif; ?>
}
a:hover,
a:focus {
<?php if (!isNullOrEmpty($params,'templateLinkColor')) : ?>
	color: <?php echo $params['templateLinkColor']; ?>;
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	color: <?php echo $params['templateColor']; ?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateLinkDecoration')) : ?>
	text-decoration: <?php echo $params['templateLinkDecoration']; ?>;
<?php endif; ?>
}
.img-rounded {
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.img-polaroid {
	padding: 4px;
	background-color: #fff;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
.img-circle {
	-webkit-border-radius: 500px;
	-moz-border-radius: 500px;
	border-radius: 500px;
}
.row {
	margin-left: -20px;
	*zoom: 1;
}
.row:before,
.row:after {
	display: table;
	content: "";
	line-height: 0;
}
.row:after {
	clear: both;
}
[class*="span"] {
	float: left;
	min-height: 1px;
	margin-left: 20px;
}
.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
	width: <?php echo $params['containerWidth']; ?>px;
}
.span12 {
	width: <?php echo $params['containerWidth']; ?> ?>px;
}
.span11 {
	width: <?php echo intval(intval($params['containerWidth'])/12*11); ?>px;
}
.span10 {
	width: <?php echo intval(intval($params['containerWidth'])/12*10); ?>px;
}
.span9 {
	width: <?php echo intval(intval($params['containerWidth'])/12*9); ?>px;
}
.span8 {
	width: <?php echo intval(intval($params['containerWidth'])/12*8); ?>px;
}
.span7 {
	width: <?php echo intval(intval($params['containerWidth'])/12*7); ?>px;
}
.span6 {
	width: <?php echo intval(intval($params['containerWidth'])/12*6); ?>px;
}
.span5 {
	width: <?php echo intval(intval($params['containerWidth'])/12*5); ?>px;
}
.span4 {
	width: <?php echo intval(intval($params['containerWidth'])/12*4); ?>px;
}
.span3 {
	width: <?php echo intval(intval($params['containerWidth'])/12*3); ?>px;
}
.span2 {
	width: <?php echo intval(intval($params['containerWidth'])/12*2); ?>px;
}
.span1 {
	width: <?php echo intval(intval($params['containerWidth'])/12*1); ?>px;
}
.offset12 {
	margin-left: 980px;
}
.offset11 {
	margin-left: 900px;
}
.offset10 {
	margin-left: 820px;
}
.offset9 {
	margin-left: 740px;
}
.offset8 {
	margin-left: 660px;
}
.offset7 {
	margin-left: 580px;
}
.offset6 {
	margin-left: 500px;
}
.offset5 {
	margin-left: 420px;
}
.offset4 {
	margin-left: 340px;
}
.offset3 {
	margin-left: 260px;
}
.offset2 {
	margin-left: 180px;
}
.offset1 {
	margin-left: 100px;
}
.row-fluid {
	width: 100%;
	*zoom: 1;
}
.row-fluid:before,
.row-fluid:after {
	display: table;
	content: "";
	line-height: 0;
}
.row-fluid:after {
	clear: both;
}
.row-fluid [class*="span"] {
	display: block;
	width: 100%;
	min-height: 28px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	float: left;
	margin-left: 2.127659574%;
	*margin-left: 2.0744680846383%;
}
.row-fluid [class*="span"]:first-child {
	margin-left: 0;
}
.row-fluid .controls-row [class*="span"] + [class*="span"] {
	margin-left: 2.127659574%;
}
.row-fluid .span12 {
	width: 99.99999999%;
	*width: 99.946808500638%;
}
.row-fluid .span11 {
	width: 91.489361693%;
	*width: 91.436170203638%;
}
.row-fluid .span10 {
	width: 82.978723396%;
	*width: 82.925531906638%;
}
.row-fluid .span9 {
	width: 74.468085099%;
	*width: 74.414893609638%;
}
.row-fluid .span8 {
	width: 65.957446802%;
	*width: 65.904255312638%;
}
.row-fluid .span7 {
	width: 57.446808505%;
	*width: 57.393617015638%;
}
.row-fluid .span6 {
	width: 48.936170208%;
	*width: 48.882978718638%;
}
.row-fluid .span5 {
	width: 40.425531911%;
	*width: 40.372340421638%;
}
.row-fluid .span4 {
	width: 31.914893614%;
	*width: 31.861702124638%;
}
.row-fluid .span3 {
	width: 23.404255317%;
	*width: 23.351063827638%;
}
.row-fluid .span2 {
	width: 14.89361702%;
	*width: 14.840425530638%;
}
.row-fluid .span1 {
	width: 6.382978723%;
	*width: 6.3297872336383%;
}
.row-fluid .offset12 {
	margin-left: 104.255319138%;
	*margin-left: 104.14893615928%;
}
.row-fluid .offset12:first-child {
	margin-left: 102.127659564%;
	*margin-left: 102.02127658528%;
}
.row-fluid .offset11 {
	margin-left: 95.744680841%;
	*margin-left: 95.638297862277%;
}
.row-fluid .offset11:first-child {
	margin-left: 93.617021267%;
	*margin-left: 93.510638288277%;
}
.row-fluid .offset10 {
	margin-left: 87.234042544%;
	*margin-left: 87.127659565277%;
}
.row-fluid .offset10:first-child {
	margin-left: 85.10638297%;
	*margin-left: 84.999999991277%;
}
.row-fluid .offset9 {
	margin-left: 78.723404247%;
	*margin-left: 78.617021268277%;
}
.row-fluid .offset9:first-child {
	margin-left: 76.595744673%;
	*margin-left: 76.489361694277%;
}
.row-fluid .offset8 {
	margin-left: 70.21276595%;
	*margin-left: 70.106382971277%;
}
.row-fluid .offset8:first-child {
	margin-left: 68.085106376%;
	*margin-left: 67.978723397277%;
}
.row-fluid .offset7 {
	margin-left: 61.702127653%;
	*margin-left: 61.595744674277%;
}
.row-fluid .offset7:first-child {
	margin-left: 59.574468079%;
	*margin-left: 59.468085100277%;
}
.row-fluid .offset6 {
	margin-left: 53.191489356%;
	*margin-left: 53.085106377277%;
}
.row-fluid .offset6:first-child {
	margin-left: 51.063829782%;
	*margin-left: 50.957446803277%;
}
.row-fluid .offset5 {
	margin-left: 44.680851059%;
	*margin-left: 44.574468080277%;
}
.row-fluid .offset5:first-child {
	margin-left: 42.553191485%;
	*margin-left: 42.446808506277%;
}
.row-fluid .offset4 {
	margin-left: 36.170212762%;
	*margin-left: 36.063829783277%;
}
.row-fluid .offset4:first-child {
	margin-left: 34.042553188%;
	*margin-left: 33.936170209277%;
}
.row-fluid .offset3 {
	margin-left: 27.659574465%;
	*margin-left: 27.553191486277%;
}
.row-fluid .offset3:first-child {
	margin-left: 25.531914891%;
	*margin-left: 25.425531912277%;
}
.row-fluid .offset2 {
	margin-left: 19.148936168%;
	*margin-left: 19.042553189277%;
}
.row-fluid .offset2:first-child {
	margin-left: 17.021276594%;
	*margin-left: 16.914893615277%;
}
.row-fluid .offset1 {
	margin-left: 10.638297871%;
	*margin-left: 10.531914892277%;
}
.row-fluid .offset1:first-child {
	margin-left: 8.510638297%;
	*margin-left: 8.4042553182766%;
}
[class*="span"].hide,
.row-fluid [class*="span"].hide {
	display: none;
}
[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
	float: right;
}
.container {
	margin-right: auto;
	margin-left: auto;
	*zoom: 1;
}
.container:before,
.container:after {
	display: table;
	content: "";
	line-height: 0;
}
.container:after {
	clear: both;
}
.container-fluid {
<?php if (!isNullOrEmpty($params,'contentBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['contentBackgroundColor'],$params['contentBackgroundOpacity']); ?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['contentBackgroundColor'],''); ?>;
<?php endif; ?>
<?php endif; ?>
	*zoom: 1;
}
.container-fluid:before,
.container-fluid:after {
	display: table;
	content: "";
	line-height: 0;
}
.container-fluid:after {
	clear: both;
}
p {
	margin: 0 0 9px;
}
.lead {
	margin-bottom: 18px;
	font-size: 19.5px;
	font-weight: 200;
	line-height: 27px;
}
small {
	font-size: 85%;
}
strong {
	font-weight: bold;
}
em {
	font-style: italic;
}
cite {
	font-style: normal;
}
.muted {
	color: #999;
}

a.muted:hover,
a.muted:focus {
	color: #808080;
}
.text-warning {
	color: #c09853;
}
a.text-warning:hover,
a.text-warning:focus {
	color: #a47e3c;
}
.text-error {
	color: #b94a48;
}
a.text-error:hover,
a.text-error:focus {
	color: #953b39;
}
.text-info {
	color: #3a87ad;
}
a.text-info:hover,
a.text-info:focus {
	color: #2d6987;
}
.text-success {
	color: #468847;
}
a.text-success:hover,
a.text-success:focus {
	color: #356635;
}
.text-left {
	text-align: left;
}
.text-right {
	text-align: right;
}
.text-center {
	text-align: center;
}
h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 9px 0;
	font-family: inherit;
	font-weight: bold;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	color: inherit;
	text-rendering: optimizelegibility;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
	font-weight: normal;
	line-height: 1;
	color: #999;
}
h1,
h2,
h3 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    line-height: <?php echo intval(intval($params['templateFontSize'])*3); ?>px;
<?php endif; ?>
}
h1 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*3); ?>px;
<?php endif; ?>
}
h2 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*2.5); ?>px;
<?php endif; ?>
}
h3 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*2); ?>px;
<?php endif; ?>
}
h4 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
}
h5 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*1); ?>px;
<?php endif; ?>
}
h6 {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*0.8); ?>px;
<?php endif; ?>
}
h1 small {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*2); ?>px;
<?php endif; ?>
}
h2 small {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
}
h3 small {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo $params['templateFontSize']; ?>px;
<?php endif; ?>
}
h4 small {
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    font-size: <?php echo $params['templateFontSize']; ?>px;
<?php endif; ?>
}
ul,
ol {
	padding: 0;
	margin: 0 0 9px 25px;
}
ul ul,
ul ol,
ol ol,
ol ul {
	margin-bottom: 0;
}
li {
	line-height: 18px;
}
ul.unstyled,
ol.unstyled {
	margin-left: 0;
	list-style: none;
}
ul.inline,
ol.inline {
	margin-left: 0;
	list-style: none;
}
ul.inline > li,
ol.inline > li {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	padding-left: 5px;
	padding-right: 5px;
}
dl {
	margin-bottom: 18px;
}
dt,
dd {
	line-height: 18px;
}
dt {
	font-weight: bold;
}
dd {
	margin-left: 9px;
}
.dl-horizontal {
	*zoom: 1;
}
.dl-horizontal:before,
.dl-horizontal:after {
	display: table;
	content: "";
	line-height: 0;
}
.dl-horizontal:after {
	clear: both;
}
.dl-horizontal dt {
	float: left;
	width: 160px;
	clear: left;
	text-align: right;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.dl-horizontal dd {
	margin-left: 180px;
}
hr {
	margin: 18px 0;
	border: 0;
	border-top: 1px solid #eee;
	border-bottom: 1px solid #fff;
}
abbr[title],
abbr[data-original-title] {
	cursor: help;
	border-bottom: 1px dotted #999;
}
abbr.initialism {
	font-size: 90%;
	text-transform: uppercase;
}
blockquote {
	padding: 0 0 0 15px;
	margin: 0 0 18px;
	border-left: 5px solid #eee;
}
blockquote p {
	margin-bottom: 0;
	font-size: 16.25px;
	font-weight: 300;
	line-height: 1.25;
}
blockquote small {
	display: block;
	line-height: 18px;
	color: #999;
}
blockquote small:before {
	content: '\2014 \00A0';
}
blockquote.pull-right {
	float: right;
	padding-right: 15px;
	padding-left: 0;
	border-right: 5px solid #eee;
	border-left: 0;
}
blockquote.pull-right p,
blockquote.pull-right small {
	text-align: right;
}
blockquote.pull-right small:before {
	content: '';
}
blockquote.pull-right small:after {
	content: '\00A0 \2014';
}
q:before,
q:after,
blockquote:before,
blockquote:after {
	content: "";
}
address {
	display: block;
	margin-bottom: 18px;
	font-style: normal;
	line-height: 18px;
}
code,
pre {
	padding: 0 3px 2px;
	font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
<?php endif; ?>
	color: #333;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
code {
	padding: 2px 4px;
	color: #d14;
	background-color: #f7f7f9;
	border: 1px solid #e1e1e8;
	white-space: nowrap;
}
pre {
	display: block;
	padding: 8.5px;
	margin: 0 0 9px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	word-break: break-all;
	word-wrap: break-word;
	white-space: pre;
	white-space: pre-wrap;
	background-color: #f5f5f5;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.15);
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
pre.prettyprint {
	margin-bottom: 18px;
}
pre code {
	padding: 0;
	color: inherit;
	white-space: pre;
	white-space: pre-wrap;
	background-color: transparent;
	border: 0;
}
.pre-scrollable {
	max-height: 340px;
	overflow-y: scroll;
}
form {
	margin: 0 0 18px;
}
fieldset {
	padding: 0;
	margin: 0;
	border: 0;
}
legend {
	display: block;
	width: 100%;
	padding: 0;
	margin-bottom: 18px;
	font-size: 19.5px;
	line-height: 36px;
	color: #333;
	border: 0;
	border-bottom: 1px solid #e5e5e5;
}
legend small {
	font-size: 13.5px;
	color: #999;
}
label,
input,
button,
select,
textarea {
	font-size: 13px;
	font-weight: normal;
	line-height: 18px;
}
input,
button,
select,
textarea {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
label {
	display: block;
	margin-bottom: 5px;
}
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
	display: inline-block;
	height: 18px;
	padding: 4px 6px;
	margin-bottom: 9px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	color: #555;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	vertical-align: middle;
}
input,
textarea,
.uneditable-input {
	width: 206px;
}
textarea {
	height: auto;
}
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
	background-color: #fff;
	border: 1px solid #ccc;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border linear .2s, box-shadow linear .2s;
	-moz-transition: border linear .2s, box-shadow linear .2s;
	-o-transition: border linear .2s, box-shadow linear .2s;
	transition: border linear .2s, box-shadow linear .2s;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
	border-color: rgba(82,168,236,0.8);
	outline: 0;
	outline: thin dotted \9;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
}
input[type="radio"],
input[type="checkbox"] {
	margin: 4px 0 0;
	*margin-top: 0;
	margin-top: 1px \9;
	line-height: normal;
}
input[type="file"],
input[type="image"],
input[type="submit"],
input[type="reset"],
input[type="button"],
input[type="radio"],
input[type="checkbox"] {
	width: auto;
}
select,
input[type="file"] {
	height: 28px;
	*margin-top: 4px;
	line-height: 28px;
}
select {
	width: 220px;
	border: 1px solid #ccc;
	background-color: #fff;
}
select[multiple],
select[size] {
	height: auto;
}
select:focus,
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
.uneditable-input,
.uneditable-textarea {
	color: #999;
	background-color: #fcfcfc;
	border-color: #ccc;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	cursor: not-allowed;
}
.uneditable-input {
	overflow: hidden;
	white-space: nowrap;
}
.uneditable-textarea {
	width: auto;
	height: auto;
}
input:-moz-placeholder,
textarea:-moz-placeholder {
	color: #999;
}
input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
	color: #999;
}
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
	color: #999;
}
.radio,
.checkbox {
	min-height: 18px;
	padding-left: 20px;
}
.radio input[type="radio"],
.checkbox input[type="checkbox"] {
	float: left;
	margin-left: -20px;
}
.controls > .radio:first-child,
.controls > .checkbox:first-child {
	padding-top: 5px;
}
.radio.inline,
.checkbox.inline {
	display: inline-block;
	padding-top: 5px;
	margin-bottom: 0;
	vertical-align: middle;
}
.radio.inline + .radio.inline,
.checkbox.inline + .checkbox.inline {
	margin-left: 10px;
}
.input-mini {
	width: 60px;
}
.input-small {
	width: 90px;
}
.input-medium {
	width: 150px;
}
.input-large {
	width: 210px;
}
.input-xlarge {
	width: 270px;
}
.input-xxlarge {
	width: 530px;
}
input[class*="span"],
select[class*="span"],
textarea[class*="span"],
.uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"] {
	float: none;
	margin-left: 0;
}
.input-append input[class*="span"],
.input-append .uneditable-input[class*="span"],
.input-prepend input[class*="span"],
.input-prepend .uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"],
.row-fluid .input-prepend [class*="span"],
.row-fluid .input-append [class*="span"] {
	display: inline-block;
}
input,
textarea,
.uneditable-input {
	margin-left: 0;
}
.controls-row [class*="span"] + [class*="span"] {
	margin-left: 20px;
}
input.span12,
textarea.span12,
.uneditable-input.span12 {
	width: 926px;
}
input.span11,
textarea.span11,
.uneditable-input.span11 {
	width: 846px;
}
input.span10,
textarea.span10,
.uneditable-input.span10 {
	width: 766px;
}
input.span9,
textarea.span9,
.uneditable-input.span9 {
	width: 686px;
}
input.span8,
textarea.span8,
.uneditable-input.span8 {
	width: 606px;
}
input.span7,
textarea.span7,
.uneditable-input.span7 {
	width: 526px;
}
input.span6,
textarea.span6,
.uneditable-input.span6 {
	width: 446px;
}
input.span5,
textarea.span5,
.uneditable-input.span5 {
	width: 366px;
}
input.span4,
textarea.span4,
.uneditable-input.span4 {
	width: 286px;
}
input.span3,
textarea.span3,
.uneditable-input.span3 {
	width: 206px;
}
input.span2,
textarea.span2,
.uneditable-input.span2 {
	width: 126px;
}
input.span1,
textarea.span1,
.uneditable-input.span1 {
	width: 46px;
}
.controls-row {
	*zoom: 1;
}
.controls-row:before,
.controls-row:after {
	display: table;
	content: "";
	line-height: 0;
}
.controls-row:after {
	clear: both;
}
.controls-row [class*="span"],
.row-fluid .controls-row [class*="span"] {
	float: left;
}
.controls-row .checkbox[class*="span"],
.controls-row .radio[class*="span"] {
	padding-top: 5px;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
	cursor: not-allowed;
	background-color: #eee;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"][readonly],
input[type="checkbox"][readonly] {
	background-color: transparent;
}
.control-group.warning .control-label,
.control-group.warning .help-block,
.control-group.warning .help-inline {
	color: #c09853;
}
.control-group.warning .checkbox,
.control-group.warning .radio,
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
	color: #c09853;
}
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
	border-color: #c09853;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.warning input:focus,
.control-group.warning select:focus,
.control-group.warning textarea:focus {
	border-color: #a47e3c;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;
}
.control-group.warning .input-prepend .add-on,
.control-group.warning .input-append .add-on {
	color: #c09853;
	background-color: #fcf8e3;
	border-color: #c09853;
}
.control-group.error .control-label,
.control-group.error .help-block,
.control-group.error .help-inline {
	color: #b94a48;
}
.control-group.error .checkbox,
.control-group.error .radio,
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
	color: #b94a48;
}
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
	border-color: #b94a48;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.error input:focus,
.control-group.error select:focus,
.control-group.error textarea:focus {
	border-color: #953b39;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;
}
.control-group.error .input-prepend .add-on,
.control-group.error .input-append .add-on {
	color: #b94a48;
	background-color: #f2dede;
	border-color: #b94a48;
}
.control-group.success .control-label,
.control-group.success .help-block,
.control-group.success .help-inline {
	color: #468847;
}
.control-group.success .checkbox,
.control-group.success .radio,
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
	color: #468847;
}
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
	border-color: #468847;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.success input:focus,
.control-group.success select:focus,
.control-group.success textarea:focus {
	border-color: #356635;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;
}
.control-group.success .input-prepend .add-on,
.control-group.success .input-append .add-on {
	color: #468847;
	background-color: #dff0d8;
	border-color: #468847;
}
.control-group.info .control-label,
.control-group.info .help-block,
.control-group.info .help-inline {
	color: #3a87ad;
}
.control-group.info .checkbox,
.control-group.info .radio,
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
	color: #3a87ad;
}
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
	border-color: #3a87ad;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.info input:focus,
.control-group.info select:focus,
.control-group.info textarea:focus {
	border-color: #2d6987;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;
}
.control-group.info .input-prepend .add-on,
.control-group.info .input-append .add-on {
	color: #3a87ad;
	background-color: #d9edf7;
	border-color: #3a87ad;
}
input:focus:invalid,
textarea:focus:invalid,
select:focus:invalid {
	color: #b94a48;
	border-color: #ee5f5b;
}
input:focus:invalid:focus,
textarea:focus:invalid:focus,
select:focus:invalid:focus {
	border-color: #e9322d;
	-webkit-box-shadow: 0 0 6px #f8b9b7;
	-moz-box-shadow: 0 0 6px #f8b9b7;
	box-shadow: 0 0 6px #f8b9b7;
}
.form-actions {
	padding: 17px 20px 18px;
	margin-top: 18px;
	margin-bottom: 18px;
	background-color: #f5f5f5;
	border-top: 1px solid #e5e5e5;
	*zoom: 1;
}
.form-actions:before,
.form-actions:after {
	display: table;
	content: "";
	line-height: 0;
}
.form-actions:after {
	clear: both;
}
.help-block,
.help-inline {
	color: #595959;
}
.help-block {
	display: block;
	margin-bottom: 9px;
}
.help-inline {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	vertical-align: middle;
	padding-left: 5px;
}
.input-append,
.input-prepend {
	display: inline-block;
	margin-bottom: 9px;
	vertical-align: middle;
	font-size: 0;
	white-space: nowrap;
}
.input-append input,
.input-append select,
.input-append .uneditable-input,
.input-append .dropdown-menu,
.input-append .popover,
.input-prepend input,
.input-prepend select,
.input-prepend .uneditable-input,
.input-prepend .dropdown-menu,
.input-prepend .popover {
	font-size: 13px;
}
.input-append input,
.input-append select,
.input-append .uneditable-input,
.input-prepend input,
.input-prepend select,
.input-prepend .uneditable-input {
	position: relative;
	margin-bottom: 0;
	*margin-left: 0;
	vertical-align: top;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-append input:focus,
.input-append select:focus,
.input-append .uneditable-input:focus,
.input-prepend input:focus,
.input-prepend select:focus,
.input-prepend .uneditable-input:focus {
	z-index: 2;
}
.input-append .add-on,
.input-prepend .add-on {
	display: inline-block;
	width: auto;
	height: 18px;
	min-width: 16px;
	padding: 4px 5px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	font-weight: normal;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	background-color: #eee;
	border: 1px solid #ccc;
}
.input-append .add-on,
.input-append .btn,
.input-append .btn-group > .dropdown-toggle,
.input-prepend .add-on,
.input-prepend .btn,
.input-prepend .btn-group > .dropdown-toggle {
	vertical-align: top;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.input-append .active,
.input-prepend .active {
	background-color: #a9dba9;
	border-color: #46a546;
}
.input-prepend .add-on,
.input-prepend .btn {
	margin-right: -1px;
}
.input-prepend .add-on:first-child,
.input-prepend .btn:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.input-append input,
.input-append select,
.input-append .uneditable-input {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.input-append input + .btn-group .btn:last-child,
.input-append select + .btn-group .btn:last-child,
.input-append .uneditable-input + .btn-group .btn:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-append .add-on,
.input-append .btn,
.input-append .btn-group {
	margin-left: -1px;
}
.input-append .add-on:last-child,
.input-append .btn:last-child,
.input-append .btn-group:last-child > .dropdown-toggle {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-prepend.input-append input,
.input-prepend.input-append select,
.input-prepend.input-append .uneditable-input {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.input-prepend.input-append input + .btn-group .btn,
.input-prepend.input-append select + .btn-group .btn,
.input-prepend.input-append .uneditable-input + .btn-group .btn {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-prepend.input-append .add-on:first-child,
.input-prepend.input-append .btn:first-child {
	margin-right: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.input-prepend.input-append .add-on:last-child,
.input-prepend.input-append .btn:last-child {
	margin-left: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-prepend.input-append .btn-group:first-child {
	margin-left: 0;
}
input.search-query {
	padding-right: 14px;
	padding-right: 4px \9;
	padding-left: 14px;
	padding-left: 4px \9;
	margin-bottom: 0;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.form-search .input-append .search-query,
.form-search .input-prepend .search-query {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.form-search .input-append .search-query {
	-webkit-border-radius: 14px 0 0 14px;
	-moz-border-radius: 14px 0 0 14px;
	border-radius: 14px 0 0 14px;
}
.form-search .input-append .btn {
	-webkit-border-radius: 0 14px 14px 0;
	-moz-border-radius: 0 14px 14px 0;
	border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .search-query {
	-webkit-border-radius: 0 14px 14px 0;
	-moz-border-radius: 0 14px 14px 0;
	border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .btn {
	-webkit-border-radius: 14px 0 0 14px;
	-moz-border-radius: 14px 0 0 14px;
	border-radius: 14px 0 0 14px;
}
.form-search input,
.form-search textarea,
.form-search select,
.form-search .help-inline,
.form-search .uneditable-input,
.form-search .input-prepend,
.form-search .input-append,
.form-inline input,
.form-inline textarea,
.form-inline select,
.form-inline .help-inline,
.form-inline .uneditable-input,
.form-inline .input-prepend,
.form-inline .input-append,
.form-horizontal input,
.form-horizontal textarea,
.form-horizontal select,
.form-horizontal .help-inline,
.form-horizontal .uneditable-input,
.form-horizontal .input-prepend,
.form-horizontal .input-append {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	margin-bottom: 0;
	vertical-align: middle;
}
.form-search .hide,
.form-inline .hide,
.form-horizontal .hide {
	display: none;
}
.form-search label,
.form-inline label,
.form-search .btn-group,
.form-inline .btn-group {
	display: inline-block;
}
.form-search .input-append,
.form-inline .input-append,
.form-search .input-prepend,
.form-inline .input-prepend {
	margin-bottom: 0;
}
.form-search .radio,
.form-search .checkbox,
.form-inline .radio,
.form-inline .checkbox {
	padding-left: 0;
	margin-bottom: 0;
	vertical-align: middle;
}
.form-search .radio input[type="radio"],
.form-search .checkbox input[type="checkbox"],
.form-inline .radio input[type="radio"],
.form-inline .checkbox input[type="checkbox"] {
	float: left;
	margin-right: 3px;
	margin-left: 0;
}
.control-group {
	margin-bottom: 9px;
}
legend + .control-group {
	margin-top: 18px;
	-webkit-margin-top-collapse: separate;
}
.form-horizontal .control-group {
	margin-bottom: 18px;
	*zoom: 1;
}
.form-horizontal .control-group:before,
.form-horizontal .control-group:after {
	display: table;
	content: "";
	line-height: 0;
}
.form-horizontal .control-group:after {
	clear: both;
}
.form-horizontal .control-label {
	float: left;
	width: 160px;
	padding-top: 5px;
	text-align: right;
}
.form-horizontal .controls {
	*display: inline-block;
	*padding-left: 20px;
	margin-left: 180px;
	*margin-left: 0;
}
.form-horizontal .controls:first-child {
	*padding-left: 180px;
}
.form-horizontal .help-block {
	margin-bottom: 0;
}
.form-horizontal input + .help-block,
.form-horizontal select + .help-block,
.form-horizontal textarea + .help-block,
.form-horizontal .uneditable-input + .help-block,
.form-horizontal .input-prepend + .help-block,
.form-horizontal .input-append + .help-block {
	margin-top: 9px;
}
.form-horizontal .form-actions {
	padding-left: 180px;
}
table {
	max-width: 100%;
	background-color: transparent;
	border-collapse: collapse;
	border-spacing: 0;
}
.table {
	width: 100%;
	margin-bottom: 18px;
}
.table th,
.table td {
	padding: 8px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	text-align: left;
	vertical-align: top;
	border-top: 1px solid #ddd;
}
.table th {
	font-weight: bold;
}
.table thead th {
	vertical-align: bottom;
}
.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
	border-top: 0;
}
.table tbody + tbody {
	border-top: 2px solid #ddd;
}
.table .table {
	background-color: #fff;
}
.table-condensed th,
.table-condensed td {
	padding: 4px 5px;
}
.table-bordered {
	border: 1px solid #ddd;
	border-collapse: separate;
	*border-collapse: collapse;
	border-left: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered th,
.table-bordered td {
	border-left: 1px solid #ddd;
}
.table-bordered caption + thead tr:first-child th,
.table-bordered caption + tbody tr:first-child th,
.table-bordered caption + tbody tr:first-child td,
.table-bordered colgroup + thead tr:first-child th,
.table-bordered colgroup + tbody tr:first-child th,
.table-bordered colgroup + tbody tr:first-child td,
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
	border-top: 0;
}
.table-bordered thead:first-child tr:first-child > th:first-child,
.table-bordered tbody:first-child tr:first-child > td:first-child,
.table-bordered tbody:first-child tr:first-child > th:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered thead:first-child tr:first-child > th:last-child,
.table-bordered tbody:first-child tr:first-child > td:last-child,
.table-bordered tbody:first-child tr:first-child > th:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered thead:last-child tr:last-child > th:first-child,
.table-bordered tbody:last-child tr:last-child > td:first-child,
.table-bordered tbody:last-child tr:last-child > th:first-child,
.table-bordered tfoot:last-child tr:last-child > td:first-child,
.table-bordered tfoot:last-child tr:last-child > th:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered thead:last-child tr:last-child > th:last-child,
.table-bordered tbody:last-child tr:last-child > td:last-child,
.table-bordered tbody:last-child tr:last-child > th:last-child,
.table-bordered tfoot:last-child tr:last-child > td:last-child,
.table-bordered tfoot:last-child tr:last-child > th:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
	-webkit-border-bottom-left-radius: 0;
	-moz-border-radius-bottomleft: 0;
	border-bottom-left-radius: 0;
}
.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
	-webkit-border-bottom-right-radius: 0;
	-moz-border-radius-bottomright: 0;
	border-bottom-right-radius: 0;
}
.table-bordered caption + thead tr:first-child th:first-child,
.table-bordered caption + tbody tr:first-child td:first-child,
.table-bordered colgroup + thead tr:first-child th:first-child,
.table-bordered colgroup + tbody tr:first-child td:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-bordered caption + thead tr:first-child th:last-child,
.table-bordered caption + tbody tr:first-child td:last-child,
.table-bordered colgroup + thead tr:first-child th:last-child,
.table-bordered colgroup + tbody tr:first-child td:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
	background-color: #f9f9f9;
}
.table-hover tbody tr:hover > td,
.table-hover tbody tr:hover > th {
	background-color: #f5f5f5;
}
table td[class*="span"],
table th[class*="span"],
.row-fluid table td[class*="span"],
.row-fluid table th[class*="span"] {
	display: table-cell;
	float: none;
	margin-left: 0;
}
.table td.span1,
.table th.span1 {
	float: none;
	width: 44px;
	margin-left: 0;
}
.table td.span2,
.table th.span2 {
	float: none;
	width: 124px;
	margin-left: 0;
}
.table td.span3,
.table th.span3 {
	float: none;
	width: 204px;
	margin-left: 0;
}
.table td.span4,
.table th.span4 {
	float: none;
	width: 284px;
	margin-left: 0;
}
.table td.span5,
.table th.span5 {
	float: none;
	width: 364px;
	margin-left: 0;
}
.table td.span6,
.table th.span6 {
	float: none;
	width: 444px;
	margin-left: 0;
}
.table td.span7,
.table th.span7 {
	float: none;
	width: 524px;
	margin-left: 0;
}
.table td.span8,
.table th.span8 {
	float: none;
	width: 604px;
	margin-left: 0;
}
.table td.span9,
.table th.span9 {
	float: none;
	width: 684px;
	margin-left: 0;
}
.table td.span10,
.table th.span10 {
	float: none;
	width: 764px;
	margin-left: 0;
}
.table td.span11,
.table th.span11 {
	float: none;
	width: 844px;
	margin-left: 0;
}
.table td.span12,
.table th.span12 {
	float: none;
	width: 924px;
	margin-left: 0;
}
.table tbody tr.success > td {
	background-color: #dff0d8;
}
.table tbody tr.error > td {
	background-color: #f2dede;
}
.table tbody tr.warning > td {
	background-color: #fcf8e3;
}
.table tbody tr.info > td {
	background-color: #d9edf7;
}
.table-hover tbody tr.success:hover > td {
	background-color: #d0e9c6;
}
.table-hover tbody tr.error:hover > td {
	background-color: #ebcccc;
}
.table-hover tbody tr.warning:hover > td {
	background-color: #faf2cc;
}
.table-hover tbody tr.info:hover > td {
	background-color: #c4e3f3;
}
.dropup,
.dropdown {
	position: relative;
}
.dropdown-toggle {
	*margin-bottom: -3px;
}
.dropdown-toggle:active,
.open .dropdown-toggle {
	outline: 0;
}
.caret {
	display: inline-block;
	width: 0;
	height: 0;
	vertical-align: top;
	border-top: 4px solid #000;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
	content: "";
}
.dropdown .caret {
	margin-top: 8px;
	margin-left: 2px;
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	list-style: none;
	background-color: #fff;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	*border-right-width: 2px;
	*border-bottom-width: 2px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
}
.dropdown-menu.pull-right {
	right: 0;
	left: auto;
}
.dropdown-menu .divider {
	*width: 100%;
	height: 1px;
	margin: 8px 1px;
	*margin: -5px 0 5px;
	overflow: hidden;
	background-color: #e5e5e5;
	border-bottom: 1px solid #fff;
}
.dropdown-menu > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
    line-height: <?php echo intval(intval($params['menuFontSize'])*1.5); ?>px;
<?php endif; ?>
	color: #333;
	white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus,
.dropdown-submenu:hover > a,
.dropdown-submenu:focus > a {
	text-decoration: none;
	color: #fff;
	background-color: #0081c2;
	background-image: -moz-linear-gradient(top,#08c,#0077b3);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#08c),to(#0077b3));
	background-image: -webkit-linear-gradient(top,#08c,#0077b3);
	background-image: -o-linear-gradient(top,#08c,#0077b3);
	background-image: linear-gradient(to bottom,#08c,#0077b3);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0076b2', GradientType=0);
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
	color: #333;
	text-decoration: none;
	outline: 0;
	background-color: #0081c2;
	background-image: -moz-linear-gradient(top,#08c,#0077b3);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#08c),to(#0077b3));
	background-image: -webkit-linear-gradient(top,#08c,#0077b3);
	background-image: -o-linear-gradient(top,#08c,#0077b3);
	background-image: linear-gradient(to bottom,#08c,#0077b3);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0076b2', GradientType=0);
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
	color: #999;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: default;
}
.open {
	*z-index: 1000;
}
.open > .dropdown-menu {
	display: block;
}
.dropdown-backdrop {
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	z-index: 990;
}
.pull-right > .dropdown-menu {
	right: 0;
	left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
	border-top: 0;
	border-bottom: 4px solid #000;
	content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
	top: auto;
	bottom: 100%;
	margin-bottom: 1px;
}
.dropdown-submenu {
	position: relative;
}
.dropdown-submenu > .dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.dropdown-submenu:hover > .dropdown-menu {
	display: block;
}
.dropup .dropdown-submenu > .dropdown-menu {
	top: auto;
	bottom: 0;
	margin-top: 0;
	margin-bottom: -2px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.dropdown-submenu > a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #cccccc;
	margin-top: 5px;
	margin-right: -10px;
}
.dropdown-submenu:hover > a:after {
	border-left-color: #fff;
}
.dropdown-submenu.pull-left {
	float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
	left: -100%;
	margin-left: 10px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.dropdown .dropdown-menu .nav-header {
	padding-left: 20px;
	padding-right: 20px;
}
.typeahead {
	z-index: 1051;
	margin-top: 2px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.moduletable {
	min-height: 20px;
<?php if (!isNullOrEmpty($params,'modulePaddingSize')) : ?>
	padding: <?php echo $params['modulePaddingSize']; ?>px;
<?php endif; ?>
	margin-bottom: 20px;
<?php if (!isNullOrEmpty($params,'moduleBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'moduleBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['moduleBackgroundColor'],$params['moduleBackgroundOpacity']); ?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['moduleBackgroundColor'],''); ?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'moduleBorderSize') && !isNullOrEmpty($params,'moduleBorderType') && !isNullOrEmpty($params,'moduleBorderColor')) : ?>
	border: <?php echo $params['moduleBorderSize']; ?>px <?php echo $params['moduleBorderType']; ?> <?php echo $params['moduleBorderColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'moduleBackgroundColor') && !isNullOrEmpty($params,'contentBackgroundColor') && ($params['moduleBackgroundColor'] != $params['contentBackgroundColor'])) : ?>
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'moduleTitleIcon')) : ?>
	background-image: url("<?php echo JURI::base()."../../../".$params['moduleTitleIcon']; ?>");
	background-repeat: no-repeat;
<?php if (!isNullOrEmpty($params,'modulePaddingSize')) : ?>
	background-position: top <?php echo $params['modulePaddingSize']; ?>px left <?php echo $params['modulePaddingSize']; ?>px;
<?php endif; ?>
<?php endif; ?>
}
.moduletable blockquote {
	border-color: #ddd;
	border-color: rgba(0,0,0,0.15);
}
.well-large {
	padding: 24px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.well-small {
	padding: 9px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.fade {
	opacity: 0;
	-webkit-transition: opacity .15s linear;
	-moz-transition: opacity .15s linear;
	-o-transition: opacity .15s linear;
	transition: opacity .15s linear;
}
.fade.in {
	opacity: 1;
}
.collapse {
	position: relative;
	height: 0;
	overflow: hidden;
	-webkit-transition: height .35s ease;
	-moz-transition: height .35s ease;
	-o-transition: height .35s ease;
	transition: height .35s ease;
}
.collapse.in {
	height: auto;
}
.close {
	float: right;
	font-size: 20px;
	font-weight: bold;
	line-height: 18px;
	color: #000;
	text-shadow: 0 1px 0 #ffffff;
	opacity: 0.2;
	filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
	opacity: 0.4;
	filter: alpha(opacity=40);
}
button.close {
	padding: 3;
	cursor: pointer;
	background: transparent;
	border: 0;
	-webkit-appearance: none;
}
.btn {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	padding: 4px 12px;
	margin-bottom: 0;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
	font-size: <?php echo $params['templateFontSize']; ?>px;
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
<?php if (!isNullOrEmpty($params,'templateButtonTextColor')) : ?>
	color: <?php echo $params['templateButtonTextColor']; ?>;
<?php else: ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundColor')) : ?>
	color: <?php echo $params['contentBackgroundColor']; ?>;
<?php else: ?>
	color: #333;
<?php endif; ?>
<?php endif; ?>
	text-shadow: 0 1px 1px rgba(255,255,255,0.75);
<?php if (!isNullOrEmpty($params,'templateButtonBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'templateButtonBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['templateButtonBackgroundColor'],$params['templateButtonBackgroundOpacity']); ?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['templateButtonBackgroundColor'],''); ?>;
<?php endif; ?>
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
<?php if (!isNullOrEmpty($params,'templateButtonBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['templateColor'],$params['templateButtonBackgroundOpacity']); ?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['templateColor'],''); ?>;
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
/*
	background-color: #f5f5f5;
	background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
	background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
	background-image: -o-linear-gradient(top,#fff,#e6e6e6);
	background-image: linear-gradient(to bottom,#fff,#e6e6e6);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe5e5e5', GradientType=0);
	*background-color: #e6e6e6;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
*/
	border-color: #e6e6e6 #e6e6e6 #bfbfbf;
<?php if (!isNullOrEmpty($params,'templateButtonBorderColor')) : ?>
	border: 1px solid <?php echo $params['templateButtonBorderColor']; ?>;
<?php else: ?>
	border: 1px solid #bbb;
<?php endif; ?>
	*border: 0;
	border-bottom-color: #a2a2a2;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	*margin-left: .3em;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
}
.btn:hover,
.btn:focus,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
	color: #333;
/*
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
*/
}
.btn:active,
.btn.active {
	background-color: #cccccc \9;
}
.btn:first-child {
	*margin-left: 0;
}
.btn:hover,
.btn:focus {
	color: #333;
	text-decoration: none;
	background-position: 0 -15px;
	-webkit-transition: background-position .1s linear;
	-moz-transition: background-position .1s linear;
	-o-transition: background-position .1s linear;
	transition: background-position .1s linear;
}
.btn:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
.btn.active,
.btn:active {
	background-image: none;
	outline: 0;
	-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
}
.btn.disabled,
.btn[disabled] {
	cursor: default;
	background-image: none;
	opacity: 0.65;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.btn-large {
	padding: 11px 19px;
	font-size: 16.25px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-large [class^="icon-"],
.btn-large [class*=" icon-"] {
	margin-top: 4px;
}
.btn-small {
	padding: 2px 10px;
	font-size: 12px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-small [class^="icon-"],
.btn-small [class*=" icon-"] {
	margin-top: 0;
}
.btn-mini [class^="icon-"],
.btn-mini [class*=" icon-"] {
	margin-top: -1px;
}
.btn-mini {
	padding: 0 6px;
	font-size: 9.75px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-block {
	display: block;
	width: 100%;
	padding-left: 0;
	padding-right: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.btn-block + .btn-block {
	margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
	width: 100%;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
	color: rgba(255,255,255,0.75);
}
.btn-primary {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
/*
	background-color: #006dcc;
	background-image: -moz-linear-gradient(top,#08c,#0044cc);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#08c),to(#0044cc));
	background-image: -webkit-linear-gradient(top,#08c,#0044cc);
	background-image: -o-linear-gradient(top,#08c,#0044cc);
	background-image: linear-gradient(to bottom,#08c,#0044cc);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0043cc', GradientType=0);
	border-color: #0044cc #0044cc #002a80;
	*background-color: #0044cc;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
*/
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
	color: #fff;
/*
	background-color: #0044cc;
	*background-color: #003bb3;
*/
}
.btn-primary:active,
.btn-primary.active {
	background-color: #003399 \9;
}
.btn-warning {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #faa732;
	background-image: -moz-linear-gradient(top,#fbb450,#f89406);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));
	background-image: -webkit-linear-gradient(top,#fbb450,#f89406);
	background-image: -o-linear-gradient(top,#fbb450,#f89406);
	background-image: linear-gradient(to bottom,#fbb450,#f89406);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffab44f', endColorstr='#fff89406', GradientType=0);
	border-color: #f89406 #f89406 #ad6704;
	*background-color: #f89406;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
	color: #fff;
	background-color: #f89406;
	*background-color: #df8505;
}
.btn-warning:active,
.btn-warning.active {
	background-color: #c67605 \9;
}
.btn-danger {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #da4f49;
	background-image: -moz-linear-gradient(top,#ee5f5b,#bd362f);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#bd362f));
	background-image: -webkit-linear-gradient(top,#ee5f5b,#bd362f);
	background-image: -o-linear-gradient(top,#ee5f5b,#bd362f);
	background-image: linear-gradient(to bottom,#ee5f5b,#bd362f);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
	border-color: #bd362f #bd362f #802420;
	*background-color: #bd362f;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
	color: #fff;
	background-color: #bd362f;
	*background-color: #a9302a;
}
.btn-danger:active,
.btn-danger.active {
	background-color: #942a25 \9;
}
.btn-success {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #5bb75b;
	background-image: -moz-linear-gradient(top,#62c462,#51a351);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#51a351));
	background-image: -webkit-linear-gradient(top,#62c462,#51a351);
	background-image: -o-linear-gradient(top,#62c462,#51a351);
	background-image: linear-gradient(to bottom,#62c462,#51a351);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
	border-color: #51a351 #51a351 #387038;
	*background-color: #51a351;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
	color: #fff;
	background-color: #51a351;
	*background-color: #499249;
}
.btn-success:active,
.btn-success.active {
	background-color: #408140 \9;
}
.btn-info {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #49afcd;
	background-image: -moz-linear-gradient(top,#5bc0de,#2f96b4);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#2f96b4));
	background-image: -webkit-linear-gradient(top,#5bc0de,#2f96b4);
	background-image: -o-linear-gradient(top,#5bc0de,#2f96b4);
	background-image: linear-gradient(to bottom,#5bc0de,#2f96b4);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
	border-color: #2f96b4 #2f96b4 #1f6377;
	*background-color: #2f96b4;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
	color: #fff;
	background-color: #2f96b4;
	*background-color: #2a85a0;
}
.btn-info:active,
.btn-info.active {
	background-color: #24748c \9;
}
.btn-inverse {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #363636;
	background-image: -moz-linear-gradient(top,#444,#222);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#444),to(#222));
	background-image: -webkit-linear-gradient(top,#444,#222);
	background-image: -o-linear-gradient(top,#444,#222);
	background-image: linear-gradient(to bottom,#444,#222);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
	border-color: #222 #222 #000000;
	*background-color: #222;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-inverse:hover,
.btn-inverse:focus,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled] {
	color: #fff;
	background-color: #222;
	*background-color: #151515;
}
.btn-inverse:active,
.btn-inverse.active {
	background-color: #090909 \9;
}
button.btn,
input[type="submit"].btn {
	*padding-top: 3px;
	*padding-bottom: 3px;
}
button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
	padding: 0;
	border: 0;
}
button.btn.btn-large,
input[type="submit"].btn.btn-large {
	*padding-top: 7px;
	*padding-bottom: 7px;
}
button.btn.btn-small,
input[type="submit"].btn.btn-small {
	*padding-top: 3px;
	*padding-bottom: 3px;
}
button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
	*padding-top: 1px;
	*padding-bottom: 1px;
}
.btn-link,
.btn-link:active,
.btn-link[disabled] {
	background-color: transparent;
	background-image: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.btn-link {
	border-color: transparent;
	cursor: pointer;
	color: #08c;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-link:hover,
.btn-link:focus {
	color: #005580;
	text-decoration: underline;
	background-color: transparent;
}
.btn-link[disabled]:hover,
.btn-link[disabled]:focus {
	color: #333;
	text-decoration: none;
}
.btn-group {
	position: relative;
	display: inline-block;
	*display: inline;
	*zoom: 1;
	font-size: 0;
	vertical-align: middle;
	white-space: nowrap;
	*margin-left: .3em;
}
.btn-group:first-child {
	*margin-left: 0;
}
.btn-group + .btn-group {
	margin-left: 5px;
}
.btn-toolbar {
	font-size: 0;
	margin-top: 9px;
	margin-bottom: 9px;
}
.btn-toolbar > .btn + .btn,
.btn-toolbar > .btn-group + .btn,
.btn-toolbar > .btn + .btn-group {
	margin-left: 5px;
}
.btn-group > .btn {
	position: relative;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group > .btn + .btn {
	margin-left: -1px;
}
.btn-group > .btn,
.btn-group > .dropdown-menu,
.btn-group > .popover {
	font-size: 13px;
}
.btn-group > .btn-mini {
	font-size: 9.75px;
}
.btn-group > .btn-small {
	font-size: 12px;
}
.btn-group > .btn-large {
	font-size: 16.25px;
}
.btn-group > .btn:first-child {
	margin-left: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group > .btn:last-child,
.btn-group > .dropdown-toggle {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group > .btn.large:first-child {
	margin-left: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group > .btn.large:last-child,
.btn-group > .large.dropdown-toggle {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active {
	z-index: 2;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
	outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
	padding-left: 8px;
	padding-right: 8px;
	-webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	*padding-top: 5px;
	*padding-bottom: 5px;
}
.btn-group > .btn-mini + .dropdown-toggle {
	padding-left: 5px;
	padding-right: 5px;
	*padding-top: 2px;
	*padding-bottom: 2px;
}
.btn-group > .btn-small + .dropdown-toggle {
	*padding-top: 5px;
	*padding-bottom: 4px;
}
.btn-group > .btn-large + .dropdown-toggle {
	padding-left: 12px;
	padding-right: 12px;
	*padding-top: 7px;
	*padding-bottom: 7px;
}
.btn-group.open .dropdown-toggle {
	background-image: none;
	-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
}
.btn-group.open .btn.dropdown-toggle {
	background-color: #e6e6e6;
}
.btn-group.open .btn-primary.dropdown-toggle {
	background-color: #0044cc;
}
.btn-group.open .btn-warning.dropdown-toggle {
	background-color: #f89406;
}
.btn-group.open .btn-danger.dropdown-toggle {
	background-color: #bd362f;
}
.btn-group.open .btn-success.dropdown-toggle {
	background-color: #51a351;
}
.btn-group.open .btn-info.dropdown-toggle {
	background-color: #2f96b4;
}
.btn-group.open .btn-inverse.dropdown-toggle {
	background-color: #222;
}
.btn .caret {
	margin-top: 8px;
	margin-left: 0;
}
.btn-large .caret {
	margin-top: 6px;
}
.btn-large .caret {
	border-left-width: 5px;
	border-right-width: 5px;
	border-top-width: 5px;
}
.btn-mini .caret,
.btn-small .caret {
	margin-top: 8px;
}
.dropup .btn-large .caret {
	border-bottom-width: 5px;
}
.btn-primary .caret,
.btn-warning .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.btn-group-vertical {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
.btn-group-vertical > .btn {
	display: block;
	float: none;
	max-width: 100%;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group-vertical > .btn + .btn {
	margin-left: 0;
	margin-top: -1px;
}
.btn-group-vertical > .btn:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.btn-group-vertical > .btn:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.btn-group-vertical > .btn-large:first-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.btn-group-vertical > .btn-large:last-child {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.alert {
	padding: 8px 35px 8px 14px;
	margin-bottom: 18px;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	background-color: #fcf8e3;
	border: 1px solid #fbeed5;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.alert,
.alert h4 {
	color: #c09853;
}
.alert h4 {
	margin: 0;
}
.alert .close {
	position: relative;
	top: -2px;
	right: -21px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
}
.alert-success {
	background-color: #dff0d8;
	border-color: #d6e9c6;
	color: #468847;
}
.alert-success h4 {
	color: #468847;
}
.alert-danger,
.alert-error {
	background-color: #f2dede;
	border-color: #eed3d7;
	color: #b94a48;
}
.alert-danger h4,
.alert-error h4 {
	color: #b94a48;
}
.alert-info {
	background-color: #d9edf7;
	border-color: #bce8f1;
	color: #3a87ad;
}
.alert-info h4 {
	color: #3a87ad;
}
.alert-block {
	padding-top: 14px;
	padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
	margin-bottom: 0;
}
.alert-block p + p {
	margin-top: 5px;
}
.nav {
<?php if (isset($params['menuType']) && ($params['menuType'] != "block")) : ?>
	margin-left: 5px;
<?php else: ?>
	margin-left: 0;
<?php endif; ?>
	margin-bottom: 18px;
	list-style: none;
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
	font-size: <?php echo $params['menuFontSize']; ?>px;
<?php endif; ?>
}
.navselect {
	display: none;
}
.nav > li > a {
	display: block;
	text-decoration: none;
<?php if (!isNullOrEmpty($params,'menuEntryForegroundColor')) : ?>
	color: <?php echo $params['menuEntryForegroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuEntryBackgroundColor')) : ?>
	background-color: <?php echo $params['menuEntryBackgroundColor']; ?>;
<?php endif; ?>
}
.nav > li > a:hover,
.nav > li > a:focus {
	text-decoration: none;
<?php if (!isNullOrEmpty($params,'menuEntryForegroundColor')) : ?>
	color: <?php echo $params['menuEntryForegroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuEntryFocusBackgroundColor')) : ?>
	background-color: <?php echo $params['menuEntryFocusBackgroundColor']; ?>;
<?php endif; ?>
}
.nav > li > a > img {
	max-width: none;
}
.nav > .pull-right {
	float: right;
}
.nav-header {
	display: block;
	padding: 3px 15px;
	font-size: 11px;
	font-weight: bold;
	line-height: 18px;
	color: #999;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	text-transform: uppercase;
}
.nav li + .nav-header {
	margin-top: 9px;
}
.nav-list {
	padding-left: 15px;
	padding-right: 15px;
	margin-bottom: 0;
}
.nav-list > li > a,
.nav-list .nav-header {
	margin-left: -15px;
	margin-right: -15px;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}
.nav-list > li > a {
	padding: 3px 15px;
}
.nav-list > .active > a,
.nav-list > .active > a:hover,
.nav-list > .active > a:focus {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
	background-color: #08c;
}
.nav-list [class^="icon-"],
.nav-list [class*=" icon-"] {
	margin-right: 2px;
}
.nav-list .divider {
	*width: 100%;
	height: 1px;
	margin: 8px 1px;
	*margin: -5px 0 5px;
	overflow: hidden;
	background-color: #e5e5e5;
	border-bottom: 1px solid #fff;
}
.nav-tabs,
.nav-pills {
	*zoom: 1;
}
.nav-tabs:before,
.nav-tabs:after,
.nav-pills:before,
.nav-pills:after {
	display: table;
	content: "";
	line-height: 0;
}
.nav-tabs:after,
.nav-pills:after {
	clear: both;
}
.nav-tabs > li,
.nav-pills > li {
	float: left;
<?php if (isset($params['menuType']) && ($params['menuType'] != "block")) : ?>
	color: #ffffff;
<?php endif; ?>
}
.nav-tabs > li > a,
.nav-pills > li > a {
<?php if (!isNullOrEmpty($params,'menuEntryHorizontalSpacing')) : ?>
	padding-right: <?php echo $params['menuEntryHorizontalSpacing'];?>px;
	padding-left: <?php echo $params['menuEntryHorizontalSpacing'];?>px;
<?php endif; ?>
	margin-right: 2px;
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
    line-height: <?php echo intval($params['menuFontSize'])+2; ?>px;
<?php endif; ?>
	color: #ffffff;
}
.nav-pills > li > a:hover {
<?php if (isset($params['menuType']) && ($params['menuType'] != "block")) : ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	color: <?php echo $params['templateColor'];?>;
<?php endif; ?>
<?php endif; ?>
}
.nav-tabs {
	border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
	margin-bottom: -1px;
}
.nav-tabs > li > a {
	padding-top: 8px;
	padding-bottom: 8px;
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
    line-height: <?php echo intval(intval($params['menuFontSize'])*1.5); ?>px;
<?php endif; ?>
	border: 1px solid transparent;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.nav-tabs > li > a:hover,
.nav-tabs > li > a:focus {
	border-color: #eee #eee #ddd;
}
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus {
	color: #555;
	background-color: #fff;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
	cursor: default;
}
.nav-pills > li > a {
	padding-top: 8px;
	padding-bottom: 8px;
	margin-top: 2px;
<?php if (!isset($params['menuType']) || ($params['menuType'] != "tab")) : ?>
	margin-bottom: 2px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['menuEntryRadius']; ?>px <?php echo $params['menuEntryRadius']; ?>px 0px 0px;
	-moz-border-radius: <?php echo $params['menuEntryRadius']; ?>px <?php echo $params['menuEntryRadius']; ?>px 0px 0px;
	border-radius: <?php echo $params['menuEntryRadius']; ?>px <?php echo $params['menuEntryRadius']; ?>px 0px 0px;
<?php endif; ?>
<?php endif; ?>
}
.nav-pills > .active > a,
.nav-pills > .active > a:hover,
.nav-pills > .active > a:focus {
	color: #fff;
	background-color: #08c;
}
.nav-stacked > li {
	float: none;
}
.nav-stacked > li > a {
	margin-right: 0;
}
.nav-tabs.nav-stacked {
	border-bottom: 0;
}
.nav-tabs.nav-stacked > li > a {
	border: 1px solid #ddd;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.nav-tabs.nav-stacked > li:first-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadiu']; ?>px;
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.nav-tabs.nav-stacked > li:last-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > a:focus {
	border-color: #ddd;
	z-index: 2;
}
.nav-pills.nav-stacked > li > a {
	margin-bottom: 3px;
}
.nav-pills.nav-stacked > li:last-child > a {
	margin-bottom: 1px;
}
.nav-tabs .dropdown-menu {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.nav-pills .dropdown-menu {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.nav .dropdown-toggle .caret {
	border-top-color: #08c;
	border-bottom-color: #08c;
	margin-top: 6px;
}
.nav .dropdown-toggle:hover .caret,
.nav .dropdown-toggle:focus .caret {
	border-top-color: #005580;
	border-bottom-color: #005580;
}
.nav-tabs .dropdown-toggle .caret {
	margin-top: 8px;
}
.nav .active .dropdown-toggle .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.nav-tabs .active .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.nav > .dropdown.active > a:hover,
.nav > .dropdown.active > a:focus {
	cursor: pointer;
}
.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > li.dropdown.open.active > a:hover,
.nav > li.dropdown.open.active > a:focus {
	color: #fff;
	background-color: #999;
	border-color: #999;
}
.nav li.dropdown.open .caret,
.nav li.dropdown.open.active .caret,
.nav li.dropdown.open a:hover .caret,
.nav li.dropdown.open a:focus .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
	opacity: 1;
	filter: alpha(opacity=100);
}
.tabs-stacked .open > a:hover,
.tabs-stacked .open > a:focus {
	border-color: #999;
}
.tabbable {
	*zoom: 1;
}
.tabbable:before,
.tabbable:after {
	display: table;
	content: "";
	line-height: 0;
}
.tabbable:after {
	clear: both;
}
.tab-content {
	overflow: auto;
}
.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
	border-bottom: 0;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane {
	display: none;
}
.tab-content > .active,
.pill-content > .active {
	display: block;
}
.tabs-below > .nav-tabs {
	border-top: 1px solid #ddd;
}
.tabs-below > .nav-tabs > li {
	margin-top: -1px;
	margin-bottom: 0;
}
.tabs-below > .nav-tabs > li > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
	border-bottom-color: transparent;
	border-top-color: #ddd;
}
.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
	border-color: transparent #ddd #ddd #ddd;
}
.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
	float: none;
}
.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
	min-width: 74px;
	margin-right: 0;
	margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
	float: left;
	margin-right: 19px;
	border-right: 1px solid #ddd;
}
.tabs-left > .nav-tabs > li > a {
	margin-right: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
	border-color: #eee #ddd #eee #eee;
}
.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
	border-color: #ddd transparent #ddd #ddd;
	*border-right-color: #fff;
}
.tabs-right > .nav-tabs {
	float: right;
	margin-left: 19px;
	border-left: 1px solid #ddd;
}
.tabs-right > .nav-tabs > li > a {
	margin-left: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
	border-color: #eee #eee #eee #ddd;
}
.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
	border-color: #ddd #ddd #ddd transparent;
	*border-left-color: #fff;
}
.nav > .disabled > a {
	color: #999;
}
.nav > .disabled > a:hover,
.nav > .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	cursor: default;
}
.navbar {
	overflow: visible;
	*position: relative;
	*z-index: 2;
}
.navbar-inner {
<?php if (!isset($params['menuType']) || ($params['menuType'] != "tab")) : ?>
	min-height: 40px;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'menuBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],$params['menuBackgroundOpacity']);?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],'');?>;
<?php endif; ?>
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	background-color: <?php echo $params['templateColor'];?>; /*template color*/
<?php endif; ?>
<?php endif; ?>
	background-image: -moz-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#ffffff),to(#f2f2f2));
	background-image: -webkit-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: -o-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: linear-gradient(to bottom,#ffffff,#f2f2f2);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
<?php if ((!isset($params['menuType']) || ($params['menuType'] != "tab")) && !empty($params['menuBackgroundColor']) && ($params['bodyBackgroundColor'] != $params['menuBackgroundColor'])) : ?>
	-webkit-box-shadow: 0 1px 4px rgba(0,0,0,0.065);
	-moz-box-shadow: 0 1px 4px rgba(0,0,0,0.065);
	box-shadow: 0 1px 4px rgba(0,0,0,0.065);
<?php endif; ?>
	*zoom: 1;
}
.navbar-inner:before,
.navbar-inner:after {
	display: table;
	content: "";
	line-height: 0;
}
.navbar-inner:after {
	clear: both;
}
.navbar .container {
	width: auto;
}
.nav-collapse.collapse {
	height: auto;
	overflow: visible;
}
.navbar .brand {
	float: left;
	display: block;
	padding: 11px 20px 11px;
	margin-left: -20px;
	font-size: 20px;
	font-weight: 200;
	color: #555;
	text-shadow: 0 1px 0 #ffffff;
}
.navbar .brand:hover,
.navbar .brand:focus {
	text-decoration: none;
}
.navbar-text {
	margin-bottom: 0;
	line-height: 40px;
	color: #555;
}
.navbar-link {
	color: #555;
}
.navbar-link:hover,
.navbar-link:focus {
	color: #333;
}
.navbar .divider-vertical {
	height: 40px;
	margin: 0 9px;
	border-left: 1px solid #f2f2f2;
	border-right: 1px solid #ffffff;
}
.navbar .btn,
.navbar .btn-group {
	margin-top: 5px;
}
.navbar .btn-group .btn,
.navbar .input-prepend .btn,
.navbar .input-append .btn,
.navbar .input-prepend .btn-group,
.navbar .input-append .btn-group {
	margin-top: 0;
}
.navbar-form {
	margin-bottom: 0;
	*zoom: 1;
}
.navbar-form:before,
.navbar-form:after {
	display: table;
	content: "";
	line-height: 0;
}
.navbar-form:after {
	clear: both;
}
.navbar-form input,
.navbar-form select,
.navbar-form .radio,
.navbar-form .checkbox {
	margin-top: 5px;
}
.navbar-form input,
.navbar-form select,
.navbar-form .btn {
	display: inline-block;
	margin-bottom: 0;
}
.navbar-form input[type="image"],
.navbar-form input[type="checkbox"],
.navbar-form input[type="radio"] {
	margin-top: 3px;
}
.navbar-form .input-append,
.navbar-form .input-prepend {
	margin-top: 5px;
	white-space: nowrap;
}
.navbar-form .input-append input,
.navbar-form .input-prepend input {
	margin-top: 0;
}
.navbar-search {
	position: relative;
	float: left;
	margin-top: 5px;
	margin-bottom: 0;
}
.navbar-search .search-query {
	margin-bottom: 0;
	padding: 4px 14px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 13px;
	font-weight: normal;
	line-height: 1;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.navbar-static-top {
	position: static;
	margin-bottom: 0;
}
.navbar-static-top .navbar-inner {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.navbar-fixed-top,
.navbar-fixed-bottom {
	position: fixed;
	right: 0;
	left: 0;
	z-index: 1030;
	margin-bottom: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
	border-width: 0 0 1px;
}
.navbar-fixed-bottom .navbar-inner {
	border-width: 1px 0 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-fixed-bottom .navbar-inner {
	padding-left: 0;
	padding-right: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
	width: 940px;
}
.navbar-fixed-top {
	top: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
	-webkit-box-shadow: 0 1px 10px rgba(0,0,0,.1);
	-moz-box-shadow: 0 1px 10px rgba(0,0,0,.1);
	box-shadow: 0 1px 10px rgba(0,0,0,.1);
}
.navbar-fixed-bottom {
	bottom: 0;
}
.navbar-fixed-bottom .navbar-inner {
	-webkit-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
	-moz-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
	box-shadow: 0 -1px 10px rgba(0,0,0,.1);
}
.navbar .nav {
	position: relative;
	left: 0;
	display: block;
	float: left;
	margin: 0 10px 0 0;
}
.navbar .nav.pull-right {
	float: right;
	margin-right: 0;
}
.navbar .nav > li {
	float: left;
}
.navbar .nav > li > a {
	float: none;
	padding: 11px 15px 11px;
<?php if (!isNullOrEmpty($params,'menuEntryForegroundColor')) : ?>
	color: <?php echo $params['menuEntryForegroundColor'];?>;
<?php endif; ?>
	text-decoration: none;
}
.navbar .nav .dropdown-toggle .caret {
	margin-top: 8px;
}
.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
<?php if (!isNullOrEmpty($params,'menuEntryHoverForegroundColor')) : ?>
	background-color: <?php echo $params['menuEntryHoverForegroundColor'];?>;
<?php endif; ?>
	text-decoration: none;
<?php if (!isNullOrEmpty($params,'menuEntryHoverBackgroundColor')) : ?>
	background-color: <?php echo $params['menuEntryHoverBackgroundColor'];?>;
<?php endif; ?>
}
.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
<?php if (!isNullOrEmpty($params,'menuEntryFocusForegroundColor')) : ?>
	color: <?php echo $params['menuEntryFocusForegroundColor'];?>;
<?php endif; ?>
	text-decoration: none;
<?php if (!isNullOrEmpty($params,'menuEntryFocusBackgroundColor')) : ?>
	background-color: <?php echo $params['menuEntryFocusBackgroundColor'];?>;
<?php endif; ?>
<?php if (!isset($params['menuType']) || ($params['menuType'] != "tab")) : ?>
	-webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
	-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
	box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
<?php endif; ?>
}
.navbar .btn-navbar {
	display: none;
<?php if (isset($params['menuMobileType']) && ($params['menuMobileType'] == "nav-btn-left")) : ?>
	float: left;
<?php endif; ?>
<?php if (isset($params['menuMobileType']) && ($params['menuMobileType'] == "nav-btn-right")) : ?>
	float: right;
<?php endif; ?>
	padding: 7px 10px;
	margin-left: 5px;
	margin-right: 5px;
<?php if (!isNullOrEmpty($params,'menuEntryForegroundColor')) : ?>
	color: <?php echo $params['menuEntryForegroundColor'];?>;
	border-color: <?php echo $params['menuEntryForegroundColor'];?>;
<?php endif; ?>
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
<?php if (!isNullOrEmpty($params,'menuBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'menuBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],$params['menuBackgroundOpacity']);?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],"");?>;
<?php endif; ?>
<?php endif; ?>
	box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);
}
.navbar .btn-navbar:hover,
.navbar .btn-navbar:focus,
.navbar .btn-navbar:active,
.navbar .btn-navbar.active,
.navbar .btn-navbar.disabled,
.navbar .btn-navbar[disabled] {
	color: #fff;
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
}
.navbar .btn-navbar:active,
.navbar .btn-navbar.active {
	background-color: #cccccc \9;
}
.navbar .btn-navbar .icon-bar {
	display: block;
	width: 18px;
	height: 2px;
	background-color: #f5f5f5;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.25);
	-moz-box-shadow: 0 1px 0 rgba(0,0,0,0.25);
	box-shadow: 0 1px 0 rgba(0,0,0,1);
}
.btn-navbar .icon-bar + .icon-bar {
	margin-top: 3px;
}
.navbar .nav > li > .dropdown-menu:before {
	content: '';
	display: inline-block;
	border-left: 7px solid transparent;
	border-right: 7px solid transparent;
	border-bottom: 7px solid #ccc;
	border-bottom-color: rgba(0,0,0,0.2);
	position: absolute;
	top: -7px;
	left: 9px;
}
.navbar .nav > li > .dropdown-menu:after {
	content: '';
	display: inline-block;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #fff;
	position: absolute;
	top: -6px;
	left: 10px;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
	border-top: 7px solid #ccc;
	border-top-color: rgba(0,0,0,0.2);
	border-bottom: 0;
	bottom: -7px;
	top: auto;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:after {
	border-top: 6px solid #fff;
	border-bottom: 0;
	bottom: -6px;
	top: auto;
}
.navbar .nav li.dropdown > a:hover .caret,
.navbar .nav li.dropdown > a:focus .caret {
	border-top-color: #333;
	border-bottom-color: #333;
}
.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
	background-color: #e6e6e6;
	color: #555;
}
.navbar .nav li.dropdown > .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.navbar .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.navbar .pull-right > li > .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right {
	left: auto;
	right: 0;
}
.navbar .pull-right > li > .dropdown-menu:before,
.navbar .nav > li > .dropdown-menu.pull-right:before {
	left: auto;
	right: 12px;
}
.navbar .pull-right > li > .dropdown-menu:after,
.navbar .nav > li > .dropdown-menu.pull-right:after {
	left: auto;
	right: 13px;
}
.navbar .pull-right > li > .dropdown-menu .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
	left: auto;
	right: 100%;
	margin-left: 0;
	margin-right: -1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.navbar-inverse .navbar-inner {
	background-color: #1b1b1b;
	background-image: -moz-linear-gradient(top,#222222,#111111);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#222222),to(#111111));
	background-image: -webkit-linear-gradient(top,#222222,#111111);
	background-image: -o-linear-gradient(top,#222222,#111111);
	background-image: linear-gradient(to bottom,#222222,#111111);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);
	border-color: #252525;
}
.navbar-inverse .brand,
.navbar-inverse .nav > li > a {
	color: #999;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
}
.navbar-inverse .brand:hover,
.navbar-inverse .brand:focus,
.navbar-inverse .nav > li > a:hover,
.navbar-inverse .nav > li > a:focus {
	color: #fff;
}
.navbar-inverse .brand {
	color: #999;
}
.navbar-inverse .navbar-text {
	color: #999;
}
.navbar-inverse .nav > li > a:focus,
.navbar-inverse .nav > li > a:hover {
	background-color: transparent;
	color: #fff;
}
.navbar-inverse .nav .active > a,
.navbar-inverse .nav .active > a:hover,
.navbar-inverse .nav .active > a:focus {
	color: #fff;
	background-color: #111111;
}
.navbar-inverse .navbar-link {
	color: #999;
}
.navbar-inverse .navbar-link:hover,
.navbar-inverse .navbar-link:focus {
	color: #fff;
}
.navbar-inverse .divider-vertical {
	border-left-color: #111111;
	border-right-color: #222222;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle {
	background-color: #111111;
	color: #fff;
}
.navbar-inverse .nav li.dropdown > a:hover .caret,
.navbar-inverse .nav li.dropdown > a:focus .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.navbar-inverse .nav li.dropdown > .dropdown-toggle .caret {
	border-top-color: #999;
	border-bottom-color: #999;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.navbar-inverse .navbar-search .search-query {
	color: #fff;
	background-color: #515151;
	border-color: #111111;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	-webkit-transition: none;
	-moz-transition: none;
	-o-transition: none;
	transition: none;
}
.navbar-inverse .navbar-search .search-query:-moz-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query:-ms-input-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query::-webkit-input-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query:focus,
.navbar-inverse .navbar-search .search-query.focused {
	padding: 5px 15px;
	color: #333;
	text-shadow: 0 1px 0 #fff;
	background-color: #fff;
	border: 0;
	-webkit-box-shadow: 0 0 3px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 0 3px rgba(0,0,0,0.15);
	box-shadow: 0 0 3px rgba(0,0,0,0.15);
	outline: 0;
}
.navbar-inverse .btn-navbar {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #0e0e0e;
	background-image: -moz-linear-gradient(top,#151515,#040404);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#151515),to(#040404));
	background-image: -webkit-linear-gradient(top,#151515,#040404);
	background-image: -o-linear-gradient(top,#151515,#040404);
	background-image: linear-gradient(to bottom,#151515,#040404);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff151515', endColorstr='#ff040404', GradientType=0);
	border-color: #040404 #040404 #000000;
	*background-color: #040404;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.navbar-inverse .btn-navbar:hover,
.navbar-inverse .btn-navbar:focus,
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active,
.navbar-inverse .btn-navbar.disabled,
.navbar-inverse .btn-navbar[disabled] {
	color: #fff;
	background-color: #040404;
	*background-color: #000000;
}
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active {
	background-color: #000000 \9;
}
.navbar-inner,
.nav-list > .active > a,
.nav-list > .active > a:hover,
.dropdown-menu li > a:hover,
.dropdown-menu
.active > a,
.dropdown-menu
.active > a:hover,
.nav-pills >
.active > a,
.nav-pills >
.active > a:hover {
<?php if (!isNullOrEmpty($params,'menuBackgroundColor')) : ?>
	background: <?php echo $params['menuBackgroundColor'];?>;
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	background: <?php echo $params['templateColor'];?>;
<?php endif; ?>
<?php endif; ?>
}
.breadcrumb {
	padding: 8px 15px;
	margin: 0 0 18px;
	list-style: none;
	background-color: #f5f5f5;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.breadcrumb > li {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	text-shadow: 0 1px 0 #fff;
}
.breadcrumb > li > .divider {
	padding: 0 5px;
	color: #ccc;
}
.breadcrumb > .active {
	color: #999;
}
.pagination {
	margin: 18px 0;
}
.pagination ul {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	margin-left: 0;
	margin-bottom: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}
.pagination ul > li {
	display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
	float: left;
	padding: 4px 12px;
	line-height: 18px;
	text-decoration: none;
	background-color: #fff;
	border: 1px solid #ddd;
	border-left-width: 0;
}
.pagination ul > li > a:hover,
.pagination ul > li > a:focus,
.pagination ul > .active > a,
.pagination ul > .active > span {
	background-color: #f5f5f5;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
	color: #999;
	cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover,
.pagination ul > .disabled > a:focus {
	color: #999;
	background-color: transparent;
	cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
	border-left-width: 1px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination-centered {
	text-align: center;
}
.pagination-right {
	text-align: right;
}
.pagination-large ul > li > a,
.pagination-large ul > li > span {
	padding: 11px 19px;
	font-size: 16.25px;
}
.pagination-large ul > li:first-child > a,
.pagination-large ul > li:first-child > span {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination-large ul > li:last-child > a,
.pagination-large ul > li:last-child > span {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination-mini ul > li:first-child > a,
.pagination-mini ul > li:first-child > span,
.pagination-small ul > li:first-child > a,
.pagination-small ul > li:first-child > span {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination-mini ul > li:last-child > a,
.pagination-mini ul > li:last-child > span,
.pagination-small ul > li:last-child > a,
.pagination-small ul > li:last-child > span {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topright: <?php echo $params['templateRadius']; ?>px;
	border-top-right-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomright: <?php echo $params['templateRadius']; ?>px;
	border-bottom-right-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.pagination-small ul > li > a,
.pagination-small ul > li > span {
	padding: 2px 10px;
	font-size: 12px;
}
.pagination-mini ul > li > a,
.pagination-mini ul > li > span {
	padding: 0 6px;
	font-size: 9.75px;
}
.pager {
	margin: 18px 0;
	list-style: none;
	text-align: center;
	*zoom: 1;
}
.pager:before,
.pager:after {
	display: table;
	content: "";
	line-height: 0;
}
.pager:after {
	clear: both;
}
.pager li {
	display: inline;
}
.pager li > a,
.pager li > span {
	display: inline-block;
	padding: 5px 14px;
	background-color: #fff;
	border: 1px solid #ddd;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
	text-decoration: none;
	background-color: #f5f5f5;
}
.pager .next > a,
.pager .next > span {
	float: right;
}
.pager .previous > a,
.pager .previous > span {
	float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
	color: #999;
	background-color: #fff;
	cursor: default;
}
.modal-backdrop {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1040;
	background-color: #000;
}
.modal-backdrop.fade {
	opacity: 0;
}
.modal-backdrop,
.modal-backdrop.fade.in {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.modal-header {
	padding: 9px 15px;
	border-bottom: 1px solid #eee;
}
.modal-header .close {
	margin-top: 2px;
}
.modal-header h3 {
	margin: 0;
	line-height: 30px;
}
.modal-body {
	position: relative;
	overflow-y: auto;
	max-height: 400px;
	padding: 15px;
}
.modal-body iframe {
	max-height: 390px;
	border: 0 !important;
}
.modal-form {
	margin-bottom: 0;
}
.modal-footer {
	padding: 14px 15px 15px;
	margin-bottom: 0;
	text-align: right;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
	border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: inset 0 1px 0 #fff;
	-moz-box-shadow: inset 0 1px 0 #fff;
	box-shadow: inset 0 1px 0 #fff;
	*zoom: 1;
}
.modal-footer:before,
.modal-footer:after {
	display: table;
	content: "";
	line-height: 0;
}
.modal-footer:after {
	clear: both;
}
.modal-footer .btn + .btn {
	margin-left: 5px;
	margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
	margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
	margin-left: 0;
}
.tooltip {
	position: absolute;
	z-index: 1030;
	display: block;
	visibility: visible;
	font-size: 11px;
	line-height: 1.4;
	opacity: 0;
	filter: alpha(opacity=0);
}
.tooltip.in {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.tooltip.top {
	margin-top: -3px;
	padding: 5px 0;
}
.tooltip.right {
	margin-left: 3px;
	padding: 0 5px;
}
.tooltip.bottom {
	margin-top: 3px;
	padding: 5px 0;
}
.tooltip.left {
	margin-left: -3px;
	padding: 0 5px;
}
.tooltip-inner {
	max-width: 200px;
	padding: 8px;
	color: #fff;
	text-align: center;
	text-decoration: none;
	background-color: #000;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.tooltip-arrow {
	position: absolute;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
}
.tooltip.top .tooltip-arrow {
	bottom: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 5px 5px 0;
	border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
	top: 50%;
	left: 0;
	margin-top: -5px;
	border-width: 5px 5px 5px 0;
	border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
	top: 50%;
	right: 0;
	margin-top: -5px;
	border-width: 5px 0 5px 5px;
	border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
	top: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 0 5px 5px;
	border-bottom-color: #000;
}
.popover {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1010;
	display: none;
	max-width: 276px;
	padding: 1px;
	text-align: left;
	background-color: #fff;
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	white-space: normal;
}
.popover.top {
	margin-top: -10px;
}
.popover.right {
	margin-left: 10px;
}
.popover.bottom {
	margin-top: 10px;
}
.popover.left {
	margin-left: -10px;
}
.popover-title {
	margin: 0;
	padding: 8px 14px;
	font-size: 14px;
	font-weight: normal;
	line-height: 18px;
	background-color: #f7f7f7;
	border-bottom: 1px solid #ebebeb;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.popover-title:empty {
	display: none;
}
.popover-content {
	padding: 9px 14px;
}
.popover .arrow,
.popover .arrow:after {
	position: absolute;
	display: block;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
}
.popover .arrow {
	border-width: 11px;
}
.popover .arrow:after {
	border-width: 10px;
	content: "";
}
.popover.top .arrow {
	left: 50%;
	margin-left: -11px;
	border-bottom-width: 0;
	border-top-color: #999;
	border-top-color: rgba(0,0,0,0.25);
	bottom: -11px;
}
.popover.top .arrow:after {
	bottom: 1px;
	margin-left: -10px;
	border-bottom-width: 0;
	border-top-color: #fff;
}
.popover.right .arrow {
	top: 50%;
	left: -11px;
	margin-top: -11px;
	border-left-width: 0;
	border-right-color: #999;
	border-right-color: rgba(0,0,0,0.25);
}
.popover.right .arrow:after {
	left: 1px;
	bottom: -10px;
	border-left-width: 0;
	border-right-color: #fff;
}
.popover.bottom .arrow {
	left: 50%;
	margin-left: -11px;
	border-top-width: 0;
	border-bottom-color: #999;
	border-bottom-color: rgba(0,0,0,0.25);
	top: -11px;
}
.popover.bottom .arrow:after {
	top: 1px;
	margin-left: -10px;
	border-top-width: 0;
	border-bottom-color: #fff;
}
.popover.left .arrow {
	top: 50%;
	right: -11px;
	margin-top: -11px;
	border-right-width: 0;
	border-left-color: #999;
	border-left-color: rgba(0,0,0,0.25);
}
.popover.left .arrow:after {
	right: 1px;
	border-right-width: 0;
	border-left-color: #fff;
	bottom: -10px;
}
.thumbnails {
	margin-left: -20px;
	list-style: none;
	*zoom: 1;
}
.thumbnails:before,
.thumbnails:after {
	display: table;
	content: "";
	line-height: 0;
}
.thumbnails:after {
	clear: both;
}
.row-fluid .thumbnails {
	margin-left: 0;
}
.thumbnails > li {
	float: left;
	margin-bottom: 18px;
	margin-left: 20px;
}
.thumbnail {
	display: block;
	padding: 4px;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
	border: 1px solid #ddd;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
a.thumbnail:hover,
a.thumbnail:focus {
	border-color: #08c;
	-webkit-box-shadow: 0 1px 4px rgba(0,105,214,0.25);
	-moz-box-shadow: 0 1px 4px rgba(0,105,214,0.25);
	box-shadow: 0 1px 4px rgba(0,105,214,0.25);
}
.thumbnail > img {
	display: block;
	max-width: 100%;
	margin-left: auto;
	margin-right: auto;
}
.thumbnail .caption {
	padding: 9px;
	color: #555;
}
.label,
.badge {
	display: inline-block;
	padding: 2px 4px;
	font-size: 10.998px;
	font-weight: bold;
	line-height: 14px;
	color: #fff;
	vertical-align: baseline;
	white-space: nowrap;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #999;
}
.label {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.badge {
	padding-left: 9px;
	padding-right: 9px;
	-webkit-border-radius: 9px;
	-moz-border-radius: 9px;
	border-radius: 9px;
}
.label:empty,
.badge:empty {
	display: none;
}
a.label:hover,
a.label:focus,
a.badge:hover,
a.badge:focus {
	color: #fff;
	text-decoration: none;
	cursor: pointer;
}
.label-important,
.badge-important {
	background-color: #b94a48;
}
.label-important[href],
.badge-important[href] {
	background-color: #953b39;
}
.label-warning,
.badge-warning {
	background-color: #f89406;
}
.label-warning[href],
.badge-warning[href] {
	background-color: #c67605;
}
.label-success,
.badge-success {
	background-color: #468847;
}
.label-success[href],
.badge-success[href] {
	background-color: #356635;
}
.label-info,
.badge-info {
	background-color: #3a87ad;
}
.label-info[href],
.badge-info[href] {
	background-color: #2d6987;
}
.label-inverse,
.badge-inverse {
	background-color: #333;
}
.label-inverse[href],
.badge-inverse[href] {
	background-color: #1a1a1a;
}
.btn .label,
.btn .badge {
	position: relative;
	top: -1px;
}
.btn-mini .label,
.btn-mini .badge {
	top: 0;
}
@-webkit-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-moz-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-ms-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-o-keyframes progress-bar-stripes {
	from {
		background-position: 0 0;
	}
	to {
		background-position: 40px 0;
	}
}
@keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
.progress {
	overflow: hidden;
	height: 18px;
	margin-bottom: 18px;
	background-color: #f7f7f7;
	background-image: -moz-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#f5f5f5),to(#f9f9f9));
	background-image: -webkit-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: -o-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: linear-gradient(to bottom,#f5f5f5,#f9f9f9);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.progress .bar {
	width: 0%;
	height: 100%;
	color: #fff;
	float: left;
	font-size: 12px;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #0e90d2;
	background-image: -moz-linear-gradient(top,#149bdf,#0480be);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#149bdf),to(#0480be));
	background-image: -webkit-linear-gradient(top,#149bdf,#0480be);
	background-image: -o-linear-gradient(top,#149bdf,#0480be);
	background-image: linear-gradient(to bottom,#149bdf,#0480be);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	-moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: width .6s ease;
	-moz-transition: width .6s ease;
	-o-transition: width .6s ease;
	transition: width .6s ease;
}
.progress .bar + .bar {
	-webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
	-moz-box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
	box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
}
.progress-striped .bar {
	background-color: #149bdf;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	-webkit-background-size: 40px 40px;
	-moz-background-size: 40px 40px;
	-o-background-size: 40px 40px;
	background-size: 40px 40px;
}
.progress.active .bar {
	-webkit-animation: progress-bar-stripes 2s linear infinite;
	-moz-animation: progress-bar-stripes 2s linear infinite;
	-ms-animation: progress-bar-stripes 2s linear infinite;
	-o-animation: progress-bar-stripes 2s linear infinite;
	animation: progress-bar-stripes 2s linear infinite;
}
.progress-danger .bar,
.progress .bar-danger {
	background-color: #dd514c;
	background-image: -moz-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#c43c35));
	background-image: -webkit-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: -o-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: linear-gradient(to bottom,#ee5f5b,#c43c35);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);
}
.progress-danger.progress-striped .bar,
.progress-striped .bar-danger {
	background-color: #ee5f5b;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-success .bar,
.progress .bar-success {
	background-color: #5eb95e;
	background-image: -moz-linear-gradient(top,#62c462,#57a957);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#57a957));
	background-image: -webkit-linear-gradient(top,#62c462,#57a957);
	background-image: -o-linear-gradient(top,#62c462,#57a957);
	background-image: linear-gradient(to bottom,#62c462,#57a957);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff57a957', GradientType=0);
}
.progress-success.progress-striped .bar,
.progress-striped .bar-success {
	background-color: #62c462;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-info .bar,
.progress .bar-info {
	background-color: #4bb1cf;
	background-image: -moz-linear-gradient(top,#5bc0de,#339bb9);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#339bb9));
	background-image: -webkit-linear-gradient(top,#5bc0de,#339bb9);
	background-image: -o-linear-gradient(top,#5bc0de,#339bb9);
	background-image: linear-gradient(to bottom,#5bc0de,#339bb9);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);
}
.progress-info.progress-striped .bar,
.progress-striped .bar-info {
	background-color: #5bc0de;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-warning .bar,
.progress .bar-warning {
	background-color: #faa732;
	background-image: -moz-linear-gradient(top,#fbb450,#f89406);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));
	background-image: -webkit-linear-gradient(top,#fbb450,#f89406);
	background-image: -o-linear-gradient(top,#fbb450,#f89406);
	background-image: linear-gradient(to bottom,#fbb450,#f89406);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffab44f', endColorstr='#fff89406', GradientType=0);
}
.progress-warning.progress-striped .bar,
.progress-striped .bar-warning {
	background-color: #fbb450;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.accordion {
	margin-bottom: 18px;
}
.accordion-group {
	margin-bottom: 2px;
	border: 1px solid #e5e5e5;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.accordion-heading {
	border-bottom: 0;
}
.accordion-heading .accordion-toggle {
	display: block;
	padding: 8px 15px;
}
.accordion-toggle {
	cursor: pointer;
}
.accordion-inner {
	padding: 9px 15px;
	border-top: 1px solid #e5e5e5;
}
.carousel {
	position: relative;
	margin-bottom: 18px;
	line-height: 1;
}
.carousel-inner {
	overflow: hidden;
	width: 100%;
	position: relative;
}
.carousel-inner > .item {
	display: none;
	position: relative;
	-webkit-transition: .6s ease-in-out left;
	-moz-transition: .6s ease-in-out left;
	-o-transition: .6s ease-in-out left;
	transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
	display: block;
	line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
	display: block;
}
.carousel-inner > .active {
	left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
	position: absolute;
	top: 0;
	width: 100%;
}
.carousel-inner > .next {
	left: 100%;
}
.carousel-inner > .prev {
	left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
	left: 0;
}
.carousel-inner > .active.left {
	left: -100%;
}
.carousel-inner > .active.right {
	left: 100%;
}
.carousel-control {
	position: absolute;
	top: 40%;
	left: 15px;
	width: 40px;
	height: 40px;
	margin-top: -20px;
	font-size: 60px;
	font-weight: 100;
	line-height: 30px;
	color: #fff;
	text-align: center;
	background: #222;
	border: 3px solid #fff;
	-webkit-border-radius: 23px;
	-moz-border-radius: 23px;
	border-radius: 23px;
	opacity: 0.5;
	filter: alpha(opacity=50);
}
.carousel-control.right {
	left: auto;
	right: 15px;
}
.carousel-control:hover,
.carousel-control:focus {
	color: #fff;
	text-decoration: none;
	opacity: 0.9;
	filter: alpha(opacity=90);
}
.carousel-indicators {
	position: absolute;
	top: 15px;
	right: 15px;
	z-index: 5;
	margin: 0;
	list-style: none;
}
.carousel-indicators li {
	display: block;
	float: left;
	width: 10px;
	height: 10px;
	margin-left: 5px;
	text-indent: -999px;
	background-color: #ccc;
	background-color: rgba(255,255,255,0.25);
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.carousel-indicators .active {
	background-color: #fff;
}
.carousel-caption {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	padding: 15px;
	background: #333;
	background: rgba(0,0,0,0.75);
}
.carousel-caption h4,
.carousel-caption p {
	color: #fff;
<?php if (!isNullOrEmpty($params,'templateFontSize')) : ?>
    line-height: <?php echo intval(intval($params['templateFontSize'])*1.5); ?>px;
<?php endif; ?>
}
.carousel-caption h4 {
	margin: 0 0 5px;
}
.carousel-caption p {
	margin-bottom: 0;
}
.hero-unit {
	padding: 60px;
	margin-bottom: 30px;
	font-size: 18px;
	font-weight: 200;
	line-height: 27px;
	color: inherit;
	background-color: #eee;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.hero-unit h1 {
	margin-bottom: 0;
	font-size: 60px;
	line-height: 1;
	color: inherit;
	letter-spacing: -1px;
}
.hero-unit li {
	line-height: 27px;
}
.pull-right {
	float: right;
}
.pull-left {
	float: left;
}
.hide {
	display: none;
}
.show {
	display: block;
}
.invisible {
	visibility: hidden;
}
.affix {
	position: fixed;
}
.hidden {
	display: none;
	visibility: hidden;
}
.visible-phone {
	display: none !important;
}
.visible-tablet {
	display: none !important;
}
.hidden-desktop {
	display: none !important;
}
.visible-desktop {
	display: inherit !important;
}
@media (min-width: 768px) and (max-width: 979px) {
	.hidden-desktop {
		display: inherit !important;
	}
	.visible-desktop {
		display: none !important;
	}
	.visible-tablet {
		display: inherit !important;
	}
	.hidden-tablet {
		display: none !important;
	}
}
@media (max-width: 767px) {
	.hidden-desktop {
		display: inherit !important;
	}
	.visible-desktop {
		display: none !important;
	}
	.visible-phone {
		display: inherit !important;
	}
	.hidden-phone {
		display: none !important;
	}
}
.visible-print {
	display: none !important;
}
@media print {
	.visible-print {
		display: inherit !important;
	}
	.hidden-print {
		display: none !important;
	}
}
@media (max-width: 767px) {
	.navbar-fixed-top,
	.navbar-fixed-bottom,
	.navbar-static-top {
		margin-left: -20px;
		margin-right: -20px;
	}
	.container-fluid {
		padding: 0;
	}
	.dl-horizontal dt {
		float: none;
		clear: none;
		width: auto;
		text-align: left;
	}
	.dl-horizontal dd {
		margin-left: 0;
	}
	.container {
		width: auto;
	}
	.row-fluid {
		width: 100%;
	}
	.row,
	.thumbnails {
		margin-left: 0;
	}
	.thumbnails > li {
		float: none;
		margin-left: 0;
	}
	[class*="span"],
	.uneditable-input[class*="span"],
	.row-fluid [class*="span"] {
		float: none;
		display: block;
		width: 100%;
		margin-left: 0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.span12,
	.row-fluid .span12 {
		width: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.row-fluid [class*="offset"]:first-child {
		margin-left: 0;
	}
	.input-large,
	.input-xlarge,
	.input-xxlarge,
	input[class*="span"],
	select[class*="span"],
	textarea[class*="span"],
	.uneditable-input {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.input-prepend input,
	.input-append input,
	.input-prepend input[class*="span"],
	.input-append input[class*="span"] {
		display: inline-block;
		width: auto;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 0;
	}
}
@media (max-width: 480px) {
	.nav-collapse {
		-webkit-transform: translate3d(0,0,0);
	}
	.page-header h1 small {
		display: block;
		line-height: 18px;
	}
	input[type="checkbox"],
	input[type="radio"] {
		border: 1px solid #ccc;
	}
	.form-horizontal .control-label {
		float: none;
		width: auto;
		padding-top: 0;
		text-align: left;
	}
	.form-horizontal .controls {
		margin-left: 0;
	}
	.form-horizontal .control-list {
		padding-top: 0;
	}
	.form-horizontal .form-actions {
		padding-left: 10px;
		padding-right: 10px;
	}
	.media .pull-left,
	.media .pull-right {
		float: none;
		display: block;
		margin-bottom: 10px;
	}
	.media-object {
		margin-right: 0;
		margin-left: 0;
	}
	.modal-header .close {
		padding: 10px;
		margin: -10px;
	}
	.carousel-caption {
		position: static;
	}
}
@media (min-width: 768px) and (max-width: 979px) {
	.row {
		margin-left: -20px;
		*zoom: 1;
	}
	.row:before,
	.row:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row:after {
		clear: both;
	}
	[class*="span"] {
		float: left;
		min-height: 1px;
		margin-left: 20px;
	}
	.container,
	.navbar-static-top .container,
	.navbar-fixed-top .container,
	.navbar-fixed-bottom .container {
		width: 724px;
	}
	.span12 {
		width: 724px;
	}
	.span11 {
		width: 662px;
	}
	.span10 {
		width: 600px;
	}
	.span9 {
		width: 538px;
	}
	.span8 {
		width: 476px;
	}
	.span7 {
		width: 414px;
	}
	.span6 {
		width: 352px;
	}
	.span5 {
		width: 290px;
	}
	.span4 {
		width: 228px;
	}
	.span3 {
		width: 166px;
	}
	.span2 {
		width: 104px;
	}
	.span1 {
		width: 42px;
	}
	.offset12 {
		margin-left: 764px;
	}
	.offset11 {
		margin-left: 702px;
	}
	.offset10 {
		margin-left: 640px;
	}
	.offset9 {
		margin-left: 578px;
	}
	.offset8 {
		margin-left: 516px;
	}
	.offset7 {
		margin-left: 454px;
	}
	.offset6 {
		margin-left: 392px;
	}
	.offset5 {
		margin-left: 330px;
	}
	.offset4 {
		margin-left: 268px;
	}
	.offset3 {
		margin-left: 206px;
	}
	.offset2 {
		margin-left: 144px;
	}
	.offset1 {
		margin-left: 82px;
	}
	.row-fluid {
		width: 100%;
		*zoom: 1;
	}
	.row-fluid:before,
	.row-fluid:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row-fluid:after {
		clear: both;
	}
	.row-fluid [class*="span"] {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2.127659574%;
		*margin-left: 2.0744680846383%;
	}
	.row-fluid [class*="span"]:first-child {
		margin-left: 0;
	}
	.row-fluid .controls-row [class*="span"] + [class*="span"] {
		margin-left: 2.127659574%;
	}
	.row-fluid .span12 {
		width: 99.99999999%;
		*width: 99.946808500638%;
	}
	.row-fluid .span11 {
		width: 91.489361693%;
		*width: 91.436170203638%;
	}
	.row-fluid .span10 {
		width: 82.978723396%;
		*width: 82.925531906638%;
	}
	.row-fluid .span9 {
		width: 74.468085099%;
		*width: 74.414893609638%;
	}
	.row-fluid .span8 {
		width: 65.957446802%;
		*width: 65.904255312638%;
	}
	.row-fluid .span7 {
		width: 57.446808505%;
		*width: 57.393617015638%;
	}
	.row-fluid .span6 {
		width: 48.936170208%;
		*width: 48.882978718638%;
	}
	.row-fluid .span5 {
		width: 40.425531911%;
		*width: 40.372340421638%;
	}
	.row-fluid .span4 {
		width: 31.914893614%;
		*width: 31.861702124638%;
	}
	.row-fluid .span3 {
		width: 23.404255317%;
		*width: 23.351063827638%;
	}
	.row-fluid .span2 {
		width: 14.89361702%;
		*width: 14.840425530638%;
	}
	.row-fluid .span1 {
		width: 6.382978723%;
		*width: 6.3297872336383%;
	}
	.row-fluid .offset12 {
		margin-left: 104.255319138%;
		*margin-left: 104.14893615928%;
	}
	.row-fluid .offset12:first-child {
		margin-left: 102.127659564%;
		*margin-left: 102.02127658528%;
	}
	.row-fluid .offset11 {
		margin-left: 95.744680841%;
		*margin-left: 95.638297862277%;
	}
	.row-fluid .offset11:first-child {
		margin-left: 93.617021267%;
		*margin-left: 93.510638288277%;
	}
	.row-fluid .offset10 {
		margin-left: 87.234042544%;
		*margin-left: 87.127659565277%;
	}
	.row-fluid .offset10:first-child {
		margin-left: 85.10638297%;
		*margin-left: 84.999999991277%;
	}
	.row-fluid .offset9 {
		margin-left: 78.723404247%;
		*margin-left: 78.617021268277%;
	}
	.row-fluid .offset9:first-child {
		margin-left: 76.595744673%;
		*margin-left: 76.489361694277%;
	}
	.row-fluid .offset8 {
		margin-left: 70.21276595%;
		*margin-left: 70.106382971277%;
	}
	.row-fluid .offset8:first-child {
		margin-left: 68.085106376%;
		*margin-left: 67.978723397277%;
	}
	.row-fluid .offset7 {
		margin-left: 61.702127653%;
		*margin-left: 61.595744674277%;
	}
	.row-fluid .offset7:first-child {
		margin-left: 59.574468079%;
		*margin-left: 59.468085100277%;
	}
	.row-fluid .offset6 {
		margin-left: 53.191489356%;
		*margin-left: 53.085106377277%;
	}
	.row-fluid .offset6:first-child {
		margin-left: 51.063829782%;
		*margin-left: 50.957446803277%;
	}
	.row-fluid .offset5 {
		margin-left: 44.680851059%;
		*margin-left: 44.574468080277%;
	}
	.row-fluid .offset5:first-child {
		margin-left: 42.553191485%;
		*margin-left: 42.446808506277%;
	}
	.row-fluid .offset4 {
		margin-left: 36.170212762%;
		*margin-left: 36.063829783277%;
	}
	.row-fluid .offset4:first-child {
		margin-left: 34.042553188%;
		*margin-left: 33.936170209277%;
	}
	.row-fluid .offset3 {
		margin-left: 27.659574465%;
		*margin-left: 27.553191486277%;
	}
	.row-fluid .offset3:first-child {
		margin-left: 25.531914891%;
		*margin-left: 25.425531912277%;
	}
	.row-fluid .offset2 {
		margin-left: 19.148936168%;
		*margin-left: 19.042553189277%;
	}
	.row-fluid .offset2:first-child {
		margin-left: 17.021276594%;
		*margin-left: 16.914893615277%;
	}
	.row-fluid .offset1 {
		margin-left: 10.638297871%;
		*margin-left: 10.531914892277%;
	}
	.row-fluid .offset1:first-child {
		margin-left: 8.510638297%;
		*margin-left: 8.4042553182766%;
	}
	input,
	textarea,
	.uneditable-input {
		margin-left: 0;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 20px;
	}
	input.span12,
	textarea.span12,
	.uneditable-input.span12 {
		width: 710px;
	}
	input.span11,
	textarea.span11,
	.uneditable-input.span11 {
		width: 648px;
	}
	input.span10,
	textarea.span10,
	.uneditable-input.span10 {
		width: 586px;
	}
	input.span9,
	textarea.span9,
	.uneditable-input.span9 {
		width: 524px;
	}
	input.span8,
	textarea.span8,
	.uneditable-input.span8 {
		width: 462px;
	}
	input.span7,
	textarea.span7,
	.uneditable-input.span7 {
		width: 400px;
	}
	input.span6,
	textarea.span6,
	.uneditable-input.span6 {
		width: 338px;
	}
	input.span5,
	textarea.span5,
	.uneditable-input.span5 {
		width: 276px;
	}
	input.span4,
	textarea.span4,
	.uneditable-input.span4 {
		width: 214px;
	}
	input.span3,
	textarea.span3,
	.uneditable-input.span3 {
		width: 152px;
	}
	input.span2,
	textarea.span2,
	.uneditable-input.span2 {
		width: 90px;
	}
	input.span1,
	textarea.span1,
	.uneditable-input.span1 {
		width: 28px;
	}
}
@media (min-width: 1200px) {
	.row {
		margin-left: -20px;
		*zoom: 1;
	}
	.row:before,
	.row:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row:after {
		clear: both;
	}
	[class*="span"] {
		float: left;
		min-height: 1px;
		margin-left: 20px;
	}
	.container,
	.navbar-static-top .container,
	.navbar-fixed-top .container,
	.navbar-fixed-bottom .container {
		width: 940px;
	}
	.span12 {
		width: 940px;
	}
	.span11 {
		width: 860px;
	}
	.span10 {
		width: 780px;
	}
	.span9 {
		width: 700px;
	}
	.span8 {
		width: 620px;
	}
	.span7 {
		width: 540px;
	}
	.span6 {
		width: 460px;
	}
	.span5 {
		width: 380px;
	}
	.span4 {
		width: 300px;
	}
	.span3 {
		width: 220px;
	}
	.span2 {
		width: 140px;
	}
	.span1 {
		width: 60px;
	}
	.offset12 {
		margin-left: 980px;
	}
	.offset11 {
		margin-left: 900px;
	}
	.offset10 {
		margin-left: 820px;
	}
	.offset9 {
		margin-left: 740px;
	}
	.offset8 {
		margin-left: 660px;
	}
	.offset7 {
		margin-left: 580px;
	}
	.offset6 {
		margin-left: 500px;
	}
	.offset5 {
		margin-left: 420px;
	}
	.offset4 {
		margin-left: 340px;
	}
	.offset3 {
		margin-left: 260px;
	}
	.offset2 {
		margin-left: 180px;
	}
	.offset1 {
		margin-left: 100px;
	}
	.row-fluid {
		width: 100%;
		*zoom: 1;
	}
	.row-fluid:before,
	.row-fluid:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row-fluid:after {
		clear: both;
	}
	.row-fluid [class*="span"] {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2.127659574%;
		*margin-left: 2.0744680846383%;
	}
	.row-fluid [class*="span"]:first-child {
		margin-left: 0;
	}
	.row-fluid .controls-row [class*="span"] + [class*="span"] {
		margin-left: 2.127659574%;
	}
	.row-fluid .span12 {
		width: 99.99999999%;
		*width: 99.946808500638%;
	}
	.row-fluid .span11 {
		width: 91.489361693%;
		*width: 91.436170203638%;
	}
	.row-fluid .span10 {
		width: 82.978723396%;
		*width: 82.925531906638%;
	}
	.row-fluid .span9 {
		width: 74.468085099%;
		*width: 74.414893609638%;
	}
	.row-fluid .span8 {
		width: 65.957446802%;
		*width: 65.904255312638%;
	}
	.row-fluid .span7 {
		width: 57.446808505%;
		*width: 57.393617015638%;
	}
	.row-fluid .span6 {
		width: 48.936170208%;
		*width: 48.882978718638%;
	}
	.row-fluid .span5 {
		width: 40.425531911%;
		*width: 40.372340421638%;
	}
	.row-fluid .span4 {
		width: 31.914893614%;
		*width: 31.861702124638%;
	}
	.row-fluid .span3 {
		width: 23.404255317%;
		*width: 23.351063827638%;
	}
	.row-fluid .span2 {
		width: 14.89361702%;
		*width: 14.840425530638%;
	}
	.row-fluid .span1 {
		width: 6.382978723%;
		*width: 6.3297872336383%;
	}
	.row-fluid .offset12 {
		margin-left: 104.255319138%;
		*margin-left: 104.14893615928%;
	}
	.row-fluid .offset12:first-child {
		margin-left: 102.127659564%;
		*margin-left: 102.02127658528%;
	}
	.row-fluid .offset11 {
		margin-left: 95.744680841%;
		*margin-left: 95.638297862277%;
	}
	.row-fluid .offset11:first-child {
		margin-left: 93.617021267%;
		*margin-left: 93.510638288277%;
	}
	.row-fluid .offset10 {
		margin-left: 87.234042544%;
		*margin-left: 87.127659565277%;
	}
	.row-fluid .offset10:first-child {
		margin-left: 85.10638297%;
		*margin-left: 84.999999991277%;
	}
	.row-fluid .offset9 {
		margin-left: 78.723404247%;
		*margin-left: 78.617021268277%;
	}
	.row-fluid .offset9:first-child {
		margin-left: 76.595744673%;
		*margin-left: 76.489361694277%;
	}
	.row-fluid .offset8 {
		margin-left: 70.21276595%;
		*margin-left: 70.106382971277%;
	}
	.row-fluid .offset8:first-child {
		margin-left: 68.085106376%;
		*margin-left: 67.978723397277%;
	}
	.row-fluid .offset7 {
		margin-left: 61.702127653%;
		*margin-left: 61.595744674277%;
	}
	.row-fluid .offset7:first-child {
		margin-left: 59.574468079%;
		*margin-left: 59.468085100277%;
	}
	.row-fluid .offset6 {
		margin-left: 53.191489356%;
		*margin-left: 53.085106377277%;
	}
	.row-fluid .offset6:first-child {
		margin-left: 51.063829782%;
		*margin-left: 50.957446803277%;
	}
	.row-fluid .offset5 {
		margin-left: 44.680851059%;
		*margin-left: 44.574468080277%;
	}
	.row-fluid .offset5:first-child {
		margin-left: 42.553191485%;
		*margin-left: 42.446808506277%;
	}
	.row-fluid .offset4 {
		margin-left: 36.170212762%;
		*margin-left: 36.063829783277%;
	}
	.row-fluid .offset4:first-child {
		margin-left: 34.042553188%;
		*margin-left: 33.936170209277%;
	}
	.row-fluid .offset3 {
		margin-left: 27.659574465%;
		*margin-left: 27.553191486277%;
	}
	.row-fluid .offset3:first-child {
		margin-left: 25.531914891%;
		*margin-left: 25.425531912277%;
	}
	.row-fluid .offset2 {
		margin-left: 19.148936168%;
		*margin-left: 19.042553189277%;
	}
	.row-fluid .offset2:first-child {
		margin-left: 17.021276594%;
		*margin-left: 16.914893615277%;
	}
	.row-fluid .offset1 {
		margin-left: 10.638297871%;
		*margin-left: 10.531914892277%;
	}
	.row-fluid .offset1:first-child {
		margin-left: 8.510638297%;
		*margin-left: 8.4042553182766%;
	}
	input,
	textarea,
	.uneditable-input {
		margin-left: 0;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 20px;
	}
	input.span12,
	textarea.span12,
	.uneditable-input.span12 {
		width: 926px;
	}
	input.span11,
	textarea.span11,
	.uneditable-input.span11 {
		width: 846px;
	}
	input.span10,
	textarea.span10,
	.uneditable-input.span10 {
		width: 766px;
	}
	input.span9,
	textarea.span9,
	.uneditable-input.span9 {
		width: 686px;
	}
	input.span8,
	textarea.span8,
	.uneditable-input.span8 {
		width: 606px;
	}
	input.span7,
	textarea.span7,
	.uneditable-input.span7 {
		width: 526px;
	}
	input.span6,
	textarea.span6,
	.uneditable-input.span6 {
		width: 446px;
	}
	input.span5,
	textarea.span5,
	.uneditable-input.span5 {
		width: 366px;
	}
	input.span4,
	textarea.span4,
	.uneditable-input.span4 {
		width: 286px;
	}
	input.span3,
	textarea.span3,
	.uneditable-input.span3 {
		width: 206px;
	}
	input.span2,
	textarea.span2,
	.uneditable-input.span2 {
		width: 126px;
	}
	input.span1,
	textarea.span1,
	.uneditable-input.span1 {
		width: 46px;
	}
	.thumbnails {
		margin-left: -20px;
	}
	.thumbnails > li {
		margin-left: 20px;
	}
	.row-fluid .thumbnails {
		margin-left: 0;
	}
}
@media (max-width: 979px) {
	body {
		padding-top: 0;
	}
	.navbar-fixed-top,
	.navbar-fixed-bottom {
		position: static;
	}
	.navbar-fixed-top {
		margin-bottom: 18px;
	}
	.navbar-fixed-bottom {
		margin-top: 18px;
	}
	.navbar-fixed-top .navbar-inner,
	.navbar-fixed-bottom .navbar-inner {
		padding: 5px;
	}
	.navbar .container {
		width: auto;
		padding: 0;
	}
	.navbar .brand {
		padding-left: 10px;
		padding-right: 10px;
		margin: 0 0 0 -5px;
	}
	.nav-collapse {
		clear: both;
	}
	.nav-collapse .nav {
		float: none;
		margin: 0 0 9px;
	}
	.nav-collapse .nav > li {
		float: none;
	}
	.nav-collapse .nav > li > a {
		margin-bottom: 2px;
	}
	.nav-collapse .nav > .divider-vertical {
		display: none;
	}
	.nav-collapse .nav .nav-header {
		color: #555;
		text-shadow: none;
	}
	.nav-collapse .nav > li > a,
	.nav-collapse .dropdown-menu a {
		padding: 9px 15px;
		font-weight: bold;
		color: #555;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
		border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	}
	.nav-collapse .btn {
		font-weight: normal;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		padding: <?php echo $params['templateRadius']; ?>px 10px <?php echo $params['templateRadius']; ?>px;
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
		border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	}
	.nav-collapse .dropdown-menu li + li a {
		margin-bottom: 2px;
	}
	.nav-collapse .nav > li > a:hover,
	.nav-collapse .nav > li > a:focus,
	.nav-collapse .dropdown-menu a:hover,
	.nav-collapse .dropdown-menu a:focus {
		background-color: #f2f2f2;
	}
	.navbar-inverse .nav-collapse .nav > li > a,
	.navbar-inverse .nav-collapse .dropdown-menu a {
		color: #999;
	}
	.navbar-inverse .nav-collapse .nav > li > a:hover,
	.navbar-inverse .nav-collapse .nav > li > a:focus,
	.navbar-inverse .nav-collapse .dropdown-menu a:hover,
	.navbar-inverse .nav-collapse .dropdown-menu a:focus {
		background-color: #111111;
	}
	.nav-collapse.in .btn-group {
		margin-top: 5px;
		padding: 0;
	}
	.nav-collapse .dropdown-menu {
		position: static;
		top: auto;
		left: auto;
		float: none;
		display: none;
		max-width: none;
		margin: 0 15px;
		padding: 0;
		background-color: transparent;
		border: none;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
		border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}
	.nav-collapse .open > .dropdown-menu {
		display: block;
	}
	.nav-collapse .dropdown-menu:before,
	.nav-collapse .dropdown-menu:after {
		display: none;
	}
	.nav-collapse .dropdown-menu .divider {
		display: none;
	}
	.nav-collapse .nav > li > .dropdown-menu:before,
	.nav-collapse .nav > li > .dropdown-menu:after {
		display: none;
	}
	.nav-collapse .navbar-form,
	.nav-collapse .navbar-search {
		float: none;
		padding: 9px 15px;
		margin: 9px 0;
		border-top: 1px solid #f2f2f2;
		border-bottom: 1px solid #f2f2f2;
		-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
		-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
		box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
	}
	.navbar-inverse .nav-collapse .navbar-form,
	.navbar-inverse .nav-collapse .navbar-search {
		border-top-color: #111111;
		border-bottom-color: #111111;
	}
	.navbar .nav-collapse .nav.pull-right {
		float: none;
		margin-left: 0;
	}
	.nav-collapse,
	.nav-collapse.collapse {
		overflow: hidden;
		height: 0;
	}
	.navbar .btn-navbar {
		display: block;
	}
	.navbar-static .navbar-inner {
		padding-left: 10px;
		padding-right: 10px;
	}
}
@media (min-width: 980px) {
	.nav-collapse.collapse {
		height: auto !important;
		overflow: visible !important;
	}
}
.small {
	font-size: 11px;
}
iframe,
svg {
	max-width: 100%;
}
.nowrap {
	white-space: nowrap;
}
.center,
.table td.center,
.table th.center {
	text-align: center;
}
a.disabled,
a.disabled:hover {
	color: #999999;
	background-color: transparent;
	cursor: default;
	text-decoration: none;
}
.hero-unit {
	text-align: center;
}
.hero-unit .lead {
	margin-bottom: 18px;
	font-size: 20px;
	font-weight: 200;
	line-height: 27px;
}
.btn .caret {
	margin-bottom: 7px;
}
.btn.btn-micro .caret {
	margin: 5px 0;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
body.modal {
	padding-top: 0;
}
.row-even,
.row-odd {
	padding: 5px;
	width: 99%;
	border-bottom: 1px solid #ddd;
}
.row-odd {
	background-color: transparent;
}
.row-even {
	background-color: #f9f9f9;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
.row-fluid .row-reveal {
	visibility: hidden;
}
.row-fluid:hover .row-reveal {
	visibility: visible;
}
.btn-wide {
	width: 80%;
}
.nav-list > li.offset > a {
	padding-left: 30px;
	font-size: 12px;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
.row-fluid .offset1 {
	margin-left: 8.382978723%;
}
.row-fluid .offset2 {
	margin-left: 16.89361702%;
}
.row-fluid .offset3 {
	margin-left: 25.404255317%;
}
.row-fluid .offset4 {
	margin-left: 33.914893614%;
}
.row-fluid .offset5 {
	margin-left: 42.425531911%;
}
.row-fluid .offset6 {
	margin-left: 50.93617020799999%;
}
.row-fluid .offset7 {
	margin-left: 59.446808505%;
}
.row-fluid .offset8 {
	margin-left: 67.95744680199999%;
}
.row-fluid .offset9 {
	margin-left: 76.468085099%;
}
.row-fluid .offset10 {
	margin-left: 84.97872339599999%;
}
.row-fluid .offset11 {
	margin-left: 91.489361693%;
}
.navbar .nav > li > a.btn {
	padding: 4px 10px;
	line-height: 18px;
}
.nav-tabs.nav-dark {
	border-bottom: 1px solid #333;
	text-shadow: 1px 1px 1px #000;
}
.nav-tabs.nav-dark > li > a {
	color: #F8F8F8;
}
.nav-tabs.nav-dark > li > a:hover {
	border-color: #333 #333 #111;
	background-color: #777777;
}
.nav-tabs.nav-dark > .active > a,
.nav-tabs.nav-dark > .active > a:hover {
	color: #ffffff;
	background-color: #555555;
	border: 1px solid #222;
	border-bottom-color: transparent;
}
.thumbnail.pull-left {
	margin: 0 10px 10px 0;
}
.thumbnail.pull-right {
	margin: 0 0 10px 10px;
}
.width-10 {
	width: 10px;
}
.width-20 {
	width: 20px;
}
.width-30 {
	width: 30px;
}
.width-40 {
	width: 40px;
}
.width-50 {
	width: 50px;
}
.width-60 {
	width: 60px;
}
.width-70 {
	width: 70px;
}
.width-80 {
	width: 80px;
}
.width-90 {
	width: 90px;
}
.width-100 {
	width: 100px;
}
.height-10 {
	height: 10px;
}
.height-20 {
	height: 20px;
}
.height-30 {
	height: 30px;
}
.height-40 {
	height: 40px;
}
.height-50 {
	height: 50px;
}
.height-60 {
	height: 60px;
}
.height-70 {
	height: 70px;
}
.height-80 {
	height: 80px;
}
.height-90 {
	height: 90px;
}
.height-100 {
	height: 100px;
}
hr.hr-condensed {
	margin: 10px 0;
}
.list-striped,
.row-striped {
	list-style: none;
	line-height: 18px;
	text-align: left;
	vertical-align: middle;
	border-top: 1px solid #ddd;
	margin-left: 0;
}
.list-striped li,
.list-striped dd,
.row-striped .row,
.row-striped .row-fluid {
	border-bottom: 1px solid #ddd;
	padding: 8px;
}
.list-striped li:nth-child(odd),
.list-striped dd:nth-child(odd),
.row-striped .row:nth-child(odd),
.row-striped .row-fluid:nth-child(odd) {
	background-color: #f9f9f9;
}
.list-striped li:hover,
.list-striped dd:hover,
.row-striped .row:hover,
.row-striped .row-fluid:hover {
	background-color: #f5f5f5;
}
.row-striped .row-fluid {
	width: 97%;
}
.row-striped .row-fluid [class*="span"] {
	min-height: 10px;
}
.row-striped .row-fluid [class*="span"] {
	margin-left: 8px;
}
.row-striped .row-fluid [class*="span"]:first-child {
	margin-left: 0;
}
.list-condensed li {
	padding: 4px 5px;
}
.row-condensed .row,
.row-condensed .row-fluid {
	padding: 4px 5px;
}
.list-bordered,
.row-bordered {
	list-style: none;
	line-height: 18px;
	text-align: left;
	vertical-align: middle;
	margin-left: 0;
	border: 1px solid #ddd;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.radio.btn-group input[type=radio] {
	display: none;
}
.radio.btn-group > label:first-of-type {
	margin-left: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	border-bottom-left-radius: <?php echo $params['templateRadius']; ?>px;
	border-top-left-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-bottomleft: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius-topleft: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
fieldset.radio.btn-group {
	padding-left: 0;
}
.iframe-bordered {
	border: 1px solid #ddd;
}
.tab-content {
	overflow: visible;
}
.tabs-left .tab-content {
	overflow: auto;
}
.nav-tabs > li > span {
	display: block;
	margin-right: 2px;
	padding-right: 12px;
	padding-left: 12px;
	padding-top: 8px;
	padding-bottom: 8px;
	line-height: 18px;
	border: 1px solid transparent;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.btn-micro {
	padding: 1px 4px;
	font-size: 10px;
	line-height: 8px;
}
.btn-group > .btn-micro {
	font-size: 10px;
}
.tip-wrap {
	max-width: 200px;
	padding: 3px 8px;
	color: #fff;
	text-align: center;
	text-decoration: none;
	background-color: #000;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	z-index: 100;
}
.moduletable h3 {
	position: relative;
<?php if (!isNullOrEmpty($params,'moduleTitleIcon')) : ?>
	left: 35px;
<?php endif; ?>
	margin: 0px 0px 5px 0px;
	padding-bottom: 5px;
<?php if (!isNullOrEmpty($params,'moduleTitleDecoration')) : ?>
	text-decoration: <?php echo $params['moduleTitleDecoration']; ?>;
<?php endif; ?>
}
.input-prepend .chzn-container-single .chzn-single,
.input-append .chzn-container-single .chzn-single {
	border-color: #ccc;
	height: 26px;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.input-prepend .chzn-container-single .chzn-drop,
.input-append .chzn-container-single .chzn-drop {
	border-color: #ccc;
}
.input-prepend > .add-on,
.input-append > .add-on {
	vertical-align: top;
}
.input-prepend .chzn-container-single .chzn-single {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0;
<?php endif; ?>
}
.input-prepend .chzn-container-single .chzn-single-with-drop {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: 0 <?php echo $params['templateRadius']; ?>px 0 0;
	-moz-border-radius: 0 <?php echo $params['templateRadius']; ?>px 0 0;
	border-radius: 0 <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
}
.input-append .chzn-container-single .chzn-single {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.input-append .chzn-container-single .chzn-single-with-drop {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 0;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px 0 0 0;
	border-radius: <?php echo $params['templateRadius']; ?>px 0 0 0;
<?php endif; ?>
}
.input-prepend.input-append .chzn-container-single .chzn-single,
.input-prepend.input-append .chzn-container-single .chzn-single-with-drop {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
}
.element-invisible {
	position: absolute;
	padding: 0;
	margin: 0;
	border: 0;
	height: 1px;
	width: 1px;
	overflow: hidden;
}
.form-vertical .control-label {
	float: none;
	width: auto;
	padding-right: 0;
	padding-top: 0;
	text-align: left;
}
.form-vertical .controls {
	margin-left: 0;
}
.width-auto {
	width: auto;
}
.btn-group .chzn-results {
	white-space: normal;
}
.accordion-body.in:hover {
	overflow: visible;
}
.invalid {
	color: #9d261d;
	font-weight: bold;
}
input.invalid {
	border: 1px solid #9d261d;
}
.tooltip {
	max-width: 400px;
}
.tooltip-inner {
	max-width: none;
	text-align: left;
	text-shadow: none;
}
th .tooltip-inner {
	font-weight: normal;
}
.tooltip.hasimage {
	opacity: 1;
}
.tip-text {
	text-align: left;
}
.btn-group > .btn + .dropdown-backdrop + .btn {
	margin-left: -1px;
}
.btn-group > .btn + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 8px;
	padding-right: 8px;
	-webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	*padding-top: 5px;
	*padding-bottom: 5px;
}
.btn-group > .btn-mini + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 5px;
	padding-right: 5px;
	*padding-top: 2px;
	*padding-bottom: 2px;
}
.btn-group > .btn-small + .dropdown-backdrop + .dropdown-toggle {
	*padding-top: 5px;
	*padding-bottom: 4px;
}
.btn-group > .btn-large + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 12px;
	padding-right: 12px;
	*padding-top: 7px;
	*padding-bottom: 7px;
}
.dropdown-menu {
	text-align: left;
}
div.modal {
	position: fixed;
	top: 10%;
	left: 50%;
	z-index: 1050;
	width: 580px;
	margin-left: -280px;
	background-color: #fff;
	border: 1px solid #999;
	border: 1px solid rgba(0,0,0,0.3);
	*border: 1px solid #999;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	-moz-box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding-box;
	background-clip: padding-box;
	outline: none;
}
div.modal.fade {
	-webkit-transition: opacity .3s linear, top .3s ease-out;
	-moz-transition: opacity .3s linear, top .3s ease-out;
	-o-transition: opacity .3s linear, top .3s ease-out;
	transition: opacity .3s linear, top .3s ease-out;
	top: -25%;
}
div.modal.fade.in {
	top: 10%;
}
.modal-batch {
	overflow-y: visible;
}
@media (max-width: 767px) {
	div.modal {
		position: fixed;
		top: 20px;
		left: 20px;
		right: 20px;
		width: auto;
		margin: 0;
	}
	div.modal.fade {
		top: -100px;
	}
	div.modal.fade.in {
		top: 20px;
	}
}
@media (max-width: 480px) {
	div.modal {
		top: 10px;
		left: 10px;
		right: 10px;
	}
}
@font-face {
	font-family: 'IcoMoon';
	src: url('../../../media/jui/fonts/IcoMoon.eot');
	src: url('../../../media/jui/fonts/IcoMoon.eot?#iefix') format('embedded-opentype'), url('../../../media/jui/fonts/IcoMoon.woff') format('woff'), url('../../../media/jui/fonts/IcoMoon.ttf') format('truetype'), url('../../../media/jui/fonts/IcoMoon.svg#IcoMoon') format('svg');
	font-weight: normal;
	font-style: normal;
}
[data-icon]:before {
	font-family: 'IcoMoon';
	content: attr(data-icon);
	speak: none;
}
[class^="icon-"],
[class*=" icon-"] {
	display: inline-block;
	width: 14px;
	height: 14px;
	*margin-right: .3em;
	line-height: 14px;
}
[class^="icon-"]:before,
[class*=" icon-"]:before {
	font-family: 'IcoMoon';
	font-style: normal;
	speak: none;
}
[class^="icon-"].disabled,
[class*=" icon-"].disabled {
	font-weight: normal;
}
.icon-joomla:before {
	content: "\e200";
}
.icon-chevron-up:before,
.icon-uparrow:before,
.icon-arrow-up:before {
	content: "\e005";
}
.icon-chevron-right:before,
.icon-rightarrow:before,
.icon-arrow-right:before {
	content: "\e006";
}
.icon-chevron-down:before,
.icon-downarrow:before,
.icon-arrow-down:before {
	content: "\e007";
}
.icon-chevron-left:before,
.icon-leftarrow:before,
.icon-arrow-left:before {
	content: "\e008";
}
.icon-arrow-first:before {
	content: "\e003";
}
.icon-arrow-last:before {
	content: "\e004";
}
.icon-arrow-up-2:before {
	content: "\e009";
}
.icon-arrow-right-2:before {
	content: "\e00a";
}
.icon-arrow-down-2:before {
	content: "\e00b";
}
.icon-arrow-left-2:before {
	content: "\e00c";
}
.icon-arrow-up-3:before {
	content: "\e00f";
}
.icon-arrow-right-3:before {
	content: "\e010";
}
.icon-arrow-down-3:before {
	content: "\e011";
}
.icon-arrow-left-3:before {
	content: "\e012";
}
.icon-menu-2:before {
	content: "\e00e";
}
.icon-arrow-up-4:before {
	content: "\e201";
}
.icon-arrow-right-4:before {
	content: "\e202";
}
.icon-arrow-down-4:before {
	content: "\e203";
}
.icon-arrow-left-4:before {
	content: "\e204";
}
.icon-share:before,
.icon-redo:before {
	content: "\27";
}
.icon-undo:before {
	content: "\28";
}
.icon-forward-2:before {
	content: "\e205";
}
.icon-backward-2:before,
.icon-reply:before {
	content: "\e206";
}
.icon-unblock:before,
.icon-refresh:before,
.icon-redo-2:before {
	content: "\6c";
}
.icon-undo-2:before {
	content: "\e207";
}
.icon-move:before {
	content: "\7a";
}
.icon-expand:before {
	content: "\66";
}
.icon-contract:before {
	content: "\67";
}
.icon-expand-2:before {
	content: "\68";
}
.icon-contract-2:before {
	content: "\69";
}
.icon-play:before {
	content: "\e208";
}
.icon-pause:before {
	content: "\e209";
}
.icon-stop:before {
	content: "\e210";
}
.icon-previous:before,
.icon-backward:before {
	content: "\7c";
}
.icon-next:before,
.icon-forward:before {
	content: "\7b";
}
.icon-first:before {
	content: "\7d";
}
.icon-last:before {
	content: "\e000";
}
.icon-play-circle:before {
	content: "\e00d";
}
.icon-pause-circle:before {
	content: "\e211";
}
.icon-stop-circle:before {
	content: "\e212";
}
.icon-backward-circle:before {
	content: "\e213";
}
.icon-forward-circle:before {
	content: "\e214";
}
.icon-loop:before {
	content: "\e001";
}
.icon-shuffle:before {
	content: "\e002";
}
.icon-search:before {
	content: "\53";
}
.icon-zoom-in:before {
	content: "\64";
}
.icon-zoom-out:before {
	content: "\65";
}
.icon-apply:before,
.icon-edit:before,
.icon-pencil:before {
	content: "\2b";
}
.icon-pencil-2:before {
	content: "\2c";
}
.icon-brush:before {
	content: "\3b";
}
.icon-save-new:before,
.icon-plus-2:before {
	content: "\5d";
}
.icon-ban-circle:before,
.icon-minus-sign:before,
.icon-minus-2:before {
	content: "\5e";
}
.icon-delete:before,
.icon-remove:before,
.icon-cancel-2:before {
	content: "\49";
}
.icon-publish:before,
.icon-save:before,
.icon-ok:before,
.icon-checkmark:before {
	content: "\47";
}
.icon-new:before,
.icon-plus:before {
	content: "\2a";
}
.icon-plus-circle:before {
	content: "\e215";
}
.icon-minus:before,
.icon-not-ok:before {
	content: "\4b";
}
.icon-minus-circle:before {
	content: "\e216";
}
.icon-unpublish:before,
.icon-cancel:before {
	content: "\4a";
}
.icon-cancel-circle:before {
	content: "\e217";
}
.icon-checkmark-2:before {
	content: "\e218";
}
.icon-checkmark-circle:before {
	content: "\e219";
}
.icon-info:before {
	content: "\e220";
}
.icon-info-2:before,
.icon-info-circle:before {
	content: "\e221";
}
.icon-question:before,
.icon-question-sign:before,
.icon-help:before {
	content: "\45";
}
.icon-question-2:before,
.icon-question-circle:before {
	content: "\e222";
}
.icon-notification:before {
	content: "\e223";
}
.icon-notification-2:before,
.icon-notification-circle:before {
	content: "\e224";
}
.icon-pending:before,
.icon-warning:before {
	content: "\48";
}
.icon-warning-2:before,
.icon-warning-circle:before {
	content: "\e225";
}
.icon-checkbox-unchecked:before {
	content: "\3d";
}
.icon-checkin:before,
.icon-checkbox:before,
.icon-checkbox-checked:before {
	content: "\3e";
}
.icon-checkbox-partial:before {
	content: "\3f";
}
.icon-square:before {
	content: "\e226";
}
.icon-radio-unchecked:before {
	content: "\e227";
}
.icon-radio-checked:before,
.icon-generic:before {
	content: "\e228";
}
.icon-circle:before {
	content: "\e229";
}
.icon-signup:before {
	content: "\e230";
}
.icon-grid:before,
.icon-grid-view:before {
	content: "\58";
}
.icon-grid-2:before,
.icon-grid-view-2:before {
	content: "\59";
}
.icon-menu:before {
	content: "\5a";
}
.icon-list:before,
.icon-list-view:before {
	content: "\31";
}
.icon-list-2:before {
	content: "\e231";
}
.icon-menu-3:before {
	content: "\e232";
}
.icon-folder-open:before,
.icon-folder:before {
	content: "\2d";
}
.icon-folder-close:before,
.icon-folder-2:before {
	content: "\2e";
}
.icon-folder-plus:before {
	content: "\e234";
}
.icon-folder-minus:before {
	content: "\e235";
}
.icon-folder-3:before {
	content: "\e236";
}
.icon-folder-plus-2:before {
	content: "\e237";
}
.icon-folder-remove:before {
	content: "\e238";
}
.icon-file:before {
	content: "\e016";
}
.icon-file-2:before {
	content: "\e239";
}
.icon-file-add:before,
.icon-file-plus:before {
	content: "\29";
}
.icon-file-remove:before,
.icon-file-minus:before {
	content: "\e017";
}
.icon-file-check:before {
	content: "\e240";
}
.icon-file-remove:before {
	content: "\e241";
}
.icon-save-copy:before,
.icon-copy:before {
	content: "\e018";
}
.icon-stack:before {
	content: "\e242";
}
.icon-tree:before {
	content: "\e243";
}
.icon-tree-2:before {
	content: "\e244";
}
.icon-paragraph-left:before {
	content: "\e246";
}
.icon-paragraph-center:before {
	content: "\e247";
}
.icon-paragraph-right:before {
	content: "\e248";
}
.icon-paragraph-justify:before {
	content: "\e249";
}
.icon-screen:before {
	content: "\e01c";
}
.icon-tablet:before {
	content: "\e01d";
}
.icon-mobile:before {
	content: "\e01e";
}
.icon-box-add:before {
	content: "\51";
}
.icon-box-remove:before {
	content: "\52";
}
.icon-download:before {
	content: "\e021";
}
.icon-upload:before {
	content: "\e022";
}
.icon-home:before {
	content: "\21";
}
.icon-home-2:before {
	content: "\e250";
}
.icon-out-2:before,
.icon-new-tab:before {
	content: "\e024";
}
.icon-out-3:before,
.icon-new-tab-2:before {
	content: "\e251";
}
.icon-link:before {
	content: "\e252";
}
.icon-picture:before,
.icon-image:before {
	content: "\2f";
}
.icon-pictures:before,
.icon-images:before {
	content: "\30";
}
.icon-palette:before,
.icon-color-palette:before {
	content: "\e014";
}
.icon-camera:before {
	content: "\55";
}
.icon-camera-2:before,
.icon-video:before {
	content: "\e015";
}
.icon-play-2:before,
.icon-video-2:before,
.icon-youtube:before {
	content: "\56";
}
.icon-music:before {
	content: "\57";
}
.icon-user:before {
	content: "\22";
}
.icon-users:before {
	content: "\e01f";
}
.icon-vcard:before {
	content: "\6d";
}
.icon-address:before {
	content: "\70";
}
.icon-share-alt:before,
.icon-out:before {
	content: "\26";
}
.icon-enter:before {
	content: "\e257";
}
.icon-exit:before {
	content: "\e258";
}
.icon-comment:before,
.icon-comments:before {
	content: "\24";
}
.icon-comments-2:before {
	content: "\25";
}
.icon-quote:before,
.icon-quotes-left:before {
	content: "\60";
}
.icon-quote-2:before,
.icon-quotes-right:before {
	content: "\61";
}
.icon-quote-3:before,
.icon-bubble-quote:before {
	content: "\e259";
}
.icon-phone:before {
	content: "\e260";
}
.icon-phone-2:before {
	content: "\e261";
}
.icon-envelope:before,
.icon-mail:before {
	content: "\4d";
}
.icon-envelope-opened:before,
.icon-mail-2:before {
	content: "\4e";
}
.icon-unarchive:before,
.icon-drawer:before {
	content: "\4f";
}
.icon-archive:before,
.icon-drawer-2:before {
	content: "\50";
}
.icon-briefcase:before {
	content: "\e020";
}
.icon-tag:before {
	content: "\e262";
}
.icon-tag-2:before {
	content: "\e263";
}
.icon-tags:before {
	content: "\e264";
}
.icon-tags-2:before {
	content: "\e265";
}
.icon-options:before,
.icon-cog:before {
	content: "\38";
}
.icon-cogs:before {
	content: "\37";
}
.icon-screwdriver:before,
.icon-tools:before {
	content: "\36";
}
.icon-wrench:before {
	content: "\3a";
}
.icon-equalizer:before {
	content: "\39";
}
.icon-dashboard:before {
	content: "\78";
}
.icon-switch:before {
	content: "\e266";
}
.icon-filter:before {
	content: "\54";
}
.icon-purge:before,
.icon-trash:before {
	content: "\4c";
}
.icon-checkedout:before,
.icon-lock:before,
.icon-locked:before {
	content: "\23";
}
.icon-unlock:before {
	content: "\e267";
}
.icon-key:before {
	content: "\5f";
}
.icon-support:before {
	content: "\46";
}
.icon-database:before {
	content: "\62";
}
.icon-scissors:before {
	content: "\e268";
}
.icon-health:before {
	content: "\6a";
}
.icon-wand:before {
	content: "\6b";
}
.icon-eye-open:before,
.icon-eye:before {
	content: "\3c";
}
.icon-eye-close:before,
.icon-eye-blocked:before,
.icon-eye-2:before {
	content: "\e269";
}
.icon-clock:before {
	content: "\6e";
}
.icon-compass:before {
	content: "\6f";
}
.icon-broadcast:before,
.icon-connection:before,
.icon-wifi:before {
	content: "\e01b";
}
.icon-book:before {
	content: "\e271";
}
.icon-lightning:before,
.icon-flash:before {
	content: "\79";
}
.icon-print:before,
.icon-printer:before {
	content: "\e013";
}
.icon-feed:before {
	content: "\71";
}
.icon-calendar:before {
	content: "\43";
}
.icon-calendar-2:before {
	content: "\44";
}
.icon-calendar-3:before {
	content: "\e273";
}
.icon-pie:before {
	content: "\77";
}
.icon-bars:before {
	content: "\76";
}
.icon-chart:before {
	content: "\75";
}
.icon-power-cord:before {
	content: "\32";
}
.icon-cube:before {
	content: "\33";
}
.icon-puzzle:before {
	content: "\34";
}
.icon-attachment:before,
.icon-paperclip:before,
.icon-flag-2:before {
	content: "\72";
}
.icon-lamp:before {
	content: "\74";
}
.icon-pin:before,
.icon-pushpin:before {
	content: "\73";
}
.icon-location:before {
	content: "\63";
}
.icon-shield:before {
	content: "\e274";
}
.icon-flag:before {
	content: "\35";
}
.icon-flag-3:before {
	content: "\e275";
}
.icon-bookmark:before {
	content: "\e023";
}
.icon-bookmark-2:before {
	content: "\e276";
}
.icon-heart:before {
	content: "\e277";
}
.icon-heart-2:before {
	content: "\e278";
}
.icon-thumbs-up:before {
	content: "\5b";
}
.icon-thumbs-down:before {
	content: "\5c";
}
.icon-unfeatured:before,
.icon-asterisk:before,
.icon-star-empty:before {
	content: "\40";
}
.icon-star-2:before {
	content: "\41";
}
.icon-featured:before,
.icon-default:before,
.icon-star:before {
	content: "\42";
}
.icon-smiley:before,
.icon-smiley-happy:before {
	content: "\e279";
}
.icon-smiley-2:before,
.icon-smiley-happy-2:before {
	content: "\e280";
}
.icon-smiley-sad:before {
	content: "\e281";
}
.icon-smiley-sad-2:before {
	content: "\e282";
}
.icon-smiley-neutral:before {
	content: "\e283";
}
.icon-smiley-neutral-2:before {
	content: "\e284";
}
.icon-cart:before {
	content: "\e019";
}
.icon-basket:before {
	content: "\e01a";
}
.icon-credit:before {
	content: "\e286";
}
.icon-credit-2:before {
	content: "\e287";
}
.icon-expired:before {
	content: "\4b";
}
body.site {
<?php if (!isNullOrEmpty($params,'bodyPaddingSize')) : ?>
	padding: <?php echo $params['bodyPaddingSize'];?>px;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundColor')) : ?>
	background-color: <?php echo $params['bodyBackgroundColor'];?>;
<?php else : ?>
	background-color: #eeeeee;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundFile')) : ?>
	background-image: url("<?php echo JURI::base()."../../../".$params['bodyBackgroundFile'];?>");
<?php if (!isNullOrEmpty($params,'bodyBackgroundRepeat')) : ?>
	background-repeat: <?php echo $params['bodyBackgroundRepeat'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundAttachment')) : ?>
	background-attachment: <?php echo $params['bodyBackgroundAttachment'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundPosition')) : ?>
	background-position: <?php echo $params['bodyBackgroundPosition'];?>;
<?php endif; ?>
<?php endif; ?>
}
body.site.fluid {
	background-color: #ffffff;
}
.thumbnail {
	margin-bottom: 9px;
}
.accordion-group {
	background: #fff;
}
.site-title {
	font-size: 40px;
	line-height: 48px;
	font-weight: bold;
}
.brand {
	color: #004466;
	-webkit-transition: color .5s linear;
	-moz-transition: color .5s linear;
	-o-transition: color .5s linear;
	transition: color .5s linear;
}
.brand:hover {
	color: #08c;
	text-decoration: none;
}
.header-inner {
<?php if (!isNullOrEmpty($params,'headerBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'headerBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['headerBackgroundColor'],$params['headerBackgroundOpacity']);?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['headerBackgroundColor'],'');?>;
<?php endif; ?>
<?php endif; ?>
}
.header {
	margin-bottom: 0px;
}
.header .finder {
	margin-top: 14px;
}
.header .finder .btn {
	margin-top: 0px;
}
.navigation {
<?php if (isset($params['menuType']) && ($params['menuType'] == "tab")) : ?>
	padding: 5px 5px 0 5px;
<?php else: ?>
	padding: 5px;
<?php endif; ?>
	border-top: 0px solid rgba(0,0,0,0.075);
	border-bottom: 0px solid rgba(0,0,0,0.075);
	margin-bottom: 10px;
<?php if (!isNullOrEmpty($params,'menuBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'menuBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],$params['menuBackgroundOpacity']);?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['menuBackgroundColor'],'');?>;
<?php endif; ?>
<?php else: ?>
<?php if (!isNullOrEmpty($params,'templateColor')) : ?>
	background-color: <?php echo $params['templateColor'];?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isset($params['menuType']) || ($params['menuType'] != "block")) : ?>
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
<?php endif; ?>
}
.navigation .nav-pills {
	margin-bottom: 0;
}
.hero-unit {
	background-color: #08C;
}
.hero-unit > * {
	color: white;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}
.container {
	max-width: 960px;
}
.body .container {
<?php if (!isNullOrEmpty($params,'contentBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['contentBackgroundColor'],$params['contentBackgroundOpacity']); ?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['contentBackgroundColor'],''); ?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	padding: 20px;
<?php if (!isNullOrEmpty($params,'contentBorderSize') && !isNullOrEmpty($params,'contentBorderType') && !isNullOrEmpty($params,'contentBorderColor')) : ?>
	border: <?php echo $params['contentBorderSize;']?>px <?php echo $params['contentBorderType'];?> <?php echo $params['contentBorderColor'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundColor') && !isNullOrEmpty($params,'contentBackgroundColor') && ($params['bodyBackgroundColor'] != $params['contentBackgroundColor'])) : ?>
	-moz-box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
	-webkit-box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
	box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundFile')) : ?>
	background-image: url("<?php echo JURI::base()."../../../".$params['contentBackgroundFile'];?>");
<?php if (!isNullOrEmpty($params,'contentBackgroundRepeat')) : ?>
	background-repeat: <?php echo $params['contentBackgroundRepeat'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundAttachment')) : ?>
	background-attachment: <?php echo $params['contentBackgroundAttachment'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'contentBackgroundPosition')) : ?>
	background-position: <?php echo $params['contentBackgroundPosition'];?>;
<?php endif; ?>
<?php endif; ?>
}
.footer .container {
<?php if (!isNullOrEmpty($params,'footerBackgroundColor')) : ?>
<?php if (!isNullOrEmpty($params,'footerBackgroundOpacity')) : ?>
	background-color: <?php echo calcBackground($params['footerBackgroundColor'],$params['footerBackgroundOpacity']);?>;
<?php else: ?>
	background-color: <?php echo calcBackground($params['footerBackgroundColor'],'');?>;
<?php endif; ?>
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	padding: 20px;
<?php if (!isNullOrEmpty($params,'footerBorderSize') && !isNullOrEmpty($params,'footerBorderType') && !isNullOrEmpty($params,'footerBorderColor')) : ?>
	border: <?php echo $params['footerBorderSize'];?>px <?php echo $params['footerBorderType'];?> <?php echo $params['footerBorderColor'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'bodyBackgroundColor') && !isNullOrEmpty($params,'footerBackgroundColor') && ($params['bodyBackgroundColor'] != $params['footerBackgroundColor'])) : ?>
	-moz-box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
	-webkit-box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
	box-shadow: 0px 0px 6px rgba(0,0,0,0.05);
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'footerBackgroundFile')) : ?>
	background-image: url("<?php echo JURI::base()."../../../".$params['footerBackgroundFile'];?>");
<?php if (!isNullOrEmpty($params,'footerBackgroundRepeat')) : ?>
	background-repeat: <?php echo $params['footerBackgroundRepeat'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'footerBackgroundAttachment')) : ?>
	background-attachment: <?php echo $params['footerBackgroundAttachment'];?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'footerBackgroundPosition')) : ?>
	background-position: <?php echo $params['footerBackgroundPosition'];?>;
<?php endif; ?>
<?php endif; ?>
}
.onepage-section {
<?php if (!isNullOrEmpty($params,'sectionPaddingSizeTop')) : ?>
	padding-top: <?php echo $params['sectionPaddingSizeTop'];?>px;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'sectionPaddingSizeBottom')) : ?>
	padding-bottom: <?php echo $params['sectionPaddingSizeBottom'];?>px;
<?php endif; ?>
}
.onepage-anchor {
	height: 0px;
}
.module-icon {
	float: left;
}
.module-head {
	margin-left: 26px;
}
.module-header {
	padding-bottom: 17px;
	margin: 20px 0 18px 0;
	border-bottom: 1px solid #eeeeee;
}
.item-title {
	margin-bottom: 9px;
}
.item-content {
	margin: 18px 0;
}
.item-subtitle {
	margin-bottom: 9px;
}
.pull-right.item-image {
	margin: 0 0 18px 20px;
}
.pull-left.item-image {
	margin: 0 20px 18px 0;
}
.header .nav > li:last-child > .dropdown-menu,
.item-actions .dropdown-menu,
.item-comment .dropdown-menu {
	left: initial;
	right: 0;
}
.article-index {
	margin: 0 0 10px 10px;
}
.list-item-title {
	margin-bottom: 9px;
}
.list-item-content {
	margin: 18px 0;
}
.list-item-subtitle {
	margin-bottom: 9px;
}
.items-more,
.content-links {
	padding: 15px 0;
}
.breadcrumb {
	margin: 10px 0;
}
.img_caption .left {
	float: left;
	margin-right: 1em;
}
.img_caption .right {
	float: right;
	margin-left: 1em;
}
.img_caption .left p {
	clear: left;
	text-align: center;
}
.img_caption .right p {
	clear: right;
	text-align: center;
}
.img_caption {
	text-align: center !important;
}
.img_caption.none {
	margin-left: auto;
	margin-right: auto;
}
.menu-icon {
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
	height: <?php echo $params['menuFontSize'];?>px;
	width: <?php echo $params['menuFontSize'];?>px;
<?php endif; ?>
}
.title-icon {
	height: <?php echo intval(intval($params['templateFontSize'])*3); ?>px;
	width: <?php echo intval(intval($params['templateFontSize'])*3); ?>px;
}
figure {
	display: table;
}
figure.pull-center,
img.pull-center {
	margin-left: auto;
	margin-right: auto;
}
figcaption {
	display: table-caption;
	caption-side: bottom;
}
#aside .nav .nav-child {
	border-left: 2px solid #ddd;
	padding-left: 5px;
}
.navigation .nav-child {
	position: absolute;
	top: 95%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	list-style: none;
<?php if (!isNullOrEmpty($params,'menuChildBackgroundColor')) : ?>
	background-color: <?php echo $params['menuChildBackgroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuChildForegroundColor')) : ?>
	color: <?php echo $params['menuChildForegroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuChildBorderColor')) : ?>
	border: 1px solid <?php echo $params['menuChildBorderColor']; ?>;
	border: 1px solid rgba(0,0,0,0.2);
<?php endif; ?>
	*border-right-width: 2px;
	*border-bottom-width: 2px;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
	-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
	-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
	border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
}
.navigation .nav-child.pull-right {
	right: 0;
	left: auto;
}
.navigation .nav-child .divider {
	*width: 100%;
	height: 1px;
	margin: 8px 1px;
	*margin: -5px 0 5px;
	overflow: hidden;
	background-color: #e5e5e5;
	border-bottom: 1px solid #fff;
}
.navigation .nav-child a {
	display: block;
	padding: 3px 20px;
	clear: both;
<?php if (!isNullOrEmpty($params,'menuFontSize')) : ?>
	font-size: <?php echo $params['menuFontSize']; ?>px;
    line-height: <?php echo intval(intval($params['menuFontSize'])*1.5); ?>px;
<?php endif; ?>
	font-weight: normal;
<?php if (!isNullOrEmpty($params,'menuChildForegroundColor')) : ?>
	color: <?php echo $params['menuChildForegroundColor']; ?>;
<?php endif; ?>
	white-space: nowrap;
	text-decoration: none;
}
.navigation .nav > li {
	position: relative;
}
.navigation .nav > li:hover > .nav-child,
.navigation .nav > li > a:focus + .nav-child {
	display: block;
}
.navigation .nav-child > li:hover {
	position: relative;
}

.navigation .nav-child > li:hover > .nav-child,
.navigation .nav-child > li > a:focus + .nav-child {
	display: block;
	top: -6px;
	left: 100%;
}
.navigation .nav-child > li:hover > .nav-child:after,
.navigation .nav-child > li > a:focus + .nav-child:after {
	border-right: 6px hidden transparent;
	border-left: 6px hidden transparent;
}

.navigation .nav-child:before {
	position: absolute;
	top: -7px;
	left: 9px;
	display: inline-block;
	border-right: 7px solid transparent;
	border-bottom: 7px solid #ccc;
	border-left: 7px solid transparent;
	border-bottom-color: rgba(0,0,0,0.2);
	content: '';
}
.navigation .nav-child:after {
	position: absolute;
	top: -6px;
	left: 10px;
	display: inline-block;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #ffffff;
	border-left: 6px solid transparent;
	content: '';
}
.navigation .nav-child li > a:hover,
.navigation .nav-child li > a:focus,
.navigation .nav-child:hover > a {
	text-decoration: none;
<?php if (!isNullOrEmpty($params,'menuChildForegroundColor')) : ?>
	color: <?php echo $params['menuChildForegroundColor']; ?>;
<?php endif; ?>
<?php if (!isNullOrEmpty($params,'menuChildFocusBackgroundColor')) : ?>
	background-color: <?php echo $params['menuChildFocusBackgroundColor']; ?>;
<?php endif; ?>
}
.header-logo {
	width: 100%;
}
@media (max-width: 480px) {
	.item-info > span {
		display: block;
	}
	.blog-item .pull-right.item-image {
		margin: 0 0 18px 0;
	}
	.blog-item .pull-left.item-image {
		margin: 0 0 18px 0;
		float: none;
	}
}
@media (max-width: 768px) {
	body {
		padding-top: 0;
	}
	.header {
		background: transparent;
	}
	.header .brand {
		float: none;
		display: block;
		text-align: center;
	}
	.header .nav.pull-right,
	.header-search {
		float: none;
		display: block;
	}
	.header-search form {
		margin: 0;
	}
	.header-search .search-query {
		width: 90%;
	}
	.header .nav-pills > li > a {
		border: 1px solid #ddd;
		border-bottom: 0;
		margin: 0;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
		border-radius: <?php echo $params['templateRadius']; ?>px;
		margin-right: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
	}
	.header .nav-pills > li:first-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
		border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
	}
	.header .nav-pills > li:last-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
		border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
		border-bottom: 1px solid #ddd;
	}
	.modal.fade {
		top: -100%;
	}
	.nav-tabs {
		border-bottom: 0;
	}
	.nav-tabs > li {
		float: none;
	}
	.nav-tabs > li > a {
		border: 1px solid #ddd;
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px;
		border-radius: <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
		margin-right: 0;
	}
	.nav-tabs > li:first-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
		-moz-border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
		border-radius: <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px 0 0;
<?php endif; ?>
	}
	.nav-tabs > li:last-child > a,
	.nav-tabs > .active:last-child > a {
<?php if (!isNullOrEmpty($params,'templateRadius')) : ?>
		-webkit-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
		-moz-border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
		border-radius: 0 0 <?php echo $params['templateRadius']; ?>px <?php echo $params['templateRadius']; ?>px;
<?php endif; ?>
		border-bottom: 1px solid #ddd;
	}
	.nav-tabs > li > a:hover {
		border-color: #ddd;
		z-index: 2;
	}
	.nav-tabs.nav-dark > li > a {
		border: 1px solid #333;
	}
	.nav-tabs > li:last-child > a,
	.nav-tabs > .active:last-child > a {
		border-bottom: 1px solid #333;
	}
	.nav-tabs.nav-dark > li > a:hover {
		border-color: #333;
	}
	.nav-pills > li {
		float: none;
	}
	.nav-pills > li > a {
		margin-right: 0;
	}
	.nav-child {
		margin: 0px;
		position: static;
		top: auto;
		left: 0px;
		float: none;
		max-width: none;
		margin: 0px 15px;
		padding: 0px;
		background-color: transparent;
		border: medium none;
		border-radius: 0px;
		box-shadow: none;
		display: none;
	}
	.nav-pills > li > a {
		margin-bottom: 3px;
	}
	.nav-pills  > li:last-child > a {
		margin-bottom: 1px;
	}
	.form-search > .pull-left,
	.form-search > .pull-right {
		float: none;
		display: block;
		margin-bottom: 9px;
	}
	.navigation .nav > li {
		position: static;
	}
	.navigation .nav-child:before,
	.navigation .nav-child:after {
		display: none;
	}
	.navigation .nav-child a {
		padding: 3px 14px;
	}
	.navbar .btn-navbar {
		display: block;
	}
<?php if (isset($params['menuMobileType']) && ($params['menuMobileType'] == "nav-select-left") || ($params['menuMobileType'] == "nav-select-right")) : ?>
	.navbar {
		height: 24px;
	}
	.navbar-inner {
		display: none;
	}
	.navselect {
		display: block;
<?php if (isset($params['menuMobileType']) && ($params['menuMobileType'] == "nav-select-left")) : ?>
		float: left;
<?php else : ?>
		float: right;
<?php endif; ?>
	}
<?php else : ?>
	.navigation .nav .active > .nav-child {
		position: static;
		float: none;
		display: inline-block;
	}
<?php endif; ?>

}
@media (max-width: 980px) {
	.navbar-fixed-top {
		margin-bottom: 0 !important;
	}
	.item-comment .item-image {
		display: none;
	}
	.moduletable {
		padding: 10px;
	}
}
@media (min-width: 768px) and (max-width: 979px) {
	#login-form .input-small {
		width: 62px;
	}
}
dl.tabs {
	float: left;
	margin-bottom: -1px;
}
dl.tabs dt.tabs {
	float: left;
	margin-left: 3px;
	padding: 4px 10px;
	background-color: #F0F0F0;
	border-top: 1px solid #CCC;
	border-left: 1px solid #CCC;
	border-right: 1px solid #CCC;
}
dl.tabs dt:hover {
	background-color: #F9F9F9;
}
dl.tabs dt.open {
	background-color: #FFF;
	border-bottom: 1px solid #FFF;
}
dl.tabs dt.tabs h3 {
	margin: 0;
	font-size: 1.1em;
	font-weight: normal;
}
dl.tabs dt.tabs h3 a {
	color: #0088CC;
}
dl.tabs dt.tabs h3 a:hover {
	color: #005580;
	text-decoration: none;
}
dl.tabs dt.open h3 a {
	color: #000;
	text-decoration: none;
}
div.current dd.tabs {
	margin: 0;
	padding: 10px;
	clear: both;
	border: 1px solid #CCC;
	background-color: #FFF;
}
#helpsite-refresh {
	vertical-align: top;
}
#pop-print {
	float: right;
	margin: 10px;
}
code {
	white-space: pre-wrap;
}
#filter-search {
	vertical-align: top;
}
.editor {
	overflow: hidden;
	position: relative;
}
.search span.highlight {
	background-color: #FFFFCC;
	font-weight: bold;
	padding: 1px 4px;
}
<?php if (!isNullOrEmpty($params,'cssTemplate')) : ?>
<?php echo $params['cssTemplate']; ?>
<?php endif; ?>
