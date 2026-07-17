<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Automations;

class Workflow extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/automations/workflows/{automation_flow_id}');
		}

	/**
	 * Retrieve an Automation
	 *
	 * Use this endpoint to retrieve an automation workflow by its workflow
	 * id.
	 *
	 * @param string $automation_flow_id Automation workflow identifier.
	 */
	public function get(string $automation_flow_id) : ?array
		{

		return $this->doGet(['automation_flow_id' => $automation_flow_id, ]);
		}

	public function getTyped(string $automation_flow_id) : ?\PHPFUI\ConstantContact\Definition\AutomationCampaign
		{
		$data = $this->get($automation_flow_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\AutomationCampaign($data) : null;
		}

	/**
	 * Update an Automation
	 *
	 * Use this method to update an automation workflow.
	 *
	 * @param string $automation_flow_id Automation workflow identifier.
	 * @param \PHPFUI\ConstantContact\Definition\AutomationCampaignUpdate $body Automation trigger definition (type, action_name, parameters, optional trigger_date and bounds).
	 */
	public function put(string $automation_flow_id, \PHPFUI\ConstantContact\Definition\AutomationCampaignUpdate $body) : ?array
		{

		return $this->doPut(['automation_flow_id' => $automation_flow_id, 'body' => $body->getData(), ]);
		}

	public function putTyped(string $automation_flow_id, \PHPFUI\ConstantContact\Definition\AutomationCampaignUpdate $body) : ?\PHPFUI\ConstantContact\Definition\AutomationCampaign
		{
		$data = $this->put($automation_flow_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\AutomationCampaign($data) : null;
		}
	}
