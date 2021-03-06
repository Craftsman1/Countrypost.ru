<style>
	div.filter-box span.label {
		width: 200px;
	}
</style>
<a name="pagerScroll"></a>
<div id="filterFormContainer">
	<form class='admin-inside' action="<?= $selfurl ?>filterDealers" id="filterForm" method="POST">
		<div class='table' style="position:relative;background:#fff;">
			<div class='angle angle-lt'></div>
			<div class='angle angle-rt'></div>
			<div class='angle angle-lb'></div>
			<div class='angle angle-rb'></div>	
			<div class='filter-box'>
				<div>
					<span class="label">Страна:</span>
					<select id="country_from" name="country_from" class="textbox">
						<option value="0">выберите страну...</option>
						<? foreach ($countries as $country_id => $country) : ?>
						<option value="<?= $country_id ?>"  title="/static/images/flags/<?= $countries_en[$country_id] ?>.png" <? if (isset($filter->country_from) AND $filter->country_from == $country_id) : ?>selected<? endif; ?>><?= $countries[$country_id] ?></option>
						<? endforeach; ?>
					</select>
				</div>
				<br />
				<br />
				<div>
					<span class="label">Mail Forwarding:</span>
					<input style="" class="order_check" maxlength="6" type='checkbox' id='is_mail_forwarding' name="is_mail_forwarding" value="1" <? if (isset($filter->is_mail_forwarding) AND $filter->is_mail_forwarding == 1) : ?>checked="checked"<? endif; ?>/>
                    <span class="label" style="width: 250px;">
                        Принимает заказы MailForwarding <b class="mf">MF</b>
					</span>
				</div>
				<br />
				<br />
				<!--div>
					<span class="label">Cashback:</span>
					<input style="" class="order_check" maxlength="6" type='checkbox' id='is_cashback' name="is_cashback" value="1" <? if (isset($filter->is_cashback) AND $filter->is_cashback == 1) : ?>checked="checked"<? endif; ?>/>
					<span class="label checkwrap">
						<b class="cashback">100% cashback</b>
					</span>
				</div>
				<br />
				<br /-->
				<div>
					<span class="label">Отзывы:</span>
					<input style="" class="order_check" maxlength="6" type='checkbox' id='order_number' name="order_number" value="<?= empty($filter->order_id) ? '' : $filter->order_id ?>"/>
					<span class="label checkwrap">Только положительные</span>
				</div>
				<br style="clear:both;" />
				<br />
				<div>
					<span class="label"></span>
					<div style="">
						<input type='submit' id="filterSubmit" value='Найти' style="width:91px;height: 27px;font: 13px sans-serif;vertical-align: top;margin-bottom:4px;margin-right:10px;"/>
						<img class="float" id="filterProgress" style="display:none;margin:0px;margin-top:-5px;" src="/static/images/lightbox-ico-loading.gif"/>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(function() {
		$("#country_from").msDropDown({mainCSS:'idd'});
		$("#country_to").msDropDown({mainCSS:'idd'});
		$("#filterForm").show();

		$('#filterForm').ajaxForm({
			target: '<?= $selfurl ?>filterDealers',
			type: 'POST',
			dataType: 'html',
			iframe: true,
			beforeSubmit: function(formData, jqForm, options)
			{
				$("#filterProgress").show();
			},
			success: function(response)
			{
				//$('#filterForm').append($(response));
				$("#filterProgress").hide();
				
				$("div#partnersFormContainer").replaceWith(response);					
				//$("div#partnersFormContainer").html(response);
			},
			error: function(response)
			{
				$("#filterProgress").hide();
			}
		});
	});
</script>