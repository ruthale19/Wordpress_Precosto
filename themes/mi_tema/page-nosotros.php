<?php get_header() ?>

<!-- header -->
	<header class="header" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<!-- Nosotros -->
	<section class="us" id="us">
		<div class="container us__container">
			<h1 class="us__text1">Sobre Nosotros</h1>
			<p class="us_text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="us_text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="us_text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<div class="card-deck us__card mb-0">
				<div class="card mb-4">
					<h4 class="us__title">Nuestra Misión</h4>
					<div class="card-body us__body">
						<p class="card-text">Nuestra razón de ser es generar y crear soluciones para las personas naturales y Empresas.
							Para lograr nuestros propósitos, nos adecuamos a las necesidades de nuestros clientes y en
							conjunto desarrollamos un producto que consiga los objetivos planteados, con la seriedad y
							profesionalismo que ameritan.</p>
					</div>
				</div>
				<div class="card mb-4">
					<h4 class="us__title">Nuestra Visión</h4>
					<div class="card-body us__body">
						<p class="card-text">Ser la empresa líder en la prestación de servicios y soluciones integrales en la región, siempre
							cumpliendo con los más altos estándares de calidad y contando con un conocimiento amplio en el sector de la construcción.</p>
					</div>
				</div>
			</div>
			<div class="card-deck us__card mt-0">
				<div class="card mb-4">
					<h4 class="us__title">Nuestros Valores</h4>
					<div class="card-body us__body">
						<p class="card-text"><span class="font-weight-bold">Integridad:</span> estamos comprometidos a hacer lo que es correcto, honesto y justo.</p>
						<p class="card-text"><span class="font-weight-bold">Calidad:</span> nos dedicamos a producir resultados que sean de excelencia y, a su vez, superen las expectativas de
							nuestros clientes.</p>
						<p class="card-text"><span class="font-weight-bold">Respeto:</span> valoramos a nuestros clientes y sus productos.</p>
						<p class="card-text"><span class="font-weight-bold">Puntualidad:</span> trabajamos para acudir a domicilio en horario pactado y terminar cada proyecto a
							tiempo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>
