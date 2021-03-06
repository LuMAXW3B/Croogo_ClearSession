<?php
/**
 * ClearSession
 * Copyright (c) Lukas Marks (http://lumax-web.de/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Lukas Marks (http://lumax-web.de/)
 * @since         0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$url = isset($url) ? $url : array('action' => 'index');
?>
<div class="clearfix filter">
<?php
	echo $this->Form->create('ClearSession', array(
		'class' => 'form-inline',
		'url' => $url,
		'inputDefaults' => array(
			'label' => false,
		),
	))
	. $this->Form->input('ClearSession.data', array(
		'type' => 'text',
		'title' => __d('clear_session', 'Content'),
		'placeholder' => __d('clear_session', 'Content...'),
		'tooltip' => false,
	))
	. $this->Form->submit(__d('clear_session', 'Filter'), array(
		'button' => 'default',
		'div' => false,
	))
	. '&nbsp;'
	. $this->Html->link(
		__d('clear_session', 'Reset'),
		array(
			'action' => 'index',
		),
		array(
			'button' => 'default',
			'escape' => false,
		)
	)
	. $this->Form->end();
?>
</div>