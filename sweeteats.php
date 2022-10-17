<?php 

$page = 'sweeteats';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/sweet_eats-min.jpg";
$title = "Sweet Eats Website";
$highlights = "responsive design, admin area, automated cupcake promotion";
$details = "I designed this fictional bakery and caf&eacute; website to demonstrate my ability to create a modern, dynamic, and responsive website with administrative functionality.";
$visitLink = "https://www.sweeteats.nibtrek.com/";
$codeLink = "https://github.com/whatdavedoes/sweeteats";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

// Wireframes and Design
$heading = "Wireframes &amp; Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">wireframes</span><span class=\"mr-1 badge badge-pill badge-secondary\">responsive design</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo deesign principles</span><br>Aside from the admin area/features that will be discussed, I made this three page website to resemble a simple \"set it and forget it\" type of website. It is responsive, mobile friendly, and effective in providing information to a user that may have arrived from an online search.
<br><br>
For the logo mark(cupcake) I used a stock vector(with licensing) and changed the color. I made the font very colorful like the colors you may associate with sweets/frosting."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetsketch-min.jpg', 'logo sketches', 6],
    ['img/cafewire-min.jpg', 'wireframes', 6]
];
echo addContentArea($heading, $description, $imgArray);

// Responsive Design
$heading = "Responsive Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><br>For a majority of the responsive features, I included a compiled and minified version of Bootstrap. I then used Bootstrap's classes to define when columns next to each other break to their own row. Bootstrap's navigation component also proved to be very useful.
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">@media query</span><br>
With smaller screen widths, the \"Free Wifi\" icon would invade the space of the logo while the \"Free Cup O' Joe\" icon overlapped the testimonial heading. Both icons made the mobile version of the layout very cluttered. My solution to this was removing the icons on smaller screen sizes by writing an @media query to take them out of the document object model. I did this by setting the CSS display property of the icon classes in the @media query to none. I then replaced both with a new image file containing both icons. I wrote a second @media query to accomplish this."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/sweetdesktop-min.jpg', 'desktop version', 9],
    ['img/sweetmobile-min.jpg', 'mobile version', 3],
    ['img/mediaquery-min.jpg', '@media queries for icons', 9]
];
echo addContentArea($heading, $description, $imgArray);

