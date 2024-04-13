<?php 

$page = 'nibtrek';

include 'inc/header.php'; 

?>

<div class="alert alert-warning" role="alert">
  <strong>UNDER DEVELOPMENT:</strong>
  Explore a sneak peek of the interface and development process below.
</div>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/nibtrek_landing.jpg";
$title = "NibTrek: A Start Up by Dave";
$highlights = "automated content, interactive map manager, customer engagement";
$details = "A suite of web applications(under development) that help businesses automate tasks, manage projects, and connect with their audience in innovative ways.";
$visitLink = "https://www.nibtrek.com/";
$codeLink = "";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("OptBox:");

?>

<!-- embedded video -->
<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/934158098?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Web Content Management by NibTrek"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<?php

// Wireframes and Design
$heading = "A Render Engine and More";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">design principles</span><span class=\"mr-1 badge badge-pill badge-secondary\">organization</span><span class=\"mr-1 badge badge-pill badge-secondary\">data structure</span><br>OptBox simplifies web content creation and management. It was developed to seamlessly integrate with other NibTrek applications for a unified experience."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/opt-logo.png', 'OptBox logo', 6],
    ['img/opt-wireframes-iterations.jpg', 'front-end design and assets', 6],
    ['img/opt-trello_board.jpg', 'staying organized with trello', 6],
    ['img/opt-trello2.jpg', 'trello board note', 6],
    ['img/opt-api.jpg', 'front-end data structure', 6],
    ['img/opt-golden-ratio.jpg', 'golden ratio circles for design', 6],
    ['img/opt-collapse-vs-code.jpg', 'OptBoxArea class consisting of 3104 lines of code', 6],
    
    ['img/opt-console-logs.jpg', 'console logs for fixing bugs', 6],
    ['img/opt-dev-console.jpg', 'console logs mid-dev', 6],
    ['img/opt-format_function.jpg', 'render engine functionality', 6],
    ['img/opt-nav-design.jpg', 'early nav design', 6],
    ['img/opt-mobile.jpg', 'mobile page', 6]
];
echo addContentArea($heading, $description, $imgArray);


echo addBigTxt("On the Horizon:");

$heading = "NibTrek Maps";
$description = "NibTrek Maps will allow you to create interactive maps, while OptBox provides a user-friendly way to add content to specific points of interest on those maps."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/map-logo.png', 'NibTrek Maps concept logo', 12]
];
echo addContentArea($heading, $description, $imgArray);

echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');
?>
    
  
<?php include 'inc/footer.php'; ?>