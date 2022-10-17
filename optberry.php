<?php 

$page = 'optberry';

include 'inc/header.php'; 

?>

<?php 

include 'inc/entrydetails.php';

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/optberry_featured-min.jpg";
$title = "Optberry Product Customization Application";
$highlights = "SQLite, PDO Object, PHP populating JavaScript Objects, click tracking";
$details = "This application was an opportunity for me to deep dive into the programming concepts that I've been learning. One of my hobbies is playing guitar so I created Revomere Guitars, a fictional guitar brand to populate the database. While there is currently no user interface/admin area for CRUD operations, the SQLite database is connected and fully operational.";
$visitLink = "https://www.optberry.nibtrek.com/";
$codeLink = "https://github.com/whatdavedoes/optberry";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");


// Front End Data Structure
$heading = "Front End Data Structure";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><span class=\"mr-1 badge badge-pill badge-secondary\">data structure</span><span class=\"mr-1 badge badge-pill badge-secondary\">click tracking</span><br>I began by thinking of a JavaScript data structure. I represented the product, in this case a guitar as a Javascript Object. Inside this object I added a categories array containing a list of Category Objects. The Product contained Categories. I then repeated this pattern to have Groups in Categories and to have Options in Groups. For example, the Product is the guitar, a Category of the guitar is hardware, a Group of hardware is pickups, and an Option of pickups is chrome. I decided to add Group as a sorting layer between Category and Option to have an additional layer of click tracking and to keep the navigation bar clean by hiding Groups of an unselected Category. I used Bootstrap's collapse component with the accordion example as a template for the vertical navbar. To create all these JavaScript Objects I made Classes including a Click class. I also added a clicks array in the Category, Group, and Option Objects to track clicks."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/data1-min.jpg', 'planning the data structure', 6],
    ['img/data2-min.jpg', 'more planning and pseudo code', 6],
    ['img/p_class-min.jpg', 'product class', 4],
    ['img/c_class-min.jpg', 'category class', 4],
    ['img/g_class-min.jpg', 'group class', 4],
    ['img/o_class-min.jpg', 'option class', 4],
    ['img/cl_class-min.jpg', 'click class', 4],
    ['img/vnav-min.jpg', 'vertical navigation', 4]
];
echo addContentArea($heading, $description, $imgArray);


// Backend Database Schema 
$heading = "Backend Database Schema";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">SQLite</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">PDO Object</span><br>To populate the JavaScript Objects described above, I decided to use SQLite as a database. The Options table is shown below. There are three foreign key columns/attributes. One links to the group table, one to the table with styling data for the images, and one to a \"select\" group if the option is contained within a select HTML input. I made queries to the database using a PHP PDO Object, and dynamically created(with PHP) Javascript Objects with the JavaScript constructor methods from the Javascript Classes. I used the software DB Browser for SQLite to design the database schema.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/db_structure.jpg', 'database tables', 6],
    ['img/options_table-min.jpg', 'Options table', 6]
];
echo addContentArea($heading, $description, $imgArray);


// Data Structure Code Snippet
$heading = "Data Structure Code Snippet";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Chrome DevTools</span><br>This is a code snippet from Chrome DevTools inside the Product Object. The \"displayTitle\" property has a value of Camila which is one of the guitar models/shapes. We are in the Group of Model under the Shape Category. We can only have one model at a time, so \"oneSelection\" is set to true. The Camila option has been clicked three times as you can see from the clicks array. The last Click Object in the clicks array does not have an end value. This is because it is a current selection.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/c_example-min.jpg', 'code snippet from Chrome DevTools', 6]
];
echo addContentArea($heading, $description, $imgArray);



// Front End Development
$heading = "Front End Development";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">CSS positioning</span><span class=\"mr-1 badge badge-pill badge-secondary\">PNG files</span><span class=\"mr-1 badge badge-pill badge-secondary\">responsive design</span><br>The product/guitar image is a collection of PNG images overlaid on top of one another. The images shown relate to the options selected. A challenge that I encountered was maintaining aspect ratios and position while resizing(page width) the product. I solved this with a div container with a specified pixel width(1445px). I then wrapped the images in another container div inside the first with the CSS position property set to relative. I then set the CSS position value of the images to absolute and set the width to a percentage value so they scale with their container. I calculated the width of the images with the formula (image width in pixels * 100 / 1445). Given that the images were positioned absolute, I used the top and left CSS properties with percentage values(similar calculation) to position the images. I made sure the percentage values would never compute to higher than the image width in pixels to avoid pixelation of the raster graphic.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/g_shapes-min.jpg', 'shape image files', 8],
    ['img/g_hardware-min.jpg', 'some hardware image files', 4],
    ['img/remi_example-min.jpg', 'images put together inside of containers', 8]
];
echo addContentArea($heading, $description, $imgArray);


