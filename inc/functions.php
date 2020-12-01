<?php

function addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink){
    global $entries;
    global $tools;
    global $page;
    
    $output = '<div class="row"><div class="col-md-6 mt-4"><a data-toggle="modal" data-target="#featuredModal"><img class="shadow entryFeatured" src="';
    $output .= $featuredImage;
    $output .= '"></a>';
    
    // Start modal html
    $output .= '<div class="modal fade" id="featuredModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-lg">
    <div class="modal-content"><div class="modal-header"><h5 class="modal-title">';
    $output .= 'Dave Pierce | ' . $title;
    $output .= '</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">';
    $output .= '<img class="entryFeatured" src="';
    $output .= $featuredImage;
    $output .= '">';
    $output .= '</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>';
    // End modal html
    
    $output .= '</div><div class="col-md-6 mt-4"><div class="topCtn"><h1 class="featuredHeading">';
    $output .= $title;
    $output .= '</h1><p class="text-muted font-italic mb-2">';
        
    foreach ($entries as $entry) {
        if($page == $entry[0]){
            
            foreach ($tools as $tool) {
        
                if (in_array($tool[0], $entry[2])) {
                    $output .= '<img class="tech-img" src="../img/' . $tool[1] . '">';
                }
        
            }
        }
        
    }
    
    $output .= '</p><p class="text-muted font-italic mb-0">';
    $output .= $highlights;
    $output .= '</p></div><p class="lead mt-3">';
    $output .= $details;
    $output .= '</p>';
    
    if($visitLink !== null && empty($visitLink) == false) {
        $output .= '<a href="';
        $output .= $visitLink;
        $output .= '" target="_blank" type="button" class="btn btn-secondary">Visit</a>';
    }
    
    if($codeLink !== null && empty($codeLink) == false) {
        $output .= '<a href="';
        $output .= $codeLink;
        $output .= '" target="_blank" type="button" class="btn btn-secondary ml-1">GitHub</a>';
    }
    
    $output .= '</div></div>';
    
    return $output;
    
}

function addBigTxt($txt) {
    return '<h2 class="lead featuredProcess mt-4 mb-2 pb-2 pt-4">' . $txt . '</h2>';
}

// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, IMAGE WIDTH, COLUMN WIDTH(ROW WIDTH = 12)]
/*$imgArray = [
    ['img/mind_map-min.jpg', 'mind map/rough sketches', 8],
    ['img/elevated_sketch-min.jpg', 'journal sketches when away from desk', 4]
];*/
function addContentArea($heading, $description, $imgArray) {
    $output = '';
    $output .= '<h2 class="featuredHeading mt-3 pt-3 border-top">';
    $output .= $heading;
    $output .= '</h2><p class="txtProcessWidth">';
    $output .= $description;
    
    if (!empty($imgArray)) {
        $output .= '</p><div class="row mb-4 pb-4">';
        
        foreach($imgArray as $img) {
            $output .= '<div class="col-md-';
            $output .= $img[2];
            $output .= ' p-3"><div class="card p-2 shadow"><img style="';
            $output .= '" class="processImg" src="';
            $output .= $img[0];
            $output .= '"><span class="caption text-muted cntrTxt cntrBlock pt-1">';
            $output .= $img[1];
            $output .= '</span></div></div>';
        }
        
        $output .= '</div>';
    }
    
    return $output;
}



/*

<h2 class="featuredHeading mt-4">Mind Map &amp; Rough Sketches</h2>
<p class="txtProcessWidth">The logo sprint process started with a mind map of related words and some rough sketches. Since pediatric dentists work with kids, the logo had to be fun while avoiding sharp points because of the negative association kids may have at the dentist. Another design consideration was the location of Colorado state.</p>

<div class="row">
    <div class="col-md-8 p-3">
        <div class="card p-2 shadow">
            <img class="processImg" src="img/mind_map-min.jpg">
            <span class="caption text-muted cntrTxt cntrBlock pt-1">mind map/rough sketches</span>
        </div>
    </div>
    <div class="col-md-4 p-3">
        <div class="card p-2 shadow">
            <img class="processImg" src="img/elevated_sketch-min.jpg">
            <span class="caption text-muted cntrTxt cntrBlock pt-1">journal sketches when away from desk</span>
        </div>
    </div>
</div>
*/

function addTestimonial($testimonial, $person, $company) {
    $output = '';
    $output .= '<div class="card py-4 px-4 my-5 reviewCard"><blockquote class="blockquote mb-0 card-body"><img class="quoteBox" src="img/quote-min.png"><p class="reviewPara">';
    $output .= $testimonial;
    $output .= '</p><footer class="blockquote-footer"><small class="text-muted">';
    $output .= $person;
    
    if(!empty($company)) {
        $output .= ', <cite title="Source Title">';
        $output .= $company;
        $output .= '</cite>';
    }
    $output .= '</small></footer></blockquote></div>';
    
    return $output;
}

function addSocialIcons() {
    global $socials;
    $output = '';
    
    foreach($socials as $social) {
        $output .= '<a class="socialLnk" href="';
        $output .= $social[1];
        $output .= '" target="_blank"><img class="socialIco ml-2" src="';
        $output .= $social[2];
        $output .= '"></a>';
    }
    
    echo $output;
    return;
}



















