// CSS3 animation
$heading = "CSS3 Animation";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">steps()</span><span class=\"mr-1 badge badge-pill badge-secondary\">sprite sheet</span><span class=\"mr-1 badge badge-pill badge-secondary\">@keyframes</span><br>
If the cupcake promotion is active and set to the current day of the week, it triggers a few animations. I made the cupcake colors appear to move from left to right by using a PNG sprite sheet with the steps() function. I positioned the animation cupcake over the logo mark cupcake so I could fade out the animation smoothly. I also added a dismissable alert box that fades between the logo colors. I used the background color CSS property with the logo color hex values inside of an @keyframes CSS Rule. Lastly, I made three more @keyframes Rules of rotate, fade, and drop to be used together for the sprinkles.
<br><br>
I used four sprinkle PNG images for each color and had nine sprinkle containers each containing a sprinkle image. An improvement to this would be adding one SVG image to save on HTTP requests. Next, add a PHP function that would randomize the number of sprinkles, color, speed of rotation, and size. Given the right parameters, this might look more random, and organic.";
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
$heading = "Automating the Cupcake Promotion";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">SQL queries</span><br>
Once the user logs in to the admin area and is authenticated, they can set the day of the promotion and whether or not it's active. The action attribute of the form is sent to a PHP procedure page to update the promotion. This page includes functions that execute SQL queries to update the SQLite database. After the functions run, the user/admin is redirected to the same page with a success message(if no errors).
<br><br>
When the home page loads, similar functions are called to execute SQL queries. However, instead of UPDATE statements, SELECT statements are used to retrieve the data and save it to variables instead of updating. The PHP date() function is also called inside logic to represent the day of the week as an integer to compare to the day of the promotion in the database."; 
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
$heading = "Building the Admin Area";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Bootstrap</span><span class=\"mr-1 badge badge-pill badge-secondary\">MAMP</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><br>
Before any kind of authorization or authentication, I built the admin area on my local machine. I used the Dashboard example on the Bootstrap website as a starting template. I put the navigation HTML into a PHP file to include on each page and added some active page logic based on a page variable. I added a Dashboard tab to update general sitewide content, a Users tab, Home/Our Story tabs for page specific content, and a Testimonials tab for repeating(post) content.
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">database connection</span><br>
I then added a PHP file for the connection to the database. Next, I created a database variable and set it to a new PDO Object prepended with the string \"sqlite:\" as per documentation.
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">HTML forms</span><span class=\"mr-1 badge badge-pill badge-secondary\">\$_POST</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP procedure</span><span class=\"mr-1 badge badge-pill badge-secondary\">SQL queries</span><br>
Next, I added HTML forms to each tab(page) that would update relating content. I set the method attributes to POST and the action attributes to the related procedure files in the procedures directory. Each procedure file included a function to update the database with a SQL query(UPDATE statement). A similar function with a SQL query(SELECT statement) is used to prepopulate the form values and display website content.
<br><br>
Since there can be multiple testimonials, I decided on a Testimonials table in the database. Instead of UPDATE statements, I used INSERT INTO statements to add to the database.";


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
$heading = "Adding Authentication and Authorization";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">Authentication</span><span class=\"mr-1 badge badge-pill badge-secondary\">Authorization</span><br>
During my learning with Treehouse on a PHP track, one of the projects I built was a book rating website. I applied my knowledge from that project to add authentication and authorization to this project. 
<br><br>
<span class=\"mr-1 badge badge-pill badge-secondary\">Composer</span><span class=\"mr-1 badge badge-pill badge-secondary\">JWT</span><span class=\"mr-1 badge badge-pill badge-secondary\">cookie</span><br>
To authenticate during the login/registration procedures, a JWT(JSON Web Token) is created with the firebase/php-jwt package. It takes a secret key pulled from the hidden environment file and the encryption algorithm(HS256) as arguments. The JWT is stored in a cookie with the symfony/http-foundation package. These packages are required in the composer.json file, so when you run \"composer update\" in the command line, it will add/update the packages to the vendor folder. 
<br><br>
I added the feature of registering as an administrator so after signing up you can sign in and be authenticated. However, since you would not be an admin, you'd get a message to contact the website owner to become an admin. If you tried navigating to another admin page, you'd be redirected to the login page with a notification saying \"Not Authorized\". In order to be an admin you must be promoted by another admin in the Users tab. To avoid an admin with malicious intent from deleting/demoting all admins, a user is defined as the website owner that can not be deleted/demoted."; 
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
$description = "A good feature to implement would be an approval process by the website owner. An employee/admin could insert data into the database but the website owner would have to approve it for it to be visible to the public. To accomplish this an \"enabled\" column and a \"user\" column could be added to the Content table in the database. The \"user\" column (foreign key) would link to users id in Users table. This would allow a SQL query to show all added rows by a user that are not enabled. Another PHP function could then be called by the website owner as a result of submitting a form. This function would execute another SQL statement to update the enabled fields allowing it to be public."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);

// Final thoughts
$heading = "Final Thoughts";
$description = "Building the Sweet Eats Bakery &amp; Caf&eacute; website with the admin area allowed me to use Composer as a PHP package manager for the first time on a personal project. I learned about Symfony session flash bags to store a notification that is automatically removed once retrieved. I was also introduced to storing authenticated user's information, sessions, cookies, &amp; JSON Web Tokens.
<br><br>
I'd like to gain a deeper understanding of authentication, authorization, cookie storage, session storage, cross site scripting, and cross site request forgery."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);


echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');
?>
    
  
<?php include 'inc/footer.php'; ?>