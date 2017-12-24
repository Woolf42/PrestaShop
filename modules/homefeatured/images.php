
<?php include('../../config/config.inc.php'); 
$skipcategory = intval(Configuration::get('HOME_SCROLL_SKIP_CAT'));
	$category = new Category($skipcategory);
			$nb = intval(Configuration::get('HOME_SCROLL_NBR'));
		$products = $category->getProducts(intval($params['cookie']->id_lang), 1, ($nb ? $nb : 10));
		
//crear XML//
$xml = fopen ("xml/news.xml", "w");
 
      fwrite ($xml, '<?xml version="1.0"  encoding="utf-8"' . '?' .'>
<rotator 
	menuNumber="5" 
	menuColor="blue"
	menuAlign="left"
	imageWidth="320"
	imageHeight="240"
   	autoPlay="yes"
	showPauseButton="yes"
	alwaysShowImageCaption="yes"	
	delay="5"
	target="self"
	>');
	   $i=0;
	  
	  //start//
	 while ($products[$i][id_product])
	   {
		   		
				
$no=$products[$i][id_product];
$price=$products[$i][price];
$nam=$products[$i][name];
$desc=$products[$i][description];
$link=$products[$i][link];
$id_image=$products[$i][id_image];


	global $cookie;

		if (empty($idcat))
		{
			return false;
		}

		if ($p < 1) $p = 1;
		if (empty($orderBy))
			$orderBy = 'position';
		if (empty($orderWay))
			$orderWay = 'ASC';
		if ($orderBy == 'id_product' OR	$orderBy == 'price' OR	$orderBy == 'date_add')
			$orderByPrefix = 'p';
		elseif ($orderBy == 'name')
			$orderByPrefix = 'pl';
		elseif ($orderBy == 'manufacturer')
		{
			$orderByPrefix = 'm';
			$orderBy = 'name';
		}
		elseif ($orderBy == 'position')
			$orderByPrefix = 'cp';

		$sorgu = '
		SELECT p.*, pa.`id_product_attribute`, pl.`description`, pl.`description_short`, pl.`available_now`, pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, i.`id_image`, il.`legend`, m.`name` AS manufacturer_name, tl.`name` AS tax_name, t.`rate`, cl.`name` AS category_default, DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new
		FROM `'._DB_PREFIX_.'category_product` cp
		LEFT JOIN `'._DB_PREFIX_.'product` p ON (p.`id_product` = cp.`id_product`)
		LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa ON (p.`id_product` = pa.`id_product` AND default_on = 1)
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (p.`id_category_default` = cl.`id_category` AND cl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'tax` t ON (t.`id_tax` = p.`id_tax`)
		LEFT JOIN `'._DB_PREFIX_.'tax_lang` tl ON (t.`id_tax` = tl.`id_tax` AND tl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
		WHERE cp.`id_category` IN ('.$idcat.') AND p.`active` = 1
		GROUP BY cp.`id_product`
		ORDER BY '.(isset($orderByPrefix) ? $orderByPrefix.'.' : '').'`'.pSQL($orderBy).'` '.pSQL($orderWay).'
		LIMIT '.((intval($p) - 1) * intval($n)).','.intval($n);
		
		$result = Db::getInstance()->ExecuteS($sorgu);
		
		if ($orderBy == 'price')
			Tools::orderbyPrice($result, $orderWay);
		if (!$result)
			return false;

		/* Modify SQL result */
		return Product::getProductsProperties($id_lang, $result);


$veri= mysql_fetch_assoc($sorgu);
$description=$veri['description'];
$description_short=$veri['description_short'];
$name=$veri['name'];




$contenidoxml = $contenidoxml .'
<content title="'.$name.'" img="../../img/p/'.$id_image.'-large.jpg" icon="../../img/p/'.$id_image.'-small.jpg" transition="cube" link="'.__PS_BASE_URI__.'product.php?id_product='.$no.'">
<![cdata[<body>'.$veri['description_short'].'</body>
]]>
</content>';
	     $i++;
	   }
  
   
   //end//
      fwrite ($xml, $contenidoxml);
      
fwrite ($xml, "</rotator>");

if (fclose ($xml))
{
   echo "";
    } 
	else 
	{
    exit ("Error escribiendo el XML");
}
	   




?>
