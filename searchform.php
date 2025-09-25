<form  role="search" method="get" id="dearchform" clas="searchform" action="<?php echo esc_url(home_url('/'));?>">
    <div>
        <label class="screeb-reader-text" for="s">Search Form:</label>
        <input type="text" value="<?php echo get_search_querry();?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value="Search">
    </div>
</form>