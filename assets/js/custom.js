/* Theme Name: The Project - Responsive Website Template
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Author e-mail:htmlcoder.me@gmail.com
 * Version:1.2.0
 * Created:March 2015
 * License URI:http://support.wrapbootstrap.com/
 * File Description: Place here your custom scripts
 */

$(document).ready(function(){

    $(".scrollDownAboutUs").click(function() {
        $('html,body').animate({
            scrollTop: $("#about-us").offset().top},
            'slow');
    });

    $("#scrollDownContactUs").click(function() {
        $('html,body').animate({
            scrollTop: $("#contact-us").offset().top},
            'slow');
    });
});