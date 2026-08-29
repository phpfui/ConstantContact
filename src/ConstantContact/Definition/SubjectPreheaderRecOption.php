<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $model Text generation model tier to use for recommendations.
 * @property string $type_recommendation Type of recommendations to generate.
 * @property int $num_recommendations Number of recommendations to return.
 * @property string $tone Desired tone for the generated recommendations.
 * @property int $temperature Sampling temperature between 0 and 1.
 * @property int $max_token Maximum number of tokens to generate.
 * @property int $top_p Nucleus sampling top_p value.
 * @property int $frequency_penalty Frequency penalty between -2 and 2.
 * @property int $presence_penalty Presence penalty between -2 and 2.
 * @property int $choice_count Number of completion choices to generate.
 */
class SubjectPreheaderRecOption extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'model' => 'string',
		'type_recommendation' => 'string',
		'num_recommendations' => 'int',
		'tone' => 'string',
		'temperature' => 'int',
		'max_token' => 'int',
		'top_p' => 'int',
		'frequency_penalty' => 'int',
		'presence_penalty' => 'int',
		'choice_count' => 'int',

	];
	}
