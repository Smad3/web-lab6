<?php
include_once "lab6/inc/init-inc.php";

function sort_uni($a, $b){
	$sort_type = getHttpVar('s', 'dir');
	switch ($sort_type) {
		case "fname":
			return strcmp($a['fname'], $b['fname']);
		case "size":
			if ($a['size'] > $b['size'])
				return 1;
			else if ($a['size'] < $b['size'])
				return -1;
			else 
				return strcmp($a['fname'], $b['fname']);
		case "date":
			if ($a['date'] > $b['date'])
				return 1;
			else if ($a['date'] < $b['date'])
				return -1;
			else 
				return strcmp($a['fname'], $b['fname']);
		default:
			if ($a['dir'] && !$b['dir'])
				return 1;
			else if (!$a['dir'] && $b['dir'])
				return -1;
			else 
				return strcmp($a['fname'], $b['fname']);
	}
}
?>

<li>
	<span>
		<span class="title-name">Поточна тека:</span>
		<span class="title-date">[12.12.2023]</span>
	</span>
	<div>
		<?php
		$dir = getHttpVar('d', '');
		$cdir = getcwd().'/'.$dir;
		echo '<span class="title-text">'.$cdir.'<br></span>';
		?>
		<span class="title-link"><a href="#">Подробнее...</a></span>
	</div>
</li>
<li>
	<span>
		<span class="title-name">Файли:</span>
		<span class="title-date">[12.12.2023]</span>
	</span>
	<div>
		<?php
		$flist = Array();

		$d = opendir($cdir);
		while ($fname = readdir($d)) {
			if($fname != '.' && $fname != '..')
				$flist[] = Array(
					'fname' => $fname, 
					'dir' => is_dir($fname),
					'size' => filesize($fname),
					'date' => filectime($fname)
				);
		}
		closedir($d);
		
		usort($flist, "sort_uni");
		if ($dir != '') {
			echo '<a href="index.php?p=fmanager"><span class="title-text"><- Back<br></span></a>';
		}
		$type = getHttpVar('t', 'dir');
		if ($type == 'dir') {
			echo '<table>';
			echo '<tr>
				<td><a href="index.php?p=fmanager&s=fname"><span class="title-text">Name:<br></span></a></td>
				<td><a href="index.php?p=fmanager"><span class="title-text">Type:<br></span></a></td>
				<td><a href="index.php?p=fmanager&s=size"><span class="title-text">Size:<br></span></a></td>
				<td><a href="index.php?p=fmanager&s=date"><span class="title-text">Date:<br></span></a></td>
				</tr>';
			foreach($flist as $fitem) {
				echo '<tr>
				<td><a href="index.php?p=fmanager&d='.$dir.($dir == '' ? '' : '/').$fitem['fname'].'&t='.($fitem['dir'] ? 'dir' : 'file').'"><span class="title-text">'.$fitem['fname'].'<br></span></td>
				<td><span class="title-text">'.($fitem['dir'] ? 'DIR' : 'FILE').'<br></span></td>
				<td><span class="title-text">'.$fitem['size'].'<br></span></td>
				<td><span class="title-text">'.date("d.m.Y H:i", $fitem['date']).'<br></span></td>
				</tr>';
			}
			echo '</table>';
		} else {
			$f = fopen($dir, 'r');
			if ($f) {
				while ($dat = fgets($f)) {
					$dat = str_replace('<', '&lt;', $dat);
					$dat = str_replace('>', '&gt;', $dat);
					echo '<span class="title-text">'.$dat.'<br></span>';
				}
				fclose($f);
			}
		}
		?>
		<span class="title-link"><a href="#">Подробнее...</a></span>
	</div>
</li>