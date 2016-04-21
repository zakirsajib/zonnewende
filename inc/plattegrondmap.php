<?php 			
	$map = array(
		'mapwidth' => '1000',
		'mapheight' => '600',
	    'categories' => array(
	        array(
	        'id' => 'verblijfsaccommodatie', 
	        'title' => 'Verblijfsaccommodatie',
	        'icon' => 'http://placehold.it/50/236461/ffffff?text=1',
	        'color' => '#30847F',
	        'show' => 'show'
	       ),
	       array(
	        'id' => 'receptie', 
	        'title' => 'Keuken/receptie',
	        'icon' => 'http://placehold.it/50/236461/ffffff?text=2',
	        'color' => '#30847F',
	        'show' => 'show'
	       )
		),
		    'levels' => array(
		        array(
		        'id' => 'basement-floor', 
		        'title' => 'Basement',
		        "map" => "http://localhost/zonnewende/wp-content/uploads/2016/04/mall-underground.svg",
		        "minimap"=> "http://localhost/zonnewende/wp-content/uploads/2016/04/mall-underground-mini.jpg"
		       ),
		       'locations' => array(
			       array(
				    "id" => "gap",
					"title" => "GAP",
					"about" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed pulvinar eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eget lorem sit amet eros blandit consectetur. Fusce tincidunt lectus vitae imperdiet hendrerit. In eget massa ut massa rutrum dictum eu quis metus. Suspendisse sit amet quam pellentesque, porttitor lorem a, pellentesque nibh.<br/><br/><a href='#' class='btn btn-default btn-lg'>Stel hier een vraag over</a>",
					"category" => "verblijfsaccommodatie",
					"description" => "Lorem ipsum",
					"thumbnail" => "http://placehold.it/300x150/B7A6BD/ffffff?text=Placeholder",
					"x"=> "0.3781",
					"y"=> "0.4296"
			       ),
		       ) // location
		    ) // levels
		);// map

				//echo json_encode($map);	
				
				$path = get_template_directory(). '/results.json';
				$fp = fopen($path, 'w');
				fwrite($fp, json_encode($map));
				fclose($fp);
			?>
