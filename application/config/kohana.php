<?php defined('SYSPATH') or die('No direct script access.');

// 2.x branch
$config['ko2'] = array(
	'development' => array(
		'2.4.1' => array(
			'codename'          => '',
			'released'          => '',
			'download'          => 'http://dev.kohanaphp.com/attachments/download/1469/kohana-2.4.1.zip',
			'documentation'     => '',
			'repository'        => '',
			'issue'             => '',
		),
	),
	'release' => array(
		'2.4.0' => array(
			'version'           => '2.4.0',
			'codename'          => 'No Name',
			'released'          => '02/14/2010',
			'download'          => 'http://dev.kohanaphp.com/attachments/download/1355/kohana-v2.4.zip',
			'documentation'     => 'http://kohanaphp.com/docs/24',
			'repository'        => 'http://dev.kohanaphp.com/projects/kohana2/repository/show/tags/2.4.0',
			'issues'            => 'http://dev.kohanaphp.com/projects/kohana2/issues',
		),
	),
	'archive' => array(
		'2.3.4' => array(
			'codename'          => 'buteo regalis',
			'released'          => '06/05/2009',
			'download'          => 'http://dev.kohanaphp.com/attachments/download/1355/kohana-v2.3.4.zip',
			'documentation'     => 'http://docs.kohanaphp.com/',
			'repository'        => 'http://dev.kohanaphp.com/projects/kohana2/repository/show/tags/2.3.4',
			'issues'            => '',
		),
		'2.3.3' => array(
			'codename'          => 'aegolius',
			'released'          => '05/31/2009',
			'download'          => '',
			'documentation'     => '',
			'repository'        => 'http://dev.kohanaphp.com/projects/kohana2/repository/show/tags/2.3.3',
			'issues'            => '',
		),
		'2.3.2' => array(
			'codename'          => 'aquila',
			'released'          => '03/28/2009',
			'download'          => '',
			'documentation'     => '',
			'repository'        => 'http://dev.kohanaphp.com/projects/kohana2/repository/show/tags/2.3.2',
			'issue'             => '',
		),
		'2.3.1' => array(
			'codename'          => 'accipiter',
			'released'          => '01/20/2009',
			'download'          => '',
			'documentation'     => '',
			'repository'        => 'http://dev.kohanaphp.com/projects/kohana2/repository/show/tags/2.3.1',
			'issues'            => '',
		),
	),
);

// 3.x branch
$config['ko3'] = array(
	'development' => array(
	),
	'release' => array(
		'3.0.3' => array(
			'version'           => '3.0.3',
			'codename'          => 'renaissance',
			'released'          => '11/23/2009',
			'download'          => 'http://dev.kohanaphp.com/attachments/download/1446/kohana-3.0.3.zip',
			'documentation'     => 'http://www.kohanaphp.com/docs/3/',
			'repository'        => 'http://github.com/kohana/kohana',
			'issue'             => 'http://dev.kohanaphp.com/projects/kohana3/issues',
		),
	),
	'archive' => array(),
);

return $config;