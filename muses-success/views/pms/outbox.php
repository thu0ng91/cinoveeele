<h1>Private Messaging</h1>

<ul class="ui_element_tabs">
        <li><a href="<?php echo site_url('pms/compose/'); ?>">Compose</a></li>
        <li><a href="<?php echo site_url('pms/'); ?>">Inbox</a></li>
        <li class="current"><a href="<?php echo site_url('pms/outbox/'); ?>">Outbox</a></li>
        <li><a href="<?php echo site_url('pms/sent/'); ?>">Sent</a></li>
        <li><a href="<?php echo site_url('pms/trash/'); ?>">Trash</a></li>
</ul>

<div id="forums">
        <table cellspacing="0">
                <tr class="heading2">
                        <th width="50%">Subject</th>
                        <th>To</th>
                        <th>Date</th>
                </tr>
                <?php foreach ($pms as $item) { $user_info = $this->users->get_user_info($item['message_to']); ?>
                <tr class="content">
                        <td><a href="<?php echo site_url('pms/view/'.$item['message_id']); ?>"><?php echo $item['message_subject']; ?></a></td>
                        <td><a href="<?php echo site_url('profile/view/'.$item['message_to'].'/'); ?>"><?php echo strlen($user_info['display_name']) > 2 ? $user_info['display_name'] : $user_info['screen_name']; ?></a></td>
                        <td><?php echo date('d/m/Y h:i:sA', $item['message_date']); ?></td>
                </tr>
                <?php } ?>
        </table>
</div>
