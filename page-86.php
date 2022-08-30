<?php
get_header();
?>
<?php
$assignments = get_field('recent_roles_and_assignments_group');

$companyInformation = get_field('company_information_group');
$companyInformationItem = $companyInformation['fourth_field'];

//languages tags
$eng = 'en';
$swe = 'sv';
$currentLang = wpm_get_language();
?>
<div class="consulting">
	<div class="hero-screen">
		<div class="wrapper">
			<header class="d-flex flex-row">
				<div class="logo">
					<a class="logo-desktop" href="<?php echo home_url() ?>">
						<img src="<?php echo get_template_directory_uri() . '/assets/dist/svg/logo.svg' ?>" alt="logo">
					</a>
					<a class="logo-mobile" href="<?php echo home_url() ?>">
						<img src="<?php echo get_template_directory_uri() . '/assets/dist/svg/logo-mobile.svg' ?>" alt="logo-mobile">
					</a>
				</div>
				<nav class="nav">
					<ul class="nav-group-list">
						<li class="nav-item">
							<a href="<?php echo home_url() ?>" class="nav-link">It services</a>
						</li>
						<li class="nav-item active">
							<a href="<?php echo get_the_permalink(86); ?>" class="nav-link">Consulting</a>
						</li>
					</ul>
				</nav>
				<div class="lang">
					<ul id="lang-switch" class="lang-group-list">
                        <?php if ($currentLang == $eng) : ?>
						<li class="lang-item">
							<a class="lang-link" href="<?php echo get_the_permalink(86) ?>">
								<img class="lang-icon-desktop" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/lang/eng.svg' ?>" alt="eng">
								<img class="lang-icon-mobile" src="<?php echo get_template_directory_uri() . '/assets/dist/img/lang/eng-mobile.png' ?>" alt="eng-mobile">
							</a>
						</li>
						<li class="lang-item">
							<a class="lang-link" href="<?php echo get_site_url(null, '/sv/consulting') ?>">
								<img class="lang-icon-desktop" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/lang/sweden.svg' ?>" alt="sweden">
								<img class="lang-icon-mobile" src="<?php echo get_template_directory_uri() . '/assets/dist/img/lang/sweden-mobile.png' ?>" alt="sweden-mobile">
							</a>
						</li>
                        <?php endif; ?>
                        <?php if ($currentLang == $swe) : ?>
                            <li class="lang-item">
                                <a class="lang-link" href="<?php echo get_site_url(null, '/sv/consulting') ?>">
                                    <img class="lang-icon-desktop" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/lang/sweden.svg' ?>" alt="sweden">
                                    <img class="lang-icon-mobile" src="<?php echo get_template_directory_uri() . '/assets/dist/img/lang/sweden-mobile.png' ?>" alt="sweden-mobile">
                                </a>
                            </li>
                            <li class="lang-item">
                                <a class="lang-link" href="<?php echo get_site_url(null, '/consulting') ?>">
                                    <img class="lang-icon-desktop" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/lang/eng.svg' ?>" alt="eng">
                                    <img class="lang-icon-mobile" src="<?php echo get_template_directory_uri() . '/assets/dist/img/lang/eng-mobile.png' ?>" alt="eng-mobile">
                                </a>
                            </li>
                        <?php endif; ?>
					</ul>
				</div>
			</header>
		</div>
		<div class="hero-screen-label">
			<img alt="label-hero" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/label.svg' ?>">
		</div>
		<div class="wrapper">
			<div class="hero-screen-content">
				<h1 class="hero-screen-title">
					<?php the_field('hero_title'); ?>
				</h1>
				<p class="hero-screen-description">
					<?php the_field('hero_description'); ?>
				</p>
			</div>
		</div>
		<div class="hero-screen-provide">
			<?php the_field('long_description'); ?>
		</div>
	</div>
	<main>
		<div class="wrapper position-relative">
			<div class="bg">
				<div class="radial-circle"></div>
			</div>
			<div class="info recent-roles">
				<h2 class="info-title">
					<?php the_field('recent_roles_and_assignments_title'); ?>
				</h2>
				<ul class="info-group-list">
					<li class="info-item">
						<span><?php echo $assignments['first_field'] ?></span>
					</li>
					<li class="info-item">
						<span><?php echo $assignments['second_field'] ?></span>
					</li>
					<li class="info-item">
                    <span>
                        <?php echo $assignments['third_field'] ?>
                    </span>
					</li>
					<li class="info-item">
                    <span>
                        <?php echo $assignments['fourth_field'] ?>
                    </span>
					</li>
					<li class="info-item">
                    <span>
                        <?php echo $assignments['fifth_field'] ?>
                    </span>
					</li>
				</ul>
			</div>
		</div>
		<div class="wrapper footer">
			<div class="info github">
				<h2 class="info-title">
					GitHub
				</h2>
				<p class="info-text">
					<?php the_field('github_text'); ?>
				</p>
				<a href="https://github.com/mkdevops-se/" class="info-text info-item-link">
					https://github.com/mkdevops-se/
				</a>
			</div>
            <div class="info company-information">
                <h2 class="info-title">
					<?php the_field('company_information_title'); ?>
                </h2>
                <ul class="info-group-list">
                    <li class="info-item">
                        <span><?php echo $companyInformation['first_field']; ?></span>
                    </li>
                    <li class="info-item">
                        <span><?php echo $companyInformation['second_field'] ?></span>
                    </li>
                    <li class="info-item">
                        <span><?php echo $companyInformation['third_field'] ?></span>
                    </li>
                </ul>
                <p class="info-text">
					<?php echo $companyInformationItem['fourth_field_1'] ?>
                    <a class="info-item-link mail" href="<?php echo 'mailto:' . $companyInformationItem['fourth_field_mail'] ?>"><?php echo $companyInformationItem['fourth_field_mail'] ?></a>
					<?php echo $companyInformationItem['fourth_field_2'] ?>
                    <a class="info-item-link phone" href="<?php echo 'tel:' . $companyInformationItem['fourth_field_phone'] ?>"><?php echo $companyInformationItem['fourth_field_phone'] ?></a>.
                </p>
            </div>
			<div class="logo-bg"></div>
		</div>
	</main>
</div>

<?php wp_footer(); ?>