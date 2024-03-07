<?php 

$page = 'wahzee';

include 'inc/header.php'; 

?>

<?php

// Featured image exported as JPG, 800 x 534
$featuredImage = "img/wahzee-featured-min.jpg";
$title = "Beyond the Album Cover: A Web Developer's Exploration of Audio";
$highlights = "audio engineering, songwriting, graphic design";
// $details = "This personal project allowed me to dive deeper into my music hobby, while giving me practical knowledge to pair audio and web applications. I received my associates degree in Music Recording Technology in 2010 and gained live/studio performance as a guitar player. In June of 2021, I decided to dive deeper into songwriting and audio engineering. I got a contoller for music production software and started investing my spare time into learning, expirimenting, and composing music. In Feburary of 2022, I released my first single, and in October of 2022, I released my first album.";

$details = "My music journey, fueled by a 2010 degree and live performances, took a turn in 2021.  Intrigued by audio engineering, I dove into software and composition, releasing my first single (Feb 2022) and a full album (Oct 2022). I believe that this experience strengthened my ability to craft even more engaging user experiences on the web by incorporating sound design when strategically appropriate.";
$visitLink = "https://open.spotify.com/artist/0D9TorvH56CCwMFXlfDi1d?si=4AmZhMOoR3OXVuawc_Wlpg";
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
$heading = "Diving In: Tools and Workflow";

$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Music Production</span><span class=\"mr-1 badge badge-pill badge-secondary\">Automation</span><br>Leveraging my musical foundation (theory, recording) from my degree and band experience, I began exploring music production. I opted for Ableton Live, drawn to its intuitive interface with a clip-based workflow. Similar to building user interfaces (UIs) in web development, Ableton uses a grid system where elements (audio clips) can be triggered, sequenced, and automated for a dynamic composition.
<br><br>
After completing online tutorials and an in-depth course, I successfully produced and released music (single, album). This experience not only fueled my creative side but also provided valuable insights into project management, iterative workflows, and the power of automation – all transferable skills that benefit my web development work.";


// $description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Music Production</span><span class=\"mr-1 badge badge-pill badge-secondary\">Automation</span><br>Being familiar with basic music theory and recording techniques from my degree and playing guitar in a couple local bands, I decided to start my journey as a music producer/artist. I installed the music production software Ableton Live and got the associated production controller. Even though Pro Tools was what I had used in college years back, I was instantly drawn to Ableton Live based on the innovative user interface. It contains a grid pattern where each slot is an audio clip. The clips in a specific row can be launched together and/or individual clips can be stopped or started. With the \"follow actions\" feature, the structure of a music track can be automated. Additional automation is possible with adjusting sound parameters during recording, or mapping a low frequency oscillator(LFO) to different parameters. For example, a track can pan slowly from left to right throughout a track or maybe just for the chorus. The pitch can be slightly bent based on a sine curve to create a retro type vibe. Automation can be applied to a selector knob that cross fades between instruments that's applied to one midi(note data) track. The options are seemingly limitless. The nature of having certain aspects affect others and automation possibilities sparked my interest similar to the way of a programming language.<br><br>After completing the tutorials on Ableton's website, I dove deeper with the Ultimate Ableton Live 11 Masterclass. It was taught by Ableton certified trainer Jason Allen and James Patrick covering mixing and mastering. I also did many google searches and had help from some mentors. Before I knew it, I had a single, and an album released.";

// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/learn_start-min.jpg', 'starting the learning process', 6],
    // ['img/studio-min.jpg', 'studio completed December 2021', 6],
    ['img/grid-min.jpg', 'grid layout that pulled me into the DAW Ableton', 12],
];
echo addContentArea($heading, $description, $imgArray);

// Designing the Album Cover
$heading = "Dapper and Toasty: Experimentation and User Experience";

$description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">Graphic Design</span><span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Audio Engineering</span><span class=\"mr-1 badge badge-pill badge-secondary\">Sound Design</span><br>In today's digital landscape, capturing and retaining user attention is paramount.  My album, 'Dapper and Toasty,' explores this challenge through a constantly evolving soundscape.  Drawing inspiration from dance, electronic, and experimental genres, the album employs unexpected sonic juxtapositions and dynamic shifts.  This deliberate use of non-traditional combinations aims to keep listeners engaged and discovering new elements within the music.<br><br>

The creative process involved layering MIDI instruments with live vocals and traditional instruments.  One key takeaway involves the challenges of audio mixing for various playback systems – a hurdle directly applicable to web development, where ensuring consistent user experience across different browsers and devices is crucial.<br><br>

The album cover was designed using a digital collage technique in Affinity Designer, incorporating public domain imagery.";
// $description = "<span class=\"mr-1 badge badge-pill badge-secondary\">Affinity Designer</span><span class=\"mr-1 badge badge-pill badge-secondary\">Graphic Design</span><span class=\"mr-1 badge badge-pill badge-secondary\">Ableton</span><span class=\"mr-1 badge badge-pill badge-secondary\">Audio Engineering</span><span class=\"mr-1 badge badge-pill badge-secondary\">Sound Design</span><br>In the modern world it seems as if attention spans are getting shorter. People want change and things to grab their attention in seconds, sometimes fractions of a second. This can be attributed to social media trends of having a constant feed of information. My music is designed around the idea of constant change to keep interest. It is inspired from the genres of dance, electronic, experimental, and drum &amp; bass. Some elements do not traditionally go together and may even seem as if the acoustic environment changes throughout a song. This was done intentionally to create an interesting mix. Additionally, a lot of MIDI instruments were used along with recorded vocals, analog synth, electric guitar, and bass.<br><br>I believe that one of my strengths is finding creative solutions. What I found most challenging was translating the mix to different speakers. I'd like to continue by diving deeper into mixing and mastering to learn new techniques and hone my skills.<br><br>The album cover was designed by creating a digital collage in Affinity designer with images in the public domain. After cropping out each image individually, I put them together. I then added some color correction and slight effects."; 
// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [
    ['img/album-boxed-min.jpg', 'album cover pieces selected in software', 6],
    ['img/album-min.jpg', 'album cover final result', 6],
];
echo addContentArea($heading, $description, $imgArray);

// Moving Forward
$heading = "Moving Forward";
$description = "Music will always be a cherished creative outlet.  However, my professional focus lies in the captivating world of web development.  My exploration of audio engineering has equipped me with a valuable skill set, particularly in understanding sound design and user experience.  This knowledge, coupled with my web development expertise, allows me to craft even more engaging and interactive web applications.";

// an array containing arrays of image details
// [IMAGE SRC ATTRIBUTE, IMAGE CAPTION, COLUMN WIDTH(ROW WIDTH = 12)]
$imgArray = [];
echo addContentArea($heading, $description, $imgArray);

echo addBigTxt("Let's Talk:");

include('inc/contactbox.php');

?>

<?php include 'inc/footer.php'; ?>