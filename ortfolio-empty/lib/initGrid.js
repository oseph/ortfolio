var grid = document.querySelector('.grid');
var msnry;
msnry = new Masonry( grid, {
  itemSelector: '.grid-item',
  columnWidth: '.grid-item',
  gutter:10,
  percentPosition: true
});

imagesLoaded( grid ).on( 'progress', function() {
  msnry.layout();
});