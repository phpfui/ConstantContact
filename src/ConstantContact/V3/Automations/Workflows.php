<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Automations;

class Workflows extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/automations/workflows');
		}

	/**
	 * List All Automations
	 *
	 * Use this method to list all available automation workflows.
	 *
	 *
	 * @param string $channel Filter by channel
	 * @param string $sort_direction Sort direction, ASC or DESC. Defaults to DESC
	 * @param string $created_from Filter by how the workflow was created
	 * @param string $goals Filter by goal tags (e.g. post_purchase_followup, up_sell_and_cross_sell)
	 * @param string $name Find by workflow name (exact match)
	 */
	public function get(?string $channel = null, ?string $sort_direction = null, ?string $created_from = null, ?string $goals = null, ?string $name = null) : ?array
		{

		if (null !== $sort_direction)
			{
			$validValues = ['ASC', 'DESC'];

			if (! \in_array($sort_direction, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter sort_direction with value '{$sort_direction}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		if (null !== $created_from)
			{
			$validValues = ['SCRATCH', 'TEMPLATE'];

			if (! \in_array($created_from, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter created_from with value '{$created_from}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['channel' => $channel, 'sort_direction' => $sort_direction, 'created_from' => $created_from, 'goals' => $goals, 'name' => $name, ]);
		}

	public function getTyped(?string $channel = null, ?string $sort_direction = null, ?string $created_from = null, ?string $goals = null, ?string $name = null) : ?\PHPFUI\ConstantContact\Definition\ListAutomationFlowsResponseDto
		{
		$data = $this->get($channel, $sort_direction, $created_from, $goals, $name);

		return $data ? new \PHPFUI\ConstantContact\Definition\ListAutomationFlowsResponseDto($data) : null;
		}

	/**
	 * Create an Automation
	 *
	 * Use this method to create a new automation campaign workflow from scratch
	 * by providing trigger information. For example, an automation that triggers
	 * when contacts join a list or an automation that triggers for a contact
	 * birthday.
	 *
	 * Some common automation examples are included in the request body example
	 * dropdown menu.
	 *
	 *
	 * @param string $workflowName Use this query parameter to provide a workflow name and override the default name.
	 * @param \PHPFUI\ConstantContact\Definition\TriggerDefDto $body Automation trigger definition (type, action_name, parameters, optional trigger_date and bounds).
	 */
	public function post(?string $workflowName = null, ?\PHPFUI\ConstantContact\Definition\TriggerDefDto $body = null) : ?array
		{

		return $this->doPost(['workflowName' => $workflowName, 'body' => $body->getData(), ]);
		}

	public function postTyped(?string $workflowName = null, ?\PHPFUI\ConstantContact\Definition\TriggerDefDto $body = null) : ?\PHPFUI\ConstantContact\Definition\AutomationCampaign
		{
		$data = $this->post($workflowName, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\AutomationCampaign($data) : null;
		}
	}
