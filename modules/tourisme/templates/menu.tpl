<nav class="navbar has-shadow">
	<div class="container">
		<div class="navbar-brand">
			<a href="" class="navbar-item is-hidden-desktop">
				<span class="icon socials">
					<i class="fa fa-facebook-official fa-2x"></i>
				</span>
			</a>
			<a href="" class="navbar-item is-hidden-desktop">
				<span class="icon socials">
					<i class="fa fa-twitter fa-2x"></i>
				</span>
			</a>
			<div class="navbar-burger burger" data-target="navbarMenu">
			<span></span>
			<span></span>
			<span></span>
			</div>
		</div>
		<div id="navbarMenu" class="navbar-menu">
			<div class="navbar-start is-hidden-desktop">
				<div class="navbar-item">
					{foreach $menus as $menu}
						<a href="{$menu["Url"]}" class="navbar-item {$menu['Class']}">
							{$menu["Name"]}
						</a>
					{/foreach}
				</div>
			</div>
			<div class="navbar-tabs is-hidden-touch">
				{foreach $menus as $menu}
					<a href="{$menu["Url"]}" class="navbar-item is-tab {$menu['Class']}">
						{$menu["Name"]}
					</a>
				{/foreach}
			</div>
			<div class="navbar-end is-hidden-mobile is-hidden-tablet">
				<a href="" class="navbar-item">
					<span class="icon socials">
						<i class="fa fa-facebook-official fa-2x"></i>
					</span>
				</a>
				<a href="" class="navbar-item">
					<span class="icon socials">
						<i class="fa fa-twitter fa-2x"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
</nav>