<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"  placeholder="Введите название товара" />
        <input type="submit" id="searchsubmit" value="Найти" />
</form>