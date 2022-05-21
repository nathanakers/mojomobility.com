<?php
// BEGIN FUNCTIONS INCLUDES FILE
// @has: functions + variables
// @requires: nothing else


// Current Page URL
// @var: string
// NOTE - Brian Zoetewey wrote this. not quite sure what it's for, but I keep it around cause it did something.
$currentScript = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);

// Project Name
// @var: array
// NOTE - this sets up all basic project-centric data to reuse wherever.
// NOTE - with Couch CMS (currently implemented), other global information is in template_globals.php
$project = array(
	'meta-description'	=> 'Mojo Mobility delivers position-free wireless charging technology to OEMs, which enables multiple mobile devices to charge simultaneously without the restriction of exact positioning of the transmitter and receiver. Traditional wireless charging has been limited by the necessity of precise alignment of the transmitter and receiver. We partner with OEMs worldwide to provide cutting-edge, production-ready wireless charging solutions.',
	'base-url'			=> 'localhost/dev.mojomobility.com/'
);

// Main Menu Page List
// @var: array
// NOTE - make sure all these are included in both the @var $pages and the page list in the .htaccess file
// NOTE - the order they are listed is the order they appear in the menu
$menuPages = array('technology', 'solutions', 'patents', 'careers', 'contact');

// Non Menu Active Pages
// @var: array
// NOTE - these pages don't exist in the main menu, but do exist as linkable pages
$nonMenuActivePages = array('home');

// All Active Pages
// @var: array
// NOTE - this merges menu and non-menu pages to get one list of all active pages
$allActivePages = array_merge($nonMenuActivePages, $menuPages);

// Reverse All Active Pages Order
// @var: array
// NOTE - a reversal of @var $menuPages
$reverseAllActivePagesOrder = array_reverse($allActivePages);


// All Pages
// @var: array
//	:array identifier
//		:title 		= browser title
//		:name		= link name
//		:phpScript	= actual file name
//		:url		= desired page url (should mirror what's in .htaccess)
//		:in_dropdn	= optional, answer = dropdown name
//		:publish	= optional, answer looked for is "no". used to grey-out pages that are in progress (or being updated live)
$pages = array(
	'404' => array(
		'title'		=> 'Error: Not Found',
		'name'		=> '404 Error: Not Found',
		'phpScript'	=> '404.php',
		'url'		=> '404',
	),

	'home' => array(
		'title'		=> 'Home',
		'name'		=> '<i class="icon-home"></i>',
		'phpScript'	=> 'home.php',
		'url'		=> 'home',
	),

	'technology' => array(
		'title' 	=> 'Technology',
		'name'		=> 'Technology',
		'phpScript'	=> 'technology.php',
		'url'		=> 'technology',
	),

	'solutions' => array(
		'title' 	=> 'Solutions',
		'name'		=> 'Solutions',
		'phpScript'	=> 'solutions.php',
		'url'		=> 'solutions',
	),

	'patents' => array(
		'title' 	=> 'Patents',
		'name'		=> 'Patents',
		'phpScript'	=> 'patents.php',
		'url'		=> 'patents',
	),

	'careers' => array(
		'title' 	=> 'Careers',
		'name'		=> 'Careers',
		'phpScript'	=> 'careers.php',
		'url'		=> 'careers',
	),

    'contact' => array(
        'title'     => 'Contact',
        'name'      => 'Contact',
        'phpScript' => 'contact.php',
        'url'       => 'contact',
    ),

);


// Find Current Page
// @script
// NOTE - this matches the outcome of @var $currentScript with the @var $pages phpScript
$currentPage = null;
$currentPageID = null;
foreach ($pages as $ID => $page) {
	if ($page['phpScript'] == $currentScript) {
		$currentPage = $page;
		$currentPageID = $ID;
	}
}


