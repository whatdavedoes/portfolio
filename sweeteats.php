<?php 

$page = 'sweeteats';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/sweet_eats-min.jpg";
$title = "Sweet Eats Bakery & Café: A Responsive Website with Admin Functionality";
$highlights = "responsive design, admin area, automated cupcake promotion";
$details = "This project showcases a fictional bakery and cafe website designed to demonstrate my skills in creating modern, user-friendly, and responsive websites with robust administrative features.";
$visitLink = "https://www.sweeteats.whatdavedoes.com/";
$codeLink = "https://github.com/whatdavedoes/sweeteats";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

// Wireframes and Design
$heading = "Design Decisions";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">wireframes</span><span class=\"mr-1 badge badge-pill badge-secondary\">responsive design</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo deesign principles</span><br>This website prioritizes a user-friendly and low-maintenance experience.  With three key pages, it provides essential information for potential customers arriving from online searches. The responsive design ensures optimal viewing across all devices.
<br><br>
For the logo, I leveraged a licensed stock vector cupcake, customizing the color palette to match the vibrant and playful theme. The typeface selection complements the visual identity, echoing the sweetness of the bakery's offerings."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetsketch-min.jpg', 'logo sketches', 6],
    ['img/cafewire-min.jpg', 'wireframes', 6]
];
echo addContentArea($heading, $description, $imgArray);

// Responsive Design
$heading = "Responsive Design with Bootstrap";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><br>Leveraging Bootstrap's framework, I ensured the website seamlessly adapts to various screen sizes. This guarantees a positive user experience on desktops, tablets, and mobile devices.
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">@media query</span><br>
To optimize the mobile layout, I implemented media queries to address layout conflicts.  For example, on smaller screens, \"Free Wifi\" and \"Free Cup O' Joe\" icons were dynamically hidden to prevent overlapping with other elements.  A single, combined icon image was then displayed for these features, improving visual clarity."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetdesktop-min.jpg', 'desktop version', 9],
    ['img/sweetmobile-min.jpg', 'mobile version', 3],
    ['img/mediaquery-min.jpg', '@media queries for icons', 9]
];
echo addContentArea($heading, $description, $imgArray);

// CSS3 animation
$heading = "Engaging CSS3 Animations";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">steps()</span><span class=\"mr-1 badge badge-pill badge-secondary\">sprite sheet</span><span class=\"mr-1 badge badge-pill badge-secondary\">@keyframes</span><br>
The website incorporates eye-catching CSS3 animations to highlight the cupcake promotion when active.  These animations utilize sprite sheets and keyframes to create a seamless color-shifting effect and add a playful touch to the user experience.
<br><br>
For further enhancement, the implementation of a single SVG image for sprinkles could optimize website performance.  Additionally, a randomizer function written in PHP could introduce variety in the number, color, rotation speed, and size of the sprinkles, creating a more organic and dynamic visual effect.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/cupcakepromo-min.jpg', 'screenshot during animation', 6],
    ['img/colorcss-min.jpg', 'CSS for alert box animation', 6],
    ['img/cupcake-ani-min.png', 'sprite sheet used with steps() function', 6],
    ['img/cakecss-min.jpg', 'CSS code to animate sprite sheet', 6],
    ['img/sprinklecss-min.jpg', 'CSS code to animate sprinkles, rotate animation placed on image class, not on a div container like the fade and drop animations', 6]
];
echo addContentArea($heading, $description, $imgArray);

