<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$templateparams = $app->getTemplate(true)->params;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

$cparams = JComponentHelper::getParams('com_media');

// If the page class is defined, add to class as suffix.
// It will be a separate class if the user starts it with a space
?>




<div id="slogan" class="clearfix">
			<div class="sixteen columns">
				<div class="slogan">
					<?php echo $this->escape($this->params->get('page_heading')); ?> <span class="light_gray">Cây</span> <span class="color">Thiên Ngân</span>
					<!--<p>This is <span class="light_gray">our blog</span> and here you<br /> can see <span class="color">what we're up to!</span></p>-->
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="sixteen columns">
				<hr class="line slogan" />
			</div>
		</div>
		
		<div id="page-content" class="full-width container">
		
			<div class="twelve columns">
				
				
				
				<?php foreach ($this->intro_items as $key => &$item) : ?>
					
					<?php
						$this->item = &$item;
						echo $this->loadTemplate('item');
					?>
					
				<?php endforeach; ?>
				
				
				
				
			</div>
			<div id="sidebar" class="four columns">
				<div class="sidebar-widget">
					<h3>Blog Categories</h3>
					<ul class="blog-categories">
						<li><a href="#">Photography</a></li>
						<li><a href="#">Web Developement</a></li>
						<li><a href="#">Typography</a></li>
						<li><a href="#">Best Practices in Design</a></li>
						<li><a href="#">Responsive Design</a></li>
						<li><a href="#">Inspiration</a></li>
					</ul>
				</div>
				<div class="sidebar-widget">
					<h3>Text Info</h3>
					<p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch.</p>
				</div>
				<div class="sidebar-widget">
					<h3>Popular Posts</h3>
					<ul class="popular-posts">
						<li>
							<a class="pp-image" href="#"><img alt="" src="images/imgs/blog_small/blog-small01.jpg" /></a>
							<p><a href="#">Too much time in school</a></p>
							<span>Posted on May 15, 2012</span>
						</li>
						<li>
							<a class="pp-image" href="#"><img alt="" src="images/imgs/blog_small/blog-small02.jpg" /></a>
							<p><a href="#">Too much time in school</a></p>
							<span>Posted on May 15, 2012</span>
						</li>
						<li>
							<a class="pp-image" href="#"><img alt="" src="images/imgs/blog_small/blog-small03.jpg" /></a>
							<p><a href="#">Too much time in school</a></p>
							<span>Posted on May 15, 2012</span>
						</li>
					</ul>
				</div>
				<div class="sidebar-widget">
					<h3>Date Archives</h3>
					<ul class="blog-archives">
						<li><a href="#">January 2103</a></li>
						<li><a href="#">December 2012</a></li>
						<li><a href="#">November 2102</a></li>
						<li><a href="#">October 2012</a></li>
						<li><a href="#">September 2012</a></li>
						<li><a href="#">August 2012</a></li>
					</ul>
				</div>
				<div class="sidebar-widget">
					<h3>Video Shortcode</h3>
					<div class="video-shortcode">
						<iframe width="220" height="124" src="http://www.youtube.com/embed/IJNR2EpS0jw?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

		</div>




