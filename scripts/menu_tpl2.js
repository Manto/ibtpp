/*
  --- menu level scope settins structure --- 
  note that this structure has changed its format since previous version.
  Now this structure has the same layout as Tigra Menu GOLD.
  Format description can be found in product documentation.
*/
var MENU_POS = [
{
	// item sizes
	'height': 20,
	'width': 135,
	// menu block offset from the origin:
	//	for root level origin is upper left corner of the page
	//	for other levels origin is upper left corner of parent item
	'block_top': 81,
	'block_left':0,
	// offsets between items of the same level
	'top': 0,
	'left': 135,
	// time in milliseconds before menu is hidden after cursor has gone out
	// of any items
	'hide_delay': 200,
	'css' : {
		'outer' : ['menu', 'menu'],
		'inner' : ['menu', 'menu']
	}	
},
{
	// item sizes
	'height': 20,
	'width': 365,
	// menu block offset from the origin:
	//	for root level origin is upper left corner of the page
	//	for other levels origin is upper left corner of parent item
	'block_top': 22,
	'block_left': 0,
	// offsets between items of the same level
	'top': 20,
	'left': 0,
	// time in milliseconds before menu is hidden after cursor has gone out
	// of any items
	'hide_delay': 200,
	'css' : {
		'outer' : ['menu2', 'menu2'],
		'inner' : ['menu2', 'menu2']
	}	
}
];
