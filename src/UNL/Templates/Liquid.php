<?php
/**
 * Template Definition for liquid.dwt
 * 
 * @package UNL_Templates
 * 
 */
require_once 'UNL/Templates.php';

/**
 * Liquid width template object
 * 
 * @package UNL_Templates
 *
 */
class UNL_Templates_Liquid extends UNL_Templates 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__template = 'Liquid.tpl';                      // template name
    public $doctitle = "<title>UNL | Department | New Page</title>";                       // string()  
    public $head = "<script type=\"text/javascript\"> var navl2Links = 0; //Default navline2 links to display (zero based counting) </script>";                           // string()  
    public $breadcrumbs = "<!-- WDN: see glossary item \'breadcrumbs\' --> <ul> <li class=\"first\"><a href=\"http://www.unl.edu/\">UNL</a></li> <li><a href=\"http://www.unl.edu/\">Department</a></li> <li>New Page</li> </ul>";                    // string()  
    public $collegenavigationlist = "";          // string()  
    public $titlegraphic = "<h1>Department</h1> <h2>Taglines - We Do The Heavy Lifting</h2>";                   // string()  
    public $navlinks = "<!--#include virtual=\"../sharedcode/navigation.html\" -->";                       // string()  
    public $leftRandomPromo = "<div class=\"image_small_short\" id=\"leftRandomPromo\"> <a href=\"#\" id=\"leftRandomPromoAnchor\"><img id=\"leftRandomPromoImage\" alt=\"\" src=\"/ucomm/templatedependents/templatecss/images/transpixel.gif\" /></a> <script type=\"text/javascript\" src=\"../sharedcode/leftRandomPromo.js\"></script> </div>";                // string()  
    public $leftcollinks = "<!-- WDN: see glossary item \'sidebar links\' --> <!--#include virtual=\"../sharedcode/relatedLinks.html\" -->";                   // string()  
    public $maincontentarea = "<p style=\"margin:20px; border:3px solid #CC0000;padding:10px; text-align:center\"> <strong>Delete this box and place your content here.</strong><br /> Remember to validate your pages before publishing! Sample layouts are available through the <a href=\"http://www.unl.edu/webdevnet/\">Web Developer Network</a>. <br /> <a href=\"http://validator.unl.edu/check/referer\">Click here to check Validation</a> </p>";                // string()  
    public $optionalfooter = "";                 // string()  
    public $footercontent = "<!--#include virtual=\"../sharedcode/footer.html\" -->";                  // string()  

    /* Static get */
    function staticGet($k,$v=NULL) { return UNL_DWT::staticGet('UNL_Templates_Liquid',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
