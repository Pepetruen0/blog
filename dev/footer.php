<footer>
    <div class="footerCont">

        <div class="footerCol">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi doloremque doloribus iure
                maxime necessitatibus nisi odit quam quis quisquam, sunt suscipit. Accusamus, commodi ducimus eaque
                earum modi qui.</p>
        </div>

        <div class="footerCol">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi doloremque doloribus iure
                maxime necessitatibus nisi odit quam quis quisquam, sunt suscipit. Accusamus, commodi ducimus eaque
                earum modi qui.</p>
        </div>

        <div class="footerCol">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi doloremque doloribus iure
                maxime necessitatibus nisi odit quam quis quisquam, sunt suscipit. Accusamus, commodi ducimus eaque
                earum modi qui.</p>
        </div>
    </div>
</footer>



<script src="//localhost:35729/livereload.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script>
    var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: true,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
    });

    $(document).ready(function() {
        $('.tooltip').tooltipster({
            theme: 'tooltipster-shadow',
            offsetY: 60
        });

    });


</script>

</body>
</html>