<?php

class Walker_Top_Menu extends Walker {


// Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<li class='menu'><a href='%s'%s>%s</a></li>\n",
            $item->url,
            ( $item->object_id == get_the_ID() ) ? ' class="current-item"' : ' class="not-current"',
            $item->title
        );
    }

}