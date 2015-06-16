<?php get_header(); ?>
    
    <?php $layout_value = get_theme_mod( 'superminimal_layout' ); ?>
    
     <?php if ($layout_value == 'sidebar-left'): ?>

	<div id="content" class="sidebar-left clearfix">
    
    <?php elseif ($layout_value == 'sidebar-right'): ?>
    
    <div id="content" class="sidebar-right clearfix">
    
    <?php else: ?>
    
    <div id="content">
    
    <?php endif; ?>
	    
	    
	    <div class="content-block main-content">
            <h2>Main Content</h2>
	        <p>
	            This is a paragraph inside the main content. <a href="#">This is an anchor</a> so that we have something else to customize using Kirki.
	        </p>
	    </div>
	    
	    <div class="content-block sidebar">
            <h3>Sidebar</h3>
	        <p>
	            This is a second paragraph inside the sidebar.
	        </p>
	    </div>
		
	</div><!-- /#content -->

<?php get_footer(); ?>