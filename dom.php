<?php
/*
 * Generates menu DOM for demos and testing
 */
function get_menu_with_id ($id) { ?>
	<ul class="sf-menu" id="<?php echo $id;?>">
			<li class="current">
				<a href="#a">menu level1</a>
				<?php //included valid, yet arbitrary, markup to test DOM traveral?>
				<span class="arbitrary" style="display:none">
					<?php //this could be a tooltip for the menu item, for example see @link http://mycircletree.com/ ?>
					<p>Content</p>
				</span>
				<span class="arbitrary" style="display:none">
					<p>Content</p>
				</span>
				<ul>
					<li>
						<a href="#aa">menu item that is quite long</a>
					</li>
					<li class="current">
						<a href="#ab">menu level2</a>
						<ul>
							<li><a href="#3">menu level3</a>
								<ul>
									<li><a href="#">Menu level4</a></li>
								</ul>
							</li>
							<li><a href="#aba">menu item</a></li>
							<li><a href="#abb">menu item</a></li>
							<li><a href="#abc">menu item</a></li>
							<li><a href="#abd">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
				<ul>
					<li>
						<a href="#">level one</a>
						<ul>
							<li><a href="#">lvel 2</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
				<ul>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
			</li>
		</ul>
<?php
}