// Automating the cupcake promotion
$heading = "Dynamic Cupcake Promotion Management";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">SQL queries</span><br>
The admin area allows authorized users to effortlessly manage promotional offers. They can activate or deactivate the cupcake promotion and set the targeted day of the week. Behind the scenes, PHP scripts seamlessly interact with the SQLite database to store and retrieve promotion data."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/promocard-min.jpg', 'user interface card in admin area', 6],
    ['img/indexday-min.jpg', 'setting variables for logic on index page, could be refactored with $dayOfWeek array and for loop', 6],
    ['img/updatepday-min.jpg', 'function that sets the day of promotion, similar to the function that sets if the promotion is active', 6],
    //['img/updatepactive-min.jpg', 'function sets if the promotion is active', 6],
    //['img/getpromoactive-min.jpg', 'function returns if the promotion is active', 6],
    ['img/getpromoday-min.jpg', 'function returns the day of the promotion, similar to the function that returns if the promotion is active', 6],
    ['img/addalerthtml-min.jpg', 'adds alert box HTML during promotion, similar logic for logo/alert box animation', 6],
    //['img/addlogohtml-min.jpg', 'adds logo HTML during promotion', 6],
    //['img/addsprinklehtml-min.jpg', 'adds sprinkle HTML during promotion', 12]
];
echo addContentArea($heading, $description, $imgArray);


// Building the admin area
$heading = "User-Friendly Admin Panel";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><span class=\"mr-1 badge badge-pill badge-secondary\">MAMP</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><br>
Leveraging Bootstrap's components, I constructed an intuitive admin area for website management.  This interface empowers authorized users to effortlessly update content across various sections, including site-wide information, user accounts, testimonials, and individual pages.
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">database connection</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><span class=\"mr-1 badge badge-pill badge-secondary\">\$_POST</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP procedure</span><span class=\"mr-1 badge badge-pill badge-secondary\">SQL queries</span><br>
Behind the scenes, a secure PHP scripts connect to the SQLite database, facilitating data storage and retrieval.";


//It updates a SQLite database with the PHP PDO Object.

//I designed the front end admin area layout, database schema with DB Browser for SQLite software, and forms/procedures,"; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetdash-min.jpg', 'admin area', 10],
    ['img/addtestimonial-min.jpg', 'function thats adds a testimonial to the database as a row in the Testimonials table.', 8]
];
echo addContentArea($heading, $description, $imgArray);

// Adding authentication and authorization
$heading = "Secure User Access Control";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">Authentication</span><span class=\"mr-1 badge badge-pill badge-secondary\">Authorization</span><span class=\"mr-1 badge badge-pill badge-secondary\">Composer</span><span class=\"mr-1 badge badge-pill badge-secondary\">JWT</span><span class=\"mr-1 badge badge-pill badge-secondary\">cookie</span><br>
The website implements robust security measures to protect user data and restrict access to administrative features.  JWT (JSON Web Token) technology ensures secure user authentication and authorization.  This approach utilizes industry-standard packages and encryption for added peace of mind.
<br><br>
To streamline administration, the system allows website owners to designate additional administrators.  A designated website owner account cannot be deleted or demoted, safeguarding against accidental or malicious misuse of administrative privileges."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetlogin-min.jpg', 'admin login for authentication', 5],
    ['img/jwt-min.jpg', 'JSON Web Token', 7],
    ['img/cookie-min.jpg', 'a cookie is created with Symfony\'s Cookie class, expire time argument is set to one hour', 6],
    ['img/requireadmin-min.jpg', 'functions that checks authentication', 9],
];
echo addContentArea($heading, $description, $imgArray);


// Thoughts on an approval process
$heading = "Thoughts on an Approval Process";
$description = "A good feature to implement would be the addition of a content approval workflow.  Such a system would empower website owners to maintain editorial control over user-generated content.  This could involve an \"approval\" stage where content creators submit entries for review by the website owner before they are published live."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);

// Final thoughts
$heading = "Key Learnings and Areas for Growth";
$description = "Developing the Sweet Eats Bakery & Café website significantly expanded my technical skillset.  I gained practical experience with Composer for efficient package management, explored the use of Symfony session flash messages, and implemented secure user authentication with JSON Web Tokens (JWTs).<br><br>This project has also sparked my interest in further delving into critical security concepts like cross-site scripting (XSS) and cross-site request forgery (CSRF).  A strong understanding of these areas is paramount for building secure and robust web applications."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);


echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');
?>
    
  
<?php include 'inc/footer.php'; ?>