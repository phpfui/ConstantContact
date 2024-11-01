<?php

$php = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? 'php' : '/usr/bin/php8.2-cli';

exec($php . ' composer.phar self-update');
exec($php . ' composer.phar update');

include 'vendor/autoload.php';

if ('php' != $php)
	{
	// get the latest
	$repo = new \Gitonomy\Git\Repository(__DIR__);
	$repo->run('checkout', ['main']);
	$repo->run('pull');
	}

// download the yaml file and save it
$url = 'https://api.cc.email/v3/swagger.yaml';
$yaml = file_get_contents($url);
if (empty($yaml))
	{
	echo "Error reading {$url}\n";
	exit;
	}
$file = __DIR__ . '/yaml/swagger.yaml';

echo "Update {$file}\n";

file_put_contents($file, $yaml);

// assume it has changed and run Generator
$yaml = \Symfony\Component\Yaml\Yaml::parseFile($file);
$generator = new \Tool\Generator();
$generator->deleteClasses(strtoupper($yaml['basePath']));
$generator->deleteDefinitions();
$generator->makeDefinitions($yaml['definitions']);
$generator->makeClasses($yaml['basePath'], $yaml['paths']);

echo "Generated files\n";

// don't update git if running under Windows
if ('php' == $php)
	{
	echo "running under Windows, exiting\n";
	exit;
	}

// style the code
exec($php . ' vendor\bin\php-cs-fixer fix -vv --allow-risky=yes');

echo "Cleaned code\n";

// Stage all changed files
$repo->run('add', ['.']);

// if any files are staged, then make new version, else bail as we are done
$output = $repo->run('status', ['--porcelain']);

echo "Git output {$output}\n";

if (! strlen(trim($output)))
	{
	echo "No changes found, exiting\n";
	exit;
	}

// figure out the next version number
$tags = $repo->getReferences()->getTags();
$highest = 0;
$proposed = (int)date('y') * 10000 + (int)date('n') * 100;
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

echo "Proposed version: {$version}\n";

// commit and tag it with version number
$date = date('Y-m-d');
$repo->run('commit', ['-m', "{$version} - {$date}"]);
$repo->run('tag', ['-a', $version, '-m', "Auto generated on {$date}"]);

// push and publish
$repo->run('push', ['--follow-tags']);

echo "Updated to {$version}\n";
