<?php

class td_module_related_posts extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes(array("td_mod_related_posts")); ?>">
            <div class="item-details">
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/chevron-right.svg' ?>" style="margin-right: 16px;">
                <?php echo $this->get_title(10);?>
            </div>
        </div>
        <?php return ob_get_clean();
    }
}