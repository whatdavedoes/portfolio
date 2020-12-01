# portfolio
This is Dave's portfolio. It has a minimalistic design to put the emphasis on the portfolio entries.

The live website can be seen [here](https://www.whatdavedoes.com).

# It can serve as portfolio template.
*How to adapt:*
* Update website icon, open graph data(for social media), and title tag in header.php
* Update data.php
* Delete/adapt content on about.php below inc/header.php and above inc/contactbox.php
* Replace Dave's entry detail pages with yours(remove ironpdf.php, nibtrek.php, etc...). You may wish to keep one for reference.

## How to add portfolio entries
### 1. Start by outlining your portfolio entries/pieces in inc/data.php
  * Each portfolio entry/piece is an array nested in the $entries array
  * Each entry array contains:
    * page name string (corresponds to entry details file name without extension)
    * image file name string
    * array of tools/technologies used (corresponds to the $tools array)
### 2. Add a details page for each entry
  * The file name MUST be equal to the corresponding page name string in the entry array (excluding the .php extension) and placed on the same level as index.php
  * At the top, add a $page variable. It MUST also be equal to the corresponding page name string in the entry array
  * Next, include inc/header.php
  * Use the addEntryDetails(), addBigTxt(), and addContentArea() PHP functions to populate your entry pages
  * Note that these functions return the output but you must echo the result for it to be seen
