<?php 

$page = 'wahzee';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/wahzee-featured-min.jpg";
$title = "Wahzee Music and Album Cover";
$highlights = "audio engineering, songwriting, graphic design";
$details = "I received my associates degree in Music Recording Technology in 2010 and gained live/studio performance as a guitar player. In June of 2021, I decided to dive deeper into songwriting and audio engineering. I got a contoller for music production software and started investing my spare time into learning, expirimenting, and composing music. In Feburary of 2022, I released my first single, and in October of 2022, I released my first album.";
$visitLink = "https://hyperfollow.com/wahzee";
//$codeLink = "https://github.com/whatdavedoes/optberry";

echo addEntryDetails($featuredImage, $title, $highlights, $details, $visitLink, $codeLink);


echo addBigTxt("Compilation Track:");
?>

<audio controls>
  //<source src="horse.ogg" type="audio/ogg">
  <source src="img/dapper.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<?php

echo addBigTxt("The Process:");

// June 2021 - Learning started

// Dec 2021 - studio completed

// Feb 2022 - Dawning Light Single

// Oct 2022 - Dapper and Toasty Album



// Diving In and Choosing the Right Tools
$heading = "Diving In and Choosing the Right Tools";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Music Production</span><span class=\"mr-1 badge badge-pill badge-secondary\">Automation</span><br>Being familiar with basic music theory and recording techniques from my degree and playing guitar in acouple local bands, I decided to start my journey as a music producer/artist. I installed the music production software Ableton Live and got the associated production controller. Even though Pro Tools was what I had used in college years back, I was instantly drawn to Ableton Live based on the innovative user interface. It contains a grid pattern where each slot is an audio clip. The clips in a specific row can be launched together and/or individual clips can be stopped or started. With the \"follow actions\" feature, the structure of a music track can be automated. Additional automation is possible with adjusting sound parameters during recording, or mapping a low frequency oscillator(LFO) to different parameters. For example, a track can pan slowly from left to right throughout a track or maybe just for the chorus. The pitch can be slightly bent based on a sine curve to create a retro type vibe. Automation can be applied to a selector knob that crossfades between instruments that's applied to one midi(note data) track. The options are seemingly limitless. The nature of having certain aspects affect others and automation possibilities sparked my interest similar to the way of a programming language.<br><br>After completing the tutorials on Ableton's website, I dove deeper with the Ultimate Ableton Live 11 Masterclass. It was taught by Ableton certified trainer Jason Allen and James Patrick covering mixing and mastering. I also did many google searches and had help from some mentors. Before I knew it, I had a studio, a single, and an album released."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/learn_start-min.jpg', 'starting the learning process', 6],
    ['img/studio-min.jpg', 'studio completed December 2021', 6],
    ['img/grid-min.jpg', 'grid layout that pulled me into the DAW Ableton', 12],
];
echo addContentArea($heading, $description, $imgArray);

// Designing the Album Cover
$heading = "Thoughts on the album release of Dapper and Toasty";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">Graphic Design</span><span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Audio Engineering</span><span class=\"mr-1 badge badge-pill badge-secondary\">Sound Design</span><br>In the modern world it seems as if attention spans are getting shorter. People want change and things to grab their attention in seconds, sometimes fractions of a second. This can be attributed to social media trends of having a constant feed of information. My music is designed around the idea of constant change to keep interest. It is inspired from the genres of dance, electronic, expirimental, and drum &amp; bass. Some elements do not traditionally go together and may even seem as if the acoustic environment changes throughout a song. This was done intentionally to create an interesting mix. Additionally, alot of MIDI instruments were used along with recorded vocals, analog synth, electric guitar, and bass.<br><br>I believe that one of my stregnths is in the creative process. What I found most challenging was translating the mix to different speakers. I'd like to continue by diving deeper into mixing and mastering to learn new techniques and hone my skills.<br><br>The album cover was designed by creating a digital collage in Affinity designer with images in the public domain. After cropping out each image individually, I put them together. I then added some color correction and slight effects."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/album-boxed-min.jpg', 'album cover pieces selected in software', 6],
    ['img/album-min.jpg', 'album cover final result', 6],
];
echo addContentArea($heading, $description, $imgArray);

// Moving Forward
$heading = "Moving Forward";
$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">future plans</span><br>I will continue to develop my skillset and knowledge of Ableton and music producing. I would like to publish a website for the artist profile of Wahzee. Time permitting, I'd like to create an animation of the album cover as all the pieces are seperated into individual PNG files. It would create an eye catching graphic for the website, music video, or live show.<br><br>Now that I have some material released, I'd like to network and do more collaborations to expand my fanbase and network. Additionally, I'd like a deeper understanding of the frequency response of different speakers so I can produce a better overall mix. I believe a good approach is to release one single at a time. I can go through more iterations/versions of a mix to really get a feel for the mixing/mastering techniques I've been applying and how they affect the final result."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);

echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>

<?php include 'inc/footer.php'; ?>