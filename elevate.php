<?php 

$page = 'elevate';

include 'inc/header.php'; 

?>

<?php 

include 'inc/entrydetails.php';

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/elevate_featured-min.jpg";
$title = "Elevated Pediatric Dentistry: Building a Welcoming Brand Identity";
$highlights = "Affinity Designer, logo sprint process, batch exporting, vector";
$details = "Creating a welcoming and friendly environment is crucial for any pediatric dentist.  For Elevated Pediatric Dentistry, I designed a logo that embodies this spirit.  Following the logo sprint process, I explored concepts through mind maps and rough sketches.  This project offered the opportunity to delve deeper into Affinity Designer, where I utilized the golden ratio circle method and batch exporting to streamline the workflow.";
$visitLink = "";
$codeLink = "";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

// Mind map and rough sketches
$heading = "Mind Map &amp; Rough Sketches";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">logo sprint process</span><span class=\"mr-1 badge badge-pill badge-secondary\">mind map</span><span class=\"mr-1 badge badge-pill badge-secondary\">rough sketches</span><br>My design process began with a comprehensive mind map. Here, I explored words and concepts that evoked a sense of fun, such as animals, balloons, and playful fonts.  Avoiding sharp points was also a key consideration, ensuring the logo wouldn't create any anxiety for young patients.  Another design consideration was the location of Colorado state."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/mind_map-min.jpg', 'mind map/rough sketches', 8],
    ['img/elevated_sketch-min.jpg', 'journal sketches when away from desk', 4]
];
echo addContentArea($heading, $description, $imgArray);


// Narrowing Down Sketches and Creating a Vector
$heading = "Refining the Design: From Sketches to Vector";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo design principles</span><span class=\"mr-1 badge badge-pill badge-secondary\">vectorize</span><br>After exploring various concepts through sketches, I moved the most promising ones into Affinity Designer. Here, each sketch was meticulously vectorized in black and white, allowing for clean and scalable iterations.<br><br>During this phase, I rigorously evaluated each design against key logo design principles: simplicity, originality, versatility, scalability, balance, and timelessness.<br><br>The concept that emerged as the frontrunner was a delightful combination: a hot air balloon playfully paired with a tooth. This design not only embodied the fun and welcoming atmosphere desired by Elevated Pediatric Dentistry, but also excelled in all the key logo design principles."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/elevated_mark-min.jpg', 'some iterations of the balloon mark', 8]
];
echo addContentArea($heading, $description, $imgArray);


// Font and color
$heading = "Font &amp; Color";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Adobe Color</span><span class=\"mr-1 badge badge-pill badge-secondary\">accessibility</span><br>Choosing the right fonts and colors was crucial for solidifying the brand identity. A two-font approach was selected: a clean and professional font for a strong foundation, balanced with a secondary \"crayon-style\" font for a touch of whimsy that resonates with children. Both fonts ensure readability at various sizes.<br><br>Steering clear of colors typically associated with medical settings (like red), a fun and welcoming palette was explored using Adobe's online color tool. Accessibility for color blindness was a top priority throughout the selection process. The final color palette draws inspiration from the beauty of Colorado's natural landscapes. A delightful gradation within the hot air balloon itself reflects the transition from land to sky to sunshine, subtly referencing the practice's location."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/process-min.jpg', 'font, color, and design considerations', 6],
    ['img/elevated_color-min.jpg', 'color schemes', 6]
];
echo addContentArea($heading, $description, $imgArray);


// Finalizing the design
$heading = "Finalizing the Design and Delivering a Logo Pack";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">golden ratio</span><span class=\"mr-1 badge badge-pill badge-secondary\">batch export</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo pack</span><br>To achieve a balanced and aesthetically pleasing composition, the golden ratio was applied to optimize spacing and ensure smooth curves throughout the logo. Different variations of the logo were created to accommodate various use cases, ensuring optimal functionality. Affinity Designer's powerful batch export feature was then utilized to efficiently export all the necessary file types in a single operation, streamlining the delivery process for the client."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/elevated_ratio-min.jpg', 'using the golden ratio circle method', 4],
    ['img/style_guide-min.jpg', 'style guide included in logo pack', 4],
    ['img/logo_version_reference-min.jpg', 'logo versions for use cases', 4],
    ['img/elevated_office-min.png', 'office signage', 4]
];
echo addContentArea($heading, $description, $imgArray);

echo addBigTxt("A Review:");

// Testimonial
$testimonial = 'Dave was supportive and helpful with his vast knowledge of graphic design. From color schemes to font, layout, and photos, Dave was exceptional at guiding us through and making recommendations along the way. His skill set is outstanding. Anyone who is looking to have graphic work done can rest assured that he will deliver a fantastic end product. I appreciate how at ease I felt knowing that I had a true professional helping me with my business logo. Thank you for taking the time to put in so much attention to detail and giving us exactly what we need for our business.';
$person = "Aaron Yashar";
$company = "Elevated Pediatric Dentistry";
echo addTestimonial($testimonial, $person, $company);

echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>
    



    

<?php include 'inc/footer.php'; ?>