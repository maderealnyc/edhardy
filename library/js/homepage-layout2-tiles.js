// HOMEPAGE LAYOUT 2 TILES

var TILE_IDS = [ 1, 2, 3, 4, 5, 6, 7, 8 ];

var TemplateRows = [
    [
        " A A B C ",
        " A A D E ",
        " F G G H "
    ]
];

$(function() {

    var el = document.getElementById('homepage-layout2-grid'),
        grid = new Tiles.Grid(el);

    // template is selected by user, not generated so just
    // return the number of columns in the current template
    grid.resizeColumns = function() {
        return this.template.numCols;
    };

    // by default, each tile is an empty div, we'll override creation
    // to add a tile number to each div
    grid.createTile = function(tileId) {
        var tile = new Tiles.Tile(tileId);
        tile.$el.append('<div class="dev-tile-number">' + tileId + '</div>');
        return tile;
    };

    // update the template selection
    var $templateButtons = $('#homepage-layout2-templates .dev-template').on('click', function(e) {

        // unselect all templates
        $templateButtons.removeClass("selected");
        
        // select the template we clicked on
        $(e.target).addClass("selected");
        
        // get the JSON rows for the selection
        var index = $(e.target).index(),
            rows = TemplateRows[index];

        // set the new template and resize the grid
        grid.template = Tiles.Template.fromJSON(rows);  
        grid.isDirty = true;
        grid.resize();

        // adjust number of tiles to match selected template
        var ids = TILE_IDS.slice(0, grid.template.rects.length);
        grid.updateTiles(ids);
        grid.redraw(true);
    });

    // make the initial selection
    $('#homepage-layout2-t1').trigger('click');
    
    // wait until users finishes resizing the browser
    var debouncedResize = debounce(function() {
        grid.resize();
        grid.redraw(true);
    }, 200);

    // when the window resizes, redraw the grid
    $(window).resize(debouncedResize);
});

