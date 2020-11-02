<?php 
/* Intended for embedded a bandcamp albums */
$title = 'Music Album Example';
$creditOne = 'Year';
$creditTwo = 'Label';
// the exact name of the image file for your album art. place in this album's images folder
$description = '<small>Image below: "Music Company," Adriaen Brouwer, 1620-1750, oil on panel, 39cm × 26cm</small>';

// iframe link. Important: remove the "style" attribute from the tag so it doesn't conflict
$iframe = '<iframe style="border: 0; width: 100%; height: 472px;" src="https://bandcamp.com/EmbeddedPlayer/album=1770973892/size=large/bgcol=ffffff/linkcol=0687f5/artwork=none/transparent=true/" seamless><a href="http://music.kimiko-piano.com/album/bach-well-tempered-clavier-book-1">Bach: Well-Tempered Clavier, Book 1 by Kimiko Ishizaka</a></iframe>';

// if you want to omit a project from the super gallery set $omit to true;
$omit = false;