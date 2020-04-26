<?php echo $this->BcForm->create('TwilioLog') ?>
会員番号:<?php echo $this->BcForm->input('TwilioLog.mypage_id', array('type'=>'text', 'size'=>2)) ?>　　　
<?php echo $this->BcForm->submit('　検索　', array('div' => false, 'class' => 'button', 'style'=>'padding:4px;')) ?>
<?php echo $this->BcForm->end() ?>

<div id="DataList">
<?php $this->BcBaser->element('pagination') ?>
<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
<thead>
	<tr>
		<th>Id</th>
		<th>Status</th>
		<th>Call Id</th>
		<th>Created</th>
	</tr>
</thead>
<tbody>
	<?php if (!empty($TwilioLogs)): ?>
		<?php foreach ($TwilioLogs as $data): ?>
			<tr>
				<td><?php echo $data['TwilioLog']['mypage_id']; ?></td>
				<td><?php echo $data['TwilioLog']['status']; ?></td>
				<td><?php echo $data['TwilioLog']['call_id']; ?></td>
				<td><?php echo $this->BcTime->format('Y-m-d H:i:s', $data['TwilioLog']['created']); ?></td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="8"><p class="no-data">データが見つかりませんでした。</p></td>
		</tr>
	<?php endif; ?>
</tbody>
</table>
</div>
<div class="section">
<p>ページングと検索は同時に使えません。（仕様です）<br>
</p>
</div>