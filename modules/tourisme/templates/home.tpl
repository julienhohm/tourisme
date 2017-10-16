<section class="section">
	<div class="container has-text-centered">
		<div class="columns is-multiline">
			<div class="column is-12">
				<h1 class="title">Mon titre</h1>
				<h2 class="subtitle">Mon soustitre</h2>
			</div>
			<div class="column">
				<div class="columns is-vcentered">
					<div class="column">
						<div id="map"></div>
					</div>
					<div class="column">
						<div class="content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores iure eveniet saepe quidem officia illum quos, explicabo atque sint.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
<section class="section">
	<aside class="menu">
		<p class="menu-label">Regions</p>
		<ul class="menu-list">
			{foreach $listeRegions as $regionId => $region}
				<li><a>{$region["Region"]->regionName}</a>
					<ul>
						{foreach $region["Departement"] as $departementId => $department}
							<li>{$department->departmentNumber} - {$department->departmentName}</li>
						{/foreach}
					</ul>
				</li>
			{/foreach}
		</ul>
	</aside>
</section>
