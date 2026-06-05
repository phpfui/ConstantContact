<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $send_id Uniquely identifies each send history object using the number of times that you sent the email campaign activity as a sequence starting at <code>1</code>. For example, when you send a specific email campaign activity twice this method returns an object with a <code>send_id</code> of 1 for the first send and an object with a <code>send_id</code> of 2 for the second send.
 * @property array $contact_list_ids The contacts lists that Constant Contact sent email campaign activity to as an array of contact <code>list_id</code> strings.
 * @property array $segment_ids The contact segments that Constant Contact sent the email campaign activity to as an array of <code>segment_id</code> integers.
 * @property int $count The number of contacts that Constant Contact sent this email campaign activity to. This property is specific to each send history object. When you resend an email campaign activity, Constant Contact only sends it to new contacts in the contact lists or segments you are using.
 * @property \PHPFUI\ConstantContact\DateTime $run_date The system generated date and time that Constant Contact sent the email campaign activity to contacts in ISO-8601 format.
 * @property string $send_status The send status for the email campaign activity. Valid values are: <ul> 
 * <li><code>COMPLETED</code>: Constant Contact successfully sent the email campaign activity.</li>
 * <li><code>ERRORED</code>: Constant Contact encountered an error when sending the email campaign activity.<li> * </ul>
 * @property int $reason_code The reason why the send attempt completed or encountered an error. This method returns <code>0</code> if Constant Contact successfully sent the email campaign activity to contacts. Possible <code>reason_code</code> values are: <ul>
   * <li>0 — Constant Contact successfully sent the email to contacts.</li>
   * <li>1 — An error occurred when sending this email. Try scheduling it again, or contact <a href='http://support.constantcontact.com' target='_blank'>Customer Support</a>.</li>
   * <li>2 — We were unable to send the email. Please contact our <a href='http://knowledgebase.constantcontact.com/articles/KnowledgeBase/5782-contact-an-account-review-and-deliverability-specialist' target='_blank'>Account Review Team</a> for more information.</li>
   * <li>3 — This Constant Contact account cannot currently send emails. This can be due to billing or product expiration.</li>
   * <li>4 — You're not able to send the email to that many contacts. Remove contacts from the contact lists you are using or select a list with fewer contacts.</li>
   * <li>5 — The email is currently in staging. For more information, see the <a href='http://knowledgebase.constantcontact.com/articles/KnowledgeBase/7402-email-staging' target='_blank>Email Staging Knowledge Base article</a>.</li>
   * <li>6 — Constant Contact was unable to finish sending this email to all of the contacts on your list. Please contact <a href='http://support.constantcontact.com' target='_blank'>Customer Support</a> for more information.</li>
   * <li>7 — The email contains invalid images. This can be caused when one or more images in the email are longer available in your image library.</li>
   * <li>8 — The email contains a link URL that exceeds 1005 characters.</li>
   * <li>9 — Constant Contact was unable to verify your authenticated Sender address. Please contact <a href='http://support.constantcontact.com' target='_blank'>Customer Support</a> for more information.</li>
   * <li>10 — Constant Contact was unable to verify your authenticated Sender address. Please contact <a href='http://support.constantcontact.com' target='_blank'>Customer Support</a> for more information.</li>
   * <li>11 — This Constant Contact account cannot send survey invitations.</li>
   * <li>12 — Constant Contact attempted to send the email, but there were no eligible contacts to send it to. This can be caused by an invalid contact list, a contact list with no contacts, or a contact list with no new contacts during a resend. This method displays <code>reason_code</code> 12 as a send attempt with a <code>send_status</code> of COMPLETED and a <code>count</code> of 0.</li> * </ul>
 */
class EmailSendHistory extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'send_id' => 'int',
		'contact_list_ids' => 'array',
		'segment_ids' => 'array',
		'count' => 'int',
		'run_date' => '\PHPFUI\ConstantContact\DateTime',
		'send_status' => 'string',
		'reason_code' => 'int',

	];
	}
