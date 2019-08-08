var grid = document.querySelector('.grid');
var msnry;

// his loads the grid after each thumbnail image is loaded
// msnry = new Masonry( grid, {
//   itemSelector: '.grid-item',
//   columnWidth: '.grid-item',
//   gutter:10,
//   percentPosition: true
// });

// imagesLoaded( grid ).on( 'progress', function() {
//   // layout Masonry after each image loads
//   msnry.layout();
// });


// this loads the grid after all thumbnail images are loaded
imagesLoaded( grid, function() {
  // init Isotope after all images have loaded
  msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-item',
    gutter:10,
    percentPosition: true
  });
});