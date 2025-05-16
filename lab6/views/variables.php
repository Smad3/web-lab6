<li>
						<span>
							<span class="title-name">$_SERVER </span>
							<span class="title-date">[15.11.2023]</span>
						</span>
						<div>
							<?php
							if (isset($_SERVER) && (count($_SERVER) > 0)) {
								foreach($_SERVER as $key=>$val) {
									echo '<span class="title-text">'.$key.' = '.$val.';<br></span>';
								}
							} else {
								echo '<span class="title-text">Відсутні.<br></span>';
							}
							?>
							<span class="title-link"><a href="#">Подробнее...</a></span>
						</div>
					</li>
					<li>
						<span>
							<span class="title-name">$_GET </span>
							<span class="title-date">[15.11.2023]</span>
						</span>
						<div>
							<?php
							if (isset($_GET) && (count($_GET) > 0)) {
								foreach($_GET as $key=>$val) {
									echo '<span class="title-text">'.$key.' = '.$val.';<br></span>';
								}
							} else {
								echo '<span class="title-text">Відсутні.<br></span>';
							}
							?>
							<span class="title-link"><a href="#">Подробнее...</a></span>
						</div>
					</li>
					<li>
						<span>
							<span class="title-name">$_POST </span>
							<span class="title-date">[15.11.2023]</span>
						</span>
						<div>
							<?php
							if (isset($_POST) && (count($_POST) > 0)) {
								foreach($_POST as $key=>$val) {
									echo '<span class="title-text">'.$key.' = '.$val.';<br></span>';
								}
							} else {
								echo '<span class="title-text">Відсутні.<br></span>';
							}
							?>
							<span class="title-link"><a href="#">Подробнее...</a></span>
						</div>
					</li>