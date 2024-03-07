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
$details = "This app lets users design their dream product, from guitars(Revomere as showcased) to sneakers. Update the database, and the app adapts seamlessly.  I built it to showcase my skills in web development, database integration, and graphic design.";
$visitLink = "https://optberry.whatdavedoes.com/";
$codeLink = "https://github.com/whatdavedoes/optberry";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");


// Front End Data Structure
$heading = "Hierarchical Data Structure for Customization";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><span class=\"mr-1 badge badge-pill badge-secondary\">data structure</span><span class=\"mr-1 badge badge-pill badge-secondary\">click tracking</span><br>To represent customizable products, I designed a hierarchical JavaScript object structure.  This structure starts with a Product object, which contains an array of Category objects. Each Category can further contain Group objects for finer organization. Finally, Group objects hold individual customization Option objects. This structure, with the addition of a Group layer, provides an extra level of organization and navigation control.  Unselected category groups are hidden, improving user experience and keeping the navigation bar clean.  I leveraged Bootstrap's collapse component for a user-friendly accordion-style navigation."; 
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
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">SQLite</span><span class=\"mr-1 badge badge-pill badge-secondary\">PHP</span><span class=\"mr-1 badge badge-pill badge-secondary\">PDO Object</span><br>To store product customization options, I implemented a schema using SQLite.  This lightweight database efficiently manages the data powering the application.  The core table, Options, utilizes foreign keys to link related data.<br><br>This relational structure allows for efficient data retrieval and manipulation.  Leveraging PHP PDO, I crafted queries to fetch data dynamically.  These results were then used to construct JavaScript objects, replicating the hierarchical structure on the front-end.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/db_structure.jpg', 'database tables', 6],
    ['img/options_table-min.jpg', 'Options table', 6]
];
echo addContentArea($heading, $description, $imgArray);


// Data Structure Code Snippet
$heading = "Data Structure Code Snippet";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Chrome DevTools</span><br>This code snippet, captured from Chrome DevTools, offers a glimpse into the product object in action and how it reflects user customization choices.  Here, we see the \"Camila\" model/shape selected, nestled within the \"Model\" group of the \"Shape\" category. The \"oneSelection\" property ensures only one model can be chosen at a time, enforcing a single selection for this category.  The \"clicks\" array provides valuable insight into user interaction.  It reveals \"Camila\" has been selected three times, with the most recent selection indicated by a Click object lacking an \"end\" value.  This demonstrates how the application accurately tracks user choices within the pre-defined product structure, ensuring a seamless customization experience.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/c_example-min.jpg', 'code snippet from Chrome DevTools', 6]
];
echo addContentArea($heading, $description, $imgArray);



// Front End Development
$heading = "Front End Development";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">CSS positioning</span><span class=\"mr-1 badge badge-pill badge-secondary\">PNG files</span><span class=\"mr-1 badge badge-pill badge-secondary\">responsive design</span><br>A key aspect was creating a dynamic product image that reflects user choices. This involved layering PNG images for different customization options. The challenge was maintaining image fidelity (aspect ratio and detail) during page resizes.<br><br>I implemented a container-based approach using nested divs. The inner container with relative positioning acts as a reference for individual images. Each image utilizes absolute positioning with a width set as a percentage of the container width ((image width in pixels * 100) / 1445px).  Similar percentage calculations ensure precise positioning of each image layer. Safeguards prevent these values from exceeding the original image width to maintain image quality.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/g_shapes-min.jpg', 'shape image files', 8],
    ['img/g_hardware-min.jpg', 'some hardware image files', 4],
    ['img/remi_example-min.jpg', 'images put together inside of containers', 8]
];
echo addContentArea($heading, $description, $imgArray);


// Implementing Features
$heading = "Feature Implementation and the Power of Refactoring";
$description = "<ul><li><b>Conditional Options</b>: The ability to link options together, where some selections influence the availability of others.</li><li><b>Required vs. Optional Choices</b>: Providing a clear distinction between mandatory and non-essential options for a streamlined experience.</li><li><b>Selection Limits</b>: Enforcing single or multiple selections within option groups, guiding users towards valid configurations.</li><li><b>Prioritized Options</b>: Introducing the concept of \"priority\" options to ensure a visually pleasing starting point for customization.<li><b>Selectable Option Groups</b>: Offering the option to use a select box for multi-selection groups, catering to user preferences.</li><li><b>Default Selection</b>: Setting default options to provide a starting point and reduce user input.</li><li><b>Progress Tracking</b>: Implementing a progress bar to visualize customization completion and encourage users.</li><li><b>Price Tracking</b>: Updating the price dynamically as users select options, enabling informed decision-making.</li><li><b>Click Tracking</b>: Visualizing user interactions with a click tracking bar chart</li><br><p class=\"txtProcessWidth\">While these features enrich the application, their improvised implementation during development resulted in database inconsistencies, unstructured queries, and code clutter. These challenges highlight the importance of planning and refactoring.</p>";
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
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">JavaScript</span><br>This JavaScript function, listInnerDependancies(), plays a crucial role in managing dependent options within the product customization process.  It utilizes nested loops to iterate through all product options and identify any dependencies.  ";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/dfunc-min.jpg', 'screenshot from the code editor', 7],
    ['img/modal-min.jpg', 'notification via Bootstrap modal', 5]
];
echo addContentArea($heading, $description, $imgArray);


// Logo and Guitar Body Design
$heading = "Logo &amp; Guitar Body Design";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span>"; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/opt_logo-min.jpg', 'initial sketches', 6],
    ['img/opt_logo_vector-min.jpg', 'end result', 6]
    // ['img/g_cutouts-min.jpg', 'guitar cutouts', 4]
];
echo addContentArea($heading, $description, $imgArray);

// Image File Considerations
$heading = "Image File Considerations";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Chrome DevTools</span><span class=\"mr-1 badge badge-pill badge-secondary\">online image compression</span><span class=\"mr-1 badge badge-pill badge-secondary\">HTTP requests</span><br>While the application allows for extensive product customization, the initial load time was impacted by the number of image requests.  Even with optimized images, the page took approximately 4 seconds to load on an average internet connection with no cache (see image below). This highlights the importance of image optimization for a smooth user experience.<br><br>To address this challenge and ensure a faster experience for users, future iterations of the application could explore image combining, lazy loading, or data URIs.<br><br>By strategically implementing these optimization techniques, the application can deliver a significantly faster and more responsive experience for users, even as the range of customization options expands.";
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
$description = "This project was my first experience using GitHub for version control. While prioritizing quick feature implementation kept the project moving, it also revealed areas for improvement in Separation of Concerns, Planning and Scalability, and Code Optimization.<br><br>These learnings emphasize the importance of structured code, clear documentation, and taking the time to plan for future growth. This application served as a valuable learning experience, and I'm actively working on strengthening my skills in SQL Optimization, and Code Structure.<br><br>By continuously seeking improvement and expanding my skill set, I aim to become a more efficient and well-rounded developer in future projects.";
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
];
echo addContentArea($heading, $description, $imgArray);




echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>

<?php include 'inc/footer.php'; ?>