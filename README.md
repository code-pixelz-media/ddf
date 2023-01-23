# ddf (Dashboard Design Framework)
ddf is a free to use HTML/CSS framework to create your own dashboard page in WP-Admin Dashboard area.
It has basic styling, elements and columns taken care of, so for every new plugin/theme that you create you do not have to create a dashboard design.

If you want to update anything, please make a Pull request and do not directly push to master.


#PR are welcome.

#How to extend DDF to add new Menu Items?
<code>
if ( ! class_exists( 'DDF_EXTEND' ) ) {

	class DDF_EXTEND{
        function __construct() {

            add_action( 'ddf_settings_tab_menu',array($this,'new_menu_item' ));
            add_action( 'ddf_settings_tab_content', array($this, 'new_tab_content' ));
           
        }



        //Sample function to add new menu item.
        //NOTE TO SELF: IMPROVE THIS TO TAKE PARAMETERS ONLY INSTEAD OF ADDING LI HERE.
        public function new_menu_item() {
            echo '<li class="nav-tab"><a href="#slack" class="dashicons-before dashicons-editor-alignleft">DDF Extend</a></li>'; 
        }


        //Sample function to add new tab content item.
        //NOTE TO SELF: IMPROVE THIS TO TAKE PARAMETERS ONLY INSTEAD OF ADDING LI HERE.
        public function new_tab_content() {
            echo "Your Tabbed content will go here";
        }

    }
}
$ddf_extend = new DDF_EXTEND();
</code>