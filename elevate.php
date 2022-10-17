<?php 

$page = 'elevate';

include 'inc/header.php'; 

?>

<?php 

include 'inc/entrydetails.php';

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/elevate_featured-min.jpg";
$title = "Elevated Pediatric Dentistry Logo";
$highlights = "Affinity Designer, logo sprint process, batch exporting, vector";
$details = "I designed this logo for a pediatric dentist practice and based my process off of the logo sprint process. My design approach included mind maps, rough sketches, vectorizing, adding color/fonts, and finalizing. During this project I used the golden ratio circle method and batch exporting in Affinity Designer for the first time. ";
$visitLink = "";
$codeLink = "";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);

echo addBigTxt("The Process:");

// Mind map and rough sketches
$heading = "Mind Map &amp; Rough Sketches";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">logo sprint process</span><span class=\"mr-1 badge badge-pill badge-secondary\">mind map</span><span class=\"mr-1 badge badge-pill badge-secondary\">rough sketches</span><br>My process started with a mind map of related words and some rough sketches. Since pediatric dentists work with kids, the logo had to be fun while avoiding sharp points because of the negative association kids may have at the dentist. Another design consideration was the location of Colorado state."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/mind_map-min.jpg', 'mind map/rough sketches', 8],
    ['img/elevated_sketch-min.jpg', 'journal sketches when away from desk', 4]
];
echo addContentArea($heading, $description, $imgArray);


// Narrowing Down Sketches and Creating a Vector
$heading = "Narrowing Down Sketches and Creating a Vector";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo design principles</span><span class=\"mr-1 badge badge-pill badge-secondary\">vectorize</span><br>Sketches were copied and placed in Affinity Designer. If a sketch made the cut, it was vectorized as a black and white version. From there, designs were narrowed down. The Key Principles of Logo Design came into play. Was it simple, original, versatile, scalable, balanced, and timeless? The idea of a hot air balloon paired with a tooth was the favorite."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/elevated_mark-min.jpg', 'some iterations of the balloon mark', 8]
];
echo addContentArea($heading, $description, $imgArray);


// Font and color
$heading = "Font &amp; Color";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Adobe Color</span><span class=\"mr-1 badge badge-pill badge-secondary\">accessibility</span><br>Font pairings were considered to fit the brand. A clean font and a crayon/kids type font that scaled well were chosen. Since it was designed for a pediatric dentists office, the color red was avoided because of it's association to danger, tension, or energy. Adobe's online color tool was used in researching color schemes. Assesibility relating to color blindness was considered. A fun, colorful combination was chosen that represented nature, a common Colorado theme. The balloon coloring can represent land, sky, and sun from bottom to top."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/process-min.jpg', 'font, color, and design considerations', 6],
    ['img/elevated_color-min.jpg', 'color schemes', 6]
];
echo addContentArea($heading, $description, $imgArray);


// Finalizing the design
$heading = "Finalizing the Design and Delivering a Logo Pack";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">golden ratio</span><span class=\"mr-1 badge badge-pill badge-secondary\">batch export</span><span class=\"mr-1 badge badge-pill badge-secondary\">logo pack</span><br>The golden ratio was used to adjust spacing and curves were smoothed out. Different versions were created for use cases. Affinity Designer's export persona allowed for exporting all the needed file types at once with the batch export feature."; 
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