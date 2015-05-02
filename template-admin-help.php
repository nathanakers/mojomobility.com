<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
require_once( $base_dir . '/admin-cms/cms.php' );
?>


<cms:template title="Help Documentation" clonable="0" executable="1" order="0">
    <cms:editable name="banner" type="message" order="0">
        <h5><strong>Many questions can be answered at <a href="http://couchcms.com" target="_blank">http://couchcms.com</a>.</strong></h5>
        <hr>


        <!-- To the future devloper: you can edit help information html blow here -->
        <h3>Data Entry Best Practices</h3>
        <ul>
            <li>Copy all your work to a text editor (like TextEdit) and set it to plain text. This gets rid of proprietary formatting that messes with HTML.</li>
            <li>Find all double-spaces and replace with single spaces. Double-spacing is poor editing except for with typewriters. Unfortunately many people were taught with this type of formatting even though we are computer-based these days.</li>
            <li>Copy and paste cleaned text to the proper locations.</li>
            <li><strong>For places that ask for List Items:</strong>
                <ul>
                    <li>Copy over <em>without</em> bullet points.</li>
                    <li>Select all items and click the button that looks like bullet points in the editing panel.</li>
                </ul>
            </li>
            <li><strong>PLEASE DO NOT CHANGE FONTS OR FONT COLORS.</strong> These are handled in the website design and will create inconsistensies in the site branding, ultimately making it ugly.</li>
            <li>For best results, make sure no extra hard returns (i.e. new lines from pressing ENTER) are in the edited region.</li>
        </ul>
        <h3>File locations</h3>
        <ul>
            <li>When you upload a patent file (or any file), the files get loaded on the server (not in a database) at <code>/admin-cms/uploads/file/</code></li>
        </ul>
        <h3>Repeatable Regions</h3>
        <ul>
            <li>You'll notice one region that automatically shows up called &ldquo;Default Page for...&rdquo;. This can&rsquo;t be permanently deleted, so make sure it is set to &ldquo;unpublished&rdquo;. To do this, click on the item then in the upper right corner choose <code>Advanced Settings</code>. Then choose &ldquo;unpublished&rdquo; and Save.</li>
        </ul>
        <!-- To the future developer: stop editing help information here -->


        <hr>
        <p>If you want to add more information to this help file, open <em>template-admin-help.php</em> and edit the text/html in any text editor. Make sure that everytime you make changes you refresh the <a href="/template-admin-help.php" target="_blank">edited page</a> in your browser <em>while signed in as an admin</em>. This will update the changes for the admin panel.</li>
    </cms:editable>
</cms:template>


<?php
// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>