<?php 

$page = 'nibtrek';

include 'inc/header.php'; 

?>

<?php 

include 'inc/entrydetails.php';

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/nibtrek_featured-min.jpg";
$title = "NibTrek Website &amp; Logo";
$highlights = "CSS3 animations, dynamic forms with \$_GET and \$_POST, custom logo";
$details = 'I designed NibTrek around what a successful digital agency\'s website and brand may look like. To be convinicing, I even added some of my real-world freelance design testimonials. While ficticious, building this website let me implement $_GET and $_POST outside of my learning path and studies. I also had the chance to practice CSS animations, and gain familiarity using Bootstrap\'s classes to quickly change spacing(margin &amp; padding) of HTML elements.';
$visitLink = "https://www.nibtrek.com/";
$codeLink = "";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

// Wireframes
$heading = "Wireframes &amp; Design Considerations";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">wireframes</span><br>I designed this website around the idea of getting leads to submit project request forms. To maintain interest and collect qualifying leads, I used a simple layout keeping the important points and call to action above the fold on the home page. Informative content with call to actions are throughout the website."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/nb_sketches-min.jpg', 'snippets from home, services, and contact pages', 6]
];
echo addContentArea($heading, $description, $imgArray);


// Development, Design, and Content Writing
$heading = "Development, Design, &amp; Content Writing";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">MAMP</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTML/CSS</span><span class=\"mr-1 badge badge-pill badge-secondary\">online image optimizer</span><br>Before jumping into the code, I gathered assets such as color values from the logo design, any content writing I had done so far, and image icons with appropriate licsensing. I used MAMP to act as a server to work locally with PHP. Bootstrap's predefined classes and PHP templating helped speed up development time and maintain consistency throughout the website. I used Lorem Ipsum as dummy text during development and continued content writing throughout the development process. An icon set with appropriate licsensing was used for selecting, and adapting icons to the website. All images were uploaded to an online image optimizer to reduce size while maintaining quality for fastest possible loading speeds."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/strap_hm-min.jpg', 'using Bootstrap for responsive design', 7],
    ['img/php_require-min.jpg', 'PHP code block on home page', 5]
];
echo addContentArea($heading, $description, $imgArray);


// Adding Animations
$heading = "CSS3 Animations";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTML/CSS</span><span class=\"mr-1 badge badge-pill badge-secondary\">@keyframes</span><span class=\"mr-1 badge badge-pill badge-secondary\">sprite sheet</span><span class=\"mr-1 badge badge-pill badge-secondary\">PNG</span><br>I added properties to CSS classes to animate HTML elements on the website. A technical example is defining rotate values(based on percentages) on a transform property inside of a @keyframes rule. The @keyframes label is used as the animation-name property's value that exists in a CSS class. I added animation when a page loaded or I used a JavaScript event listener to dynamically add CSS classes to trigger an animation."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/logo_parts-min.jpg', 'exporting separate pieces of logo as PNG for home page animation', 8],
    ['img/home_ctn-min.jpg', 'a container for the images that make up the homepage animation', 4],
    ['img/nb_sprite-min.jpg', 'a sprite sheet used with the steps() function to create an animation on the services page', 8]
];
echo addContentArea($heading, $description, $imgArray);


// Dynamic forms
$heading = "Dynamic Project Request Forms";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">\$_GET</span><span class=\"mr-1 badge badge-pill badge-secondary\">filter input</span><span class=\"mr-1 badge badge-pill badge-secondary\">SMTP</span><span class=\"mr-1 badge badge-pill badge-secondary\">mPDF PHP library</span><br>For an accurate project quote or proposal, the scope of the project must be understood. For this reason, I created three project request forms. Depending on the needs of the potential client, they would be directed to one of these forms. Three buttons are presented each triggering a JavaScript function to show the correct form. To the user it appears as one seamless form. If a user arrives on the page via a website package link, data is sent in the URL. In this case, \$_GET collects the data in the URL, a PHP variable is set, the website services form is shown automatically, and states what package the user is interested in. Otherwise the user is not made aware of the website packages. PHP trim and filter_input functions are used to filter the input. The form is submitted with the POST method and the send PHP procedure uses SMTP. I also used the mPDF PHP library to send a pdf attachment with the form details to my email. Since publishing, I have gotten fairly consistent bots submitting these forms and appearing in my email.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/nb_pr-min.jpg', 'project request page with no data in the URL', 7],
    ['img/nb_pr2-min.jpg', 'form selected and packaged listed when data is sent via URL for $_GET to collect', 5]
];
echo addContentArea($heading, $description, $imgArray);


// The Logo
$heading = "Logo Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo design principles</span><br>The color blue was chosen because of the associations of trust, calming, and intelligence. Blue is a common choice for tech companies. The sharp points and triangle shape add an aggressive, determined, and dynamic association. The combination of the color blue, sharp points, white space, and clean font was in effort of creating an image of a progressive, trusting, and on the \"cutting edge.\""; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/nb_logo-min.jpg', 'designed with Affinity Designer', 6]
];
echo addContentArea($heading, $description, $imgArray);

echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>
  
<?php include 'inc/footer.php'; ?>