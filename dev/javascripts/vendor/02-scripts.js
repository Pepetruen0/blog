jQuery(document).ready(function($){
   var $transformer = $('.transformer'),
       $menutoggle = $('.menu-toggle');

    $('.menu-toggle').on('click', function(event){
        event.preventDefault();
        $transformer.toggleClass('is-open');
    })
});

