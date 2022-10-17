<div class="row mt-4">
    
<?php

foreach ($entries as $entry) {
    
    $imgStr = "";
    
    foreach ($tools as $tool) {
        
        if (in_array($tool[0], $entry[2])) {
            $imgStr .= '<img class="tech-img" src="img/' . $tool[1] . '">';
        }
        
    }
    
    // Adds html for entrys on porfolio page
    echo '<a href="' . $entry[0] . '.php" id="' . $entry[0] . '" class="col-md-4 entry-link">
    <img class="entry-ctn" src="img/' . $entry[1] , '"><span id="' . $entry[0] . '-tech" class="tech noVis">' . $imgStr . '</span></a>';
    
    // Adds JavaScript logic to show tool/technology icons on mouseover event
    echo '<script>document.getElementById("' . $entry[0] . '").addEventListener("mouseover", function(){
    document.getElementById("' . $entry[0] . '-tech").classList.remove("noVis");
    });
    document.getElementById("' . $entry[0] . '").addEventListener("mouseout", function(){
      document.getElementById("' . $entry[0] . '-tech").classList.add("noVis");
    });</script>';
}

?>

</div>