// Implementing Features
$heading = "Implementing Features";
$description = "<ul><li>options that are dependent on other options</li><li>required or optional options</li><li>one selection or multiple selections per group</li><li>options that are required first/priority(aesthetic reasons)<li>multiple selection group with optional select box</li><li>default options</li><li>progress bar</li><li>added price for option selection</li><li>click tracking bar chart</li><br><p class=\"txtProcessWidth\">Some of these features were unseen during the planning stage of the application. This led to added table attributes in the SQLite database, additional queries outside the JavaScript data structure, adding more properties to classes, and inconsistent yet functional code. This is a good opportunity to refactor.</p>";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/oneselect_required-min.jpg', 'a group of options with one selection required', 6],
    ['img/multiple_selections-min.jpg', 'a group of options with multiple selections allowed, some select boxes required, some optional, note the none radio option in the select box dynamically added since the select box is optional', 6],
    ['img/click_chart-min.jpg', 'click density bar chart, pin icon is current selection', 6]
];
echo addContentArea($heading, $description, $imgArray);



// Dependencies Function
$heading = "A Code Snippet of a Function";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><br>This JavaScript function has nested for statements to loop through all product options and return an array of dependent options. The listInnerDependancies() function also adds dependencies of dependencies to the array allowing for two layers of dependancies. The concatenated string that is added to the array will be used to notify the user in a modal. They will be made aware of the dependent options being unselected if they continue.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/dfunc-min.jpg', 'screenshot from the code editor', 7],
    ['img/modal-min.jpg', 'notification via Bootstrap modal', 5]
];
echo addContentArea($heading, $description, $imgArray);


// Logo and Guitar Body Design
$heading = "Logo &amp; Guitar Body Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><br>Being a guitar player, it is on my bucket list to have a luthier make one of my guitar designs for me."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/opt_logo-min.jpg', 'initial sketches', 6],
    ['img/opt_logo_vector-min.jpg', 'end result', 6],
    ['img/g_cutouts-min.jpg', 'guitar cutouts', 4]
];
echo addContentArea($heading, $description, $imgArray);

// Image File Considerations
$heading = "Image File Considerations";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Chrome DevTools</span><span class=\"mr-1 badge badge-pill badge-secondary\">online image compression</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTTP requests</span><br>The image below shows all of the HTTP requests for the images(green bars) which took about 4 seconds to load even with optimized images. A more complex product with more options would make more requests and take longer to load(same internet speed, no cache, etc...). A way around this might be combining images, loading the images as needed with AJAX, and/or converting images to base64 data URIs. This is an improvement that can be made.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/img_loading-min.jpg', 'Chrome DevTools, Performance tab', 6]
];
echo addContentArea($heading, $description, $imgArray);

// Ideas
$heading = "Ideas";
$description = "After some refactoring, and improving the page load speed, some good additions to this application may be adding option details for the user to be well informed on selections, product presets that autoselect multiple options, a GUI(graphical user interface)/admin area to manage options easier, and a time line graphic for a more in depth analysis of user selections."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);

// 
$heading = "Final Thoughts";
$description = "I used GitHub for version control for the first time with this application. I could have put more emphasis on developing more efficiently, separating concerns, and seeing the big picture. I noticed a trend of implementing a feature quickly with minimal development time and lack of notes. This created a mess and slowed the development time of additional features. Concepts such as DRY(Don't Repeat Yourself) and refactoring come to mind when thinking how to improve this application and myself as a programmer. There is a lot of code bloat, unnecessary loops, and SQL Queries. I learned a lot and gained experience from developing this product customization application. Along with my usual studies, a priority of mine is strengthening my skills with SQL, structuring code, and using GitHub for versioning.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
];
echo addContentArea($heading, $description, $imgArray);




echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>

<?php include 'inc/footer.php'; ?>