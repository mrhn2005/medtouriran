<?php
function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'disto'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$google_faces = array(
    'none' => 'None',
	'arial'     => 'Arial',
	'verdana'   => 'Verdana',
	'trebuchet' => 'Trebuchet',
	'georgia'   => 'Georgia',
	'times'     => 'Times New Roman',
	'tahoma'    => 'Tahoma',
	'serif'    => 'Serif',
	'helvetica' => 'Helvetica',
	"Abel" => "Abel",
	"Abril Fatface" => "Abril Fatface",
	"Aclonica" => "Aclonica",
	"Acme" => "Acme",
	"Actor" => "Actor",
	"Adamina" => "Adamina",
	"Advent Pro" => "Advent Pro",
	"Aguafina Script" => "Aguafina Script",
	"Aladin" => "Aladin",
	"Aldrich" => "Aldrich",
	"Alegreya" => "Alegreya",
	"Alegreya SC" => "Alegreya SC",
	"Alex Brush" => "Alex Brush",
	"Alfa Slab One" => "Alfa Slab One",
	"Alice" => "Alice",
	"Alike" => "Alike",
	"Alike Angular" => "Alike Angular",
	"Allan" => "Allan",
	"Allerta" => "Allerta",
	"Allerta Stencil" => "Allerta Stencil",
	"Allura" => "Allura",
	"Almendra" => "Almendra",
	"Almendra SC" => "Almendra SC",
	"Amarante" => "Amarante",
	"Amaranth" => "Amaranth",
	"Amatic SC" => "Amatic SC",
	"Amethysta" => "Amethysta",
	"Andada" => "Andada",
	"Andika" => "Andika",
	"Angkor" => "Angkor",
	"Annie Use Your Telescope" => "Annie Use Your Telescope",
	"Anonymous Pro" => "Anonymous Pro",
	"Antic" => "Antic",
	"Antic Didone" => "Antic Didone",
	"Antic Slab" => "Antic Slab",
	"Anton" => "Anton",
	"Arapey" => "Arapey",
	"Arbutus" => "Arbutus",
	"Architects Daughter" => "Architects Daughter",
	"Arimo" => "Arimo",
	"Arizonia" => "Arizonia",
	"Armata" => "Armata",
	"Artifika" => "Artifika",
	"Arvo" => "Arvo",
	"Asap" => "Asap",
	"Asset" => "Asset",
	"Astloch" => "Astloch",
	"Asul" => "Asul",
	"Atomic Age" => "Atomic Age",
	"Aubrey" => "Aubrey",
	"Audiowide" => "Audiowide",
	"Average" => "Average",
	"Averia Gruesa Libre" => "Averia Gruesa Libre",
	"Averia Libre" => "Averia Libre",
	"Averia Sans Libre" => "Averia Sans Libre",
	"Averia Serif Libre" => "Averia Serif Libre",
	"Bad Script" => "Bad Script",
	"Balthazar" => "Balthazar",
	"Bangers" => "Bangers",
	"Basic" => "Basic",
	"Barlow Semi Condensed" => "Barlow Semi Condensed",	
	"Baumans" => "Baumans",
	"Bayon" => "Bayon",
	"Belgrano" => "Belgrano",
	"Belleza" => "Belleza",
	"Bentham" => "Bentham",
	"Berkshire Swash" => "Berkshire Swash",
	"Bevan" => "Bevan",
	"Bigshot One" => "Bigshot One",
	"Bilbo" => "Bilbo",
	"Bilbo Swash Caps" => "Bilbo Swash Caps",
	"Bitter" => "Bitter",
	"Black Ops One" => "Black Ops One",
	"Bokor" => "Bokor",
	"Bonbon" => "Bonbon",
	"Boogaloo" => "Boogaloo",
	"Bowlby One" => "Bowlby One",
	"Bowlby One SC" => "Bowlby One SC",
	"Brawler" => "Brawler",
	"Bree Serif" => "Bree Serif",
	"Bubblegum Sans" => "Bubblegum Sans",
	"Bubbler One" => "Bubbler One",
	"Buda" => "Buda",
	"Buenard" => "Buenard",
	"Butcherman" => "Butcherman",
	"Butterfly Kids" => "Butterfly Kids",
	"Cabin" => "Cabin",
	"Cabin Condensed" => "Cabin Condensed",
	"Cabin Sketch" => "Cabin Sketch",
	"Caesar Dressing" => "Caesar Dressing",
	"Cagliostro" => "Cagliostro",
	"Calligraffitti" => "Calligraffitti",
	"Cambo" => "Cambo",
	"Candal" => "Candal",
	"Cantarell" => "Cantarell",
	"Cantata One" => "Cantata One",
	"Cantora One" => "Cantora One",
	"Capriola" => "Capriola",
	"Cardo" => "Cardo",
	"Carme" => "Carme",
	"Carter One" => "Carter One",
	"Caudex" => "Caudex",
	"Cedarville Cursive" => "Cedarville Cursive",
	"Ceviche One" => "Ceviche One",
	"Changa One" => "Changa One",
	"Chango" => "Chango",
	"Chau Philomene One" => "Chau Philomene One",
	"Chelsea Market" => "Chelsea Market",
	"Chenla" => "Chenla",
	"Cherry Cream Soda" => "Cherry Cream Soda",
	"Chewy" => "Chewy",
	"Chicle" => "Chicle",
	"Chivo" => "Chivo",
	"Coda" => "Coda",
	"Coda Caption" => "Coda Caption",
	"Codystar" => "Codystar",
	"Comfortaa" => "Comfortaa",
	"Coming Soon" => "Coming Soon",
	"Concert One" => "Concert One",
	"Condiment" => "Condiment",
	"Content" => "Content",
	"Contrail One" => "Contrail One",
	"Convergence" => "Convergence",
	"Cookie" => "Cookie",
	"Copse" => "Copse",
	"Corben" => "Corben",
	"Courgette" => "Courgette",
	"Cousine" => "Cousine",
	"Coustard" => "Coustard",
	"Covered By Your Grace" => "Covered By Your Grace",
	"Crafty Girls" => "Crafty Girls",
	"Creepster" => "Creepster",
	"Crete Round" => "Crete Round",
	"Crimson Text" => "Crimson Text",
	"Crushed" => "Crushed",
	"Cuprum" => "Cuprum",
	"Cutive" => "Cutive",
	"Damion" => "Damion",
	"Dancing Script" => "Dancing Script",
	"Dangrek" => "Dangrek",
	"Dawning of a New Day" => "Dawning of a New Day",
	"Days One" => "Days One",
	"Delius" => "Delius",
	"Delius Swash Caps" => "Delius Swash Caps",
	"Delius Unicase" => "Delius Unicase",
	"Della Respira" => "Della Respira",
	"Devonshire" => "Devonshire",
	"Didact Gothic" => "Didact Gothic",
	"Diplomata" => "Diplomata",
	"Diplomata SC" => "Diplomata SC",
	"Doppio One" => "Doppio One",
	"Dorsa" => "Dorsa",
	"Dosis" => "Dosis",
	"Dr Sugiyama" => "Dr Sugiyama",
	"Droid Sans" => "Droid Sans",
	"Droid Sans Mono" => "Droid Sans Mono",
	"Droid Serif" => "Droid Serif",
	"Duru Sans" => "Duru Sans",
	"Dynalight" => "Dynalight",
	"EB Garamond" => "EB Garamond",
	"Eagle Lake" => "Eagle Lake",
	"Eater" => "Eater",
	"Economica" => "Economica",
	"Electrolize" => "Electrolize",
	"Emblema One" => "Emblema One",
	"Emilys Candy" => "Emilys Candy",
	"Engagement" => "Engagement",
	"Enriqueta" => "Enriqueta",
	"Erica One" => "Erica One",
	"Esteban" => "Esteban",
	"Euphoria Script" => "Euphoria Script",
	"Ewert" => "Ewert",
	"Exo" => "Exo",
	"Expletus Sans" => "Expletus Sans",
	"Fjalla One" => "Fjalla One",
	"Fanwood Text" => "Fanwood Text",
	"Fascinate" => "Fascinate",
	"Fascinate Inline" => "Fascinate Inline",
	"Fasthand" => "Fasthand",
	"Federant" => "Federant",
	"Federo" => "Federo",
	"Felipa" => "Felipa",
	"Fjord One" => "Fjord One",
	"Flamenco" => "Flamenco",
	"Flavors" => "Flavors",
	"Fondamento" => "Fondamento",
	"Fontdiner Swanky" => "Fontdiner Swanky",
	"Forum" => "Forum",
	"Francois One" => "Francois One",
	"Fredericka the Great" => "Fredericka the Great",
	"Fredoka One" => "Fredoka One",
	"Freehand" => "Freehand",
	"Fresca" => "Fresca",
	"Frijole" => "Frijole",
	"Fugaz One" => "Fugaz One",
	"GFS Didot" => "GFS Didot",
	"GFS Neohellenic" => "GFS Neohellenic",
	"Galdeano" => "Galdeano",
	"Galindo" => "Galindo",
	"Gentium Basic" => "Gentium Basic",
	"Gentium Book Basic" => "Gentium Book Basic",
	"Geo" => "Geo",
	"Geostar" => "Geostar",
	"Geostar Fill" => "Geostar Fill",
	"Germania One" => "Germania One",
	"Give You Glory" => "Give You Glory",
	"Glass Antiqua" => "Glass Antiqua",
	"Glegoo" => "Glegoo",
	"Gloria Hallelujah" => "Gloria Hallelujah",
	"Goblin One" => "Goblin One",
	"Gochi Hand" => "Gochi Hand",
	"Gorditas" => "Gorditas",
	"Goudy Bookletter 1911" => "Goudy Bookletter 1911",
	"Graduate" => "Graduate",
	"Gravitas One" => "Gravitas One",
	"Great Vibes" => "Great Vibes",
	"Griffy" => "Griffy",
	"Gruppo" => "Gruppo",
	"Gudea" => "Gudea",
	"Habibi" => "Habibi",
	"Hammersmith One" => "Hammersmith One",
	"Handlee" => "Handlee",
	"Hanuman" => "Hanuman",
	"Happy Monkey" => "Happy Monkey",
	"Headland One" => "Headland One",
	"Henny Penny" => "Henny Penny",
	"Herr Von Muellerhoff" => "Herr Von Muellerhoff",
	"Hind" => "Hind",
	"Hind Siliguri" => "Hind Siliguri",
	"Hind Vadodara" => "Hind Vadodara",
	"Holtwood One SC" => "Holtwood One SC",
	"Homemade Apple" => "Homemade Apple",
	"Homenaje" => "Homenaje",
	"IM Fell DW Pica" => "IM Fell DW Pica",
	"IM Fell DW Pica SC" => "IM Fell DW Pica SC",
	"IM Fell Double Pica" => "IM Fell Double Pica",
	"IM Fell Double Pica SC" => "IM Fell Double Pica SC",
	"IM Fell English" => "IM Fell English",
	"IM Fell English SC" => "IM Fell English SC",
	"IM Fell French Canon" => "IM Fell French Canon",
	"IM Fell French Canon SC" => "IM Fell French Canon SC",
	"IM Fell Great Primer" => "IM Fell Great Primer",
	"IM Fell Great Primer SC" => "IM Fell Great Primer SC",
	"Iceberg" => "Iceberg",
	"Iceland" => "Iceland",
	"Imprima" => "Imprima",
	"Inconsolata" => "Inconsolata",
	"Inder" => "Inder",
	"Indie Flower" => "Indie Flower",
	"Inika" => "Inika",
	"Irish Grover" => "Irish Grover",
	"Istok Web" => "Istok Web",
	"Italiana" => "Italiana",
	"Italianno" => "Italianno",
	"Jacques Francois" => "Jacques Francois",
	"Jacques Francois Shadow" => "Jacques Francois Shadow",
	"Jim Nightshade" => "Jim Nightshade",
	"Jockey One" => "Jockey One",
	"Jolly Lodger" => "Jolly Lodger",
	"Josefin Sans" => "Josefin Sans",
	"Josefin Slab" => "Josefin Slab",
	"Judson" => "Judson",
	"Julee" => "Julee",
	"Junge" => "Junge",
	"Jura" => "Jura",
	"Just Another Hand" => "Just Another Hand",
	"Just Me Again Down Here" => "Just Me Again Down Here",
	"Kameron" => "Kameron",
	"Karla" => "Karla",
	"Kaushan Script" => "Kaushan Script",
	"Kelly Slab" => "Kelly Slab",
	"Kenia" => "Kenia",
	"Khmer" => "Khmer",
	"Knewave" => "Knewave",
	"Kotta One" => "Kotta One",
	"Koulen" => "Koulen",
	"Kranky" => "Kranky",
	"Kreon" => "Kreon",
	"Kristi" => "Kristi",
	"Krona One" => "Krona One",
	"La Belle Aurore" => "La Belle Aurore",
	"Lancelot" => "Lancelot",
	"Lato" => "Lato",
	"League Script" => "League Script",
	"Leckerli One" => "Leckerli One",
	"Ledger" => "Ledger",
	"Lekton" => "Lekton",
	"Lemon" => "Lemon",
	"Life Savers" => "Life Savers",
	"Lilita One" => "Lilita One",
	"Limelight" => "Limelight",
	"Linden Hill" => "Linden Hill",
	"Lobster" => "Lobster",
	"Lobster Two" => "Lobster Two",
	"Londrina Outline" => "Londrina Outline",
	"Londrina Shadow" => "Londrina Shadow",
	"Londrina Sketch" => "Londrina Sketch",
	"Londrina Solid" => "Londrina Solid",
	"Lora" => "Lora",
	"Love Ya Like A Sister" => "Love Ya Like A Sister",
	"Loved by the King" => "Loved by the King",
	"Lovers Quarrel" => "Lovers Quarrel",
	"Luckiest Guy" => "Luckiest Guy",
	"Lusitana" => "Lusitana",
	"Lustria" => "Lustria",
	"Monda" => "Monda",
	"Macondo" => "Macondo",
	"Macondo Swash Caps" => "Macondo Swash Caps",
	"Magra" => "Magra",
	"Maiden Orange" => "Maiden Orange",
	"Mako" => "Mako",
	"Marck Script" => "Marck Script",
	"Marko One" => "Marko One",
	"Marmelad" => "Marmelad",
	"Marvel" => "Marvel",
	"Mate" => "Mate",
	"Mate SC" => "Mate SC",
	"Maven Pro" => "Maven Pro",
	"McLaren" => "McLaren",
	"Meddon" => "Meddon",
	"MedievalSharp" => "MedievalSharp",
	"Medula One" => "Medula One",
	"Megrim" => "Megrim",
	"Meie Script" => "Meie Script",
	"Merienda One" => "Merienda One",
	"Merriweather" => "Merriweather",
	"Metal" => "Metal",
	"Metal Mania" => "Metal Mania",
	"Metamorphous" => "Metamorphous",
	"Metrophobic" => "Metrophobic",
	"Michroma" => "Michroma",
	"Miltonian" => "Miltonian",
	"Miltonian Tattoo" => "Miltonian Tattoo",
	"Miniver" => "Miniver",
	"Miss Fajardose" => "Miss Fajardose",
	"Modern Antiqua" => "Modern Antiqua",
	"Molengo" => "Molengo",
	"Monofett" => "Monofett",
	"Monoton" => "Monoton",
	"Monsieur La Doulaise" => "Monsieur La Doulaise",
	"Montaga" => "Montaga",
	"Montez" => "Montez",
	"Montserrat" => "Montserrat",
	"Moul" => "Moul",
	"Moulpali" => "Moulpali",
	"Mountains of Christmas" => "Mountains of Christmas",
	"Mr Bedfort" => "Mr Bedfort",
	"Mr Dafoe" => "Mr Dafoe",
	"Mr De Haviland" => "Mr De Haviland",
	"Mrs Saint Delafield" => "Mrs Saint Delafield",
	"Mrs Sheppards" => "Mrs Sheppards",
	"Muli" => "Muli",
	"Mystery Quest" => "Mystery Quest",
	"Noto Sans" => "Noto Sans",
	"Neucha" => "Neucha",
	"Neuton" => "Neuton",
	"News Cycle" => "News Cycle",
	"Niconne" => "Niconne",
	"Nixie One" => "Nixie One",
	"Nobile" => "Nobile",
	"Nokora" => "Nokora",
	"Norican" => "Norican",
	"Nosifer" => "Nosifer",
	"Nothing You Could Do" => "Nothing You Could Do",
	"Noticia Text" => "Noticia Text",
	"Nova Cut" => "Nova Cut",
	"Nova Flat" => "Nova Flat",
	"Nova Mono" => "Nova Mono",
	"Nova Oval" => "Nova Oval",
	"Nova Round" => "Nova Round",
	"Nova Script" => "Nova Script",
	"Nova Slim" => "Nova Slim",
	"Nova Square" => "Nova Square",
	"Numans" => "Numans",
	"Nunito" => "Nunito",
	"Odor Mean Chey" => "Odor Mean Chey",
	"Old Standard TT" => "Old Standard TT",
	"Oldenburg" => "Oldenburg",
	"Oleo Script" => "Oleo Script",
	"Open Sans" => "Open Sans",
	"Open Sans Condensed" => "Open Sans Condensed",
	"Oranienbaum" => "Oranienbaum",
	"Orbitron" => "Orbitron",
	"Oregano" => "Oregano",
	"Orienta" => "Orienta",
	"Original Surfer" => "Original Surfer",
	"Oswald" => "Oswald",
	"Over the Rainbow" => "Over the Rainbow",
	"Overlock" => "Overlock",
	"Overlock SC" => "Overlock SC",
	"Ovo" => "Ovo",
	"Oxygen" => "Oxygen",
	"Oxygen Mono" => "Oxygen Mono",
	"PT Mono" => "PT Mono",
	"PT Sans" => "PT Sans",
	"PT Sans Caption" => "PT Sans Caption",
	"PT Sans Narrow" => "PT Sans Narrow",
	"PT Serif" => "PT Serif",
	"PT Serif Caption" => "PT Serif Caption",
	"Pacifico" => "Pacifico",
	"Pathway Gothic One" => "Pathway Gothic One",
	"Parisienne" => "Parisienne",
	"Passero One" => "Passero One",
	"Passion One" => "Passion One",
	"Patrick Hand" => "Patrick Hand",
	"Patua One" => "Patua One",
	"Paytone One" => "Paytone One",
	"Peralta" => "Peralta",
	"Permanent Marker" => "Permanent Marker",
	"Petit Formal Script" => "Petit Formal Script",
	"Petrona" => "Petrona",
	"Philosopher" => "Philosopher",
	"Piedra" => "Piedra",
	"Pinyon Script" => "Pinyon Script",
	"Plaster" => "Plaster",
	"Play" => "Play",
	"Playball" => "Playball",
	"Playfair Display" => "Playfair Display",
	"Podkova" => "Podkova",
	"Poiret One" => "Poiret One",
	"Poller One" => "Poller One",
	"Poly" => "Poly",
	"Pompiere" => "Pompiere",
	"Pontano Sans" => "Pontano Sans",
	"Poppins" => "Poppins",
	"Port Lligat Sans" => "Port Lligat Sans",
	"Port Lligat Slab" => "Port Lligat Slab",
	"Prata" => "Prata",
	"Preahvihear" => "Preahvihear",
	"Press Start 2P" => "Press Start 2P",
	"Princess Sofia" => "Princess Sofia",
	"Prociono" => "Prociono",
	"Prosto One" => "Prosto One",
	"Puritan" => "Puritan",
	"Quando" => "Quando",
	"Quantico" => "Quantico",
	"Quattrocento" => "Quattrocento",
	"Quattrocento Sans" => "Quattrocento Sans",
	"Questrial" => "Questrial",
	"Quicksand" => "Quicksand",
	"Qwigley" => "Qwigley",
	"Racing Sans One" => "Racing Sans One",
	"Renner" => "Renner",
	"Radley" => "Radley",
	"Raleway" => "Raleway",
	"Raleway Dots" => "Raleway Dots",
	"Rammetto One" => "Rammetto One",
	"Ranchers" => "Ranchers",
	"Rancho" => "Rancho",
	"Rationale" => "Rationale",
	"Redressed" => "Redressed",
	"Reenie Beanie" => "Reenie Beanie",
	"Revalia" => "Revalia",
	"Ribeye" => "Ribeye",
	"Ribeye Marrow" => "Ribeye Marrow",
	"Righteous" => "Righteous",
	"Rochester" => "Rochester",
	"Rock Salt" => "Rock Salt",
	"Rokkitt" => "Rokkitt",
	"Romanesco" => "Romanesco",
	"Ropa Sans" => "Ropa Sans",
	"Rosario" => "Rosario",
	"Rosarivo" => "Rosarivo",
	"Rouge Script" => "Rouge Script",
	"Rubik" => "Rubik",
	"Ruda" => "Ruda",
	"Ruge Boogie" => "Ruge Boogie",
	"Ruluko" => "Ruluko",
	"Ruslan Display" => "Ruslan Display",
	"Russo One" => "Russo One",
	"Ruthie" => "Ruthie",
	"Roboto" => "Roboto",
	"Roboto Condensed" => "Roboto Condensed",
	"Rye" => "Rye",
	"Sail" => "Sail",
	"Salsa" => "Salsa",
	"Sancreek" => "Sancreek",
	"Sansita One" => "Sansita One",
	"Sarina" => "Sarina",
	"Satisfy" => "Satisfy",
	"Schoolbell" => "Schoolbell",
	"Seaweed Script" => "Seaweed Script",
	"Sevillana" => "Sevillana",
	"Shadows Into Light" => "Shadows Into Light",
	"Shadows Into Light Two" => "Shadows Into Light Two",
	"Shanti" => "Shanti",
	"Share" => "Share",
	"Shojumaru" => "Shojumaru",
	"Short Stack" => "Short Stack",
	"Siemreap" => "Siemreap",
	"Sigmar One" => "Sigmar One",
	"Signika" => "Signika",
	"Signika Negative" => "Signika Negative",
	"Simonetta" => "Simonetta",
	"Sirin Stencil" => "Sirin Stencil",
	"Six Caps" => "Six Caps",
	"Skranji" => "Skranji",
	"Slackey" => "Slackey",
	"Smokum" => "Smokum",
	"Smythe" => "Smythe",
	"Sniglet" => "Sniglet",
	"Snippet" => "Snippet",
	"Sofia" => "Sofia",
	"Sonsie One" => "Sonsie One",
	"Sorts Mill Goudy" => "Sorts Mill Goudy",
	"Source Sans Pro" => "Source Sans Pro",
	"Special Elite" => "Special Elite",
	"Spicy Rice" => "Spicy Rice",
	"Spinnaker" => "Spinnaker",
	"Spirax" => "Spirax",
	"Squada One" => "Squada One",
	"Stardos Stencil" => "Stardos Stencil",
	"Stint Ultra Condensed" => "Stint Ultra Condensed",
	"Stint Ultra Expanded" => "Stint Ultra Expanded",
	"Stoke" => "Stoke",
	"Sue Ellen Francisco" => "Sue Ellen Francisco",
	"Sunshiney" => "Sunshiney",
	"Supermercado One" => "Supermercado One",
	"Suwannaphum" => "Suwannaphum",
	"Swanky and Moo Moo" => "Swanky and Moo Moo",
	"Syncopate" => "Syncopate",
	"Tangerine" => "Tangerine",
	"Taprom" => "Taprom",
	"Telex" => "Telex",
	"Tenor Sans" => "Tenor Sans",
	"The Girl Next Door" => "The Girl Next Door",
	"Tienne" => "Tienne",
	"Tinos" => "Tinos",
	"Titan One" => "Titan One",
	"Trade Winds" => "Trade Winds",
	"Trocchi" => "Trocchi",
	"Trochut" => "Trochut",
	"Trykker" => "Trykker",
	"Tulpen One" => "Tulpen One",
	"Ubuntu" => "Ubuntu",
	"Ubuntu Condensed" => "Ubuntu Condensed",
	"Ubuntu Mono" => "Ubuntu Mono",
	"Ultra" => "Ultra",
	"Uncial Antiqua" => "Uncial Antiqua",
	"UnifrakturCook" => "UnifrakturCook",
	"UnifrakturMaguntia" => "UnifrakturMaguntia",
	"Unkempt" => "Unkempt",
	"Unlock" => "Unlock",
	"Unna" => "Unna",
	"VT323" => "VT323",
	"Varela" => "Varela",
	"Varela Round" => "Varela Round",
	"Vast Shadow" => "Vast Shadow",
	"Vibur" => "Vibur",
	"Vidaloka" => "Vidaloka",
	"Viga" => "Viga",
	"Voces" => "Voces",
	"Volkhov" => "Volkhov",
	"Vollkorn" => "Vollkorn",
	"Voltaire" => "Voltaire",
	"Work Sans" => "Work Sans",
	"Waiting for the Sunrise" => "Waiting for the Sunrise",
	"Wallpoet" => "Wallpoet",
	"Walter Turncoat" => "Walter Turncoat",
	"Warnes" => "Warnes",
	"Wellfleet" => "Wellfleet",
	"Wire One" => "Wire One",
	"Yanone Kaffeesatz" => "Yanone Kaffeesatz",
	"Yellowtail" => "Yellowtail",
	"Yeseva One" => "Yeseva One",
	"Yesteryear" => "Yesteryear",
	"Zeyada" => "Zeyad"	);  


	// Typography Options
	$typography_options = array(
		'sizes' => array( '10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
		'faces' => $google_faces,
		'styles' => array( '100' => '100','200' => '200','300' => '300','400' => '400','500' => '500','600' => '600','700' => '700','800' => '800','900' => '900' ),
		'color' => false
	);
	$typography_sub_m = array(
		'sizes' => array( '10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
		'faces' => false,
		'styles' => array( '100' => '100','200' => '200','300' => '300','400' => '400','500' => '500','600' => '600','700' => '700','800' => '800','900' => '900' ),
		'color' => false
	);
	
	// Typography Defaults
	$menu_typography_sub_m = array(
		'size' => '14px',
		'face' => 'Poppins',
		'style' => '400',
		'color' => '#bada55' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'Poppins',
		'style' => '400',
		'color' => '#bada55' );

	// Menu Typography Defaults
	$menu_typography_defaults = array(
		'size' => '15px',
		'face' => 'Poppins',
		'style' => '600',
		'color' => '#bada55' );


// Typography Options
	$title_options = array(
		'sizes' => false,
		'faces' => $google_faces,
		'styles' => array( '100' => '100','200' => '200','300' => '300','400' => '400','500' => '500','600' => '600','700' => '700','800' => '800','900' => '900' ),
		'color' => false
	);
	// Title Defaults
	$title_defaults = array(
		'size' => false,
		'face' => 'Poppins',
		'style' => '700',
		'color' => false );

	$grid_size_options = array(
		'sizes' => array( '10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60'),
		'faces' => false,
		'styles' => false,
		'color' => false
	);
	$large_defaults = array(
		'size' => '30px',
		'face' => false,
		'style' => false,
		'color' => false );
	$grid_defaults = array(
		'size' => '22px',
		'face' => false,
		'style' => false,
		'color' => false );
	$list_defaults = array(
		'size' => '25px',
		'face' => false,
		'style' => false,
		'color' => false );
           


	// Option sidebar
	$option_sidebar = array();
	$sidebars = get_option('sbg_sidebars');
	$option_sidebar['']='';
	
	if(isset($sidebars)) {
		if(is_array($sidebars)) {			
			foreach($sidebars as $sidebar) {				
				$option_sidebar[$sidebar] = $sidebar;
			}
			
		}
	}


	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// pull all page into an array
	$options_page = array();
	$options_page_obj = get_pages();
	$options_page['']='';
	foreach ($options_page_obj as $page) {
		$options_page[$page->ID] = $page->post_title;
	}
        
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}



	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/options/';

	$options = array();
        
        
        $options[] = array(
		'name' => esc_html__('General Setting', 'disto'),
		'type' => 'heading');

		$options[] = array(
		'name' => "Header Layout (header menu and logo)",
		'id' => "header_layout_design",
		'std' => "header_layout_4",
		'type' => "images",
		'options' => array(
			'header_magazine_personal' => $imagepath . 'header1.png',
			'header_magazine_black' => $imagepath . 'header2.png',
			'header_magazine_full_screen' => $imagepath . 'header3.png',
			'header_layout_4' => $imagepath . 'header4.png',			
			'header_layout_6' => $imagepath . 'header5.png'
			)
	);

		

		
	$options[] = array(
		'name' => esc_html__('Theme color', 'disto'),
		'id' => 'theme_color',
		'std' => '',
		'type' => 'color' );
		
		$options[] = array(
		'name' => esc_html__('Main Menu Background', 'disto'),
		'id' => 'menu_bg_color',
		'std' => '',
		'type' => 'color' ); 

		$options[] = array(
		'name' => esc_html__('Main Menu Background gradient (Note: Gradient background is mix with Main Menu Background)', 'disto'),
		'id' => 'menu_bg_color_gradient',
		'std' => '',
		'type' => 'color' ); 

		$options[] = array(
		'name' => esc_html__('Main Menu text color', 'disto'),
		'id' => 'menu_text_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => esc_html__('Disable header search', 'disto'),
		'id' => 'disable_top_search',
		'std' => '0',                
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => esc_html__('Disable footer social icons', 'disto'),
		'id' => 'disable_social_icons',
		'std' => '0',                
		'type' => 'checkbox');

	$options[] = array(
		'name' => esc_html__('Enable dark skin', 'disto'),
		'id' => 'enable_dark_skin',
		'std' => '0',                
		'type' => 'checkbox');

	$options[] = array(
		'name' => esc_html__('Disable current date', 'disto'),
		'id' => 'jl_disable_c_date',
		'std' => '0',                
		'type' => 'checkbox');

	$options[] = array(
		'name' => esc_html__('Current date title', 'disto'),
		'id' => 'jl_date_title',
		'std' => 'Current Date:',
		'type' => 'text');	
		
		
				        
        //End Gerneral setting



        //Typography
		$options[] = array(
		'name' => esc_html__('Typography', 'disto'),
		'type' => 'heading');  


		$options[] = array(
		'name' => esc_html__('Menu Font', 'disto'),
		'id' => "menu_font_style",
		'std' => $menu_typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
		);

		$options[] = array(
		'name' => esc_html__('Submenu font size', 'disto'),
		'id' => "submenu_font_size",
		'std' => $menu_typography_sub_m,
		'type' => 'typography',
		'options' => $typography_sub_m
		);

		$options[] = array(
		'name' => esc_html__('Enable capitalize menu', 'disto'),
		'id' => 'enable_capitalize_menu',
		'std' => '1',                
		'type' => 'checkbox');

		$options[] = array(
		'name' => esc_html__('Menu letter spacing', 'disto'),
		'id' => 'letter_spacing_menu',
		'std' => '-0.03em',
		'type' => 'text');	

		$options[] = array(
		'name' => esc_html__('Paragraph Font', 'disto'),
		'id' => "paragrap_font_style",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
		);

		$options[] = array(
		'name' => esc_html__('Title Font', 'disto'),
		'id' => "title_font_style",
		'std' => $title_defaults,
		'type' => 'typography',
		'options' => $title_options
		);

        $options[] = array(
		'name' => esc_html__('Enable upercase heading title', 'disto'),
		'id' => 'upercase_heading_title',
		'std' => '0',                
		'type' => 'checkbox');

		$options[] = array(
		'name' => esc_html__('Title letter spacing', 'disto'),
		'id' => 'letter_spacing_heading',
		'std' => '-0.03em',
		'type' => 'text');	

		$options[] = array(
		'name' => esc_html__('Title line height', 'disto'),
		'id' => 'line_height_heading',
		'std' => '1.3',
		'type' => 'text');	

		$options[] = array(
		'name' => esc_html__('Large post font size', 'disto'),
		'id' => "large_post_font_size",
		'std' => $large_defaults,
		'type' => 'typography',
		'options' => $grid_size_options
		);


		$options[] = array(
		'name' => esc_html__('Grid post font size', 'disto'),
		'id' => "grid_post_font_size",
		'std' => $grid_defaults,
		'type' => 'typography',
		'options' => $grid_size_options
		);

		$options[] = array(
		'name' => esc_html__('List post font size', 'disto'),
		'id' => "list_post_font_size",
		'std' => $list_defaults,
		'type' => 'typography',
		'options' => $grid_size_options
		);

        
		//End Typography

	    //Slider option
	$options[] = array(
		'name' => esc_html__('Home Slider & Carousel', 'disto'),
		'type' => 'heading');   

	$options[] = array(
		'name' => esc_html__('Slider category', 'disto'),
		'id' => 'slider_category_select',
		'std' => '', // These items get checked by default
		'type' => 'multicheck',
		'options' => $options_categories);
		
		$options[] = array(
		'name' => esc_html__('Number of slider', 'disto'),
		'id' => 'slider_number',
		'std' => '6',
		'type' => 'text');	

		$options[] = array(
		'name' => esc_html__('Offset post slider', 'disto'),
		'id' => 'number_offset_post_right',
		'std' => '0',
		'type' => 'text');	

		

		$options[] = array(
		'name' => esc_html__('Header Carousel Category', 'disto'),
		'id' => 'footer_news_post',
		'std' => '', // These items get checked by default
		'type' => 'multicheck',
		'options' => $options_categories);	

	
		$options[] = array(
		'name' => esc_html__('Number of Post Header Carousel', 'disto'),
		'id' => 'number_footer_news',
		'std' => '10',
		'type' => 'text');

		$options[] = array(
		'name' => esc_html__('Offset Header Carousel', 'disto'),
		'id' => 'number_offset_footer_news',
		'std' => '0',
		'type' => 'text');

	//End slider option
	
	
	   
        
        //end typography
         
        //Blog
	$options[] = array(
		'name' => esc_html__('Blog & single post', 'disto'),
		'type' => 'heading'); 


	$options[] = array(
		'name' => esc_html__('Single Post Layout', 'disto'),
		'id' => 'single_post_layout_options',
		'std' => 'single_post_layout_1',
		'type' => 'radio',
		'options' => array(
			'single_post_layout_1' => esc_html__('Default Layout', 'disto'),
			'single_post_layout_4' => esc_html__('Title Below Align Left', 'disto'),
			'single_post_layout_5' => esc_html__('Title Above Align Left', 'disto'),
			'single_post_layout_7' => esc_html__('Full Width Image With Caption Overlay Center', 'disto'),
			'single_post_layout_8' => esc_html__('Full Width Image With Caption Overlay Bottom', 'disto'),
			'single_post_layout_9' => esc_html__('Full Width Image With Caption above', 'disto'),
			'single_post_layout_10' => esc_html__('Full Width Only Caption', 'disto'),
			'single_post_layout_11' => esc_html__('Full Width Caption With Post Format', 'disto'),
			'single_post_layout_12' => esc_html__('Caption Without Image', 'disto')
		));  
		
	$options[] = array(
		'name' => esc_html__('Disable post date', 'disto'),
		'id' => 'disable_post_date',
		'std' => '0',                
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => esc_html__('Disable post author', 'disto'),
		'id' => 'disable_post_author',
		'std' => '0',                
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => esc_html__('Disable post category', 'disto'),
		'id' => 'disable_post_category',
		'std' => '0',                
		'type' => 'checkbox');		

	$options[] = array(
		'name' => esc_html__('Disable post comment meta', 'disto'),
		'id' => 'disable_post_comment_meta',
		'std' => '0',                
		'type' => 'checkbox');	

	$options[] = array(
		'name' => esc_html__('Disable post tag', 'disto'),
		'id' => 'disable_post_tag',
		'std' => '0',                
		'type' => 'checkbox'); 
		
	$options[] = array(
		'name' => esc_html__('Disable post share', 'disto'),
		'id' => 'disable_post_share',
		'std' => '0',                
		'type' => 'checkbox'); 		


	$options[] = array(
		'name' => esc_html__('Disable post related', 'disto'),
		'id' => 'disable_post_related',
		'std' => '0',                
		'type' => 'checkbox');

	$options[] = array(
		'name' => esc_html__('Disable post view', 'disto'),
		'id' => 'disable_post_view',
		'std' => '0',                
		'type' => 'checkbox');
	
        
        
				

	
			$options[] = array(
		'name' => esc_html__('Sidebar', 'disto'),
		'type' => 'heading'); 
		
		$options[] = array(
		'name' => esc_html__('Post sidebar', 'disto'),
		'id' => 'post_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar);
		
		$options[] = array(
		'name' => esc_html__('Page sidebar', 'disto'),
		'id' => 'page_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar); 
		 	
		$options[] = array(
		'name' => esc_html__('Category sidebar', 'disto'),
		'id' => 'category_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar); 
		
		$options[] = array(
		'name' => esc_html__('Tag sidebar', 'disto'),
		'id' => 'tag_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar); 	
		
		$options[] = array(
		'name' => esc_html__('Archive sidebar', 'disto'),
		'id' => 'archive_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar);

		$options[] = array(
		'name' => esc_html__('author sidebar', 'disto'),
		'id' => 'author_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar); 

		$options[] = array(
		'name' => esc_html__('Search sidebar', 'disto'),
		'id' => 'search_sidebar',
		'type' => 'select',
		'options' =>$option_sidebar); 
		
		//Social Footer
	$options[] = array(
		'name' => esc_html__('Social Header Link', 'disto'),
		'type' => 'heading'); 
		
        
	$options[] = array(
		'name' => esc_html__('Facebook', 'disto'),
		'id' => 'facebook',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Google-plus', 'disto'),
		'id' => 'google_plus',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Behance', 'disto'),
		'id' => 'behance',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Vimeo', 'disto'),
		'id' => 'vimeo',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Youtube', 'disto'),
		'id' => 'youtube',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Instagram', 'disto'),
		'id' => 'instagram',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Linkedin', 'disto'),
		'id' => 'Linkedin',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Pinterest', 'disto'),
		'id' => 'pinterest',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Twitter', 'disto'),
		'id' => 'twitter',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Deviantart', 'disto'),
		'id' => 'deviantart',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Dribble', 'disto'),
		'id' => 'dribble',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Dropbox', 'disto'),
		'id' => 'dropbox',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('RSS', 'disto'),
		'id' => 'rss',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Skype', 'disto'),
		'id' => 'skype',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Stumbleupon', 'disto'),
		'id' => 'stumbleupon',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('WordPress', 'disto'),
		'id' => 'wordpress',
		'std' => '',		
		'type' => 'text'); 

	$options[] = array(
		'name' => esc_html__('Yahoo', 'disto'),
		'id' => 'yahoo',
		'std' => '',		
		'type' => 'text'); 
	$options[] = array(
		'name' => esc_html__('Sound Cloud', 'disto'),
		'id' => 'sound_cloud',
		'std' => '',		
		'type' => 'text'); 

        //Footer
       $options[] = array(
		'name' => esc_html__('Footer', 'disto'),
		'type' => 'heading'); 

	$options[] = array(
		'name' => esc_html__('Footer columns', 'disto'),
		'id' => 'footer_columns',
		'std' => 'footer3col',
		'type' => 'radio',
		'options' => array(
			'footer4col' => esc_html__('Footer 4 columns', 'disto'),
			'footer3col' => esc_html__('Footer 3 columns', 'disto'),
			'footer2col' => esc_html__('Footer 2 columns', 'disto'),
			'footer1col' => esc_html__('Footer 1 columns', 'disto'),
			'footer0col' => esc_html__('No Footer', 'disto')
		));	
		
	
		
		$options[] = array(
		'name' => esc_html__('Footer copyright', 'disto'),
		'id' => 'jl_copyright',
		'std' => '© Copyright 2019 Jellywp. All Rights Reserved Powered by Jellywp',
		'type' => 'textarea');	

		 //End Footer
		
			
	return $options;
}