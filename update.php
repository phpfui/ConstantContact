<?php

exec('/usr/bin/php8.0 composer.phar self-update');
exec('/usr/bin/php8.0 composer.phar update');

include 'vendor/autoload.php';

// get the latest
$repo = new \Gitonomy\Git\Repository(__DIR__);
$repo->run('checkout', ['main']);
$repo->run('pull');

// download the yaml file and save it
$url = 'https://api.cc.email/v3/swagger.yaml';
$yaml = file_get_contents($url);
if (empty($yaml))
	{
	echo "Error reading {$url}\n";
	exit;
	}
$file = __DIR__ . '/yaml/swagger.yaml';
file_put_contents($file, $yaml);

// assume it has changed and run Generator
$yaml = \Symfony\Component\Yaml\Yaml::parseFile($file);
$generator = new \Tools\Generator();
$generator->makeClasses($yaml['basePath'], $yaml['paths']);
$generator->makeDefinitions($yaml['definitions']);

// Stage all changed files
$repo->run('add', ['.']);

// if any files are staged, then make new version, else bail as we are done
$output = $repo->run('status', ['--porcelain']);
if (! strlen(trim($output)))
	{
	exit;
	}

// figure out the next version number
$tags = $repo->getReferences()->getTags();
$highest = $proposed = (int)date('y') * 10000 + (int)date('n') * 100;
foreach ($tags as $tag)
	{
	$parts = explode('.', trim($tag->getName(), 'V'));
	$number = 0;
	foreach ($parts as $index => $part)
		{
		$number = $number * 100 + (int)$part;
		}
	$highest = max($number, $highest);
	}
if ($highest >= $proposed)
	{
	$proposed = $highest + 1;
	}
$proposed = "{$proposed}";
$version = 'V' . substr($proposed, 0, 2) . '.' . substr($proposed, 2, 2) . '.' . substr($proposed, 4, 2);
$version = str_replace('.0', '.', $version);

// commit and tag it with version number
$date = date('Y-m-d');
$repo->run('commit', ['-m', "{$version} - {$date}"]);
$repo->run('tag', ['-a', $version, '-m', "Auto generated on {$date}"]);

// push and publish
$repo->run('push', ['--follow-tags']);
