<?php 

$page = 'ironpdf';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/ironpdf_featured-min.jpg";
$title = "The Iron PDF Generator";
$highlights = "jsPDF, \$_POST, pdf configuration form";
$details = "This is a free tool designed for personal trainers to package their client's stats and goals into a PDF file. Notable developments include dynamically adding/removing form elements, requiring form fields, filtering input, and sending submitted data to a new PDF configuration form.";
$visitLink = "https://ironpdf.whatdavedoes.com/";
$codeLink = "https://github.com/whatdavedoes/ironpdf";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

//Layout and design
$heading = "Layout &amp; Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">Vector</span><span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><br>I started by doing some research on what type of calculations were common for personal trainer's to use with their client's data. I noticed most formulas/online tools use standard(ft, in, lbs) or metric(cm, kg) units so I added a select element to the form so the user could choose their unit preference. I also added an optional text field for a title and two optional text areas for comments so the trainer could personalize the pdf.
<br><br>
I speed up the design process by using a stock vector with proper licsensing for the logo. I adapted it to my needs and decided on a bright green color that you might find in a gym with a dark gray. I was going for the handwritten chalkboard feel you might find in an old school gym so I opted for a handwriting font, dark chalkboard type gray, and light gray for the placeholders that could resemble chalk. I also used the green from the logo in the forms for consistency.";
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
$heading = "Code Snippets";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><br>Below is some code that runs when there are no errors on form submission. Each include statement has a Bootstrap card component representing a health metric(BMI, metabolic rates) or section of the PDF(title, comments). Each card component is placed in it's own file to separate concerns. The code for the ideal body weight card is shown below. It is populated by the populateIbw() function which calls on the calcIbw() function. The calcIbw() function takes arguments to return an ideal weight range. Global variables(gender, units) populated by the user's form input are used in this function.";
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
$heading = "Generating the PDF";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><span class=\"mr-1 badge badge-pill badge-secondary\">jsPDF</span><span class=\"mr-1 badge badge-pill badge-secondary\">base64</span><br>I used the jsPDF library for generating the PDF in JavaScript. I set positioning variables to be passed as arguments to the methods of the doc(PDF) Object. I noticed new pages were not automatically added and content would get cut off, so I added a max page height variable that I would use in logic with the Y axis variable to check if a new page was needed.
<br><br>
Since I could not link to images within the PDF, I used an online conversion tool to convert images to base64.";
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
$description = "In this project I learned about converting images to base64 to save on http requests, or when requests are not possible. I also gained confidence working with arrays and writing functions with Javascript and PHP. I gained an understanding of variable scope. The JavaScript variables I declared(let keyword) were global and could be used in functions, while PHP variables are in the local scope and I have to use the global keyword within functions for them to be available.
<br><br>
There was poor separation of functions that populate HTML, functions that make calculations, and the calling of functions. I need a better understanding of best practices for organizing code and consistency in structuring my code. There is an opportunity for refactoring here.
<br><br>
I think a good addition after refactoring would be adding a 2nd pdf template for creating workouts. It could include a muscle diagram with primary/secondary muscles worked, workout circuits/groups that could be repeated, and a Javascript auto-complete feature for exercise name titles.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
];
echo addContentArea($heading, $description, $imgArray);


echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');
?>
    
  
<?php include 'inc/footer.php'; ?>