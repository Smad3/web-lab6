<?php
include_once "lab6/inc/init-inc.php";

$domxml = new DOMDocument();
$domxml->load('xml/prodlist.xml', LIBXML_NOBLANKS | LIBXML_NOCDATA | LIBXML_NOENT);
$root = $domxml->documentElement;

$sects = Array();
$prods = Array();
$curprod = Array();



readLevel($root, $curprod, 1);

function readLevel($el, &$prod, $level = 0) {
	global $sects, $prods;
	$curprod = Array();
	
	if($el->childNodes) {
		foreach($el->childNodes as $sub) {
			if ($sub->nodeType == XML_ELEMENT_NODE) {
				switch($sub->nodeName) {
					case 'sect':
						$snew = Array();
						$snew['id'] = $sub->getAttribute('id');
						$snew['name'] = $sub->nodeValue;
						$sects[] = $snew;
						break;
					case 'product':
						$curprod = getProduct($sub);
						$curprod['sect_id'] = $sub->getAttribute('sect_id');
						$prods[] = $curprod;
						break;
				}
				readLevel($sub, $curprod, ($level + 1));
			}
		}
	}
}

function getProduct($el) {
	$prod = Array();
	if ($el->childNodes) {
		$prod['additional'] = '';
		foreach ($el->childNodes as $sub) {
			if ($sub->nodeType == XML_ELEMENT_NODE) {
				switch ($sub->nodeName) {
					case 'name':
						$prod['name'] = $sub->nodeValue;
						break;
					case 'price':
						$prod['price'] = $sub->nodeValue;
						break;
					case 'serial':
						$prod['serial'] = $sub->nodeValue;
						break;
					case 'year':
						$prod['year'] = $sub->nodeValue;
						break;
					case 'img':
						$prod['img'] = $sub->nodeValue;
						break;
					case 'additional':
						$prod['additional'] .= $sub->nodeValue.'; ';
						break;
				}
			}
		}
	}
	return $prod;
}

echo '<li>
	<span>
		<span class="title-name">Фільтри:</span>
		<span class="title-date">[13.12.2023]</span>
	</span>
	<div>';
foreach($sects as $si) {
	echo '<a href="index.php?p=xmlparser&f='.$si['id'].'"><span class="title-text">'.$si['name'].';<br></span></a>';
}
echo '<a href="index.php?p=xmlparser"><span class="title-text">Скинути.<br></span></a>';
echo	'<span class="title-link"><a href="#">Подробнее...</a></span>
	</div>
</li>';

shuffle($prods);
foreach($prods as $si) {
	$filter = getHttpVar('f', 'all');
	if ($filter == 'all' || $filter == $si['sect_id']) {
		echo '<li>
			<span>
				<span class="title-name">'.$si['name'].'; id='.$si['serial'].'</span>
				<span class="title-date">['.$si['year'].']</span>
			</span>
			<div>
				<span class="title-text">'.$si['additional'].'<br><img src="xml\\img\\'.$si['img'].'"><br></span>
				<span class="title-link"><a href="#">'.$si['price'].' грн.</a></span>
			</div>
		</li>';
	}
}
?>
