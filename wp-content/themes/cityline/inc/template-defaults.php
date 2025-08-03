<?php
return array(
	'404-header'   =>
	array(
		'logo'        =>
		array(
			'selective_selector' => '.cityline-404-header__k__binOmTAL3uR-container',
			'styleRef'           => 'binOmTAL3uR',
			'props'              =>
			array(
				'layoutType' => 'image',
			),
		),
		'header-menu' =>
		array(
			'selective_selector' => '.cityline-404-header__k__bOoUw4KMsj2-outer',
			'styleRef'           => 'bOoUw4KMsj2',
			'props'              =>
			array(
				'showOffscreenMenuOn' => 'has-offcanvas-tablet',
			),
		),
		'navigation'  =>
		array(
			'selective_selector' => '.cityline-404-header__k__Si7NuV8n9T-nav',
			'styleRef'           => '-gTP5ls7Zg',
			'props'              =>
			array(
				'showTopBar' => false,
				'layoutType' => 'logo-spacing-menu',
				'width'      => 'boxed',
				'sticky'     => true,
				'overlap'    => false,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'nav' =>
					array(
						'padding'    =>
						array(
							'top' =>
							array(
								'value' => 0,
							),
						),
						'background' =>
						array(
							'color' => 'transparent',
						),
					),
				),
				'ancestor'    =>
				array(
					'sticky' =>
					array(
						'descendants' =>
						array(
							'nav' =>
							array(
								'background' =>
								array(
									'color' => 'white',
								),
							),
						),
					),
				),
			),
		),
		'hero'        =>
		array(
			'selective_selector' => '.cityline-404-header__k__KFTMhA6WOVh-outer',
			'styleRef'           => 'KFTMhA6WOVh',
			'props'              =>
			array(
				'layoutType'  => 'textWithMediaOnRight',
				'heroSection' =>
				array(
					'layout' => 'textWithMediaOnRight',
				),
			),
			'hero_column_width'  => '50',
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'type'      => 'none',
							'overlay'   =>
							array(
								'enabled'  => false,
								'type'     => 'color',
								'gradient' => 'linear-gradient(0deg, rgba(161,140,209,0.5) 0%, rgba(251,194,235,0.5) 100% )',
								'shape'    =>
								array(
									'value'  => 'none',
									'isTile' => false,
								),
								'color'    =>
								array(
									'opacity' => 0.6,
									'value'   => 'rgb(0,0,0)',
								),
							),
							'image'     =>
							array(
								0 =>
								array(
									'source'     =>
									array(
										'gradient' => 'linear-gradient(0deg, rgba(161,140,209,1) 0%, rgba(251,194,235,1) 100% )',
									),
									'attachment' => 'scroll',
								),
							),
							'slideshow' =>
							array(
								'duration' =>
								array(
									'value' => 1500,
								),
								'speed'    =>
								array(
									'value' => 500,
								),
							),
							'video'     =>
							array(
								'internal' =>
								array(
									'url' => '',
								),
								'external' =>
								array(
									'url' => '',
								),
								'type'     => 'external',
							),
							'color'     => 'rgba(var(--kubio-color-6),1)',
						),
						'padding'    =>
						array(
							'top'    =>
							array(
								'unit'  => 'px',
								'value' => 100,
							),
							'bottom' =>
							array(
								'value' => 100,
								'unit'  => 'px',
							),
						),
						'separators' =>
						array(
							'separatorBottom' =>
							array(),
						),
					),
				),
			),
		),
	),
	'footer'       =>
	array(
		'footer' =>
		array(
			'selective_selector' => '.cityline-footer__k__vP0mYzy99sE-outer',
			'styleRef'           => 'vP0mYzy99sE',
			'props'              =>
			array(
				'attrs' =>
				array(
					'name' => 'Footer',
				),
				'lock'  => null,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'color' => 'rgba(var(--kubio-color-6),1)',
						),
					),
				),
			),
		),
	),
	'front-header' =>
	array(
		'icon_list'    =>
		array(
			'selective_selector' => '.cityline-front-header__k__eIbGEWAQWP-outer',
			'styleRef'           => 'eIbGEWAQWP',
			'props'              =>
			array(),
		),
		'social_icons' =>
		array(
			'selective_selector' => '.cityline-front-header__k__Fu-_uLmMo43-outer',
			'styleRef'           => 'Fu-_uLmMo43',
			'props'              =>
			array(),
		),
		'logo'         =>
		array(
			'selective_selector' => '.cityline-front-header__k__afIZ7lcsb-container',
			'styleRef'           => 'afIZ7lcsb',
			'props'              =>
			array(
				'layoutType' => 'image',
			),
		),
		'header-menu'  =>
		array(
			'selective_selector' => '.cityline-front-header__k__c6BbujDIAOY-outer',
			'styleRef'           => 'c6BbujDIAOY',
			'props'              =>
			array(
				'showOffscreenMenuOn' => 'has-offcanvas-tablet',
			),
		),
		'navigation'   =>
		array(
			'selective_selector' => '.cityline-front-header__k__xLwdIMLPC_l-nav',
			'styleRef'           => 'Gp3qTlxXlu',
			'props'              =>
			array(
				'showTopBar' => false,
				'layoutType' => 'logo-spacing-menu',
				'width'      => 'boxed',
				'sticky'     => true,
				'overlap'    => false,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'nav' =>
					array(
						'padding'    =>
						array(
							'top' =>
							array(
								'value' => 0,
							),
						),
						'background' =>
						array(
							'color' => 'transparent',
						),
					),
				),
				'ancestor'    =>
				array(
					'sticky' =>
					array(
						'descendants' =>
						array(
							'nav' =>
							array(
								'background' =>
								array(
									'color' => 'white',
								),
							),
						),
					),
				),
			),
		),
		'title'        =>
		array(
			'selective_selector' => '.cityline-front-header__k__ukjZtaF3MN-text',
			'styleRef'           => 'ukjZtaF3MN',
			'props'              =>
			array(),
			'style'              =>
			array(
				'descendants' =>
				array(
					'text' =>
					array(
						'textAlign' => 'center',
					),
				),
			),
		),
		'subtitle'     =>
		array(
			'selective_selector' => '.cityline-front-header__k__Xia0GT4t_-text',
			'styleRef'           => 'Xia0GT4t_',
			'props'              =>
			array(),
			'style'              =>
			array(
				'descendants' =>
				array(
					'text' =>
					array(
						'textAlign' => 'center',
					),
				),
			),
		),
		'button-0'     =>
		array(
			'selective_selector' => '.cityline-front-header__k__Dud6AOZG0Hc-link',
			'styleRef'           => 'Dud6AOZG0Hc',
			'props'              =>
			array(
				'link'          =>
				array(
					'value'         => '#',
					'typeOpenLink'  => 'sameWindow',
					'noFollow'      => false,
					'lightboxMedia' => '',
				),
				'preserveSpace' =>
				array(
					'text' => false,
				),
				'icon'          =>
				array(
					'name' => 'font-awesome/arrow-right',
				),
			),
		),
		'button-1'     =>
		array(
			'selective_selector' => '.cityline-front-header__k__EWwtrkn9y-link',
			'styleRef'           => 'EWwtrkn9y',
			'props'              =>
			array(
				'link'          =>
				array(
					'value'         => '#',
					'typeOpenLink'  => 'sameWindow',
					'noFollow'      => false,
					'lightboxMedia' => '',
				),
				'preserveSpace' =>
				array(
					'text' => false,
				),
				'icon'          =>
				array(
					'name' => 'font-awesome/arrow-right',
				),
			),
		),
		'buttons'      =>
		array(
			'selective_selector' => '.cityline-front-header__k__9uoTT9gnxCy-outer',
			'styleRef'           => '9uoTT9gnxCy',
			'props'              =>
			array(),
		),
		'hero'         =>
		array(
			'image'              =>
			array(
				'selective_selector' => '.cityline-front-header__k__5e0nB4TaZp-outer',
				'styleRef'           => '5e0nB4TaZp',
				'props'              =>
				array(),
			),
			'selective_selector' => '.cityline-front-header__k__J6FPNZyUrn-outer',
			'styleRef'           => 'J6FPNZyUrn',
			'props'              =>
			array(
				'layoutType'  => 'textWithMediaOnRight',
				'heroSection' =>
				array(
					'layout' => 'textWithMediaOnRight',
				),
			),
			'hero_column_width'  => '50',
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'type'      => 'image',
							'image'     =>
							array(
								0 =>
								array(
									'source'      =>
									array(
										'type'     => 'image',
										'gradient' => 'linear-gradient(0deg, rgba(161,140,209,1) 0%, rgba(251,194,235,1) 100% )',
									),
									'attachment'  => 'fixed',
									'size'        => 'cover',
									'useParallax' => false,
									'position'    =>
									array(
										'x' => 50,
										'y' => 50,
									),
								),
							),
							'overlay'   =>
							array(
								'enabled'  => true,
								'color'    =>
								array(
									'opacity' => '0.55',
									'value'   => 'rgba(var(--kubio-color-6),1)',
								),
								'type'     => 'gradient',
								'gradient' => 'linear-gradient(180deg,rgba(var(--kubio-color-5),1) 55%,rgba(var(--kubio-color-4),0) 55%)',
								'shape'    =>
								array(
									'value'  => 'none',
									'isTile' => false,
									'light'  => 0,
								),
							),
							'color'     => 'rgba(var(--kubio-color-5),1)',
							'slideshow' => null,
						),
						'padding'    =>
						array(
							'right'  =>
							array(
								'value' => '',
								'unit'  => 'px',
							),
							'bottom' =>
							array(
								'value' => 400,
								'unit'  => 'px',
							),
							'top'    =>
							array(
								'value' => 40,
								'unit'  => 'px',
							),
						),
						'separators' =>
						array(
							'separatorBottom' =>
							array(),
						),
					),
				),
			),
		),
	),
	'header'       =>
	array(
		'icon_list'    =>
		array(
			'selective_selector' => '.cityline-header__k__G97cMIT6SW-outer',
			'styleRef'           => 'G97cMIT6SW',
			'props'              =>
			array(),
		),
		'social_icons' =>
		array(
			'selective_selector' => '.cityline-header__k__M5qVD0huSIB-outer',
			'styleRef'           => 'M5qVD0huSIB',
			'props'              =>
			array(),
		),
		'logo'         =>
		array(
			'selective_selector' => '.cityline-header__k__etPrFOPMvTT-container',
			'styleRef'           => 'etPrFOPMvTT',
			'props'              =>
			array(
				'layoutType' => 'image',
			),
		),
		'header-menu'  =>
		array(
			'selective_selector' => '.cityline-header__k__abi3wIxRrBY-outer',
			'styleRef'           => 'abi3wIxRrBY',
			'props'              =>
			array(
				'showOffscreenMenuOn' => 'has-offcanvas-tablet',
			),
		),
		'navigation'   =>
		array(
			'selective_selector' => '.cityline-header__k__yaGGVjEZkNw-nav',
			'styleRef'           => 'xppplz31IA',
			'props'              =>
			array(
				'showTopBar' => false,
				'layoutType' => 'logo-spacing-menu',
				'width'      => 'boxed',
				'sticky'     => true,
				'overlap'    => false,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'nav' =>
					array(
						'padding'    =>
						array(
							'top' =>
							array(
								'value' => 0,
							),
						),
						'background' =>
						array(
							'color' => 'transparent',
						),
					),
				),
				'ancestor'    =>
				array(
					'sticky' =>
					array(
						'descendants' =>
						array(
							'nav' =>
							array(
								'background' =>
								array(
									'color' => 'white',
								),
							),
						),
					),
				),
			),
		),
		'hero'         =>
		array(
			'selective_selector' => '.cityline-header__k__KFTMhA6WOVh-outer',
			'styleRef'           => 'KFTMhA6WOVh',
			'props'              =>
			array(
				'layoutType'  => 'textWithMediaOnRight',
				'heroSection' =>
				array(
					'layout' => 'textWithMediaOnRight',
				),
			),
			'hero_column_width'  => '50',
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'color'     => 'rgba(var(--kubio-color-6-variant-1),0.5)',
							'slideshow' => null,
						),
						'padding'    =>
						array(
							'top'    =>
							array(
								'unit'  => 'px',
								'value' => 120,
							),
							'bottom' =>
							array(
								'value' => 150,
								'unit'  => 'px',
							),
						),
						'separators' =>
						array(
							'separatorBottom' =>
							array(),
						),
					),
				),
			),
		),
	),
	'colors'       =>
	array(
		'kubio-color-1'           =>
		array(
			0 => 26,
			1 => 145,
			2 => 207,
		),
		'kubio-color-2'           =>
		array(
			0 => 250,
			1 => 105,
			2 => 47,
		),
		'kubio-color-3'           =>
		array(
			0 => 255,
			1 => 148,
			2 => 106,
		),
		'kubio-color-4'           =>
		array(
			0 => 192,
			1 => 192,
			2 => 192,
		),
		'kubio-color-5'           =>
		array(
			0 => 255,
			1 => 255,
			2 => 255,
		),
		'kubio-color-6'           =>
		array(
			0 => 30,
			1 => 30,
			2 => 30,
		),
		'kubio-color-1-variant-1' =>
		array(
			0 => 163,
			1 => 192,
			2 => 206,
		),
		'kubio-color-1-variant-2' =>
		array(
			0 => 95,
			1 => 168,
			2 => 206,
		),
		'kubio-color-1-variant-3' =>
		array(
			0 => 26,
			1 => 145,
			2 => 207,
		),
		'kubio-color-1-variant-4' =>
		array(
			0 => 15,
			1 => 85,
			2 => 121,
		),
		'kubio-color-1-variant-5' =>
		array(
			0 => 4,
			1 => 25,
			2 => 36,
		),
		'kubio-color-2-variant-1' =>
		array(
			0 => 249,
			1 => 224,
			2 => 213,
		),
		'kubio-color-2-variant-2' =>
		array(
			0 => 249,
			1 => 164,
			2 => 130,
		),
		'kubio-color-2-variant-3' =>
		array(
			0 => 250,
			1 => 105,
			2 => 47,
		),
		'kubio-color-2-variant-4' =>
		array(
			0 => 164,
			1 => 69,
			2 => 31,
		),
		'kubio-color-2-variant-5' =>
		array(
			0 => 79,
			1 => 33,
			2 => 15,
		),
		'kubio-color-3-variant-1' =>
		array(
			0 => 255,
			1 => 209,
			2 => 191,
		),
		'kubio-color-3-variant-2' =>
		array(
			0 => 255,
			1 => 148,
			2 => 106,
		),
		'kubio-color-3-variant-3' =>
		array(
			0 => 255,
			1 => 86,
			2 => 21,
		),
		'kubio-color-3-variant-4' =>
		array(
			0 => 169,
			1 => 98,
			2 => 70,
		),
		'kubio-color-3-variant-5' =>
		array(
			0 => 84,
			1 => 49,
			2 => 35,
		),
		'kubio-color-4-variant-1' =>
		array(
			0 => 242,
			1 => 242,
			2 => 242,
		),
		'kubio-color-4-variant-2' =>
		array(
			0 => 192,
			1 => 192,
			2 => 192,
		),
		'kubio-color-4-variant-3' =>
		array(
			0 => 140,
			1 => 140,
			2 => 140,
		),
		'kubio-color-4-variant-4' =>
		array(
			0 => 89,
			1 => 89,
			2 => 89,
		),
		'kubio-color-4-variant-5' =>
		array(
			0 => 38,
			1 => 38,
			2 => 38,
		),
		'kubio-color-5-variant-1' =>
		array(
			0 => 255,
			1 => 255,
			2 => 255,
		),
		'kubio-color-5-variant-2' =>
		array(
			0 => 204,
			1 => 204,
			2 => 204,
		),
		'kubio-color-5-variant-3' =>
		array(
			0 => 153,
			1 => 153,
			2 => 153,
		),
		'kubio-color-5-variant-4' =>
		array(
			0 => 101,
			1 => 101,
			2 => 101,
		),
		'kubio-color-5-variant-5' =>
		array(
			0 => 50,
			1 => 50,
			2 => 50,
		),
		'kubio-color-6-variant-1' =>
		array(
			0 => 233,
			1 => 233,
			2 => 233,
		),
		'kubio-color-6-variant-2' =>
		array(
			0 => 182,
			1 => 182,
			2 => 182,
		),
		'kubio-color-6-variant-3' =>
		array(
			0 => 131,
			1 => 131,
			2 => 131,
		),
		'kubio-color-6-variant-4' =>
		array(
			0 => 80,
			1 => 80,
			2 => 80,
		),
		'kubio-color-6-variant-5' =>
		array(
			0 => 30,
			1 => 30,
			2 => 30,
		),
	),
	'fonts'        =>
	array(
		'Open Sans'     =>
		array(
			0 => '300',
			1 => '300italic',
			2 => '400',
			3 => '400italic',
			4 => '600',
			5 => '600italic',
			6 => '700',
			7 => '700italic',
			8 => '800',
			9 => '800italic',
		),
		'Mulish'        =>
		array(
			0 => '400',
		),
		'Roboto'        =>
		array(
			0  => '100',
			1  => '100italic',
			2  => '300',
			3  => '300italic',
			4  => '400',
			5  => '400italic',
			6  => '500',
			7  => '500italic',
			8  => '700',
			9  => '700italic',
			10 => '900',
			11 => '900italic',
		),
		'Carter One'    =>
		array(
			0 => '400',
		),
		'Poppins'       =>
		array(
			0 => 700,
			1 => 400,
			2 => 300,
			3 => 800,
		),
		'Michroma'      =>
		array(
			0 => 800,
		),
		'Questrial'     =>
		array(
			0 => 800,
			1 => 400,
		),
		'Slackey'       =>
		array(
			0 => 400,
		),
		'Stalinist One' =>
		array(
			0 => 400,
		),
		'Lalezar'       =>
		array(
			0 => 400,
		),
		'Goblin One'    =>
		array(
			0 => 400,
		),
		'Jockey One'    =>
		array(
			0 => 400,
		),
		'Imprima'       =>
		array(
			0 => 400,
		),
		'Bungee Shade'  =>
		array(
			0 => 400,
		),
		'Numans'        =>
		array(
			0 => 400,
		),
		'Preahvihear'   =>
		array(
			0 => 400,
		),
		'Sarpanch'      =>
		array(
			0 => 400,
			1 => 900,
		),
		'Raleway'       =>
		array(
			0 => 900,
			1 => 400,
			2 => 800,
			3 => 300,
			4 => 600,
		),
		'Prompt'        =>
		array(
			0 => 400,
		),
	),
);
