<div class='clientinfo admin-inside'>
	<img src="/main/avatar_medium/<?= $client->client_user ?>" width="90px" height="90px">
	<h2 style='margin-bottom: 10px;text-transform: none;'><?= $client->client_name ?> (<?= $client->statistics->login ?>)</h2>
    <br/>
	<ul class='tabs'>
        <li class='active profile'><div><a class='profile' href='/<?= $client->statistics->login ?>'>Профиль</a></div></li>
        <? if( ! empty($this->user) AND
            //($this->user->user_group == 'manager' OR
            $this->user->user_id == $client->client_user) ://) : ?>
            <li class='delivery_address'><div><a class='delivery_address' href='/<?= $client->statistics->login ?>/profile'>Адреса доставки</a></div></li>
        <? endif; ?>
    </ul>
</div>
<script>
	$(function() {
		$('ul.tabs a')
			.click(function(e) {
				e.preventDefault();
				$('ul.tabs li').removeClass('active');
				$('div.client_tab').hide();
				
				$('div.' + $(e.target).attr('class')).show();
				
				$(this).parent().parent().addClass('active');
			});
	});
</script>