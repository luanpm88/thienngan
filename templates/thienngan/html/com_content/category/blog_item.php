<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

$params =& $this->item->params;
$images = json_decode($this->item->images);
$app = JFactory::getApplication();
$canEdit = $this->item->params->get('access-edit');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>


<article class="blog-post clearfix">
					<div class="post-image variant">
						<a class="img-overlay" href="#">
							<img src="<?php echo htmlspecialchars($images->image_intro); ?>" />
							<div class="img-overlay-div"></div>
						</a>
					</div>
					<div class="post-left">
						<div class="post-meta">
							<a href="#" class="post-date"><span><?php echo date("d", strtotime($this->item->created)); ?></span><?php echo date("M, Y", strtotime($this->item->created)); ?></a>
							<a href="#" class="post-type"></a>
						</div>
					</div>
					<div class="post-right variant">
						<h2 class="post-title"><a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>">
			<?php echo $this->escape($this->item->title); ?></a></h2>
						
						<div class="post-content">
							<?php echo $this->item->introtext; ?>
							<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>" class="read-more">Xem thêm bài viết...</a>
						</div>
					</div>
				</article>

<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayContent; ?>
