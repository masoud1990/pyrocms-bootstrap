<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Theme_Bootstrap extends Theme
{
	public $name   = 'Bootstrap';
	public $author   = 'Ported by Hugh Fletcher';
	public $author_website = 'http://ikreativ.com/';
	public $website   = 'http://ikreativ.com/';
	public $description  = 'An HTML5 base template filled with goodies to get you up and running quickly.';
	public $version   = '1.0';
	public $options   = array(
			'comments_req_logon' => array(
				'title'			=> 'Comments - Require Registration/Log In',
				'description'           => 'Users must be registered and logged in to comment.',
				"default" 		=> 'no',
				'type'			=> 'select',			
				"options" 		=> 'no=No|yes=Yes',
				'is_required'           => TRUE

			),
                        'use_bootswatch' => array(
				'title'			=> 'Use Bootswatch.com Themes',
				'description'           => 'Note: This may override other styles set in the theme options panel.',
				"default" 		=> 'default',
				'type'			=> 'select',			
				"options" 		=> 'default=Bootstrap Default|amelia=Amelia|cerulean=Cerulean|cyborg=Cyborg|journal=Journal|readable=Readable|simplex=Simplex|slate=Slate|spacelab=Spacelab|spruce=Spruce|superhero=Superhero|united=United',
				'is_required'           => TRUE

			),
	);
			
						
	// $options[] = array( "name" => "Main Body Text",
	// 					"desc" => "Used in P tags.",
	// 					"id" => "main_body_typography",
	// 					"std" => array('face' => '"Helvetica Neue",Helvetica,Arial,sans-serif','style' => 'normal','color' => '#404040'),
	// 					"type" => "wpbs_typography");
						
	// $options[] = array( "name" => "Link Color",
	// 					"desc" => "Default used if no color is selected.",
	// 					"id" => "link_color",
	// 					"std" => "",
	// 					"type" => "color");
					
	// $options[] = array( "name" => "Link:hover Color",
	// 					"desc" => "Default used if no color is selected.",
	// 					"id" => "link_hover_color",
	// 					"std" => "",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Link:active Color",
	// 					"desc" => "Default used if no color is selected.",
	// 					"id" => "link_active_color",
	// 					"std" => "",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Top Nav",
	// 					"type" => "heading");
						
	// $options[] = array( "name" => "Position",
	// 					"desc" => "Fixed to the top of the window or scroll with content.",
	// 					"id" => "nav_position",
	// 					"std" => "fixed",
	// 					"type" => "select",
	// 					"class" => "mini", //mini, tiny, small
	// 					"options" => $fixed_scroll);
						
	// $options[] = array( "name" => "Top nav background color",
	// 					"desc" => "Default used if no color is selected.",
	// 					"id" => "top_nav_bg_color",
	// 					"std" => "#222222",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Check to use a gradient for top nav background",
	// 					"desc" => "Use gradient",
	// 					"id" => "showhidden_gradient",
	// 					"std" => "1",
	// 					"type" => "checkbox");
	
	// $options[] = array( "name" => "Bottom gradient color",
	// 					"desc" => "Top nav background color used as top gradient color.",
	// 					"id" => "top_nav_bottom_gradient_color",
	// 					"std" => "#333333",
	// 					"class" => "hidden",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Top nav item color",
	// 					"desc" => "Link color.",
	// 					"id" => "top_nav_link_color",
	// 					"std" => "#BFBFBF",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Top nav item hover color",
	// 					"desc" => "Link hover color.",
	// 					"id" => "top_nav_link_hover_color",
	// 					"std" => "#FFFFFF",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Top nav dropdown item color",
	// 					"desc" => "Dropdown item color.",
	// 					"id" => "top_nav_dropdown_item",
	// 					"std" => "#555555",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "Top nav dropdown item hover bg color",
	// 					"desc" => "Background of dropdown item hover color.",
	// 					"id" => "top_nav_dropdown_hover_bg",
	// 					"std" => "#0088CC",
	// 					"type" => "color");
	
	// $options[] = array( "name" => "Search bar",
	// 					"desc" => "Show search bar in top nav",
	// 					"id" => "search_bar",
	// 					"std" => "1",
	// 					"type" => "checkbox");
						
	// $options[] = array( "name" => "Theme",
	// 					"type" => "heading");
						
	// $options[] = array( "name" => "Bootswatch.com Themes",
	// 					"desc" => "Use theme from bootswatch.com. Note: This may override other styles set in the theme options panel.",
	// 					"id" => "showhidden_themes",
	// 					"std" => "0",
	// 					"type" => "checkbox");
						
	// $options[] = array( "name" => "Select a theme",
	// 					"id" => "wpbs_theme",
	// 					"std" => "default",
	// 					"class" => "hidden",
	// 					"type" => "images",
	// 					"options" => $theList
	// 					);
						
	// $options[] = array( "name" => "Refresh themes from Bootswatch",
	// 					"type" => "themecheck",
	// 					"id" => "themecheck"
	// 					);
						
	// $options[] = array( "name" => "Other Settings",
	// 					"type" => "heading");
						
	// $options[] = array( "name" => "Homepage page template hero-unit background color",
	// 					"desc" => "Default used if no color is selected.",
	// 					"id" => "hero_unit_bg_color",
	// 					"std" => "#F5F5F5",
	// 					"type" => "color");
						
	// $options[] = array( "name" => "'Comments are closed' message on pages",
	// 					"desc" => "Suppress 'Comments are closed' message",
	// 					"id" => "suppress_comments_message",
	// 					"std" => "1",
	// 					"type" => "checkbox");
						
	// $options[] = array( "name" => "Blog page 'hero' unit",
	// 					"desc" => "Display blog page hero unit",
	// 					"id" => "blog_hero",
	// 					"std" => "1",
	// 					"type" => "checkbox");
	
	// $options[] = array( "name" => "CSS",
	// 					"desc" => "Additional CSS",
	// 					"id" => "wpbs_css",
	// 					"std" => "",
	// 					"type" => "textarea");

}

/* End of file theme.php */
