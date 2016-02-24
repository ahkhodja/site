/**
 * Created by URTI on 24/02/2016.
 */



$(document).ready(function() {
$('ul li a').click(
    function(e) {
        e.preventDefault(); // prevent the default action
        e.stopPropagation; // stop the click from bubbling
        $(this).closest('ul').find('.selected').removeClass('selected');
        $(this).parent().addClass('selected');
    });
});