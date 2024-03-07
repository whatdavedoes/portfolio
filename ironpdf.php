<?php 

$page = 'ironpdf';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/ironpdf_featured-min.jpg";
$title = "Streamlining Client Management for Personal Trainers";
$highlights = "jsPDF, \$_POST, pdf configuration form";
$details = "I built a free tool that streamlines client management for personal trainers. It allows them to effortlessly package client statistics and goals into professional PDF reports. Key features include dynamic form creation (adding/removing elements as needed), mandatory fields for crucial information, data validation to ensure accuracy, and an intuitive flow that transitions the information into a customizable PDF document.";
$visitLink = "https://ironpdf.whatdavedoes.com/";
$codeLink = "https://github.com/whatdavedoes/ironpdf";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

//Layout and design
$heading = "Layout &amp; Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">Vector</span><span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><br>Research identified common calculations used by trainers (standard/metric units). The tool offers a user-friendly selection for unit preference. Recognizing the value of personalization, optional fields allow trainers to add titles and comments, tailoring reports for each client.
<br><br>
A licensed stock vector logo was adapted for a professional look. The color scheme (vibrant gym green with dark gray) and font choices (handwritten, chalkboard-inspired) create a classic gym aesthetic. The logo's green is used for forms, ensuring visual consistency.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/iron_notes-min.jpg', 'initial notes/brainstorming', 4],
    ['img/pdf_front-min.jpg', 'layout/design', 8],
    ['img/home_logic-min.jpg', 'initial planning logic', 4]
];
echo addContentArea($heading, $description, $imgArray);


//---------------- 
$heading = "Explanation of Programming Logic";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><br>Given the screenshot below, when a user visits the page, the else block will run. This would include the HTML form for the trainer to input their client's data. The method attribute of the form is POST while the action attribute is index.html(same page). Given these attributes, when a user submits the form, they will be sent to the same page and the first if statement will be true, running the code.
<br><br>
If there was an error(missing required field, invalid values), the 2nd if statement would remain false and the code in the else block would run again. Since PHP variables were initialized for the fields, an error message would be printed to the screen in a Bootstrap alert box and input values would be repopulated.
<br><br>
Once the form is submitted with no errors, the first if block runs again, then the 2nd if statement becomes true and the code block runs.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/h_logic-min.jpg', 'current logic overview', 8]
];
echo addContentArea($heading, $description, $imgArray); 


//---------------- 
$heading = "Modular PDF Generation with Bootstrap Cards";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><br>This code snippet demonstrates error-free form submission processing.  The logic leverages Bootstrap card components, each housed in separate files for improved maintainability. These cards represent health metrics (BMI, metabolic rates) and other report sections (title, comments).<br><br>The provided code showcases the ideal body weight card generation. It utilizes the populateIbw() function, which in turn calls the calcIbw() function. The latter calculates the ideal weight range based on user-provided information (gender and units) stored in global variables populated during form submission.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/inc_cards-min.jpg', 'files containing Bootstrap\'s card component with configure functionality', 4],
    ['img/ibw_card-min.jpg', 'code inside of "inc/ibw.php"', 8], 
    ['img/ibw_code-min.jpg', 'functions used to calculate ideal body weight ranges and display the values in a pdf configuration card', 9]  
];
echo addContentArea($heading, $description, $imgArray);


// Equivalent Activities
$heading = "Equivalent Activities Functionality";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><br>If the trainer's client has a goal to lose weight, that weight can be represented in calories to burn with the 3,500 calories per  pound logic. If their client has a favorite activity that is on the list, they can include it and how many hours it would take to burn those calories.
<br><br>
These activities have MET values(2011 Compendium of Physical Activities) to estimate how many calories are burned. Since weight is used in the formula as well, the calculation must be used for each pound lost until the goal weight is reached.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/activityarray-min.jpg', 'top portion of the activity array, numbers represent MET values', 6],
    ['img/activities-min.jpg', 'some options on the equivalent activities card', 6],
    ['img/dtogoal-min.jpg', 'function to calculate minutes till goal weight', 9]
];
echo addContentArea($heading, $description, $imgArray);


//Generating the PDF
$heading = "Dynamic PDF Creation with jsPDF";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><span class=\"mr-1 badge badge-pill badge-secondary\">jsPDF</span><span class=\"mr-1 badge badge-pill badge-secondary\">base64</span><br>This section details the utilization of jsPDF for robust PDF generation in JavaScript. To ensure precise element placement within the document, positioning variables were meticulously crafted and passed as arguments to the doc (PDF object) methods.<br><br>A crucial challenge emerged: automatic page creation within the PDF. To prevent content from being truncated, a maxPageHeight variable was implemented. This variable, in conjunction with the Y-axis position, dictates when a new page should be initiated, ensuring seamless content flow across multiple pages.<br><br>Furthermore, as direct image embedding wasn't feasible, a resourceful approach was adopted. Images were converted to Base64 format using an online tool, enabling their successful incorporation into the generated PDF.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/geninitial-min.jpg', 'initializing some variables for the genPDF() function', 6],
    ['img/base64-min.jpg', 'initializing a variable in JavaScript with a base64 encoded image', 6],
    ['img/activity-min.jpg', 'code snippet to populate pdf with selected activities(inside if statement)', 9],
    ['img/healthpdf-min.jpg', 'Example Generated PDF', 9]
];
echo addContentArea($heading, $description, $imgArray);


// Final Thoughts
$heading = "Final Thoughts";
$description = "This project boosted my skills in Base64 encoding (reducing HTTP requests) and working with arrays, functions, and variable scope (JavaScript's let vs. PHP's global). However, function separation for populating HTML, calculations, and calls needs improvement. Refactoring for better organization and consistency is key.<br><br>I think a good addition after refactoring would be adding a 2nd pdf template for creating workouts. It could include a muscle diagram with primary/secondary muscles worked, workout circuits/groups that could be repeated, and a Javascript auto-complete feature for exercise name titles.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
];
echo addContentArea($heading, $description, $imgArray);


echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');
?>
    
  
<?php include 'inc/footer.php'; ?>