// Main Menu HTML
// @script
// NOTE - this creates the main menu HTML and sets unique classes for each link, and sets the current page menu to active
// NOTE - item is a way of getting the list-items more global - used for dropdowns
// NOTE - the menu only uses <li> tags because of the way foundation uses classes. add <ul class="inline-list left/right"> for inline menus.
/*
// sets up dropdown menu
$drop_items_company = array();
*/
$menu = '
<nav id="menu-main" class="menu"><ul class="nav nav-pills">';
foreach ($menuPages as $ID) {
	$page = $pages[$ID];
	$class = $ID;
	if ($ID == $currentPageID)
		$class .= ' active';
	if ($page['publish'] == 'no')
		$class .= ' unfinished';
	$item = sprintf('<li class="link-%s"><a href="%s" title="%s"><span>%s</span></a></li>' . "\n", $class, $page['url'], $page['title'], $page['name']);
	// add item to dropdown array
	/*
	if ($page['in_dropdn'] == 'company')
		$drop_items_company[] = $item;
	// or else add it to the main nav
	else
	*/
		$menu .= $item;
};
$menu .=
	/*
	// add dropdown menu
	'<li class="dropdown-company dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" title="Company"><span>Company <i class="icon-caret-down"></i></span></a>';
		/*
		// create dropdown menu
		$menu .= '<ul class="dropdown-menu">';
			foreach ($drop_items_company as $ID) {
				$menu .= $ID;
			};

			$menu .= '
		</ul>
	</li>';
	*/

'</ul></nav>';


// Regular Alt Menu HTML
// @script
// NOTE - this is the same code as $menu, except it uses the Page Title for the Name
$menuFull = '<nav id="menu-full" class="menu"><ul class="nav nav-pills">';
foreach ($allActivePages as $ID) {
	$page = $pages[$ID];
	$class = $ID;
	if ($ID == $currentPageID)
		$class .= ' active';
	$menuFull .= sprintf('<li class="link-%s"><a href="%s" title="%s"><span>%s</span></a></li>' . "\n", $class, $page['url'], $page['title'], $page['title']);
};
$menuFull .= '</ul></nav>';


// Reverse Alt Menu HTML
// @script
// NOTE - this is the same code as $menu, but reversed and it uses the Page Title for the Name
$menuFullReverse = '<nav id="menu-full-reverse" class="menu"><ul class="nav nav-pills">';
foreach ($reverseAllActivePagesOrder as $ID) {
	$page = $pages[$ID];
	$class = $ID;
	if ($ID == $currentPageID)
		$class .= ' active';
	$menuFullReverse .= sprintf('<li class="link-%s"><a href="%s" title="%s"><span>%s</span></a></li>' . "\n", $class, $page['url'], $page['title'], $page['title']);
};
$menuFullReverse .= '</ul></nav>';


// Calls #modal-contact, in footer
$contactDiscuss = '
<div class="contact-discuss-wrap">
	<a class="btn btn-large btn-inverse btn-mojoblue btn-mojostyleflat" href="#modal-contact" data-toggle="modal">
		<i class="icon-envelope"></i>
		Contact us to discuss your application
	</a>
</div>';


// Email list
// @var: array
//	:array identifier
//		:name 		= email name
//		:address	= email address
$emails = array(
    'sales' => array(
        'name'      => 'Sales / General',
        'address'   => 'sales@mojomobility.com',
    ),
	'hr' => array(
		'name'      => 'HR / Careers',
		'address'   => 'hr@mojomobility.com',
	),
	'accounting' => array(
		'name'      => 'Accounting',
		'address'   => 'accounting@mojomobility.com',
	),
	'business' => array(
		'name'      => 'Business Development',
		'address'   => 'bus.dev@mojomobility.com',
	),
);


// Email List
// @script
$emailList = '
<div class="email-group">';
foreach ($emails as $email) {
	$e = $email[$ID];
	$emailList .= sprintf('<h5>%s</h5>' . "\n" . '<a href="mailto:%s">%s</a>' . "\n", $e['name'], $e['address']);
};
$emailList .= '</div>';


// Address
$contactInfo = '
3350 Scott Blvd.</br>
Bldg. 37A<br>
Santa Clara, CA, 95054<br>
<a href="tel:6504460004">(650) 446-0004</a><br>';


// Modals
$modalContact = '
<div id="modal-contact" tabindex="-1" role="dialog" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<i class="icon-remove"></i>
		</button>
		<h3>Contact Info</h3>
	</div>
	<div class="modal-body big">
		<img src="/assets/images/logomark-color.png" alt="Mojo Mobility logo"/>
		<h4>Contact Info</h4>
		<p>';
			$modalContact .= echo $contactInfo;
			$modalContact .= '<a href="mailto:sales@mojomobility.com">mailto:sales@mojomobility.com</a><br>
		</p>
		<hr>
		<a href="contact" class="btn btn-link">View all contact info&nbsp;→</a>
	</div>
</div>';



// END FUNCTIONS INCLUDES FILE
?>
