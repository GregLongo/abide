<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();
?>
<div class="hero hero--page hero--events">
    <div class= "hero__text">
 <h1 class=" entry-title">Events</h1> 
<!--       <h3><?php the_excerpt(); ?></h3>
 -->  </div>
</div>

<?php
echo tribe( Template_Bootstrap::class )->get_view_html();
get_footer();
