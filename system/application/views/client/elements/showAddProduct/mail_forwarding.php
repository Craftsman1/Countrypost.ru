<? $handler = $order->is_creating ?
	'addProduct' :
	'addProductToPrivilegedOrder';

$target = $selfurl . $handler . '/' . $order->order_id;
?>
<div class="mail_forwarding_order_form">
	<form class='admin-inside orderForm'
		  action="<?= $target ?>"
		  method="POST"
		  enctype="multipart/form-data">
		<? View::show('client/elements/showAddProduct/hiddens'); ?>
        <div class='table add_detail_box' style="position:relative;">
            <div class='angle angle-lt'></div>
            <div class='angle angle-rt'></div>
            <div class='angle angle-lb'></div>
            <div class='angle angle-rb'></div>
            <div class='new_order_box'>
                <div>
					<span class="label">Наименование товара<span class="red-color">*</span>:</span>
					<input class="textbox"
						   maxlength="255"
						   type='text'
						   id='oname'
						   name="oname" />
                </div>
                <div style="height: 30px;">
                    <span class="label">Tracking номер посылки<span class="red-color">*</span>: <img style="top: 3px;position: relative;"
															   src="/static/images/mini_help.gif"></span>
                    <input class="textbox"
						   maxlength="80"
						   type='text'
						   id='otracking'
						   name="otracking" />
                </div>
            </div>
        </div>
        <h3>Дополнительная информация о товаре:</h3>
        <div class='add_detail_box' style="position:relative;">
            <div class='new_order_box'>
				<div>
					<span class="label">Ссылка на товар:</span>
					<input class="textbox"
						   maxlength="4096"
						   type='text'
						   id='olink'
						   name="olink" />
				</div>
                <div>
					<span class="label">Цвет:</span>
					<input class="textbox"
						   maxlength="255"
						   type='text'
						   id='ocolor'
						   name="ocolor" />
                </div>
                <div>
					<span class="label">Размер:</span>
					<input class="textbox"
						   maxlength="255"
						   type='text'
						   id='osize'
						   name="osize" />
                </div>
                <div>
					<span class="label">Количество:</span>
					<input class="textbox"
						   maxlength="255"
						   type='text'
						   id='oamount'
						   name="oamount"
						   value="1" />
                </div>
                <div>
					<? View::show("client/elements/showAddProduct/screenshot_box"); ?>
                </div>
                <div>
					<span class="label">Нужно ли фото товара?</span>
					<input type='checkbox'
						   id='foto_requested'
						   name="foto_requested"
						   value="1" />
					<label for="foto_requested" style="font: 13px sans-serif;">да</label>
                </div>
                <div>
					<span class="label">Комментарий к товару:</span>
					<textarea style="resize:vertical!important;"
							  class="textbox"
							  maxlength="255"
							  id='ocomment'
							  name="ocomment"></textarea>
                </div>
            </div>
        </div>
		<br>
		<div style="height: 35px; margin-top: 15px;" class="admin-inside">
			<div class="submit">
				<div>
					<input type="submit" value="Добавить товар">
				</div>
			</div>
			<img src="/static/images/lightbox-ico-loading.gif"
				 style="margin-top: 3px; margin-left: 5px; display: none;"
				 class="float progress">
		</div>
    </form>
</div>